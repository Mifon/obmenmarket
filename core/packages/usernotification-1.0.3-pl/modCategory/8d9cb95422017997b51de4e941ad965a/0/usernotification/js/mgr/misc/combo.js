usernotification.combo.user = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        url: usernotification.config.connector_url
        , baseParams: {
            action: config.action,
        }
        , hiddenName: config.name
        , fields: ['name', 'id']
        , mode: 'remote'
        , displayField: 'name'
        , valueField: 'id'
        , editable: true
        , autoLoad: false
    });
    usernotification.combo.user.superclass.constructor.call(this, config);
};
Ext.extend(usernotification.combo.user, MODx.combo.ComboBox);
Ext.reg('usernotification-combo-user', usernotification.combo.user);

usernotification.combo.type = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        store: new Ext.data.ArrayStore({
            id: 0
            , fields: ['id', 'name']
            , data: [
                ['0', _('un_notification_field_type_0')]
                , ['1', _('un_notification_field_type_1')]
                , ['2', _('un_notification_field_type_2')]
            ]
        })
        , hiddenName: config.name
        , mode: 'local'
        , displayField: 'name'
        , valueField: 'id'
        , editable: false
    });
    usernotification.combo.type.superclass.constructor.call(this, config);
};
Ext.extend(usernotification.combo.type, MODx.combo.ComboBox);
Ext.reg('usernotification-combo-type', usernotification.combo.type);

usernotification.combo.auto = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        store: new Ext.data.ArrayStore({
            id: 0
            , fields: ['id', 'name']
            , data: [
                ['0', _('un_notification_filter_auto_0')]
                , ['1', _('un_notification_filter_auto_1')]
                , ['2', _('un_notification_filter_auto_2')]
            ]
        })
        , hiddenName: config.name
        , mode: 'local'
        , displayField: 'name'
        , valueField: 'id'
        , editable: false
        , emptyText: _('un_notification_filter_auto_0')
    });
    usernotification.combo.auto.superclass.constructor.call(this, config);
};
Ext.extend(usernotification.combo.auto, MODx.combo.ComboBox);
Ext.reg('usernotification-combo-auto', usernotification.combo.auto);