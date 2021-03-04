<?php

class usernotificationCreateProccessor extends modObjectCreateProcessor
{
    public $objectType = 'notification';
    public $classKey = 'extUserNotification';
    public $languageTopics = array('usernotification:default');
    public $afterSaveEvent = 'UserNotificationCreate';
    public $permission = 'usernotification_edit';

    public function beforeSet()
    {
        $required = array('comment');
        if ($this->getProperty('type') != '2') {
            $required[] = 'user_id';
        }
        foreach ($required as $v) {
            if (!trim($this->getProperty($v))) {
                $this->addFieldError($v, $this->modx->lexicon('un_err_field_required'));
            }
        }
        if (!trim($this->getProperty('comment'))) {
            return $this->modx->lexicon('un_err_field_required_comment');
        }
        $this->setProperty('auto', '0');
        return parent::beforeSet();
    }
}

return 'usernotificationCreateProccessor';