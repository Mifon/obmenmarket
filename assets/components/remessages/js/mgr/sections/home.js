reMessages.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'remessages-panel-home',
            renderTo: 'remessages-panel-home-div'
        }]
    });
    reMessages.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(reMessages.page.Home, MODx.Component);
Ext.reg('remessages-page-home', reMessages.page.Home);