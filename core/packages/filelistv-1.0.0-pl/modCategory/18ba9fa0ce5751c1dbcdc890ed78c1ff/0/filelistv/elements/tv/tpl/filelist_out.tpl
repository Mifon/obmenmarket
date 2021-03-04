<div id="tv-wprops-form{$tv|default}"></div>

{literal}
<script type="text/javascript">
// <![CDATA[
var params = {
{/literal}{foreach from=$params key=k item=v name='p'}
 '{$k}': '{$v|escape:"javascript"}'{if NOT $smarty.foreach.p.last},{/if}
{/foreach}{literal}
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
	xtype: 'panel'
	,layout: 'form'
	,autoHeight: true
	,labelAlign: 'top'
	,cls: 'form-with-labels'
	,border: false
	,items: [{
		xtype: 'modx-combo'
		,fieldLabel: _('chunk')
		,name: 'prop_chunk'
		,id: 'prop_chunk{/literal}{$tv|default}{literal}'
		,anchor: '100%'
		,value: params['chunk'] || ''
		,listeners: oc
		,url: MODx.config.connector_url
		,baseParams: {
			action: 'element/chunk/getlist'
		},
		fields: ['id','name','description'],
		pageSize: 10,
		allowBlank: false,
		forceSelection: true,
		tpl: new Ext.XTemplate('<tpl for="."><div class="x-combo-list-item"><span style="font-weight: bold">{name}</span>',
			'<tpl if="description"><br/><span style="font-style:italic">{description}</span></tpl>', '</div></tpl>')
	}]
	,renderTo: 'tv-wprops-form{/literal}{$tv|default}{literal}'
});
// ]]>
</script>
{/literal}