usernotification.window.CreateNotification = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'usernotification-notification-window-create';
    }
    Ext.applyIf(config, {
        title: _('un_window_title_create'),
        width: 550,
        autoHeight: true,
        url: usernotification.config.connector_url,
        action: 'mgr/notification/create',
        fields: this.getFields(config),
        modal: true,
        keys: [{
            key: Ext.EventObject.ENTER, shift: true, fn: function () {
                this.submit()
            }, scope: this
        }]
    });
    usernotification.window.CreateNotification.superclass.constructor.call(this, config);
    this.on('show', function () {
        this.checkType(config, true);
    });
};
Ext.extend(usernotification.window.CreateNotification, MODx.Window, {

    getFields: function (config) {
        var type = config.record && config.record.type ? config.record.type : 0;
        var fields = {
            id: {xtype: 'hidden'},
            type: {
                xtype: 'usernotification-combo-type', listeners: {
                    select: {
                        fn: function () {
                            this.checkType(config);
                        }, scope: this
                    }
                }
            },
            user_id: {
                xtype: 'usernotification-combo-user',
                action: (parseInt(type) == 1 ? 'mgr/load/groups' : 'mgr/load/users'),
            },
            title: {
                allowBlank: true,
            },
            comment: {
                xtype: 'textarea',
                height: 150,
            },
        };
        var data = [];
        for (var key in fields) {
            Ext.applyIf(fields[key], {
                xtype: 'textfield',
                fieldLabel: _('un_notification_field_' + key),
                boxLabel: _('yes'),
                name: key,
                id: config.id + '-' + key,
                anchor: '99%',
                allowBlank: false,
            });
            data.push(fields[key]);
        }
        return data;
    }

    , checkType: function (config, firstload) {
        var type = Ext.getCmp(config.id + '-type').getValue();
        type = !isNaN(parseInt(type)) ? parseInt(type) : 0;
        if (firstload) {
            if (type == 2) {
                this.hideField(Ext.getCmp(config.id + '-user_id'));
            }
            return false;
        }
        this.showField(Ext.getCmp(config.id + '-user_id'));
        Ext.getCmp(config.id + '-user_id').getStore().baseParams.action = 'mgr/load/users';
        switch (type) {
            case 1:
                Ext.getCmp(config.id + '-user_id').getStore().baseParams.action = 'mgr/load/groups';
                break;
            case 2:
                this.hideField(Ext.getCmp(config.id + '-user_id'));
                break;
        }
        Ext.getCmp(config.id + '-user_id').reset();
        Ext.getCmp(config.id + '-user_id').getStore().load();
    }

});
Ext.reg('usernotification-notification-window-create', usernotification.window.CreateNotification);


usernotification.window.UpdateNotification = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'usernotification-notification-window-update';
    }
    Ext.applyIf(config, {
        title: _('un_window_title_update'),
        action: 'mgr/notification/update',
    });
    usernotification.window.UpdateNotification.superclass.constructor.call(this, config);
};
Ext.extend(usernotification.window.UpdateNotification, usernotification.window.CreateNotification, {});
Ext.reg('usernotification-notification-window-update', usernotification.window.UpdateNotification);