<?php

class usernotificationGetProcessor extends modObjectGetProcessor
{
    public $classKey = 'extUserNotification';
    public $languageTopics = array('usernotification:default');
    public $permission = 'usernotification_view';
}

return 'usernotificationGetProcessor';