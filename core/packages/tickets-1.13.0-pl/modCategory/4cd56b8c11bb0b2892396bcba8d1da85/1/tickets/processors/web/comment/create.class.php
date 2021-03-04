<?php

class TicketCommentCreateProcessor extends modObjectCreateProcessor
{
    /** @var TicketComment $object */
    public $object;
    public $objectType = 'TicketComment';
    public $classKey = 'TicketComment';
    public $languageTopics = array('tickets:default');
    public $permission = 'comment_save';
    public $beforeSaveEvent = 'OnBeforeCommentSave';
    public $afterSaveEvent = 'OnCommentSave';
    /** @var TicketThread $thread */
    private $thread;
    private $guest = false;


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        $this->guest = (bool)$this->getProperty('allowGuest', false);
        $this->unsetProperty('allowGuest');
        $this->unsetProperty('allowGuestEdit');
        $this->unsetProperty('captcha');

        return !empty($this->permission) && !$this->guest
            ? $this->modx->hasPermission($this->permission)
            : true;
    }


    /**
     * @return bool|null|string
     */
    public function beforeSet()
    {
        $tid = $this->getProperty('thread');
        if (!$this->thread = $this->modx->getObject('TicketThread',
            array('name' => $tid, 'deleted' => 0, 'closed' => 0))
        ) {
            return $this->modx->lexicon('ticket_err_wrong_thread');
        } elseif ($pid = $this->getProperty('parent')) {
            if (!$parent = $this->modx->getObject('TicketComment',
                array('id' => $pid, 'published' => 1, 'deleted' => 0))
            ) {
                return $this->modx->lexicon('ticket_comment_err_parent');
            }
        }

        // Required fields
        $requiredFields = array_map('trim', explode(',', $this->getProperty('requiredFields', 'name,email')));
        foreach ($requiredFields as $field) {
            $value = $this->modx->stripTags(trim($this->getProperty($field)));
            if (empty($value)) {
                $this->addFieldError($field, $this->modx->lexicon('field_required'));
            } elseif ($field == 'email' && !preg_match('/.+@.+\..+/i', $value)) {
                $this->setProperty('email', '');
                $this->addFieldError($field, $this->modx->lexicon('ticket_comment_err_email'));
            } else {
                if ($field == 'email') {
                    $value = strtolower($value);
                }
                $this->setProperty($field, $value);
            }
        }
        if (!$text = trim($this->getProperty('text'))) {
            return $this->modx->lexicon('ticket_comment_err_empty');
        }
        if (!$this->getProperty('email') && $this->modx->user->isAuthenticated($this->modx->context->key)) {
            return $this->modx->lexicon('ticket_comment_err_no_email');
        }

        // Additional properties
        $properties = $this->getProperties();
        $add = array();
        $meta = $this->modx->getFieldMeta('TicketComment');
        foreach ($properties as $k => $v) {
            if (!isset($meta[$k])) {
                $add[$k] = $this->modx->stripTags($v);
            }
        }
        if (!$this->getProperty('published')) {
            $add['was_published'] = false;
        }
        unset($properties['requiredFields']);

        // Comment values
        $ip = $this->modx->request->getClientIp();
        $this->setProperties(array(
            'text' => $text,
            'thread' => $this->thread->id,
            'ip' => $ip['ip'],
            'createdon' => date('Y-m-d H:i:s'),
            'createdby' => $this->modx->user->isAuthenticated($this->modx->context->key)
                ? $this->modx->user->id
                : 0,
            'editedon' => '',
            'editedby' => 0,
            'deleted' => 0,
            'deletedon' => '',
            'deletedby' => 0,
            'properties' => $add,
        ));
        $this->unsetProperty('action');

        return parent::beforeSet();
    }


    /**
     * @return bool|null|string
     */
    public function beforeSave()
    {
        /** @var TicketThread $thread */
        if ($thread = $this->object->getOne('Thread')) {
            /** @var Ticket $ticket */
            if ($ticket = $thread->getOne('Ticket')) {
                /** @var TicketsSection $section */
                if ($section = $ticket->getOne('Section')) {
                    $ratings = $section->getProperties('ratings');
                    if (isset($ratings['min_comment_create']) && $ratings['min_comment_create'] !== '') {
                        if ($profile = $this->modx->getObject('TicketAuthor', $this->object->get('createdby'))) {
                            $min = (float)$ratings['min_comment_create'];
                            $rating = $profile->get('rating');
                            if ($rating < $min) {
                                return $this->modx->lexicon('ticket_err_rating_comment', array('rating' => $min));
                            }
                        }
                    }
                }
            }
        }

        return true;
    }


    /**
     * @return bool
     */
    public function afterSave()
    {
        if ($this->object->get('published')) {
            $this->thread->fromArray(array(
                'comment_last' => $this->object->get('id'),
                'comment_time' => $this->object->get('createdon'),
            ));
            $this->thread->save();
        }

        if ($this->guest) {
            if (!isset($_SESSION['TicketComments'])) {
                $_SESSION['TicketComments'] = array('ids' => array());
            }
            $_SESSION['TicketComments']['name'] = $this->object->get('name');
            $_SESSION['TicketComments']['email'] = $this->object->get('email');
            $_SESSION['TicketComments']['ids'][$this->object->get('id')] = 1;
        }

        $this->thread->updateCommentsCount();
        $this->object->clearTicketCache();
        $this->processFiles();

        return parent::afterSave();
    }

    /**
     * Add uploaded files to comment
     *
     * @return bool|int
     */
    public function processFiles()
    {
        $q = $this->modx->newQuery('TicketFile');
        $q->where(array('class' => 'TicketComment'));
        $q->andCondition(array('parent' => 0, 'createdby' => $this->modx->user->id), null, 1);
        $q->sortby('createdon', 'ASC');
        $collection = $this->modx->getIterator('TicketFile', $q);

        $replace = array();
        $count = 0;
        /** @var TicketFile $item */
        foreach ($collection as $item) {
            if ($item->get('deleted')) {
                $replace[$item->get('url')] = '';
                $item->remove();
            } else {
                $old_url = $item->get('url');
                $item->set('parent', $this->object->get('id'));
                $item->save();
                $replace[$old_url] = array(
                    'url' => $item->get('url'),
                    'thumb' => $item->get('thumb'),
                    'thumbs' => $item->get('thumbs'),
                );
                $count++;
            }
        }

        // Update ticket links
        if (!empty($replace)) {
            $array = array(
                'raw' => $this->object->get('raw'),
                'text' => $this->object->get('text'),
            );
            $update = false;
            foreach ($array as $field => $text) {
                $pcre = '#<a.*?>.*?</a>|<img.*?>#s';
                preg_match_all($pcre, $text, $matches);
                $src = $dst = array();
                foreach ($matches[0] as $tag) {
                    foreach ($replace as $from => $to) {
                        if (strpos($tag, $from) !== false) {
                            if (is_array($to)) {
                                $src[] = $from;
                                $dst[] = $to['url'];
                                if (empty($to['thumbs'])) {
                                    $to['thumbs'] = array($to['thumb']);
                                }
                                foreach ($to['thumbs'] as $key => $thumb) {
                                    $src[] = str_replace('/' . $this->object->id . '/', '/0/', $thumb);
                                    $dst[] = str_replace('/0/', '/' . $this->object->id . '/', $thumb);
                                }
                            } else {
                                $src[] = $tag;
                                $dst[] = '';
                            }
                            break;
                        }
                    }
                }
                if (!empty($src)) {
                    $text = str_replace($src, $dst, $text);
                    if ($text != $this->object->$field) {
                        $this->object->set($field, $text);
                        $update = true;
                    }
                }
            }
            if ($update) {
                $this->object->save();
            }
        }

        return $count;
    }

}

return 'TicketCommentCreateProcessor';
