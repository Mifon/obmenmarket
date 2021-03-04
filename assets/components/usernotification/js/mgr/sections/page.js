usernotification.page.Main = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'usernotification-panel-main',
            renderTo: 'usernotification-panel-main-div'
        }]
    });
    usernotification.page.Main.superclass.constructor.call(this, config);
};
Ext.extend(usernotification.page.Main, MODx.Component);
Ext.reg('usernotification-page-main', usernotification.page.Main);