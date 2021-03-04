<?php

require_once dirname(dirname(dirname(__FILE__))) . '/mgr/notification/create.class.php';

class webUsernotificationCreateProccessor extends usernotificationCreateProccessor
{
    public $permission = '';

    public function beforeSet()
    {
        $parent = parent::beforeSet();
        $this->setProperty('auto', '1');
        return $parent;
    }
}

return 'webUsernotificationCreateProccessor';