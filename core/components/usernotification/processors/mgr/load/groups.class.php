<?php

require_once MODX_CORE_PATH . 'model/modx/processors/security/group/getlist.class.php';

class loadModUserGroupGetListProcessor extends modUserGroupGetListProcessor
{
    public $permission = '';

    public function prepareQueryBeforeCount(xPDOQuery $c)
    {
        $id = $this->getProperty('id');
        if ($id) {
            $c->where(array(
                'id' => $id,
            ));
            return $c;
        } else {
            return parent::prepareQueryBeforeCount($c);
        }
    }
}

return 'loadModUserGroupGetListProcessor';