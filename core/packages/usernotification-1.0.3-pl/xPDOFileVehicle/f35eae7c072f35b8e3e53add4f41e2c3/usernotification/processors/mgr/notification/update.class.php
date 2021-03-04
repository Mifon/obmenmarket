<?php

class usernotificationUpdateProccessor extends modObjectUpdateProcessor
{
    public $classKey = 'extUserNotification';
    public $languageTopics = array('usernotification:default');
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
        $this->setProperty('auto', '0');
        return parent::beforeSet();
    }
}

return 'usernotificationUpdateProccessor';