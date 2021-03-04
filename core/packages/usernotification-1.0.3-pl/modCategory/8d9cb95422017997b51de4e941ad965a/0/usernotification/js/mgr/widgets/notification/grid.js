usernotification.grid.Notification = function (config) {
    config = config || {};
    if (!config.id) {
        config.id = 'usernotification-grid-notification';
    }
    config.sm = new Ext.grid.CheckboxSelectionModel();
    Ext.applyIf(config, {
        url: usernotification.config.connector_url,
        fields: this.getFields(config),
        columns: this.getColumns(config),
        tbar: this.getTopBar(config),
        sm: config.sm,
        baseParams: {
            action: 'mgr/notification/getlist'
        },
        listeners: {
            rowDblClick: function (grid, rowIndex, e) {
                var row = grid.store.getAt(rowIndex);
                this.updateItem(grid, e, row);
            }
        },
        viewConfig: {
            forceFit: true,
            enableRowBody: true,
            autoFill: true,
            showPreview: true,
            scrollOffset: 0,
            getRowClass: function (rec) {
            }
        },
        paging: true,
        remoteSort: true,
        autoHeight: true,
    });
    usernotification.grid.Notification.superclass.constructor.call(this, config);

    this.store.on('load', function () {
        if (this._getSelectedIds().length) {
            this.getSelectionModel().clearSelections();
        }
    }, this);
};
Ext.extend(usernotification.grid.Notification, MODx.grid.Grid, {
    windows: {},

    getMenu: function (grid, rowIndex) {
        var ids = this._getSelectedIds();

        var row = grid.getStore().getAt(rowIndex);
        var menu = usernotification.utils.getMenu(row.data['actions'], this, ids);

        this.addContextMenuItem(menu);
    },

    createItem: function (btn, e) {
        var id = 'usernotification-notification-window-create';
        var w = Ext.getCmp(id);
        if (w) {
            w.close();
        }
        w = MODx.load({
            xtype: id,
            id: id,
            listeners: {
                success: {
                    fn: function () {
                        this.refresh();
                    }, scope: this
                }
            }
        });
        w.reset();
        w.setValues({});
        w.show(e.target);
    },

    updateItem: function (btn, e, row) {
        if (typeof(row) != 'undefined') {
            this.menu.record = row.data;
        }
        else if (!this.menu.record) {
            return false;
        }
        var id = this.menu.record.id;

        MODx.Ajax.request({
            url: this.config.url,
            params: {
                action: 'mgr/notification/get',
                id: id
            },
            listeners: {
                success: {
                    fn: function (r) {
                        var id = 'usernotification-notification-window-update';
                        var w = Ext.getCmp(id);
                        if (w) {
                            w.close();
                        }
                        w = MODx.load({
                            xtype: id,
                            id: id,
                            record: r,
                            listeners: {
                                success: {
                                    fn: function () {
                                        this.refresh();
                                    }, scope: this
                                }
                            }
                        });
                        w.reset();
                        w.setValues(r.object);
                        w.show(e.target);
                    }, scope: this
                }
            }
        });
    },

    removeItem: function () {
        var ids = this._getSelectedIds();
        if (!ids.length) {
            return false;
        }
        MODx.msg.confirm({
            title: _('un_alert_title'),
            text: ids.length > 1 ? _('un_menu_notifications_remove_text') : _('un_menu_notification_remove_text'),
            url: this.config.url,
            params: {
                action: 'mgr/notification/remove',
                ids: Ext.encode(ids),
            },
            listeners: {
                success: {
                    fn: function () {
                        this.refresh();
                    }, scope: this
                }
            }
        });
        return true;
    },

    getFields: function () {
        return ['id', 'user_id', 'title', 'comment', 'type', 'createdon', 'name', 'auto', 'actions'];
    },

    getColumns: function (config) {
        var fields = {
            id: {hidden: true},
            type: {width: 100, renderer: usernotification.utils.renderType},
            user_id: {width: 100, renderer: usernotification.utils.renderUser_id},
            title: {width: 150},
            comment: {width: 400},
            auto: {width: 100, renderer: this.rendYesNo},
            createdon: {width: 100},
        };
        var data = [config.sm];
        for (var key in fields) {
            Ext.applyIf(fields[key], {
                header: _('un_notification_field_' + key),
                dataIndex: key,
                sortable: true,
            });
            data.push(fields[key]);
        }
        return data;
    },

    getTopBar: function (config) {
        return [{
            text: '<i class="icon icon-plus"></i>&nbsp;' + _('un_notification_btn_add'),
            handler: this.createItem,
            scope: this
        }, '->', {
            xtype: 'usernotification-combo-auto',
            id: config.id + '-notification-filter-auto',
            width: 250,
            listeners: {
                select: {
                    fn: function (field) {
                        this.filterSend();
                    }, scope: this
                },
            }
        }, {
            xtype: 'textfield',
            id: config.id + '-notification-filter-query',
            emptyText: _('un_notification_filter_query'),
            width: 250,
            listeners: {
                render: {
                    fn: function (field) {
                        field.getEl().addKeyListener(Ext.EventObject.ENTER, function () {
                            this.filterSend();
                        }, this);
                    }, scope: this
                },
            }
        }, {
            xtype: 'button',
            text: '<i class="icon icon-check"></i>',
            handler: this.filterSend,
        }, {
            xtype: 'button',
            text: '<i class="icon icon-times"></i>',
            handler: this.filterClear,
        }];
    },

    onClick: function (e) {
        var elem = e.getTarget();
        if (elem.nodeName == 'BUTTON') {
            var row = this.getSelectionModel().getSelected();
            if (typeof(row) != 'undefined') {
                var action = elem.getAttribute('action');
                if (action == 'showMenu') {
                    var ri = this.getStore().find('id', row.id);
                    return this._showMenu(this, ri, e);
                }
                else if (typeof this[action] === 'function') {
                    this.menu.record = row.data;
                    return this[action](this, e);
                }
            }
        }
        return this.processEvent('click', e);
    },

    _getSelectedIds: function () {
        var ids = [];
        var selected = this.getSelectionModel().getSelections();

        for (var i in selected) {
            if (!selected.hasOwnProperty(i)) {
                continue;
            }
            ids.push(selected[i]['id']);
        }

        return ids;
    },

    searchFields: ['query', 'auto'],

    filterSend: function () {
        if (this.searchFields.length > 0) {
            for (var i = 0; i < this.searchFields.length; i++) {
                this.getStore().baseParams[this.searchFields[i]] = Ext.getCmp(this.id + '-notification-filter-' + this.searchFields[i]).getValue();
            }
        }
        this.getBottomToolbar().changePage(1);
    },

    filterClear: function () {
        if (this.searchFields.length > 0) {
            for (var i = 0; i < this.searchFields.length; i++) {
                Ext.getCmp(this.id + '-notification-filter-' + this.searchFields[i]).reset();
            }
        }
        this.filterSend();
    },
});
Ext.reg('usernotification-grid-notification', usernotification.grid.Notification);
