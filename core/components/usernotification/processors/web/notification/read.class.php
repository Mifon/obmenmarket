<?php

class webUsernotificationReadProccessor extends modObjectCreateProcessor
{
    public $classKey = 'extUserNotificationView';
    public $languageTopics = array('usernotification:default');
    public $permission = '';

    public function beforeSet()
    {
        $required = array('user_id', 'notification_id');
        foreach ($required as $v) {
            if (!trim($this->getProperty($v))) {
                return $this->modx->lexicon('un_err_notification_no_id');
            }
        }
        extract(array_map('trim', $this->getProperties()));
        $where = array(
            'id' => $notification_id,
            array(
                array(
                    'type' => 0,
                    'user_id' => $user_id,
                ),
                array(
                    'OR:type:=' => '1',
                    'user_id:IN' => $this->userGroup($user_id),
                ),
                array(
                    'OR:type:=' => '2',
                ),
            ),
        );
        if (!$this->modx->getCount('extUserNotification', $where)) {
            return $this->modx->lexicon('un_err_notification_no_id');
        }
        if ($this->modx->getCount($this->classKey, array('user_id' => $user_id, 'notification_id' => $notification_id))) {
            return $this->modx->lexicon('un_err_notification_no_id');
        }
        return parent::beforeSet();
    }

    public function userGroup($user_id = 0)
    {
        return $this->modx->usernotification->userGroup($user_id);
    }
}

return 'webUsernotificationReadProccessor';