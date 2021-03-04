<input id="tv{$tv->id}" name="tv{$tv->id}" type="hidden" class="textfield" value="{$tv->get('value')|escape}"{$style} tvtype="{$tv->type}" />
<div id="tvpanel{$tv->id}"></div>
<script type="text/javascript">
	// <![CDATA[
	{literal}

MODx.combo.Trigger = function(config) {
	config = config || {};
	Ext.applyIf(config,{
	   width: 400
	   ,triggerAction: 'all'
	   ,triggerClass: 'x-form-image-trigger'
	});
	MODx.combo.Trigger.superclass.constructor.call(this,config);
	this.config = config;
};
Ext.extend(MODx.combo.Trigger,Ext.form.TriggerField,{
	browser: null

	,onTriggerClick : function(btn){
		this.config.listeners['click'].fn();
		return true;
	}

	,onDestroy: function(){
		MODx.combo.Trigger.superclass.onDestroy.call(this);
	}
});
Ext.reg('modx-trigger',MODx.combo.Trigger);

MODx.FileItems = function(config) {
	config = config || {};

	this._loadStore(config);
	this._initTemplates();

	Ext.applyIf(config, {
	store: this.store
	,id: 'file-items-view'
	,overClass: 'x-view-over'
	,tpl: this.templates.thumb
	,multiSelect: true
	,enableDD: true
	,panel: config.panel
	,itemSelector: 'div.modx-browser-thumb-wrap'
	,prepareData: this.formatData.createDelegate(this)
	,listeners: {
			'contextmenu': {fn:this._showContextMenu, scope: this}
			,'dblclick': {fn:this.showImage, scope: this}
		}
	});

	MODx.FileItems.superclass.constructor.call(this,config);
	this.config = config;
	this.cm = new Ext.menu.Menu();
};
Ext.extend(MODx.FileItems, Ext.DataView, {
	templates: {}

	,_initTemplates: function() {
		this.templates.thumb = new Ext.XTemplate(
			'<tpl for=".">'
				,'<div class="modx-browser-thumb-wrap" id="file-item-{/literal}{$tv->id}{literal}-{id}">'
				,'<div class="modx-browser-thumb"><tpl if="isimage == true"><img src="{thumbnail}" title="{shortName}" /></tpl><tpl if="isimage == false">BINARY</tpl></div>'
				,'<span>{shortName}</span></div>'
			,'</tpl>'
		);

		this.templates.thumb.compile();
	}

	,showImage: function(btn,e) {
		var recs = this.getSelectedRecords();
		if (!recs) return false;

		if (!this.ssWin) {
			this.ssWin = new Ext.Window({
				layout: 'fit'
				,width: 600
				,height: 450
				,autoHeight: true
				,maximizable: true
				,closeAction:'hide'
				,plain: true
				,items: [{
					id: 'img-item-ss'
					,html: ''
				}]
			});
		}

		this.ssWin.setTitle(recs[0].data.name);
		this.ssWin.show();
		this.ssWin.center();

		var url = MODx.config.base_url + recs[0].data.name;
		Ext.get('img-item-ss').update('<img src="' + url + '" alt="" style="max-width: 100%; max-height: 100%" />');
	}

	,deleteItems: function(btn,e) {
		var recs = this.getSelectedRecords();
		if (!recs) return false;

		for (var i = 0; i < recs.length; i++)
			this.store.remove(recs[i]);

		this.panel.collectItems();

		return true;
	}

	,_showContextMenu: function(v,i,n,e) {
		e.preventDefault();
		var m = this.cm;
		m.removeAll();

		var recs = this.getSelectedRecords();
		if (recs.length == 1)
			if (recs[0].data.isimage) {
				m.add({
					text: _('open')
					,handler: this.showImage
					,scope: this
				});
				m.add('-');
			}

		m.add({
			text: _('remove')
			,handler: this.deleteItems
			,scope: this
		});
		m.show(n,'tl-c?');
		m.activeNode = n;
	}

	,formatData: function(data) {
		data.shortName = data.name.split('\\').pop().split('/').pop();
		var image_exts = ['jpg','jpeg','png','gif','bmp','tif','webp'];
		var p = data.shortName.lastIndexOf('.');
		var ext = data.shortName.substr(p + 1).toLowerCase();
		data.isimage = false;

        data.shortName = Ext.util.Format.ellipsis(data.shortName, 16);

		for (var i in image_exts) {
			if (image_exts[i] == ext) {
				data.isimage = true;
				break;
			}
		}

		if (data.isimage)
			data.thumbnail = MODx.config.connectors_url + 'system/phpthumb.php?src=' + data.name + '&w=100&h=80&q=90&f=png&far=1';

		return data;
	}

	,_loadStore: function(config) {
		this.store = new Ext.data.ArrayStore({
			autoDestroy: true,
			idIndex: 0,
			fields: ['id', 'name']});
	}
});
Ext.reg('file-items-view',MODx.FileItems);

MODx.panel.filelisTV = function(config) {
	config = config || {};

	this.config = config;

	this.view = MODx.load({
		xtype: 'file-items-view'
		,id: config.id + '-fiv'
		,panel: this
		,cls: 'modx-pb-view-ct'
	});

	Ext.applyIf(config,{
		autoHeight: true
		,border: false
		,hideLabels: true
		,defaults: {
			autoHeight: true
			,border: false
		}
		,items: [{
			id: config.id + '-file-view'
			,cls: 'modx-browser-view-ct'
			,region: 'center'
			,autoScroll: true
			,items: this.view
			,border: false
			,tbar: this.getToolbar()
		}]
	});

	MODx.panel.filelisTV.superclass.constructor.call(this,config);
	this.loadInitItems();
	this.addEvents({select: true});

	MODx.makeDroppable(this, function(v) {
		var cb = Ext.select('#tv{/literal}{$tv->id}{literal}');

		if (cb) {
			var tv = Ext.getCmp('tv{/literal}{$tv->id}{literal}_items');
			tv.addItem(v);
			tv.collectItems();
		}
		return '';
	});
}

Ext.extend(MODx.panel.filelisTV, MODx.Panel, {
	itemID: 0
	,loadInitItems: function() {
		var items_string = Ext.select("#tv" + this.config.tv).elements[0].value;
		if (items_string != '') {
			var	items = items_string.split('\n');

			if (items.length > 0) {
				for (var i = 0; i < items.length; i++)
					this.addItem(items[i]);
			}
		}
	}

	,getToolbar: function() {
		return [{
				emptyText: 'URL'
				,id: 'tv' + this.config.tv + '-input'
				,name: 'chooser'
				,xtype: 'modx-trigger'
				,anchor: '100%'
				,listeners: {
					'click': {fn: function() {
						this.scope.addItem('', true);
					}, scope: this}
				}
			}];
	}

	,addItem: function(source, gui = false){
		if (!source && gui) {
			var input = Ext.getCmp('tv' + this.config.tv + '-input');
			source = input.getValue();
			input.setValue('');
			if (!source) return;
		}

		this.view.store.add(
			new this.view.store.recordType({
				id: this.itemID++,
				name: source,
			}));
	}

	,collectItems: function(){
		var items = [];

		this.view.store.data.each(function(item, index, totalItems ) {
			items.push(item.data['name']);
		});

		Ext.select('#tv' + this.config.tv).elements[0].value = items.join('\n');
	}
});
Ext.reg('modx-panel-filelistv',MODx.panel.filelisTV);

MODx.load({
	xtype: 'modx-panel-filelistv'
	,renderTo: 'tvpanel{/literal}{$tv->id}{literal}'
	,tv:'{/literal}{$tv->id}{literal}'
	,cls:'tv{/literal}{$tv->id}{literal}_items'
	,id:'tv{/literal}{$tv->id}{literal}_items'
	,width: '100%'
});
{/literal}
</script>
