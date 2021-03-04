<?php

class usernotificationRemoveProcessor extends modObjectProcessor
{
    public $classKey = 'extUserNotification';
    public $languageTopics = array('usernotification:default');
    public $permission = 'usernotification_edit';

    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('un_err_notification_no_id'));
        }

        foreach ($ids as $id) {
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('un_err_notification_no_id'));
            }

            $object->remove();
        }

        return $this->success();
    }
}

return 'usernotificationRemoveProcessor';