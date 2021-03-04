cityFields.combo.City = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'cityfields-combo-section'
		,fields: ['id','name']
		,valueField: 'id'
		,fieldLabel: 'name'
		,displayField: 'name'
		,name: 'city_id'
		,hiddenName: 'city_id'
		,allowBlank: false
		,url: cityFields.config.connector_url
		,baseParams: {
			action: 'mgr/cities/getlist'
			,combo: true
			,id: config.value
		}
		,tpl: new Ext.XTemplate(''
		+'<tpl for="."><div class="x-combo-list-item cityfields-city-list-item">'
		+'<span><small>({id})</small> <b>{name}</b></span>'
		+'</div></tpl>',{
			compiled: true
		})
		,itemSelector: 'div.cityfields-city-list-item'
		,pageSize: 10
		,editable: true
	});
	cityFields.combo.City.superclass.constructor.call(this,config);
};
Ext.extend(cityFields.combo.City,MODx.combo.ComboBox);
Ext.reg('cityfields-combo-city',cityFields.combo.City);

cityFields.combo.Placeholder = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'cityfields-combo-placeholder'
		,fields: ['placeholder']
		,valueField: 'placeholder'
		,fieldLabel: 'placeholder'
		,displayField: 'placeholder'
		,name: 'placeholder'
		,hiddenName: 'placeholder'
		,allowBlank: false
		,url: cityFields.config.connector_url
		,baseParams: {
			action: 'mgr/fields/getlistplaceholders'
			,id: config.value
		}
		,pageSize: 10
		,editable: true
		,forceSelection: false
	});
	cityFields.combo.Placeholder.superclass.constructor.call(this,config);
};
Ext.extend(cityFields.combo.Placeholder,MODx.combo.ComboBox);
Ext.reg('cityfields-combo-placeholder',cityFields.combo.Placeholder);

cityFields.utils.rendererBoolean = function(val,cell,row) {
	return val == '' || val == 0
		? '<span class="red">' + _('no') + '<span>'
		: '<span class="green">' + _('yes') + '<span>';
}
