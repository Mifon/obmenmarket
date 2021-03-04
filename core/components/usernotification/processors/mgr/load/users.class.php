<?php

require_once MODX_CORE_PATH.'model/modx/processors/security/user/getlist.class.php';

class loadModUserGetListProcessor extends modUserGetListProcessor {
    public $permission = '';

    public function prepareRow(xPDOObject $object)
    {
        $array = parent::prepareRow($object);
        $array['name'] = $array['fullname']?$array['fullname']:$array['email'];
        return $array;
    }

}

return 'loadModUserGetListProcessor';