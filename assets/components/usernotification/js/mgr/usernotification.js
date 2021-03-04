var usernotification = function (config) {
    config = config || {};
    usernotification.superclass.constructor.call(this, config);
};
Ext.extend(usernotification, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('usernotification', usernotification);

usernotification = new usernotification();