<?php
$xpdo_meta_map['extUserNotificationView'] = array(
    'package' => 'usernotification',
    'version' => '1.1',
    'table' => 'user_notification_view',
    'extends' => 'xPDOSimpleObject',
    'tableMeta' =>
        array(
            'engine' => 'MyISAM',
        ),
    'fields' =>
        array(
            'user_id' => 0,
            'notification_id' => 0,
            'createdon' => '0000-00-00 00:00:00',
        ),
    'fieldMeta' =>
        array(
            'user_id' =>
                array(
                    'dbtype' => 'int',
                    'precision' => '10',
                    'phptype' => 'integer',
                    'null' => false,
                    'default' => 0,
                ),
            'notification_id' =>
                array(
                    'dbtype' => 'tinyint',
                    'precision' => '1',
                    'phptype' => 'integer',
                    'null' => false,
                    'default' => 0,
                ),
            'createdon' =>
                array(
                    'dbtype' => 'datetime',
                    'phptype' => 'string',
                    'null' => false,
                    'default' => '0000-00-00 00:00:00',
                ),
        ),
    'indexes' =>
        array(
            'user_id' =>
                array(
                    'alias' => 'user_id',
                    'primary' => false,
                    'unique' => false,
                    'type' => 'BTREE',
                    'columns' =>
                        array(
                            'user_id' =>
                                array(
                                    'length' => '',
                                    'collation' => 'A',
                                    'null' => false,
                                ),
                        ),
                ),
        ),
);
