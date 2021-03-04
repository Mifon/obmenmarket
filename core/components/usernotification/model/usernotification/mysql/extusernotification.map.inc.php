<?php
$xpdo_meta_map['extUserNotification'] = array(
    'package' => 'usernotification',
    'version' => '1.1',
    'table' => 'user_notification',
    'extends' => 'xPDOSimpleObject',
    'tableMeta' =>
        array(
            'engine' => 'MyISAM',
        ),
    'fields' =>
        array(
            'type' => 0,
            'user_id' => 0,
            'title' => '',
            'comment' => '',
            'createdon' => '0000-00-00 00:00:00',
            'auto' => 0,
        ),
    'fieldMeta' =>
        array(
            'type' =>
                array(
                    'dbtype' => 'int',
                    'precision' => '2',
                    'phptype' => 'integer',
                    'null' => false,
                    'default' => 0,
                    'comment' => '0-пользователю, 1-всем, 2-группе',
                ),
            'user_id' =>
                array(
                    'dbtype' => 'int',
                    'precision' => '10',
                    'phptype' => 'integer',
                    'null' => false,
                    'default' => 0,
                ),
            'title' =>
                array(
                    'dbtype' => 'varchar',
                    'precision' => '250',
                    'phptype' => 'string',
                    'null' => true,
                    'default' => '',
                ),
            'comment' =>
                array(
                    'dbtype' => 'text',
                    'phptype' => 'string',
                    'null' => true,
                    'default' => '',
                ),
            'createdon' =>
                array(
                    'dbtype' => 'datetime',
                    'phptype' => 'string',
                    'null' => false,
                    'default' => '0000-00-00 00:00:00',
                ),
            'auto' =>
                array(
                    'dbtype' => 'tinyint',
                    'precision' => '1',
                    'phptype' => 'integer',
                    'null' => false,
                    'default' => 0,
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
            'type' =>
                array(
                    'alias' => 'type',
                    'primary' => false,
                    'unique' => false,
                    'type' => 'BTREE',
                    'columns' =>
                        array(
                            'type' =>
                                array(
                                    'length' => '',
                                    'collation' => 'A',
                                    'null' => false,
                                ),
                        ),
                ),
        ),
);
