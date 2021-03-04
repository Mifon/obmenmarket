<?php

class usernotificationGetListProcessor extends modObjectGetListProcessor
{
    public $objectType = 'usernotification';
    public $classKey = 'extUserNotification';
    public $defaultSortField = 'createdon';
    public $defaultSortDirection = 'DESC';
    public $languageTopics = array('usernotification:default');
    public $permission = 'usernotification_view';

    public function beforeQuery()
    {
        if (!$this->checkPermissions()) {
            return $this->modx->lexicon('access_denied');
        }

        return true;
    }

    public function prepareQueryBeforeCount(xPDOQuery $c)
    {
        switch ((int)$this->getProperty('auto')) {
            case 0:
                $c->where(array(
                    'auto' => 0,
                ));
                break;
            case 2:
                $c->where(array(
                    'auto' => 1,
                ));
                break;
        }
        $query = trim($this->getProperty('query'));
        if ($query) {
            $c->where(array(
                'comment:LIKE' => "%{$query}%",
            ));
        }

        return $c;
    }

    public function prepareRow(xPDOObject $object)
    {
        $array = $object->toArray();
        $array['actions'] = array();
        $array['name'] = '';
        switch ((int)$array['type']) {
            case 0:
                if ($obj = $this->modx->getObject('modUserProfile', array('internalKey' => $array['user_id']))) {
                    $array['name'] = $obj->get('fullname') ? $obj->get('fullname') : $obj->get('email');
                }
                break;
            case 1:
                if ($obj = $this->modx->getObject('modUserGroup', array('id' => $array['user_id']))) {
                    $array['name'] = $obj->get('name');
                }
                break;
        }

        $array['actions'][] = array(
            'cls' => '',
            'icon' => 'icon icon-edit',
            'title' => $this->modx->lexicon('un_menu_update'),
            'action' => 'updateItem',
            'button' => true,
            'menu' => true,
        );
        $array['actions'][] = array(
            'cls' => '',
            'icon' => 'icon icon-trash-o action-red',
            'title' => $this->modx->lexicon('un_menu_remove'),
            'multiple' => $this->modx->lexicon('un_menu_remove'),
            'action' => 'removeItem',
            'button' => true,
            'menu' => true,
        );

        return $array;
    }

}

return 'usernotificationGetListProcessor';