cityFields.grid.Fields = function(config) {
	config = config || {};
	this.sm = new Ext.grid.CheckboxSelectionModel();
	Ext.applyIf(config,{
		id: 'cityfields-grid-fields'
		,url: cityFields.config.connector_url
		,baseParams: {
			action: 'mgr/fields/getlist'
		}
		,fields: ['id','name','placeholder','value']
		,autoHeight: true
		,paging: true
		,pageSize: 20
		,remoteSort: true
		,sm: this.sm
		,columns: this.getColumns()
		,tbar: [{
				text: '<i class="'+ (MODx.modx23 ? 'icon icon-list' : 'bicon-list') + '"></i> ' + _('cityfields_bulk_actions')
				,menu: [{
					text: _('cityfields_bulk_remove_selected')
					,handler: this.removeItems
					,scope: this
				}]
			},{
				text: '<i class="icon icon-plus"></i>&nbsp;' + _('cityfields_bulk_create')
				,handler: this.createItem
				,scope: this
			},'->',{
				xtype: 'cityfields-combo-city'
				,id: 'tbar-cityfields-combo-city'
				,width: 200
				,addall: true
				,emptyText: _('cityfields_filter_city')
				,listeners: {
					select: {fn: this.filterByCity, scope:this}
				}
			},{
				xtype: 'cityfields-combo-placeholder'
				,id: 'tbar-cityfields-combo-placeholder'
				,width: 200
				,addall: true
				,emptyText: _('cityfields_filter_placeholder')
				,listeners: {
					select: {fn: this.filterByPlaceholder, scope:this}
				}
			},{
				xtype: 'button'
				,id: 'mspr-remains-clear'
				,text: '<i class="icon icon-times"></i>'
				,listeners: {
					click: {fn: this.clearFilter, scope: this}
				}
			}
		]
		,listeners: {
			rowDblClick: function(grid, rowIndex, e) {
				var row = grid.store.getAt(rowIndex);
				this.updateItem(grid, e, row);
			}
		}
	});
	cityFields.grid.Fields.superclass.constructor.call(this,config);
};
Ext.extend(cityFields.grid.Fields,MODx.grid.Grid,{
	windows: {}

	,getMenu: function() {
		var m = [];
		m.push({
			text: _('cityfields_bulk_update')
			,handler: this.updateItem
		});
		m.push('-');
		m.push({
			text: _('cityfields_bulk_remove')
			,handler: this.removeItem
		});
		this.addContextMenuItem(m);
	}

	,filterByCity: function(cb) {
		this.getStore().baseParams['city'] = cb.value;
		this.getBottomToolbar().changePage(1);
		this.refresh();
	}

	,filterByPlaceholder: function(cb) {
		this.getStore().baseParams['placeholder'] = cb.value;
		this.getBottomToolbar().changePage(1);
		this.refresh();
	}

	,clearFilter: function(btn,e) {
		var s = this.getStore();
		s.baseParams['city'] = '';
		s.baseParams['placeholder'] = '';
		Ext.getCmp('tbar-cityfields-combo-city').setValue('');
		Ext.getCmp('tbar-cityfields-combo-placeholder').setValue('');
		this.getBottomToolbar().changePage(1);
		this.refresh();
	}

	,getColumns: function() {
		all = {
			id: {hidden: true, sortable: true, width: 20}
			//,city_id: {sortable: true, width: 80, editor: { xtype: 'cityfields-combo-city' ,renderer: true}}
			,name: {header: _('cityfields_fields_city_id'), sortable: false, width: 80}
			,placeholder: {sortable: true, width: 100}
			,value: {sortable: true, width: 250}
		};
		var columns = [this.sm];
		for(var field in all) {
			Ext.applyIf(all[field], {
				header: _('cityfields_fields_' + field)
				,dataIndex: field
			});
			columns.push(all[field]);
		}
		return columns;
	}
	
	,createItem: function(btn,e) {
		if (!this.windows.createCity) {
			this.windows.createCity = MODx.load({
				xtype: 'cityfields-window-field-create'
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.createCity.fp.getForm().reset();
		this.windows.createCity.show(e.target);
	}

	,updateItem: function(btn,e,row) {
		if (typeof(row) != 'undefined') {this.menu.record = row.data;}
		var id = this.menu.record.id;

		MODx.Ajax.request({
			url: cityFields.config.connector_url
			,params: {
				action: 'mgr/fields/get'
				,id: id
			}
			,listeners: {
				success: {fn:function(r) {
					if (!this.windows.updateField) {
						this.windows.updateField = MODx.load({
							xtype: 'cityfields-window-field-update'
							,record: r
							,listeners: {
								'success': {fn:function() { this.refresh(); },scope:this}
							}
						});
					}
					this.windows.updateField.fp.getForm().reset();
					this.windows.updateField.fp.getForm().setValues(r.object);
					this.windows.updateField.show(e.target);
				},scope:this}
			}
		});
	}

	,removeItem: function(btn,e) {
		if (!this.menu.record) return;

		MODx.msg.confirm({
			title: _('cityfields_bulk_remove')
			,text: _('cityfields_bulk_remove_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/fields/remove'
				,ids: this.menu.record.id
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}

	,removeItems: function(btn,e) {
		var cs = this.getSelectedAsList();
		if (cs === false) return false;

		MODx.msg.confirm({
			title: _('cityfields_bulk_remove_selected')
			,text: _('cityfields_bulk_remove_selected_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/fields/remove'
				,ids: cs
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}

});
Ext.reg('cityfields-grid-fields',cityFields.grid.Fields);

cityFields.window.CreateField = function(config) {
	config = config || {};
	this.ident = config.ident || 'mecitem'+Ext.id();
	Ext.applyIf(config,{
		title: _('cityfields_fields_create')
		,id: this.ident
		,pageSize: Math.round(MODx.config.default_per_page / 2)
		,autoHeight: true
		,url: cityFields.config.connector_url
		,action: 'mgr/fields/create'
		,fields: [
			{xtype: 'cityfields-combo-city',fieldLabel: _('cityfields_fields_city_id'),name: 'city_id',id: 'cityfields-'+this.ident+'-city_id',anchor: '99%'}
			,{xtype: 'cityfields-combo-placeholder',fieldLabel: _('cityfields_fields_placeholder'),name: 'placeholder',id: 'cityfields-'+this.ident+'-placeholder',anchor: '99%'}
			,{xtype: 'textarea',fieldLabel: _('cityfields_fields_value'),name: 'value',id: 'cityfields-'+this.ident+'-value',height: 100,anchor: '99%'}
		]
		,keys: [{key: Ext.EventObject.ENTER,shift: true,fn: function() {this.submit() },scope: this}]
	});
	cityFields.window.CreateField.superclass.constructor.call(this,config);
};
Ext.extend(cityFields.window.CreateField,MODx.Window);
Ext.reg('cityfields-window-field-create',cityFields.window.CreateField);

cityFields.window.UpdateField = function(config) {
	config = config || {};
	this.ident = config.ident || 'meuitem'+Ext.id();
	Ext.applyIf(config,{
		title: _('cityfields_fields_update')
		,id: this.ident
		,pageSize: Math.round(MODx.config.default_per_page / 2)
		,autoHeight: true
		,url: cityFields.config.connector_url
		,action: 'mgr/fields/update'
		,fields: [
			{xtype: 'hidden',name: 'id',id: 'cityfields-'+this.ident+'-id'}
			,{xtype: 'cityfields-combo-city',fieldLabel: _('cityfields_fields_city_id'),name: 'city_id',id: 'cityfields-'+this.ident+'-city_id',anchor: '99%'}
			,{xtype: 'cityfields-combo-placeholder',fieldLabel: _('cityfields_fields_placeholder'),name: 'placeholder',id: 'cityfields-'+this.ident+'-placeholder',anchor: '99%'}
			,{xtype: 'textarea',fieldLabel: _('cityfields_fields_value'),name: 'value',id: 'cityfields-'+this.ident+'-value',height: 100,anchor: '99%'}
		]
		,keys: [{key: Ext.EventObject.ENTER,shift: true,fn: function() {this.submit() },scope: this}]
	});
	cityFields.window.UpdateField.superclass.constructor.call(this,config);
};
Ext.extend(cityFields.window.UpdateField,MODx.Window);
Ext.reg('cityfields-window-field-update',cityFields.window.UpdateField);
