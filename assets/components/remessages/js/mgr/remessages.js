var reMessages = function (config) {
    config = config || {};
    reMessages.superclass.constructor.call(this, config);
};
Ext.extend(reMessages, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('remessages', reMessages);

reMessages = new reMessages();