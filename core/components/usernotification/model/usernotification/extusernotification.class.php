<?php

class extUserNotification extends xPDOSimpleObject
{
    public function save($cacheFlag = null)
    {
        if (!$this->get('id')) {
            $this->set('createdon', date('Y-m-d H:i:s'));
        }
        return parent::save($cacheFlag);
    }

    public function remove(array $ancestors = array())
    {
        $id = $this->get('id');
        $return = parent::remove($ancestors);
        if ($return) {
            $this->xpdo->removeCollection('extUserNotificationView', ['notification_id' => $id]);
        }
        return $return;
    }
}