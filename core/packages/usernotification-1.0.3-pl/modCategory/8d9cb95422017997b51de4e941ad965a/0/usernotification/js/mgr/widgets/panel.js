usernotification.panel.Main = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'usernotification-panel-main',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('un_pagetitle') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('un_tab_notification'),
                layout: 'anchor',
                items: [{
                    html: _('un_tab_notification_intro'),
                    cls: 'panel-desc',
                    hidden: !_('un_tab_notification_intro')
                }, {
                    xtype: 'usernotification-grid-notification',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    usernotification.panel.Main.superclass.constructor.call(this, config);
};
Ext.extend(usernotification.panel.Main, MODx.Panel);
Ext.reg('usernotification-panel-main', usernotification.panel.Main);
