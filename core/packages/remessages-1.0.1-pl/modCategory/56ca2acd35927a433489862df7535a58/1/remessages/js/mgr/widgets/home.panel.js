reMessages.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'remessages-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('remessages') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('remessages_items'),
                layout: 'anchor',
                items: [{
                    html: _('remessages_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'remessages-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    reMessages.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(reMessages.panel.Home, MODx.Panel);
Ext.reg('remessages-panel-home', reMessages.panel.Home);
