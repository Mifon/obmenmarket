<?php return array (
  'e0bc2591354248d11dcaf234b700bb62' => 
  array (
    'criteria' => 
    array (
      'name' => 'tickets',
    ),
    'object' => 
    array (
      'name' => 'tickets',
      'path' => '{core_path}components/tickets/',
      'assets_path' => '',
    ),
  ),
  '8391ee6220a1fc623b110e1a79e85cc5' => 
  array (
    'criteria' => 
    array (
      'key' => 'mgr_tree_icon_ticketssection',
    ),
    'object' => 
    array (
      'key' => 'mgr_tree_icon_ticketssection',
      'value' => 'icon icon-comments-o',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  'c534bdaff9d8747ac919711948239e80' => 
  array (
    'criteria' => 
    array (
      'key' => 'mgr_tree_icon_ticket',
    ),
    'object' => 
    array (
      'key' => 'mgr_tree_icon_ticket',
      'value' => 'icon icon-comment-o',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  '89050a969d76b6815b7e2cc4793d86fa' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.date_format',
    ),
    'object' => 
    array (
      'key' => 'tickets.date_format',
      'value' => '%d.%m.%y <small>%H:%M</small>',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  'd5a113003d173025899147ec69a4ce23' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.enable_editor',
    ),
    'object' => 
    array (
      'key' => 'tickets.enable_editor',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '2020-12-06 07:17:08',
    ),
  ),
  'd9f7a42eaf8fe8839cec4a3f3017fc36' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.frontend_css',
    ),
    'object' => 
    array (
      'key' => 'tickets.frontend_css',
      'value' => '[[+cssUrl]]web/default.css',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  '7bd5a8da71c814d56570f1f605ada8d9' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.frontend_js',
    ),
    'object' => 
    array (
      'key' => 'tickets.frontend_js',
      'value' => '[[+jsUrl]]web/default.js',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => NULL,
    ),
  ),
  '8bbc8e2c7e82f4c619f3629738370692' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.editor_config.ticket',
    ),
    'object' => 
    array (
      'key' => 'tickets.editor_config.ticket',
      'value' => '{onTab: {keepDefault:false, replaceWith:"	"},
        markupSet: [
            {name:"Bold", className: "btn-bold", key:"B", openWith:"<b>", closeWith:"</b>" },
            {name:"Italic", className: "btn-italic", key:"I", openWith:"<i>", closeWith:"</i>"  },
            {name:"Underline", className: "btn-underline", key:"U", openWith:"<u>", closeWith:"</u>" },
            {name:"Stroke through", className: "btn-stroke", key:"S", openWith:"<s>", closeWith:"</s>" },
            {separator:"---------------" },
            {name:"Bulleted List", className: "btn-bulleted", openWith:"	<li>", closeWith:"</li>", multiline:true, openBlockWith:"<ul>\\n", closeBlockWith:"\\n</ul>"},
            {name:"Numeric List", className: "btn-numeric", openWith:"	<li>", closeWith:"</li>", multiline:true, openBlockWith:"<ol>\\n", closeBlockWith:"\\n</ol>"},
            {separator:"---------------" },
            {name:"Quote", className: "btn-quote", openWith:"<blockquote>", closeWith:"</blockquote>"},
            {name:"Code", className: "btn-code", openWith:"<code>", closeWith:"</code>"},
            {name:"Link", className: "btn-link", openWith:"<a href=\\"[![Link:!:http://]!]\\">", closeWith:"</a>" },
            {name:"Picture", className: "btn-picture", replaceWith:"<img src=\\"[![Source:!:http://]!]\\" />" },
            {separator:"---------------" },
            {name:"Cut", className: "btn-cut", openWith:"<cut/>" }
        ]}',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '0b930550006c32e7c102502ed964f6e7' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.editor_config.comment',
    ),
    'object' => 
    array (
      'key' => 'tickets.editor_config.comment',
      'value' => '{onTab: {keepDefault:false, replaceWith:"	"},
        markupSet: [
            {name:"Bold", className: "btn-bold", key:"B", openWith:"<b>", closeWith:"</b>" },
            {name:"Italic", className: "btn-italic", key:"I", openWith:"<i>", closeWith:"</i>"  },
            {name:"Underline", className: "btn-underline", key:"U", openWith:"<u>", closeWith:"</u>" },
            {name:"Stroke through", className: "btn-stroke", key:"S", openWith:"<s>", closeWith:"</s>" },
            {separator:"---------------" },
            {name:"Quote", className: "btn-quote", openWith:"<blockquote>", closeWith:"</blockquote>"},
            {name:"Code", className: "btn-code", openWith:"<code>", closeWith:"</code>"},
            {name:"Link", className: "btn-link", openWith:"<a href=\\"[![Link:!:http://]!]\\">", closeWith:"</a>" },
            {name:"Picture", className: "btn-picture", replaceWith:"<img src=\\"[![Source:!:http://]!]\\" />" }
        ]}',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  '2a109c5a98938c586fffcaeb0cd4c8f8' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.default_template',
    ),
    'object' => 
    array (
      'key' => 'tickets.default_template',
      'value' => '4',
      'xtype' => 'modx-combo-template',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '2020-11-28 03:31:44',
    ),
  ),
  '4f8ece76fc4d6f481457ee9c883a5db9' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.snippet_prepare_comment',
    ),
    'object' => 
    array (
      'key' => 'tickets.snippet_prepare_comment',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  '5125365ef3324afa9e4e12b11d0bb074' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.comment_edit_time',
    ),
    'object' => 
    array (
      'key' => 'tickets.comment_edit_time',
      'value' => '600',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  '9102d34b99feaeff2c16031871d81d3a' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.clear_cache_on_comment_save',
    ),
    'object' => 
    array (
      'key' => 'tickets.clear_cache_on_comment_save',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.comment',
      'editedon' => NULL,
    ),
  ),
  '588b5b0b65deabbb0448f6e4173ad1a4' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.private_ticket_page',
    ),
    'object' => 
    array (
      'key' => 'tickets.private_ticket_page',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '519af5aee02159805b8306c91079af3f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.unpublished_ticket_page',
    ),
    'object' => 
    array (
      'key' => 'tickets.unpublished_ticket_page',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '4a3c01fbbbb36cec938552a10b71a00d' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.ticket_max_cut',
    ),
    'object' => 
    array (
      'key' => 'tickets.ticket_max_cut',
      'value' => '1000',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  '00638762f1b5e3935cc58fe6184ab56f' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_from',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_from',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '3aa889f32441b01d87dfbe24f058a797' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_from_name',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_from_name',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  'be9449a27185faca6c69ba9cf88aa478' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_queue',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_queue',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '7e088055f3136bceffeb14e504883462' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_bcc',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_bcc',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '673c8cd95cf9e018c7b9ec19c35fd506' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.mail_bcc_level',
    ),
    'object' => 
    array (
      'key' => 'tickets.mail_bcc_level',
      'value' => '1',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.mail',
      'editedon' => NULL,
    ),
  ),
  '8ead349a960b32cd4ad96d73d2082893' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.section_content_default',
    ),
    'object' => 
    array (
      'key' => 'tickets.section_content_default',
      'value' => '',
      'xtype' => 'textarea',
      'namespace' => 'tickets',
      'area' => 'tickets.section',
      'editedon' => NULL,
    ),
  ),
  '91cb179f373f80631c2efdcd1716b635' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.source_default',
    ),
    'object' => 
    array (
      'key' => 'tickets.source_default',
      'value' => '2',
      'xtype' => 'modx-combo-source',
      'namespace' => 'tickets',
      'area' => 'tickets.main',
      'editedon' => '2020-11-27 16:04:04',
    ),
  ),
  'a44ea02207d62bf3cb0edb5b52624930' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.count_guests',
    ),
    'object' => 
    array (
      'key' => 'tickets.count_guests',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => '2020-11-28 03:32:02',
    ),
  ),
  'c6e7c34845302a9790fd60e6516cda9b' => 
  array (
    'criteria' => 
    array (
      'key' => 'tickets.max_files_upload',
    ),
    'object' => 
    array (
      'key' => 'tickets.max_files_upload',
      'value' => '0',
      'xtype' => 'numberfield',
      'namespace' => 'tickets',
      'area' => 'tickets.ticket',
      'editedon' => NULL,
    ),
  ),
  'db65c0756fd7407691e13c5b65acd475' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentSave',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentSave',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '077c4e1783eadb38eb1417fd1eaf6340' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentSave',
    ),
    'object' => 
    array (
      'name' => 'OnCommentSave',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '999cd7beb6bf95100ff08a8bc7288ce3' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentPublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentPublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '57010528742b9ded6b2456efbd9083f1' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentPublish',
    ),
    'object' => 
    array (
      'name' => 'OnCommentPublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '645e2af2a07da815a28fe3209e72662a' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUnpublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '52fd434d1beccd2e862cf8d8e965669b' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUnpublish',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUnpublish',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '6eeb83841c373d5e775097d699e2325a' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '29dec391863970dcf97b681e7c348b6a' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentDelete',
    ),
    'object' => 
    array (
      'name' => 'OnCommentDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '99fc6c1e5659eb067ad05925d36b2f96' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '10f37b4eb09412a118b948e9b43a0669' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'a61a006c12bb43128c9f89c4e3de67a9' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '641d18aeb04856e881bba603100d13a8' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentRemove',
    ),
    'object' => 
    array (
      'name' => 'OnCommentRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '25de69422722c935b9a4a420e9376642' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadClose',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadClose',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '12e108190d9cc219e683202b09a2ed5c' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadClose',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadClose',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'dd511ece605437f3f2eee7a48ed88b09' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadOpen',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadOpen',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '17e102144f74c29b1db2e3bc3ac03cea' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadOpen',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadOpen',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '752e6f5b40a0874fa09674a64f0783de' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadDelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'c8d01b1e5b9fce82b1141f10106e25fa' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadDelete',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadDelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '62bafad48f1b449a02b81e5a2ff3b658' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '17c39c6a3bf0114f9c39477e2ca44065' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadUndelete',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadUndelete',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '1f4dc01781ee673dc538ff5f76930c6b' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketThreadRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'c9b2af44508f28ee7eb6c9a58be25f75' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketThreadRemove',
    ),
    'object' => 
    array (
      'name' => 'OnTicketThreadRemove',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '7969404eb5e0d813d48a14d5e31bf1d2' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketVote',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketVote',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '33fd8a3509ee83fd3489a19e592f4228' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketVote',
    ),
    'object' => 
    array (
      'name' => 'OnTicketVote',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'b6a77eaaa271e12cf98365c18b5c52ca' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentVote',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentVote',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '2f04eea848035087b5f16056eab3385f' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentVote',
    ),
    'object' => 
    array (
      'name' => 'OnCommentVote',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '6db0706c05dde1a91ff1e232e47b9d57' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketStar',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '08a6f2efaa7fd6def1d7167e1a623b15' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketStar',
    ),
    'object' => 
    array (
      'name' => 'OnTicketStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '578ca303b2e42b5eddb3cb22c65e0f00' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeTicketUnStar',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeTicketUnStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'cd930865028e9c38aeb0f0b34d2c2b89' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnTicketUnStar',
    ),
    'object' => 
    array (
      'name' => 'OnTicketUnStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '9e0d990de631a0df6a711b62b9b5bb55' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentStar',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  'c94fc68a5f06d23527031aba441b7f80' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentStar',
    ),
    'object' => 
    array (
      'name' => 'OnCommentStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '9b5125a99c2829f1ef2b0894f1ce1c98' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnBeforeCommentUnStar',
    ),
    'object' => 
    array (
      'name' => 'OnBeforeCommentUnStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '888d0ac6e33b304a2488d980430aa524' => 
  array (
    'criteria' => 
    array (
      'name' => 'OnCommentUnStar',
    ),
    'object' => 
    array (
      'name' => 'OnCommentUnStar',
      'service' => 6,
      'groupname' => 'Tickets',
    ),
  ),
  '9e789cf7810a1ed9daed03e9e4cc8a05' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketUserPolicy',
    ),
    'object' => 
    array (
      'id' => 13,
      'name' => 'TicketUserPolicy',
      'description' => 'A policy for create and update Tickets.',
      'parent' => 0,
      'template' => 8,
      'class' => '',
      'data' => '{"comment_delete":true,"comment_file_upload":true,"comment_publish":true,"comment_remove":true,"comment_save":true,"comment_star":true,"comment_vote":true,"section_unsubscribe":true,"thread_close":true,"thread_delete":true,"thread_remove":true,"ticket_delete":true,"ticket_file_delete":true,"ticket_file_upload":true,"ticket_publish":true,"ticket_save":true,"ticket_star":true,"ticket_view_private":false,"ticket_vote":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '01e127da5e3a9e3fdec02c68e727c78e' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketSectionPolicy',
    ),
    'object' => 
    array (
      'id' => 14,
      'name' => 'TicketSectionPolicy',
      'description' => 'A policy for add tickets in section.',
      'parent' => 0,
      'template' => 9,
      'class' => '',
      'data' => '{"section_add_children":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '4cb13cf415888beddf5caf08ef90a2a2' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketVipPolicy',
    ),
    'object' => 
    array (
      'id' => 15,
      'name' => 'TicketVipPolicy',
      'description' => 'A policy for create and update private Tickets.',
      'parent' => 0,
      'template' => 8,
      'class' => '',
      'data' => '{"ticket_delete":true,"ticket_publish":true,"ticket_save":true,"ticket_vote":true,"ticket_star":true,"section_unsubscribe":true,"comment_save":true,"comment_delete":true,"comment_remove":true,"comment_publish":true,"comment_file_upload":true,"comment_vote":true,"comment_star":true,"ticket_view_private":true,"ticket_file_upload":true,"ticket_file_delete":true,"thread_close":true,"thread_delete":true,"thread_remove":true}',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '5c356a3ae5a78221f83a34c0f1384297' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketsUserPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 8,
      'template_group' => 1,
      'name' => 'TicketsUserPolicyTemplate',
      'description' => 'A policy for users to create Tickets and comments.',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '802e3bba59f090ee89d7e41d608bc793' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_delete',
    ),
    'object' => 
    array (
      'id' => 222,
      'template' => 8,
      'name' => 'ticket_delete',
      'description' => 'ticket_delete',
      'value' => 1,
    ),
  ),
  '523c826404d1ad93c68079e1a8117de4' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_publish',
    ),
    'object' => 
    array (
      'id' => 223,
      'template' => 8,
      'name' => 'ticket_publish',
      'description' => 'ticket_publish',
      'value' => 1,
    ),
  ),
  'da74529946ee84e0090de75b47c3cb4a' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_save',
    ),
    'object' => 
    array (
      'id' => 224,
      'template' => 8,
      'name' => 'ticket_save',
      'description' => 'ticket_save',
      'value' => 1,
    ),
  ),
  '0dc5c9c1ddec9eba841432529cadd91a' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_view_private',
    ),
    'object' => 
    array (
      'id' => 225,
      'template' => 8,
      'name' => 'ticket_view_private',
      'description' => 'ticket_view_private',
      'value' => 1,
    ),
  ),
  '8a19b586618094f5192ae5754a7bf909' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_vote',
    ),
    'object' => 
    array (
      'id' => 226,
      'template' => 8,
      'name' => 'ticket_vote',
      'description' => 'ticket_vote',
      'value' => 1,
    ),
  ),
  '6c048d9073aacd7c049a71ae339c03d2' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_star',
    ),
    'object' => 
    array (
      'id' => 227,
      'template' => 8,
      'name' => 'ticket_star',
      'description' => 'ticket_star',
      'value' => 1,
    ),
  ),
  '88ef57162bf21b28d0b9a05fc36526f9' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'section_unsubscribe',
    ),
    'object' => 
    array (
      'id' => 228,
      'template' => 8,
      'name' => 'section_unsubscribe',
      'description' => 'section_unsubscribe',
      'value' => 1,
    ),
  ),
  '2c7ac6882c6e8e8798beb75eb325fb6c' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_save',
    ),
    'object' => 
    array (
      'id' => 229,
      'template' => 8,
      'name' => 'comment_save',
      'description' => 'comment_save',
      'value' => 1,
    ),
  ),
  '643f5a7a7c1331caa33c581ac8ddcada' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_delete',
    ),
    'object' => 
    array (
      'id' => 230,
      'template' => 8,
      'name' => 'comment_delete',
      'description' => 'comment_delete',
      'value' => 1,
    ),
  ),
  '0cef70545c21b10b02a865338bb1ed56' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_remove',
    ),
    'object' => 
    array (
      'id' => 231,
      'template' => 8,
      'name' => 'comment_remove',
      'description' => 'comment_remove',
      'value' => 1,
    ),
  ),
  '933dae4ff74c226f219838f9062c0ba9' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_publish',
    ),
    'object' => 
    array (
      'id' => 232,
      'template' => 8,
      'name' => 'comment_publish',
      'description' => 'comment_publish',
      'value' => 1,
    ),
  ),
  '18c0e588ceef622fd56458533873872b' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_file_upload',
    ),
    'object' => 
    array (
      'id' => 233,
      'template' => 8,
      'name' => 'comment_file_upload',
      'description' => 'comment_file_upload',
      'value' => 1,
    ),
  ),
  '09282707f5b3b644c7415a41e160bc38' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_vote',
    ),
    'object' => 
    array (
      'id' => 234,
      'template' => 8,
      'name' => 'comment_vote',
      'description' => 'comment_vote',
      'value' => 1,
    ),
  ),
  'b4fc71a1c6d690f039de9fed64380dfc' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'comment_star',
    ),
    'object' => 
    array (
      'id' => 235,
      'template' => 8,
      'name' => 'comment_star',
      'description' => 'comment_star',
      'value' => 1,
    ),
  ),
  'f426e9b29d194410c4142a6240fca2b2' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_file_upload',
    ),
    'object' => 
    array (
      'id' => 236,
      'template' => 8,
      'name' => 'ticket_file_upload',
      'description' => 'ticket_file_upload',
      'value' => 1,
    ),
  ),
  '59a72c8f76727c4d3a34196bdd643ff0' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'ticket_file_delete',
    ),
    'object' => 
    array (
      'id' => 237,
      'template' => 8,
      'name' => 'ticket_file_delete',
      'description' => 'ticket_file_delete',
      'value' => 1,
    ),
  ),
  '55cf8b8fc907d79d6b61f556d4e087f2' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'thread_close',
    ),
    'object' => 
    array (
      'id' => 238,
      'template' => 8,
      'name' => 'thread_close',
      'description' => 'thread_close',
      'value' => 1,
    ),
  ),
  'c55ffc5941d0d406ed7e84ab28caf566' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'thread_delete',
    ),
    'object' => 
    array (
      'id' => 239,
      'template' => 8,
      'name' => 'thread_delete',
      'description' => 'thread_delete',
      'value' => 1,
    ),
  ),
  '2f07b87b2a11e05c47cd1ce36ec398f6' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'thread_remove',
    ),
    'object' => 
    array (
      'id' => 240,
      'template' => 8,
      'name' => 'thread_remove',
      'description' => 'thread_remove',
      'value' => 1,
    ),
  ),
  'f7f59ab58f1174199574ce689371f290' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketsSectionPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 9,
      'template_group' => 3,
      'name' => 'TicketsSectionPolicyTemplate',
      'description' => 'A policy for users to add Tickets to section.',
      'lexicon' => 'tickets:permissions',
    ),
  ),
  '9c74e4aed0d42513d33c590d81c9a917' => 
  array (
    'criteria' => 
    array (
      'template' => 9,
      'name' => 'section_add_children',
    ),
    'object' => 
    array (
      'id' => 241,
      'template' => 9,
      'name' => 'section_add_children',
      'description' => 'section_add_children',
      'value' => 1,
    ),
  ),
  '04ed0a3b6a960230009776644e59929d' => 
  array (
    'criteria' => 
    array (
      'category' => 'Tickets',
    ),
    'object' => 
    array (
      'id' => 4,
      'parent' => 0,
      'category' => 'Tickets',
      'rank' => 0,
    ),
  ),
  'b369dfb6f67ff31ce9386e6a1d8ef35d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.create',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.create',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<form class="well create" method="post" action="">
    <div id="ticket-preview-placeholder"></div>

    <input type="hidden" name="tid" value="0"/>

    <input type="hidden" name="parent" value="1">

    <div class="form-group">
        <label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
        <input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value=""
               maxlength="50" id="ticket-pagetitle"/>
        <span class="error"></span>
    </div>

    <div class="form-group">
        <textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor"
                  rows="10"></textarea>
        <span class="error" id="content-error"></span>
    </div>

    <div class="ticket-form-files">
        [[+files]]
    </div>

    <div class="form-actions row">
        <div class="col-md-6">
            <input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter"/>
        </div>
        <div class="col-md-6 move-right">
            <input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
            <input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]"
                   title="Ctrl + Shift + Enter"/>
        </div>
    </div>
</form>

<!--- NEW FORM 

<form class="well create createlotHold" method="post" action="">
    
    <div id="ticket-preview-placeholder"></div>
    <input type="hidden" name="tid" value="0"/>
    <input type="hidden" name="parent" value="1">
    
        <div class="createlot">
          <div class="createlot__tab">
            <h2 class="createlot__tab-title">
              Что вы хотите предложить к обмену?
            </h2>

            <input
              class="createlot__tab-inputs"
              type="text"
              placeholder="Укажите название"
              id="createlotName"
              name="pagetitle"
              value=""
            />
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub"></p>
            <input
              class="createlot__tab-inputs"
              type="text"
              placeholder="Категории вашего лота"
              id="createlotTags"
              name="lotCat"
            />
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Укажите через запятую категории, к которым относится ваше
              предложение
            </p>
            
            <!--
            
            <input
              class="createlot__tab-inputs"
              type="text"
              placeholder="Примерная ценовая категория"
              id="createlotPrice"
            />
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Так пользователям будет легче понимать во сколько вы оцениваете
              своё предложение, чтобы обмен был равноценным. Можно указать
              диапазон “от - до”.
            </p> 
            
            -->
            
            <!--- Files --->
            
            <!--- <label for="createlotImages" class="createlot__tab-addimg"> --->
              <!-- <img src="./assets/images/icons/images.svg" alt="загрузите фото" />
              <input
                class="createlot__tab-addimgReal"
                type="file"
                id="createlotImages"
                capture="user"
                accept="image/*"
                multiple
              /> -->
              <!--- <div class="ticket-form-files">--> 
              <!-- <div class="createlot__tab-addimgFake">Прикрепить фотографии</div> -->
              <!-- <label for="ticket-files-list">Фотографии</label><br />
                    [[+files]]
              </div> -->
              
              <!--- End of Files --->
              
            <!--- </label> 
          </div>
          <div class="createlot__tab">
            <h2
              class="createlot_tab-title createlot_tab-titlehiden"
              style="color: transparent; user-select: none"
            >
              Что вы хотите предложить к обмену?
            </h2>
            <textarea
              class="createlot__tab-textarea commonTextarea"
              name="lotDescription"
              id="createlotDescr"
              placeholder="Описание"
              name="content"
            ></textarea>
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Так пользователям будет легче понимать во сколько вы оцениваете
              своё предложение, чтобы обмен был равноценным. Можно указать
              диапазон “от - до”.
            </p>
          </div>
          <div class="createlot__tab">
            <h2 class="createlot__tab-title">
              Что вы хотели бы получить взамен?
            </h2>
            <textarea
              class="createlot__tab-textarea commonTextarea"
              name="lotwWish"
              id="createlotWish"
              placeholder="Желаемые категории"
              name="wishes"
            ></textarea>
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Укажите через запятую категории товаров, на которые вы готовы
              меняться
            </p>
            <textarea
              class="createlot__tab-textarea commonTextarea"
              name="lotwAddPayment"
              id="createlotAddPayment"
              placeholder="Сумма доплаты"
            ></textarea>
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Если будете готовы доплатить за что-то, укажите максимальную сумму
            </p>
          </div>
        </div>
        <div class="createlot__btns form-actions">
          <input type="button" class=" btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
          <input type="submit" class=" btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="Ctrl + Shift + Enter"/>
          <p class="createlot__nota">
            Вы можете продолжить заполнение формы позже, сохраненный черновик
            будет находится в вашем профиле
          </p>
        </div>
      </form>
      --->',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_create.tpl',
      'content' => '<form class="well create" method="post" action="">
    <div id="ticket-preview-placeholder"></div>

    <input type="hidden" name="tid" value="0"/>

    <input type="hidden" name="parent" value="1">

    <div class="form-group">
        <label for="ticket-pagetitle">[[%ticket_pagetitle]]</label>
        <input type="text" class="form-control" placeholder="[[%ticket_pagetitle]]" name="pagetitle" value=""
               maxlength="50" id="ticket-pagetitle"/>
        <span class="error"></span>
    </div>

    <div class="form-group">
        <textarea class="form-control" placeholder="[[%ticket_content]]" name="content" id="ticket-editor"
                  rows="10"></textarea>
        <span class="error" id="content-error"></span>
    </div>

    <div class="ticket-form-files">
        [[+files]]
    </div>

    <div class="form-actions row">
        <div class="col-md-6">
            <input type="button" class="btn btn-default preview" value="[[%ticket_preview]]" title="Ctrl + Enter"/>
        </div>
        <div class="col-md-6 move-right">
            <input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
            <input type="submit" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]"
                   title="Ctrl + Shift + Enter"/>
        </div>
    </div>
</form>

<!--- NEW FORM 

<form class="well create createlotHold" method="post" action="">
    
    <div id="ticket-preview-placeholder"></div>
    <input type="hidden" name="tid" value="0"/>
    <input type="hidden" name="parent" value="1">
    
        <div class="createlot">
          <div class="createlot__tab">
            <h2 class="createlot__tab-title">
              Что вы хотите предложить к обмену?
            </h2>

            <input
              class="createlot__tab-inputs"
              type="text"
              placeholder="Укажите название"
              id="createlotName"
              name="pagetitle"
              value=""
            />
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub"></p>
            <input
              class="createlot__tab-inputs"
              type="text"
              placeholder="Категории вашего лота"
              id="createlotTags"
              name="lotCat"
            />
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Укажите через запятую категории, к которым относится ваше
              предложение
            </p>
            
            <!--
            
            <input
              class="createlot__tab-inputs"
              type="text"
              placeholder="Примерная ценовая категория"
              id="createlotPrice"
            />
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Так пользователям будет легче понимать во сколько вы оцениваете
              своё предложение, чтобы обмен был равноценным. Можно указать
              диапазон “от - до”.
            </p> 
            
            -->
            
            <!--- Files --->
            
            <!--- <label for="createlotImages" class="createlot__tab-addimg"> --->
              <!-- <img src="./assets/images/icons/images.svg" alt="загрузите фото" />
              <input
                class="createlot__tab-addimgReal"
                type="file"
                id="createlotImages"
                capture="user"
                accept="image/*"
                multiple
              /> -->
              <!--- <div class="ticket-form-files">--> 
              <!-- <div class="createlot__tab-addimgFake">Прикрепить фотографии</div> -->
              <!-- <label for="ticket-files-list">Фотографии</label><br />
                    [[+files]]
              </div> -->
              
              <!--- End of Files --->
              
            <!--- </label> 
          </div>
          <div class="createlot__tab">
            <h2
              class="createlot_tab-title createlot_tab-titlehiden"
              style="color: transparent; user-select: none"
            >
              Что вы хотите предложить к обмену?
            </h2>
            <textarea
              class="createlot__tab-textarea commonTextarea"
              name="lotDescription"
              id="createlotDescr"
              placeholder="Описание"
              name="content"
            ></textarea>
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Так пользователям будет легче понимать во сколько вы оцениваете
              своё предложение, чтобы обмен был равноценным. Можно указать
              диапазон “от - до”.
            </p>
          </div>
          <div class="createlot__tab">
            <h2 class="createlot__tab-title">
              Что вы хотели бы получить взамен?
            </h2>
            <textarea
              class="createlot__tab-textarea commonTextarea"
              name="lotwWish"
              id="createlotWish"
              placeholder="Желаемые категории"
              name="wishes"
            ></textarea>
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Укажите через запятую категории товаров, на которые вы готовы
              меняться
            </p>
            <textarea
              class="createlot__tab-textarea commonTextarea"
              name="lotwAddPayment"
              id="createlotAddPayment"
              placeholder="Сумма доплаты"
            ></textarea>
            <div class="createlot__tab-spacer"></div>
            <p class="createlot__tab-sub">
              Если будете готовы доплатить за что-то, укажите максимальную сумму
            </p>
          </div>
        </div>
        <div class="createlot__btns form-actions">
          <input type="button" class=" btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
          <input type="submit" class=" btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title="Ctrl + Shift + Enter"/>
          <p class="createlot__nota">
            Вы можете продолжить заполнение формы позже, сохраненный черновик
            будет находится в вашем профиле
          </p>
        </div>
      </form>
      --->',
    ),
  ),
  'b0de4a14fc8349416e6edb6cc16ae172' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.update',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.update',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '

<form class="well update" method="post" action="" id="ticketForm">
    <div id="ticket-preview-placeholder"></div>

    <input type="hidden" name="tid" value="[[+id]]" />
    <input type="hidden" name="parent" value="1" />

    <div class="form-group">
        <label for="ticket-pagetitle">Название</label><br />
        <input type="text" class="form-control2" placeholder="Название" name="pagetitle" value="[[+pagetitle]]"
               maxlength="50" id="ticket-pagetitle"/>
        <span class="error"></span>
    </div>
    
    <div class="form-group">
        <label for="lotCat-editor">Товарная категория лота</label><br />
        <textarea class="form-control" placeholder="К какой категории товаров относится ваше предложение? Введите одну или несколько категорий через запятую" name="lotCat" id="lotCat-editor"
                  rows="10">[[+lotCat]]</textarea>
        <span class="error" id="lotCat-error"></span>
    </div>

    <div class="form-group">
        <label for="ticket-editor">Описание</label><br />
        <textarea class="form-control" placeholder="Описание" name="content" id="ticket-editor"
                  rows="10">[[+content]]</textarea>
        <span class="error" id="content-error"></span>
    </div>

<div class="form-group">
    <label for="wishes-editor">Приоритетные для обмена категории или вещи</label><br />
        <textarea class="form-control" placeholder="Список категорий или вещей через запятую" name="wishes" id="wishes-editor"
                  rows="10">[[+wishes]]</textarea>
        <span class="error" id="wishes-error"></span>
    </div>

    <div class="ticket-form-files">
        <label for="ticket-files-list">Фотографии</label><br />
        [[+files]]
       
    </div>

    <div class="form-actions row">
        <div class="">
            [[+published:is=`1`:then=`
            <a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs">[[%ticket_open]]</a>
            <input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title=""/>
            `:else=`
            <input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
            `]]
            <input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]"
                   title="Ctrl + Shift + Enter"/>
            [[+allowDelete:is=`1`:then=`
                [[+deleted:is=`1`:then=`
                <input type="button" class="btn btn-default undelete" data-confirm="[[%ticket_undelete_text]]" name="undelete" value="[[%ticket_undelete]]"/>
                `:else=`
                <input type="button" class="btn btn-default delete" data-confirm="[[%ticket_delete_text]]" name="delete" value="[[%ticket_delete]]"/>
                `]]
            `]]
        </div>
    </div>
</form>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_update.tpl',
      'content' => '

<form class="well update" method="post" action="" id="ticketForm">
    <div id="ticket-preview-placeholder"></div>

    <input type="hidden" name="tid" value="[[+id]]" />
    <input type="hidden" name="parent" value="1" />

    <div class="form-group">
        <label for="ticket-pagetitle">Название</label><br />
        <input type="text" class="form-control2" placeholder="Название" name="pagetitle" value="[[+pagetitle]]"
               maxlength="50" id="ticket-pagetitle"/>
        <span class="error"></span>
    </div>
    
    <div class="form-group">
        <label for="lotCat-editor">Товарная категория лота</label><br />
        <textarea class="form-control" placeholder="К какой категории товаров относится ваше предложение? Введите одну или несколько категорий через запятую" name="lotCat" id="lotCat-editor"
                  rows="10">[[+lotCat]]</textarea>
        <span class="error" id="lotCat-error"></span>
    </div>

    <div class="form-group">
        <label for="ticket-editor">Описание</label><br />
        <textarea class="form-control" placeholder="Описание" name="content" id="ticket-editor"
                  rows="10">[[+content]]</textarea>
        <span class="error" id="content-error"></span>
    </div>

<div class="form-group">
    <label for="wishes-editor">Приоритетные для обмена категории или вещи</label><br />
        <textarea class="form-control" placeholder="Список категорий или вещей через запятую" name="wishes" id="wishes-editor"
                  rows="10">[[+wishes]]</textarea>
        <span class="error" id="wishes-error"></span>
    </div>

    <div class="ticket-form-files">
        <label for="ticket-files-list">Фотографии</label><br />
        [[+files]]
       
    </div>

    <div class="form-actions row">
        <div class="">
            [[+published:is=`1`:then=`
            <a href="[[~[[+id]]?scheme=`full`]]" class="btn btn-default btn-xs">[[%ticket_open]]</a>
            <input type="button" class="btn btn-danger draft" name="draft" value="[[%ticket_draft]]" title=""/>
            `:else=`
            <input type="button" class="btn btn-primary publish" name="publish" value="[[%ticket_publish]]" title=""/>
            `]]
            <input type="submit" class="btn btn-default save" name="save" value="[[%ticket_save]]"
                   title="Ctrl + Shift + Enter"/>
            [[+allowDelete:is=`1`:then=`
                [[+deleted:is=`1`:then=`
                <input type="button" class="btn btn-default undelete" data-confirm="[[%ticket_undelete_text]]" name="undelete" value="[[%ticket_undelete]]"/>
                `:else=`
                <input type="button" class="btn btn-default delete" data-confirm="[[%ticket_delete_text]]" name="delete" value="[[%ticket_delete]]"/>
                `]]
            `]]
        </div>
    </div>
</form>',
    ),
  ),
  'fe8a54d3f6fa3d6232cc5501167f0394' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.preview',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.preview',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_preview.tpl',
      'content' => '<h3 class="title">[[+pagetitle]]</h3>
<div class="content">[[+content]]</div>
<h5 class="author">[[+modx.user.id:userinfo=`username`]]</h5>
',
    ),
  ),
  '3d5c3c70d58019c9255fdaf10b95ce46' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.files',
    ),
    'object' => 
    array (
      'id' => 21,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.files',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div id="ticket-files-list">
    [[+files]]
    <div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
    <a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
    <div id="ticket-files-progress">
        <span id="ticket-files-progress-count">0/0</span>
        <span id="ticket-files-progress-percent">0%</span>
        <div id="ticket-files-progress-bar"></div>
    </div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_files.tpl',
      'content' => '<div id="ticket-files-list">
    [[+files]]
    <div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="ticket/file/upload">
    <a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
    <div id="ticket-files-progress">
        <span id="ticket-files-progress-count">0/0</span>
        <span id="ticket-files-progress-percent">0%</span>
        <div id="ticket-files-progress-bar"></div>
    </div>
</div>',
    ),
  ),
  '3788ca9820520581ec5be5bc690752c6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.file',
    ),
    'object' => 
    array (
      'id' => 22,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.file',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
    <a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
        <div class="ticket-file-image-wrapper">
            [[+file]]
        </div>
    </a>
    <div class="ticket-file-meta">
        <a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
        <a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
        <br/>
        <a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
        <br/>
        <span class="ticket-file-size">[[+size]] Kb</span>
    </div>
    <div class="ticket-file-template">
        <a href="[[+url]]">
            [[+name]]
        </a>
    </div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_file.tpl',
      'content' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
    <a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
        <div class="ticket-file-image-wrapper">
            [[+file]]
        </div>
    </a>
    <div class="ticket-file-meta">
        <a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
        <a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
        <br/>
        <a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
        <br/>
        <span class="ticket-file-size">[[+size]] Kb</span>
    </div>
    <div class="ticket-file-template">
        <a href="[[+url]]">
            [[+name]]
        </a>
    </div>
</div>
<!--tickets_thumb <img src="[[+thumb]]" class="ticket-file-image" />-->
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
    ),
  ),
  'e6f2390bfb04e8d5a8fcdfcf2035a48c' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.form.image',
    ),
    'object' => 
    array (
      'id' => 23,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.form.image',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
    <a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
        <div class="ticket-file-image-wrapper">
            <img src="[[+thumb]]" class="ticket-file-image"/>
        </div>
    </a>
    <div class="ticket-file-meta">
        <a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
        <a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
        <br/>
        <a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
        <br/>
        <span class="ticket-file-size">[[+size]] Kb</span>
    </div>
    <div class="ticket-file-template">
        <a href="[[+url]]" title="[[+name]]">
            <img src="[[+thumb]]"/>
        </a>
    </div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.form_image.tpl',
      'content' => '<div class="ticket-file[[+deleted]][[+new]]" data-id="[[+id]]">
    <a href="[[+url]]" class="ticket-file-link" title="[[+file]]" target="_blank">
        <div class="ticket-file-image-wrapper">
            <img src="[[+thumb]]" class="ticket-file-image"/>
        </div>
    </a>
    <div class="ticket-file-meta">
        <a href="#" class="ticket-file-delete">[[%ticket_file_delete]]</a>
        <a href="#" class="ticket-file-restore">[[%ticket_file_restore]]</a>
        <br/>
        <a href="#" class="ticket-file-insert">[[%ticket_file_insert]]</a>
        <br/>
        <span class="ticket-file-size">[[+size]] Kb</span>
    </div>
    <div class="ticket-file-template">
        <a href="[[+url]]" title="[[+name]]">
            <img src="[[+thumb]]"/>
        </a>
    </div>
</div>
<!--tickets_deleted  deleted-->
<!--tickets_new  new-->',
    ),
  ),
  '1cb9d79b2fece050feb0b055766bf9eb' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form.files',
    ),
    'object' => 
    array (
      'id' => 24,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form.files',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div id="ticket-files-list">
    [[+files]]
    <div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="comment/file/upload">
    <a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
    <div id="ticket-files-progress">
        <span id="ticket-files-progress-count">0/0</span>
        <span id="ticket-files-progress-percent">0%</span>
        <div id="ticket-files-progress-bar"></div>
    </div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form_files.tpl',
      'content' => '<div id="ticket-files-list">
    [[+files]]
    <div class="clearfix"></div>
</div>

<div id="ticket-files-container" data-action="comment/file/upload">
    <a id="ticket-files-select" href="javascript:;">[[%ticket_file_select]]</a>
    <div id="ticket-files-progress">
        <span id="ticket-files-progress-count">0/0</span>
        <span id="ticket-files-progress-percent">0%</span>
        <div id="ticket-files-progress-bar"></div>
    </div>
</div>',
    ),
  ),
  '22d48b92ed61ebd4b06c27dc30840d44' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.latest',
    ),
    'object' => 
    array (
      'id' => 25,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.latest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-latest-row">
    <span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span
            class="date">[[+date_ago]]</span>
    <br/>
    <span class="section">
        <i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span
                class="arrow">&rarr;</span>
    </span>
    <span class="ticket">
        <a href="[[~[[+id]]]]">[[+pagetitle]]</a>
    </span>
    <nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_latest.tpl',
      'content' => '<div class="tickets-latest-row">
    <span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span
            class="date">[[+date_ago]]</span>
    <br/>
    <span class="section">
        <i class="glyphicon glyphicon-folder-open"></i> <a href="[[~[[+section.id]]]]">[[+section.pagetitle]]</a> <span
                class="arrow">&rarr;</span>
    </span>
    <span class="ticket">
        <a href="[[~[[+id]]]]">[[+pagetitle]]</a>
    </span>
    <nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>',
    ),
  ),
  '0938958bfe4650596db2dc3530b6b945' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.email.bcc',
    ),
    'object' => 
    array (
      'id' => 26,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.email.bcc',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_email_bcc_intro?
&fullname=`[[+user.fullname]]`
&email=`[[+user.email]]`
&id=`[[+id]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_email_bcc.tpl',
      'content' => '[[%ticket_email_bcc_intro?
&fullname=`[[+user.fullname]]`
&email=`[[+user.email]]`
&id=`[[+id]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
    ),
  ),
  'f1e43da11836a00c51ca34af2feff257' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.ticket.email.subscription',
    ),
    'object' => 
    array (
      'id' => 27,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.ticket.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_email_subscribed_intro?
&id=`[[+id]]`
&fullname=`[[+user.fullname]]`
&section=`[[+section.id]]`
&section_title=`[[+section.pagetitle]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_email_subscription.tpl',
      'content' => '[[%ticket_email_subscribed_intro?
&id=`[[+id]]`
&fullname=`[[+user.fullname]]`
&section=`[[+section.id]]`
&section_title=`[[+section.pagetitle]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
    ),
  ),
  '0116737a7908b4e4428d2f1d1f6e9714' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form',
    ),
    'object' => 
    array (
      'id' => 28,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[+modx.user.id:is=`[[*createdby]]`:then=`

`:else=`
<div class="thelot__main-btns">
        <div class="thelot__main-btnOffer"></div>
          [[+modx.user.id:isloggedin:is=`1`:then=`
        <br><br><span class="comments-subscribe pull-right">
        <label for="comments-subscribe" class="checkbox">
            <input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]]/> Следить за лотом
        </label>
    </span>
    `:else=``]]
      <!--<input-->
      <!--  class="thelot__main-btnChbx"-->
      <!--  type="checkbox"-->
      <!--  id="comments-subscribe1"-->
      <!--/>-->
      <!--<label for="comments-subscribe1" class="thelot__main-btnFollow"></label>-->
    </div>
    <h4 id="comment-new-link"><a href="#" class="btn btn-default">[[%ticket_comment_create]]</a></h4>
    <div id="comment-form-placeholder">
        <form id="comment-form" action="" method="post" class="well">
            <div id="comment-preview-placeholder"></div>
            <input type="hidden" name="thread" value="[[+thread]]"/>
            <input type="hidden" name="parent" value="0"/>
            <input type="hidden" name="id" value="0"/>
            <input type="hidden" name="form_key" value="[[+formkey]]">

            <div class="form-group">
                <label for="comment-editor"></label>
                <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
                <span class="error" id="text-error"></span>
            </div>

            <div class="comment-form-files">
                [[+files]]
            </div>

            <div class="form-actions">
                <input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]"
                   title="Ctrl + Enter"/>
                <input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]"
                   title="Ctrl + Shift + Enter"/>
                <span class="time"></span>
            </div>
        </form>
    </div>
`]]

',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form.tpl',
      'content' => '[[+modx.user.id:is=`[[*createdby]]`:then=`

`:else=`
<div class="thelot__main-btns">
        <div class="thelot__main-btnOffer"></div>
          [[+modx.user.id:isloggedin:is=`1`:then=`
        <br><br><span class="comments-subscribe pull-right">
        <label for="comments-subscribe" class="checkbox">
            <input type="checkbox" name="" id="comments-subscribe" value="1" [[+subscribed]]/> Следить за лотом
        </label>
    </span>
    `:else=``]]
      <!--<input-->
      <!--  class="thelot__main-btnChbx"-->
      <!--  type="checkbox"-->
      <!--  id="comments-subscribe1"-->
      <!--/>-->
      <!--<label for="comments-subscribe1" class="thelot__main-btnFollow"></label>-->
    </div>
    <h4 id="comment-new-link"><a href="#" class="btn btn-default">[[%ticket_comment_create]]</a></h4>
    <div id="comment-form-placeholder">
        <form id="comment-form" action="" method="post" class="well">
            <div id="comment-preview-placeholder"></div>
            <input type="hidden" name="thread" value="[[+thread]]"/>
            <input type="hidden" name="parent" value="0"/>
            <input type="hidden" name="id" value="0"/>
            <input type="hidden" name="form_key" value="[[+formkey]]">

            <div class="form-group">
                <label for="comment-editor"></label>
                <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
                <span class="error" id="text-error"></span>
            </div>

            <div class="comment-form-files">
                [[+files]]
            </div>

            <div class="form-actions">
                <input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]"
                   title="Ctrl + Enter"/>
                <input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]"
                   title="Ctrl + Shift + Enter"/>
                <span class="time"></span>
            </div>
        </form>
    </div>
`]]

',
    ),
  ),
  'a23de4b51c7f69c05b78c439c9e9a693' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.form.guest',
    ),
    'object' => 
    array (
      'id' => 29,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.form.guest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<h4 id="comment-new-link">
    <a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
    <form id="comment-form" action="" method="post" class="well">
        <div id="comment-preview-placeholder"></div>
        <input type="hidden" name="thread" value="[[+thread]]"/>
        <input type="hidden" name="parent" value="0"/>
        <input type="hidden" name="id" value="0"/>
        <input type="hidden" name="form_key" value="[[+formkey]]">

        <div class="form-group">
            <label for="comment-name">[[%ticket_comment_name]]</label>
            <input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control"/>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="comment-email">[[%ticket_comment_email]]</label>
            <input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control"/>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="comment-editor"></label>
            <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
            <span class="error" id="text-error"></span>
        </div>

        [[+allowFiles:is=`1`:then=`
            [[%ticket_comment_upload_auth]]
        `]]

        [[+captcha]]

        <div class="form-actions">
            <input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]"
                   title="Ctrl + Enter"/>
            <input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]"
                   title="Ctrl + Shift + Enter"/>
            <span class="time"></span>
        </div>
    </form>
</div>

<!--tickets_captcha
<div class="form-group">
    <label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
    <input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
    <span class="error"></span>
</div>
-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_form_guest.tpl',
      'content' => '<h4 id="comment-new-link">
    <a href="#" class="btn btn-default">[[%ticket_comment_create]]</a>
</h4>

<div id="comment-form-placeholder">
    <form id="comment-form" action="" method="post" class="well">
        <div id="comment-preview-placeholder"></div>
        <input type="hidden" name="thread" value="[[+thread]]"/>
        <input type="hidden" name="parent" value="0"/>
        <input type="hidden" name="id" value="0"/>
        <input type="hidden" name="form_key" value="[[+formkey]]">

        <div class="form-group">
            <label for="comment-name">[[%ticket_comment_name]]</label>
            <input type="text" name="name" value="[[+name]]" id="comment-name" class="form-control"/>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="comment-email">[[%ticket_comment_email]]</label>
            <input type="text" name="email" value="[[+email]]" id="comment-email" class="form-control"/>
            <span class="error"></span>
        </div>

        <div class="form-group">
            <label for="comment-editor"></label>
            <textarea name="text" id="comment-editor" cols="30" rows="10" class="form-control"></textarea>
            <span class="error" id="text-error"></span>
        </div>

        [[+allowFiles:is=`1`:then=`
            [[%ticket_comment_upload_auth]]
        `]]

        [[+captcha]]

        <div class="form-actions">
            <input type="button" class="btn btn-default preview" value="[[%ticket_comment_preview]]"
                   title="Ctrl + Enter"/>
            <input type="submit" class="btn btn-primary submit" value="[[%ticket_comment_save]]"
                   title="Ctrl + Shift + Enter"/>
            <span class="time"></span>
        </div>
    </form>
</div>

<!--tickets_captcha
<div class="form-group">
    <label for="comment-captcha" id="comment-captcha">[[+captcha]]</label>
    <input type="text" name="captcha" value="" id="comment-captcha" class="form-control" />
    <span class="error"></span>
</div>
-->',
    ),
  ),
  '19afeb528776431e511620e5d81fd70b' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.guest',
    ),
    'object' => 
    array (
      'id' => 31,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.guest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment" id="comment-[[+id]]">
    <div class="ticket-comment-body[[+bad]]">
        <div class="ticket-comment-header">
            <div class="ticket-comment-dot-wrapper">
                <div class="ticket-comment-dot"></div>
            </div>
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

            [[+has_parent]]
            <span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

            <span class="ticket-comment-rating inactive">
                <span class="rating[[+rating_positive]][[+rating_negative]]">
                    [[+rating]]
                </span>
                <span class="plus" title="[[%ticket_like]]">
                    <i class="glyphicon glyphicon-arrow-up"></i>
                </span>
                <span class="minus" title="[[%ticket_dislike]]">
                    <i class="glyphicon glyphicon-arrow-down"></i>
                </span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_guest.tpl',
      'content' => '<li class="ticket-comment" id="comment-[[+id]]">
    <div class="ticket-comment-body[[+bad]]">
        <div class="ticket-comment-header">
            <div class="ticket-comment-dot-wrapper">
                <div class="ticket-comment-dot"></div>
            </div>
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>

            [[+has_parent]]
            <span class="ticket-comment-down"><a href="#" data-child="">&darr;</a></span>

            <span class="ticket-comment-rating inactive">
                <span class="rating[[+rating_positive]][[+rating_negative]]">
                    [[+rating]]
                </span>
                <span class="plus" title="[[%ticket_like]]">
                    <i class="glyphicon glyphicon-arrow-up"></i>
                </span>
                <span class="minus" title="[[%ticket_dislike]]">
                    <i class="glyphicon glyphicon-arrow-down"></i>
                </span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_parent <span class="ticket-comment-up"><a href="[[+url]]#comment-[[+parent]]" data-id="[[+id]]" data-parent="[[+parent]]">&uarr;</a></span>-->',
    ),
  ),
  '7e58d71226436550b0d3fb94fd049907' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.one.deleted',
    ),
    'object' => 
    array (
      'id' => 32,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.one.deleted',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li class="ticket-comment" id="comment-[[+id]]">
    <div class="ticket-comment-body alert alert-warning">
        [[%ticket_comment_deleted_text]]
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_one_deleted.tpl',
      'content' => '<li class="ticket-comment" id="comment-[[+id]]">
    <div class="ticket-comment-body alert alert-warning">
        [[%ticket_comment_deleted_text]]
    </div>
    <ol class="comments-list">[[+children]]</ol>
</li>
',
    ),
  ),
  '9bab5c47f6fb0d5930ccbcfeb28339f0' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.wrapper',
    ),
    'object' => 
    array (
      'id' => 33,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.wrapper',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '

    <h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>
    <div id="comments-wrapper">
        <ol class="comment-list" id="comments">[[+comments]]</ol>
    </div>



<!--tickets_subscribed checked-->
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_wrapper.tpl',
      'content' => '

    <h3 class="title">[[%comments]] (<span id="comment-total">[[+total]]</span>)</h3>
    <div id="comments-wrapper">
        <ol class="comment-list" id="comments">[[+comments]]</ol>
    </div>



<!--tickets_subscribed checked-->
',
    ),
  ),
  'c86a07be4e0fda2ae04f425fb089d896' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.login',
    ),
    'object' => 
    array (
      'id' => 34,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.login',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_login.tpl',
      'content' => '<div class="ticket-comments alert alert-warning">
    <p>[[%ticket_comment_err_no_auth]]</p>
</div>',
    ),
  ),
  'f4a24fb580f9b7fd5151d767c4635179' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.latest',
    ),
    'object' => 
    array (
      'id' => 35,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.latest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="tickets-latest-row[[+guest]]">
    <span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span
            class="date">[[+date_ago]]</span>
    <br/>
    <span class="ticket">
        <a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
    </span>
    <nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_latest.tpl',
      'content' => '<div class="tickets-latest-row[[+guest]]">
    <span class="user"><i class="glyphicon glyphicon-user"></i> [[+fullname]]</span> <span
            class="date">[[+date_ago]]</span>
    <br/>
    <span class="ticket">
        <a href="[[~[[+ticket.id]]]]#comment-[[+id]]">[[+ticket.pagetitle]]</a>
    </span>
    <nobr><i class="glyphicon glyphicon-comment"></i> <span class="comments">[[+comments]]</span></nobr>
</div>
<!--tickets_guest  ticket-comment-guest-->',
    ),
  ),
  'bfa0bb10a77ef158749dbdf2dc1d56de' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.owner',
    ),
    'object' => 
    array (
      'id' => 36,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.owner',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_owner_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_owner.tpl',
      'content' => '[[%ticket_comment_email_owner_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>',
    ),
  ),
  '73281b924344f5689956cfd9e3477e88' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.reply',
    ),
    'object' => 
    array (
      'id' => 37,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.reply',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_reply_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>
<br/><br/>

[[%ticket_comment_email_reply_text]]
<pre>[[+parent_text]]</pre>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_reply.tpl',
      'content' => '[[%ticket_comment_email_reply_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>
<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_reply]]</a>
<br/><br/>

[[%ticket_comment_email_reply_text]]
<pre>[[+parent_text]]</pre>',
    ),
  ),
  'd3d28f7561fa0635945ccd4545c6874c' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.subscription',
    ),
    'object' => 
    array (
      'id' => 38,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_subscription_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_subscription.tpl',
      'content' => '[[%ticket_comment_email_subscription_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>',
    ),
  ),
  '47c2e5779b25611910b8c73418adb3b0' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.bcc',
    ),
    'object' => 
    array (
      'id' => 39,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.bcc',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_bcc_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_bcc.tpl',
      'content' => '[[%ticket_comment_email_bcc_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[~[[+resource]]?scheme=`full`]]#comment-[[+id]]">[[%ticket_email_view]]</a>
',
    ),
  ),
  'ac997c7f51b62d36b7727b7570a18cc4' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.email.unpublished',
    ),
    'object' => 
    array (
      'id' => 40,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.email.unpublished',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_comment_email_unpublished_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[+manager_url]]">[[%ticket_email_all_comments]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_email_unpublished.tpl',
      'content' => '[[%ticket_comment_email_unpublished_intro?
&name=`[[+name]]`
&resource=`[[+resource]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre>[[+text]]</pre>
<br/><br/>

<a href="[[+manager_url]]">[[%ticket_email_all_comments]]</a>',
    ),
  ),
  'ba135600900c8d9a25507921d08815c0' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.comment.list.row',
    ),
    'object' => 
    array (
      'id' => 41,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.comment.list.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
    <div class="ticket-comment-body[[+guest]]">
        <div class="ticket-comment-header">
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
            <span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

            <span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
                <span class="rating[[+rating_positive]][[+rating_negative]]"
                      title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
                <span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i
                            class="glyphicon glyphicon-arrow-up"></i></span>
                <span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i
                            class="glyphicon glyphicon-arrow-down"></i></span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
        <div class="ticket-comment-files">
            [[!commentFiles? &parent=`[[+id]]`]]
        </div>
    </div>

    <a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i>
        [[+section.pagetitle]]</a> &rarr;
    <a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
    <span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.comment_list_row.tpl',
      'content' => '<div class="ticket-comment-row ticket-comment" id="comment-[[+id]]" data-id="[[+id]]">
    <div class="ticket-comment-body[[+guest]]">
        <div class="ticket-comment-header">
            <img src="[[+avatar]]" class="ticket-avatar" alt=""/>
            <span class="ticket-comment-author">[[+fullname]]</span>
            <span class="ticket-comment-createdon">[[+date_ago]]</span>[[+comment_was_edited]]
            <span class="ticket-comment-link"><a href="[[+url]]#comment-[[+id]]">#</a></span>
            <span class="ticket-comment-star[[+can_star]]">[[+stared]][[+unstared]]</span>

            <span class="ticket-comment-rating[[+can_vote]][[+cant_vote]]">
                <span class="rating[[+rating_positive]][[+rating_negative]]"
                      title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>
                <span class="vote plus[[+voted_plus]]" title="[[%ticket_like]]"><i
                            class="glyphicon glyphicon-arrow-up"></i></span>
                <span class="vote minus[[+voted_minus]]" title="[[%ticket_dislike]]"><i
                            class="glyphicon glyphicon-arrow-down"></i></span>
            </span>
        </div>
        <div class="ticket-comment-text">
            [[+text]]
        </div>
        <div class="ticket-comment-files">
            [[!commentFiles? &parent=`[[+id]]`]]
        </div>
    </div>

    <a href="[[~[[+section.id]]]]" class="ticket-comment-section"><i class="glyphicon glyphicon-folder-open"></i>
        [[+section.pagetitle]]</a> &rarr;
    <a href="[[~[[+ticket.id]]]]" class="ticket-comment-ticket">[[+ticket.pagetitle]]</a> &nbsp;
    <span class="ticket-comment-comments"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</span>
</div>
<!--tickets_comment_was_edited <span class="ticket-comment-edited">([[%ticket_comment_was_edited]])</span>-->
<!--tickets_can_vote  active-->
<!--tickets_cant_vote  inactive-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_guest  ticket-comment-guest-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  '30ea7dc387307c1c8d2675027f1bec5e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.list.row',
    ),
    'object' => 
    array (
      'id' => 42,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.list.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '        <div class="lothold__card tickets-row">
          <a class="lothold__card-user" href="[[~2]]?user=[[+createdby]]">
            <img
              class="lothold__card-userImg"
              src="[[+photo]]"
              alt="[[+fullname]]"
            />
            <h3 class="lothold__card-userName">[[+fullname]]</h3>
          </a>
          <a class="lothold__card-gotofull" href="[[~[[+id]]]]">
            <img class="lothold__card-img" src="
[[!pdoResources?
	&class=`TicketFile`
	&where=`{"parent":[[+id]]}`
	&sortby=`rank`
	&sortdir=`ASC`
&limit=`1`
&tpl=`thumbUrl`
]]
" alt="[[+pagetitle]]" />
            <h2 class="lothold__card-ttl">[[+pagetitle]]</h2>
            <p class="lothold__card-txt">
                [[+introtext]]
            </p>
            <div class="lothold__card-sts">
              <div class="lothold__card-stsOfrs">
                <img
                  class="lothold__card-stsOfrsIcon"
                  src="assets/images/icons/logo_s.svg"
                />
                <p class="lothold__card-stsOfrsTxt">[[+comments]] [[+comments:units=`предложение|предложения|предложений`]]</p>
              </div>
              <p class="lothold__card-stsTime">Осталось: [[+unpub_date:date=`%Y/%m/%d %H:%M:%S`]]</p>
            </div>
          </a>
        </div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_list_row.tpl',
      'content' => '        <div class="lothold__card tickets-row">
          <a class="lothold__card-user" href="[[~2]]?user=[[+createdby]]">
            <img
              class="lothold__card-userImg"
              src="[[+photo]]"
              alt="[[+fullname]]"
            />
            <h3 class="lothold__card-userName">[[+fullname]]</h3>
          </a>
          <a class="lothold__card-gotofull" href="[[~[[+id]]]]">
            <img class="lothold__card-img" src="
[[!pdoResources?
	&class=`TicketFile`
	&where=`{"parent":[[+id]]}`
	&sortby=`rank`
	&sortdir=`ASC`
&limit=`1`
&tpl=`thumbUrl`
]]
" alt="[[+pagetitle]]" />
            <h2 class="lothold__card-ttl">[[+pagetitle]]</h2>
            <p class="lothold__card-txt">
                [[+introtext]]
            </p>
            <div class="lothold__card-sts">
              <div class="lothold__card-stsOfrs">
                <img
                  class="lothold__card-stsOfrsIcon"
                  src="assets/images/icons/logo_s.svg"
                />
                <p class="lothold__card-stsOfrsTxt">[[+comments]] [[+comments:units=`предложение|предложения|предложений`]]</p>
              </div>
              <p class="lothold__card-stsTime">Осталось: [[+unpub_date:date=`%Y/%m/%d %H:%M:%S`]]</p>
            </div>
          </a>
        </div>',
    ),
  ),
  '221cf54422608536112989e20cb03838' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.sections.row',
    ),
    'object' => 
    array (
      'id' => 43,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.sections.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<div class="section-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
    <div class="content">
        [[+introtext]]
    </div>
    <div class="section-meta row">
        <div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
        <div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
        <div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
    </div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_sections_row.tpl',
      'content' => '<div class="section-row">
    <h3 class="title"><a href="[[~[[+id]]]]">[[+pagetitle]]</a></h3>
    <div class="content">
        [[+introtext]]
    </div>
    <div class="section-meta row">
        <div class="col-md-1"><i class="glyphicon glyphicon-th-list"></i> [[+tickets]]</div>
        <div class="col-md-1"><i class="glyphicon glyphicon-eye-open"></i> [[+views]]</div>
        <div class="col-md-1"><i class="glyphicon glyphicon-comment"></i> [[+comments]]</div>
    </div>
</div>',
    ),
  ),
  'eaf3032537506c3825a2b8ca88cd14f4' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.sections.wrapper',
    ),
    'object' => 
    array (
      'id' => 44,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.sections.wrapper',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
    <label for="tickets-subscribe" class="checkbox">
        <input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]"
               [[+subscribed:notempty=`checked`]]/> [[%tickets_section_notify]]
    </label>
</span>
`:else=``]]

<div class="tickets-list">
    [[+output]]
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_sections_wrapper.tpl',
      'content' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="tickets-subscribe pull-right">
    <label for="tickets-subscribe" class="checkbox">
        <input type="checkbox" name="" id="tickets-subscribe" value="1" data-id="[[*id]]"
               [[+subscribed:notempty=`checked`]]/> [[%tickets_section_notify]]
    </label>
</span>
`:else=``]]

<div class="tickets-list">
    [[+output]]
</div>',
    ),
  ),
  '921024b93d1f3b69148f5051d3e44d93' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.meta',
    ),
    'object' => 
    array (
      'id' => 45,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.meta',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<section class="thelot"  data-id="[[+id]]">
  <div class="thelot__main">
    [[+has_files]]<br><br>
    <div class="thelot__main-sts">
      <div class="thelot__main-stsOfrs">
        <img src="[[!++site_url]]assets/images/icons/logo_s.svg" alt="" />
        <p>[[+comments]] [[+comments:units=`предложение|предложения|предложений`]]</p>
      </div>
      <p class="thelot__main-stsTime">Осталось: [[+unpub_date:date=`%Y/%m/%d %H:%M:%S`]]</p>
    </div>
   


<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<img class="thelot__main-img" src="[[!pdoResources? &class=`TicketFile`
    &where=`{"parent":[[*id]]}` &sortby=`rank` &sortdir=`ASC` &limit=`1`
    &tpl=`fileUrl` ]]" alt="[[*content]]" />
    [[+files]]
-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_meta.tpl',
      'content' => '<section class="thelot"  data-id="[[+id]]">
  <div class="thelot__main">
    [[+has_files]]<br><br>
    <div class="thelot__main-sts">
      <div class="thelot__main-stsOfrs">
        <img src="[[!++site_url]]assets/images/icons/logo_s.svg" alt="" />
        <p>[[+comments]] [[+comments:units=`предложение|предложения|предложений`]]</p>
      </div>
      <p class="thelot__main-stsTime">Осталось: [[+unpub_date:date=`%Y/%m/%d %H:%M:%S`]]</p>
    </div>
   


<!--tickets_can_vote <span class="vote rating" title="[[%ticket_refrain]]"><i class="glyphicon glyphicon-minus"></i></span>-->
<!--tickets_cant_vote <span class="rating[[+rating_positive]][[+rating_negative]]" title="[[%ticket_rating_total]] [[+rating_total]]: ↑[[+rating_plus]] [[%ticket_rating_and]] ↓[[+rating_minus]]">[[+rating]]</span>-->
<!--tickets_active  active-->
<!--tickets_inactive  inactive-->
<!--tickets_voted_plus  voted-->
<!--tickets_voted_minus  voted-->
<!--tickets_rating_positive  positive-->
<!--tickets_rating_negative  negative-->
<!--tickets_has_files
<img class="thelot__main-img" src="[[!pdoResources? &class=`TicketFile`
    &where=`{"parent":[[*id]]}` &sortby=`rank` &sortdir=`ASC` &limit=`1`
    &tpl=`fileUrl` ]]" alt="[[*content]]" />
    [[+files]]
-->
<!--tickets_can_star  active-->
<!--tickets_stared <i class="glyphicon glyphicon-star stared star"></i>-->
<!--tickets_unstared <i class="glyphicon glyphicon-star unstared star"></i>-->',
    ),
  ),
  '0f1ebcd1f84a4fc39567f692940fc3c2' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.meta.file',
    ),
    'object' => 
    array (
      'id' => 46,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.meta.file',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<li style="width:80px; height:80px; overflow:hidden; border-radius:16px; list-style:none; display:inline-block; text-align:center; margin-right:16px;">
    <img src="[[+thumb]]" height="80px">
    <a href="[[+url]]" target="_blank">[[+name]]</a>
</li>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_meta_file.tpl',
      'content' => '<li style="width:80px; height:80px; overflow:hidden; border-radius:16px; list-style:none; display:inline-block; text-align:center; margin-right:16px;">
    <img src="[[+thumb]]" height="80px">
    <a href="[[+url]]" target="_blank">[[+name]]</a>
</li>',
    ),
  ),
  '3908809e1e76c93d317e70da7f3a4c63' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.author.subscribe',
    ),
    'object' => 
    array (
      'id' => 47,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.author.subscribe',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="author-subscribe">
    <label class="checkbox">
        <input type="checkbox" name="" id="tickets-author-subscribe" value="1" data-id="[[+author_id]]"
               [[+subscribed:notempty=`checked`]]/> [[%tickets_author_notify]]
    </label>
</span>
`:else=``]]',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.ticket_author_subscribe.tpl',
      'content' => '[[+modx.user.id:isloggedin:is=`1`:then=`
<span class="author-subscribe">
    <label class="checkbox">
        <input type="checkbox" name="" id="tickets-author-subscribe" value="1" data-id="[[+author_id]]"
               [[+subscribed:notempty=`checked`]]/> [[%tickets_author_notify]]
    </label>
</span>
`:else=``]]',
    ),
  ),
  '3677002c9ba50f225fb1fd21f1f74a8e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.Tickets.author.email.subscription',
    ),
    'object' => 
    array (
      'id' => 48,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.Tickets.author.email.subscription',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '[[%ticket_email_subscribed_author?
&id=`[[+id]]`
&fullname=`[[+user.fullname]]`
&section=`[[+section.id]]`
&section_title=`[[+section.pagetitle]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/chunks/chunk.author_email_subscription.tpl',
      'content' => '[[%ticket_email_subscribed_author?
&id=`[[+id]]`
&fullname=`[[+user.fullname]]`
&section=`[[+section.id]]`
&section_title=`[[+section.pagetitle]]`
&pagetitle=`[[+pagetitle]]`
]]

<pre style="background-color:#efefef;">[[+introtext]]</pre>
<br/><br/>

<a href="[[~[[+id]]?scheme=`full`]]">[[%ticket_email_view]]</a>',
    ),
  ),
  'db1b2fc2b66e319059027646ad62ca32' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketForm',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketForm',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

if (!$Tickets->authenticated) {
    return $modx->lexicon(\'ticket_err_no_auth\');
}

$tplSectionRow = $modx->getOption(\'tplSectionRow\', $scriptProperties, \'tpl.Tickets.sections.row\');
$tplFormCreate = $modx->getOption(\'tplFormCreate\', $scriptProperties, \'tpl.Tickets.form.create\');
$tplFormUpdate = $modx->getOption(\'tplFormUpdate\', $scriptProperties, \'tpl.Tickets.form.update\');
$tplFiles = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\',
    true);
$allowDelete = $modx->getOption(\'allowDelete\', $scriptProperties);
if (empty($source)) {
    $source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null,
        $modx->getOption(\'default_media_source\'));
}
$tid = !empty($_REQUEST[\'tid\'])
    ? (int)$_REQUEST[\'tid\']
    : (!empty($tid) ? (int)$tid : 0);
$parent = !empty($_REQUEST[\'parent\'])
    ? $_REQUEST[\'parent\']
    : \'\';
$data = array();

// Update of ticket
if (!empty($tid)) {
    $tplWrapper = $tplFormUpdate;
    /** @var Ticket $ticket */
    if ($ticket = $modx->getObject(\'Ticket\', array(\'class_key\' => \'Ticket\', \'id\' => $tid))) {
        if ($ticket->get(\'createdby\') != $modx->user->id && !$modx->hasPermission(\'edit_document\')) {
            return $modx->lexicon(\'ticket_err_wrong_user\');
        }
        $charset = $modx->getOption(\'modx_charset\');
        $allowedFields = array_map(\'trim\', explode(\',\', $scriptProperties[\'allowedFields\']));
        $allowedFields = array_unique(array_merge($allowedFields, array(\'parent\', \'pagetitle\', \'content\')));

        $fields = array_keys($modx->getFieldMeta(\'Ticket\'));
        foreach ($allowedFields as $field) {
            $value = in_array($field, $fields)
                ? $ticket->get($field)
                : $ticket->getTVValue($field);
            if (is_string($value)) {
                $value = html_entity_decode($value, ENT_QUOTES, $charset);
                $value = str_replace(
                    array(\'[^\', \'^]\', \'[\', \']\', \'{\', \'}\'),
                    array(\'&#91;^\', \'^&#93;\', \'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
                    $value
                );
                $value = htmlentities($value, ENT_QUOTES, $charset);
            }
            $data[$field] = $value;
        }
        $data[\'id\'] = $ticket->id;
        $data[\'published\'] = $ticket->published;
        $data[\'deleted\'] = $ticket->deleted;
        $data[\'allowDelete\'] = $allowDelete ? 1 : 0;
        if (empty($parent)) {
            $parent = $ticket->get(\'parent\');
        }
    } else {
        return $modx->lexicon(\'ticket_err_id\', array(\'id\' => $tid));
    }
} else {
    $tplWrapper = $tplFormCreate;
}

// Get available sections for ticket create
$data[\'sections\'] = \'\';
/** @var modProcessorResponse $response */
$response = $Tickets->runProcessor(\'web/section/getlist\', array(
    \'parents\' => $scriptProperties[\'parents\'],
    \'resources\' => $scriptProperties[\'resources\'],
    \'sortby\' => !empty($scriptProperties[\'sortby\'])
        ? $scriptProperties[\'sortby\']
        : \'pagetitle\',
    \'sortdir\' => !empty($scriptProperties[\'sortdir\'])
        ? $scriptProperties[\'sortdir\']
        : \'asc\',
    \'depth\' => isset($scriptProperties[\'depth\'])
        ? $scriptProperties[\'depth\']
        : 0,
    \'context\' => !empty($scriptProperties[\'context\'])
        ? $scriptProperties[\'context\']
        : $modx->context->key,
    \'limit\' => 0,
));
$response = json_decode($response->getResponse(), true);

if (!empty($response[\'results\'])) {
    $Tickets->config[\'sections\'] = array();
    foreach ($response[\'results\'] as $v) {
        $v[\'selected\'] = $parent == $v[\'id\'] || $parent == $v[\'alias\']
            ? \'selected\'
            : \'\';
        $data[\'sections\'] .= $Tickets->getChunk($tplSectionRow, $v);
        $Tickets->config[\'sections\'][] = $v[\'id\'];
    }
}

if (!empty($allowFiles)) {
    $q = $modx->newQuery(\'TicketFile\');
    $q->where(array(\'class\' => \'Ticket\'));
    if (!empty($tid)) {
        $q->andCondition(array(\'parent\' => $tid, \'createdby\' => $modx->user->id), null, 1);
    } else {
        $q->andCondition(array(\'parent\' => 0, \'createdby\' => $modx->user->id), null, 1);
    }
    $q->sortby(\'rank\', \'ASC\');
    $q->sortby(\'createdon\', \'ASC\');
    $collection = $modx->getIterator(\'TicketFile\', $q);
    $files = \'\';
    /** @var TicketFile $item */
    foreach ($collection as $item) {
        if ($item->get(\'deleted\') && !$item->get(\'parent\')) {
            $item->remove();
        } else {
            $item = $item->toArray();
            $item[\'size\'] = round($item[\'size\'] / 1024, 2);
            $item[\'new\'] = empty($item[\'parent\']);
            $tpl = $item[\'type\'] == \'image\'
                ? $tplImage
                : $tplFile;
            $files .= $Tickets->getChunk($tpl, $item);
        }
    }
    $data[\'files\'] = $Tickets->getChunk($tplFiles, array(
        \'files\' => $files,
    ));
    /** @var modMediaSource $source */
    if ($source = $modx->getObject(\'sources.modMediaSource\', array(\'id\' => $source))) {
        $properties = $source->getPropertyList();
        $config = array(
            \'size\' => !empty($properties[\'maxUploadSize\'])
                ? $properties[\'maxUploadSize\']
                : 3145728,
            \'height\' => !empty($properties[\'maxUploadHeight\'])
                ? $properties[\'maxUploadHeight\']
                : 1080,
            \'width\' => !empty($properties[\'maxUploadWidth\'])
                ? $properties[\'maxUploadWidth\']
                : 1920,
            \'extensions\' => !empty($properties[\'allowedFileTypes\'])
                ? $properties[\'allowedFileTypes\']
                : \'jpg,jpeg,png,gif\',
        );
        $modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . json_encode($config) . \';</script>\',
            true);
    }
    $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
    $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

    $lang = $modx->getOption(\'cultureKey\');
    if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
        $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
    }
}

$output = $Tickets->getChunk($tplWrapper, $data);
$key = md5(json_encode($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$output = str_ireplace(\'</form>\',
    "\\n<input type=\\"hidden\\" name=\\"form_key\\" value=\\"{$key}\\" class=\\"disable-sisyphus\\" />\\n</form>", $output);

return $output;',
      'locked' => 0,
      'properties' => 'a:20:{s:10:"allowFiles";a:7:{s:4:"name";s:10:"allowFiles";s:4:"desc";s:23:"tickets_prop_allowFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"allowedFields";a:7:{s:4:"name";s:13:"allowedFields";s:4:"desc";s:26:"tickets_prop_allowedFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"parent,pagetitle,content";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"bypassFields";a:7:{s:4:"name";s:12:"bypassFields";s:4:"desc";s:25:"tickets_prop_bypassFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"context";a:7:{s:4:"name";s:7:"context";s:4:"desc";s:29:"tickets_prop_sections_context";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:29:"tickets_prop_sections_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:19:"redirectUnpublished";a:7:{s:4:"name";s:19:"redirectUnpublished";s:4:"desc";s:32:"tickets_prop_redirectUnpublished";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:27:"tickets_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"parent,pagetitle,content";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:31:"tickets_prop_sections_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:28:"tickets_prop_sections_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"pagetitle";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:29:"tickets_prop_sections_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"source";a:7:{s:4:"name";s:6:"source";s:4:"desc";s:19:"tickets_prop_source";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:20:"tickets_prop_tplFile";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.Tickets.form.file";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tplFiles";a:7:{s:4:"name";s:8:"tplFiles";s:4:"desc";s:21:"tickets_prop_tplFiles";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.Tickets.form.files";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplFormCreate";a:7:{s:4:"name";s:13:"tplFormCreate";s:4:"desc";s:26:"tickets_prop_tplFormCreate";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.Tickets.form.create";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplFormUpdate";a:7:{s:4:"name";s:13:"tplFormUpdate";s:4:"desc";s:26:"tickets_prop_tplFormUpdate";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.Tickets.form.update";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tplImage";a:7:{s:4:"name";s:8:"tplImage";s:4:"desc";s:21:"tickets_prop_tplImage";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.Tickets.form.image";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"tplPreview";a:7:{s:4:"name";s:10:"tplPreview";s:4:"desc";s:23:"tickets_prop_tplPreview";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.form.preview";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"tplSectionRow";a:7:{s:4:"name";s:13:"tplSectionRow";s:4:"desc";s:26:"tickets_prop_tplSectionRow";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:69:"@INLINE <option value="[[+id]]" [[+selected]]>[[+pagetitle]]</option>";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplTicketEmailBcc";a:7:{s:4:"name";s:17:"tplTicketEmailBcc";s:4:"desc";s:30:"tickets_prop_tplTicketEmailBcc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.ticket.email.bcc";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:26:"tplTicketEmailSubscription";a:7:{s:4:"name";s:26:"tplTicketEmailSubscription";s:4:"desc";s:39:"tickets_prop_tplTicketEmailSubscription";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:37:"tpl.Tickets.ticket.email.subscription";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_form.php',
      'content' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

if (!$Tickets->authenticated) {
    return $modx->lexicon(\'ticket_err_no_auth\');
}

$tplSectionRow = $modx->getOption(\'tplSectionRow\', $scriptProperties, \'tpl.Tickets.sections.row\');
$tplFormCreate = $modx->getOption(\'tplFormCreate\', $scriptProperties, \'tpl.Tickets.form.create\');
$tplFormUpdate = $modx->getOption(\'tplFormUpdate\', $scriptProperties, \'tpl.Tickets.form.update\');
$tplFiles = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\',
    true);
$allowDelete = $modx->getOption(\'allowDelete\', $scriptProperties);
if (empty($source)) {
    $source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null,
        $modx->getOption(\'default_media_source\'));
}
$tid = !empty($_REQUEST[\'tid\'])
    ? (int)$_REQUEST[\'tid\']
    : (!empty($tid) ? (int)$tid : 0);
$parent = !empty($_REQUEST[\'parent\'])
    ? $_REQUEST[\'parent\']
    : \'\';
$data = array();

// Update of ticket
if (!empty($tid)) {
    $tplWrapper = $tplFormUpdate;
    /** @var Ticket $ticket */
    if ($ticket = $modx->getObject(\'Ticket\', array(\'class_key\' => \'Ticket\', \'id\' => $tid))) {
        if ($ticket->get(\'createdby\') != $modx->user->id && !$modx->hasPermission(\'edit_document\')) {
            return $modx->lexicon(\'ticket_err_wrong_user\');
        }
        $charset = $modx->getOption(\'modx_charset\');
        $allowedFields = array_map(\'trim\', explode(\',\', $scriptProperties[\'allowedFields\']));
        $allowedFields = array_unique(array_merge($allowedFields, array(\'parent\', \'pagetitle\', \'content\')));

        $fields = array_keys($modx->getFieldMeta(\'Ticket\'));
        foreach ($allowedFields as $field) {
            $value = in_array($field, $fields)
                ? $ticket->get($field)
                : $ticket->getTVValue($field);
            if (is_string($value)) {
                $value = html_entity_decode($value, ENT_QUOTES, $charset);
                $value = str_replace(
                    array(\'[^\', \'^]\', \'[\', \']\', \'{\', \'}\'),
                    array(\'&#91;^\', \'^&#93;\', \'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
                    $value
                );
                $value = htmlentities($value, ENT_QUOTES, $charset);
            }
            $data[$field] = $value;
        }
        $data[\'id\'] = $ticket->id;
        $data[\'published\'] = $ticket->published;
        $data[\'deleted\'] = $ticket->deleted;
        $data[\'allowDelete\'] = $allowDelete ? 1 : 0;
        if (empty($parent)) {
            $parent = $ticket->get(\'parent\');
        }
    } else {
        return $modx->lexicon(\'ticket_err_id\', array(\'id\' => $tid));
    }
} else {
    $tplWrapper = $tplFormCreate;
}

// Get available sections for ticket create
$data[\'sections\'] = \'\';
/** @var modProcessorResponse $response */
$response = $Tickets->runProcessor(\'web/section/getlist\', array(
    \'parents\' => $scriptProperties[\'parents\'],
    \'resources\' => $scriptProperties[\'resources\'],
    \'sortby\' => !empty($scriptProperties[\'sortby\'])
        ? $scriptProperties[\'sortby\']
        : \'pagetitle\',
    \'sortdir\' => !empty($scriptProperties[\'sortdir\'])
        ? $scriptProperties[\'sortdir\']
        : \'asc\',
    \'depth\' => isset($scriptProperties[\'depth\'])
        ? $scriptProperties[\'depth\']
        : 0,
    \'context\' => !empty($scriptProperties[\'context\'])
        ? $scriptProperties[\'context\']
        : $modx->context->key,
    \'limit\' => 0,
));
$response = json_decode($response->getResponse(), true);

if (!empty($response[\'results\'])) {
    $Tickets->config[\'sections\'] = array();
    foreach ($response[\'results\'] as $v) {
        $v[\'selected\'] = $parent == $v[\'id\'] || $parent == $v[\'alias\']
            ? \'selected\'
            : \'\';
        $data[\'sections\'] .= $Tickets->getChunk($tplSectionRow, $v);
        $Tickets->config[\'sections\'][] = $v[\'id\'];
    }
}

if (!empty($allowFiles)) {
    $q = $modx->newQuery(\'TicketFile\');
    $q->where(array(\'class\' => \'Ticket\'));
    if (!empty($tid)) {
        $q->andCondition(array(\'parent\' => $tid, \'createdby\' => $modx->user->id), null, 1);
    } else {
        $q->andCondition(array(\'parent\' => 0, \'createdby\' => $modx->user->id), null, 1);
    }
    $q->sortby(\'rank\', \'ASC\');
    $q->sortby(\'createdon\', \'ASC\');
    $collection = $modx->getIterator(\'TicketFile\', $q);
    $files = \'\';
    /** @var TicketFile $item */
    foreach ($collection as $item) {
        if ($item->get(\'deleted\') && !$item->get(\'parent\')) {
            $item->remove();
        } else {
            $item = $item->toArray();
            $item[\'size\'] = round($item[\'size\'] / 1024, 2);
            $item[\'new\'] = empty($item[\'parent\']);
            $tpl = $item[\'type\'] == \'image\'
                ? $tplImage
                : $tplFile;
            $files .= $Tickets->getChunk($tpl, $item);
        }
    }
    $data[\'files\'] = $Tickets->getChunk($tplFiles, array(
        \'files\' => $files,
    ));
    /** @var modMediaSource $source */
    if ($source = $modx->getObject(\'sources.modMediaSource\', array(\'id\' => $source))) {
        $properties = $source->getPropertyList();
        $config = array(
            \'size\' => !empty($properties[\'maxUploadSize\'])
                ? $properties[\'maxUploadSize\']
                : 3145728,
            \'height\' => !empty($properties[\'maxUploadHeight\'])
                ? $properties[\'maxUploadHeight\']
                : 1080,
            \'width\' => !empty($properties[\'maxUploadWidth\'])
                ? $properties[\'maxUploadWidth\']
                : 1920,
            \'extensions\' => !empty($properties[\'allowedFileTypes\'])
                ? $properties[\'allowedFileTypes\']
                : \'jpg,jpeg,png,gif\',
        );
        $modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . json_encode($config) . \';</script>\',
            true);
    }
    $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
    $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

    $lang = $modx->getOption(\'cultureKey\');
    if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
        $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
    }
}

$output = $Tickets->getChunk($tplWrapper, $data);
$key = md5(json_encode($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$output = str_ireplace(\'</form>\',
    "\\n<input type=\\"hidden\\" name=\\"form_key\\" value=\\"{$key}\\" class=\\"disable-sisyphus\\" />\\n</form>", $output);

return $output;',
    ),
  ),
  '14b513a44145548eee3a1464a45b7baa' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketComments',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketComments',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($thread)) {
    $scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id,
        true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$tplFiles = $Tickets->config[\'tplFiles\'] = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.comment.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\',
    true);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
    $thread = $modx->newObject(\'TicketThread\');
    $thread->fromArray(array(
        \'name\' => $scriptProperties[\'thread\'],
        \'resource\' => $modx->resource->get(\'id\'),
        \'createdby\' => $modx->user->id,
        \'createdon\' => date(\'Y-m-d H:i:s\'),
        \'subscribers\' => array($modx->resource->get(\'createdby\')),
    ));
} elseif ($thread->get(\'deleted\')) {
    return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
    $_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
    $thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$ratings = array();
/** @var Ticket $ticket */
if ($ticket = $thread->getOne(\'Ticket\')) {
    /** @var TicketsSection $section */
    if ($section = $ticket->getOne(\'Section\')) {
        $ratings = $section->getProperties(\'ratings\');
    }
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
    $where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
    \'Thread\' => array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\',
    ),
);
$leftJoin = array(
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id,
    );
}
// Fields to select
$select = array(
    \'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) .
        \', `parent` as `new_parent`\',
    \'Thread\' => \'`Thread`.`resource`\',
    \'User\' => \'`User`.`username`\',
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'),
            true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => $class . \'.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => $class . \'.id\',
    \'limit\' => 0,
    \'fastMode\' => true,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
    $tmp = array();
    $i = 1;
    foreach ($rows as $row) {
        $row[\'ratings\'] = $ratings;
        $row[\'idx\'] = $i++;
        $tmp[$row[\'id\']] = $row;
    }
    $rows = $thread->buildTree($tmp, $depth);
    unset($tmp, $i);

    if (!empty($formBefore)) {
        $rows = array_reverse($rows);
    }

    $tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
        ? $tplCommentAuth
        : $tplCommentGuest;
    foreach ($rows as $row) {
        $output[] = $Tickets->templateNode($row, $tpl);
    }

    $pdoFetch->addTime(\'Returning processed chunks\');
    $output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
    \'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
    \'comments\' => $output,
    \'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);

if (!empty($allowFiles)) {
    if ($Tickets->authenticated) {
        if (empty($source)) {
            $source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null,
                $modx->getOption(\'default_media_source\'));
        }

        $pls[\'files\'] = $Tickets->getFileComment();

        /** @var modMediaSource $source */
        if ($source = $modx->getObject(\'sources.modMediaSource\', array(\'id\' => $source))) {
            $properties = $source->getPropertyList();
            $config = array(
                \'size\' => !empty($properties[\'maxUploadSize\'])
                    ? $properties[\'maxUploadSize\']
                    : 3145728,
                \'height\' => !empty($properties[\'maxUploadHeight\'])
                    ? $properties[\'maxUploadHeight\']
                    : 1080,
                \'width\' => !empty($properties[\'maxUploadWidth\'])
                    ? $properties[\'maxUploadWidth\']
                    : 1920,
                \'extensions\' => !empty($properties[\'allowedFileTypes\'])
                    ? $properties[\'allowedFileTypes\']
                    : \'jpg,jpeg,png,gif\',
            );
            $modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . json_encode($config) . \';</script>\',
                true);
        }
        $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
        $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

        $lang = $modx->getOption(\'cultureKey\');
        if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
            $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
        }
    }
    else {
        $pls[\'allowFiles\'] = 1;
    }
}

$key = md5(json_encode($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$pls[\'formkey\'] = $key;

if (!$Tickets->authenticated && empty($allowGuest)) {
    $form = $pdoFetch->getChunk($tplLoginToComment);
} elseif (!$Tickets->authenticated) {
    $pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
    $pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
    if (!empty($enableCaptcha)) {
        $tmp = $Tickets->getCaptcha();
        $pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
    }
    $form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
} else {
    $form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
    ? $modx->lexicon(\'ticket_thread_err_closed\')
    : $form;
$output = !empty($formBefore)
    ? $commentForm . $commentsThread
    : $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\',
    true);

// Return output
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    if (!empty($separatePlaceholder)) {
        $modx->setPlaceholder($toPlaceholder.\'_form\', $commentForm);
        $modx->setPlaceholder($toPlaceholder.\'_thread\', $commentsThread);
    }
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => 'a:29:{s:10:"allowGuest";a:7:{s:4:"name";s:10:"allowGuest";s:4:"desc";s:23:"tickets_prop_allowGuest";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"allowGuestEdit";a:7:{s:4:"name";s:14:"allowGuestEdit";s:4:"desc";s:27:"tickets_prop_allowGuestEdit";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:16:"allowGuestEmails";a:7:{s:4:"name";s:16:"allowGuestEmails";s:4:"desc";s:29:"tickets_prop_allowGuestEmails";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"autoPublish";a:7:{s:4:"name";s:11:"autoPublish";s:4:"desc";s:24:"tickets_prop_autoPublish";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:16:"autoPublishGuest";a:7:{s:4:"name";s:16:"autoPublishGuest";s:4:"desc";s:29:"tickets_prop_autoPublishGuest";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:26:"tickets_prop_commentsDepth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"enableCaptcha";a:7:{s:4:"name";s:13:"enableCaptcha";s:4:"desc";s:26:"tickets_prop_enableCaptcha";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"formBefore";a:7:{s:4:"name";s:10:"formBefore";s:4:"desc";s:23:"tickets_prop_formBefore";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:25:"tickets_prop_gravatarIcon";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"mm";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:25:"tickets_prop_gravatarSize";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";s:2:"24";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"gravatarUrl";a:7:{s:4:"name";s:11:"gravatarUrl";s:4:"desc";s:24:"tickets_prop_gravatarUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:32:"https://www.gravatar.com/avatar/";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"maxCaptcha";a:7:{s:4:"name";s:10:"maxCaptcha";s:4:"desc";s:23:"tickets_prop_maxCaptcha";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"minCaptcha";a:7:{s:4:"name";s:10:"minCaptcha";s:4:"desc";s:23:"tickets_prop_minCaptcha";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:27:"tickets_prop_requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:10:"name,email";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:19:"tickets_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"threadUrl";a:7:{s:4:"name";s:9:"threadUrl";s:4:"desc";s:22:"tickets_prop_threadUrl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"tplCommentAuth";a:7:{s:4:"name";s:14:"tplCommentAuth";s:4:"desc";s:27:"tickets_prop_tplCommentAuth";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.comment.one.auth";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplCommentDeleted";a:7:{s:4:"name";s:17:"tplCommentDeleted";s:4:"desc";s:30:"tickets_prop_tplCommentDeleted";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.one.deleted";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:18:"tplCommentEmailBcc";a:7:{s:4:"name";s:18:"tplCommentEmailBcc";s:4:"desc";s:31:"tickets_prop_tplCommentEmailBcc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"tpl.Tickets.comment.email.bcc";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:20:"tplCommentEmailOwner";a:7:{s:4:"name";s:20:"tplCommentEmailOwner";s:4:"desc";s:33:"tickets_prop_tplCommentEmailOwner";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.email.owner";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:20:"tplCommentEmailReply";a:7:{s:4:"name";s:20:"tplCommentEmailReply";s:4:"desc";s:33:"tickets_prop_tplCommentEmailReply";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.email.reply";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:27:"tplCommentEmailSubscription";a:7:{s:4:"name";s:27:"tplCommentEmailSubscription";s:4:"desc";s:40:"tickets_prop_tplCommentEmailSubscription";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:38:"tpl.Tickets.comment.email.subscription";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:26:"tplCommentEmailUnpublished";a:7:{s:4:"name";s:26:"tplCommentEmailUnpublished";s:4:"desc";s:39:"tickets_prop_tplCommentEmailUnpublished";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:37:"tpl.Tickets.comment.email.unpublished";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"tplCommentForm";a:7:{s:4:"name";s:14:"tplCommentForm";s:4:"desc";s:27:"tickets_prop_tplCommentForm";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.comment.form";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:19:"tplCommentFormGuest";a:7:{s:4:"name";s:19:"tplCommentFormGuest";s:4:"desc";s:32:"tickets_prop_tplCommentFormGuest";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.Tickets.comment.form.guest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"tplCommentGuest";a:7:{s:4:"name";s:15:"tplCommentGuest";s:4:"desc";s:28:"tickets_prop_tplCommentGuest";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:29:"tpl.Tickets.comment.one.guest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"tplComments";a:7:{s:4:"name";s:11:"tplComments";s:4:"desc";s:24:"tickets_prop_tplComments";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:27:"tpl.Tickets.comment.wrapper";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplLoginToComment";a:7:{s:4:"name";s:17:"tplLoginToComment";s:4:"desc";s:30:"tickets_prop_tplLoginToComment";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:25:"tpl.Tickets.comment.login";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.comments.php',
      'content' => '/** @var array $scriptProperties */
if (empty($thread)) {
    $scriptProperties[\'thread\'] = $modx->getOption(\'thread\', $scriptProperties, \'resource-\' . $modx->resource->id,
        true);
}
$scriptProperties[\'resource\'] = $modx->resource->get(\'id\');
$scriptProperties[\'snippetPrepareComment\'] = $modx->getOption(\'tickets.snippet_prepare_comment\');
$scriptProperties[\'commentEditTime\'] = $modx->getOption(\'tickets.comment_edit_time\', null, 180);

$depth = $modx->getOption(\'depth\', $scriptProperties, 0);
$tplComments = $modx->getOption(\'tplComments\', $scriptProperties, \'tpl.Tickets.comment.wrapper\');
$tplCommentForm = $modx->getOption(\'tplCommentForm\', $scriptProperties, \'tpl.Tickets.comment.form\');
$tplCommentFormGuest = $modx->getOption(\'tplCommentFormGuest\', $scriptProperties, \'tpl.Tickets.comment.form.guest\');
$tplCommentAuth = $modx->getOption(\'tplCommentAuth\', $scriptProperties, \'tpl.Tickets.comment.one.auth\');
$tplCommentGuest = $modx->getOption(\'tplCommentGuest\', $scriptProperties, \'tpl.Tickets.comment.one.guest\');
$tplLoginToComment = $modx->getOption(\'tplLoginToComment\', $scriptProperties, \'tpl.Tickets.comment.login\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$tplFiles = $Tickets->config[\'tplFiles\'] = $modx->getOption(\'tplFiles\', $scriptProperties, \'tpl.Tickets.comment.form.files\');
$tplFile = $Tickets->config[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl.Tickets.form.file\', true);
$tplImage = $Tickets->config[\'tplImage\'] = $modx->getOption(\'tplImage\', $scriptProperties, \'tpl.Tickets.form.image\',
    true);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

// Prepare Ticket Thread
/** @var TicketThread $thread */
if (!$thread = $modx->getObject(\'TicketThread\', array(\'name\' => $scriptProperties[\'thread\']))) {
    $thread = $modx->newObject(\'TicketThread\');
    $thread->fromArray(array(
        \'name\' => $scriptProperties[\'thread\'],
        \'resource\' => $modx->resource->get(\'id\'),
        \'createdby\' => $modx->user->id,
        \'createdon\' => date(\'Y-m-d H:i:s\'),
        \'subscribers\' => array($modx->resource->get(\'createdby\')),
    ));
} elseif ($thread->get(\'deleted\')) {
    return $modx->lexicon(\'ticket_thread_err_deleted\');
}
// Prepare session for guests
if (!empty($allowGuest) && !isset($_SESSION[\'TicketComments\'])) {
    $_SESSION[\'TicketComments\'] = array(\'name\' => \'\', \'email\' => \'\', \'ids\' => array());
}

// Migrate authors to subscription system
if (!is_array($thread->get(\'subscribers\'))) {
    $thread->set(\'subscribers\', array($modx->resource->get(\'createdby\')));
}
$thread->set(\'resource\', $modx->resource->get(\'id\'));
$thread->set(\'properties\', $scriptProperties);
$thread->save();

$ratings = array();
/** @var Ticket $ticket */
if ($ticket = $thread->getOne(\'Ticket\')) {
    /** @var TicketsSection $section */
    if ($section = $ticket->getOne(\'Section\')) {
        $ratings = $section->getProperties(\'ratings\');
    }
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
    $where[\'published\'] = 1;
}

// Joining tables
$innerJoin = array(
    \'Thread\' => array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`id` = `TicketComment`.`thread` AND `Thread`.`name` = "\' . $thread->get(\'name\') . \'"\',
    ),
);
$leftJoin = array(
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id,
    );
}
// Fields to select
$select = array(
    \'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true) .
        \', `parent` as `new_parent`\',
    \'Thread\' => \'`Thread`.`resource`\',
    \'User\' => \'`User`.`username`\',
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'),
            true) . \',`Profile`.`email` as `user_email`\',
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => $class . \'.id\',
    \'sortdir\' => \'ASC\',
    \'groupby\' => $class . \'.id\',
    \'limit\' => 0,
    \'fastMode\' => true,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = $commentsThread = null;
if (!empty($rows) && is_array($rows)) {
    $tmp = array();
    $i = 1;
    foreach ($rows as $row) {
        $row[\'ratings\'] = $ratings;
        $row[\'idx\'] = $i++;
        $tmp[$row[\'id\']] = $row;
    }
    $rows = $thread->buildTree($tmp, $depth);
    unset($tmp, $i);

    if (!empty($formBefore)) {
        $rows = array_reverse($rows);
    }

    $tpl = !$thread->get(\'closed\') && ($Tickets->authenticated || !empty($allowGuest))
        ? $tplCommentAuth
        : $tplCommentGuest;
    foreach ($rows as $row) {
        $output[] = $Tickets->templateNode($row, $tpl);
    }

    $pdoFetch->addTime(\'Returning processed chunks\');
    $output = implode($outputSeparator, $output);
}

$commentsThread = $pdoFetch->getChunk($tplComments, array(
    \'total\' => $modx->getPlaceholder($pdoFetch->config[\'totalVar\']),
    \'comments\' => $output,
    \'subscribed\' => $thread->isSubscribed(),
));

$pls = array(\'thread\' => $scriptProperties[\'thread\']);

if (!empty($allowFiles)) {
    if ($Tickets->authenticated) {
        if (empty($source)) {
            $source = $Tickets->config[\'source\'] = $modx->getOption(\'tickets.source_default\', null,
                $modx->getOption(\'default_media_source\'));
        }

        $pls[\'files\'] = $Tickets->getFileComment();

        /** @var modMediaSource $source */
        if ($source = $modx->getObject(\'sources.modMediaSource\', array(\'id\' => $source))) {
            $properties = $source->getPropertyList();
            $config = array(
                \'size\' => !empty($properties[\'maxUploadSize\'])
                    ? $properties[\'maxUploadSize\']
                    : 3145728,
                \'height\' => !empty($properties[\'maxUploadHeight\'])
                    ? $properties[\'maxUploadHeight\']
                    : 1080,
                \'width\' => !empty($properties[\'maxUploadWidth\'])
                    ? $properties[\'maxUploadWidth\']
                    : 1920,
                \'extensions\' => !empty($properties[\'allowedFileTypes\'])
                    ? $properties[\'allowedFileTypes\']
                    : \'jpg,jpeg,png,gif\',
            );
            $modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.source=\' . json_encode($config) . \';</script>\',
                true);
        }
        $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/plupload.full.min.js\');
        $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/files.js\');

        $lang = $modx->getOption(\'cultureKey\');
        if ($lang != \'en\' && file_exists($Tickets->config[\'jsPath\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\')) {
            $modx->regClientScript($Tickets->config[\'jsUrl\'] . \'web/lib/plupload/i18n/\' . $lang . \'.js\');
        }
    }
    else {
        $pls[\'allowFiles\'] = 1;
    }
}

$key = md5(json_encode($Tickets->config));
$_SESSION[\'TicketForm\'][$key] = $Tickets->config;
$pls[\'formkey\'] = $key;

if (!$Tickets->authenticated && empty($allowGuest)) {
    $form = $pdoFetch->getChunk($tplLoginToComment);
} elseif (!$Tickets->authenticated) {
    $pls[\'name\'] = $_SESSION[\'TicketComments\'][\'name\'];
    $pls[\'email\'] = $_SESSION[\'TicketComments\'][\'email\'];
    if (!empty($enableCaptcha)) {
        $tmp = $Tickets->getCaptcha();
        $pls[\'captcha\'] = $modx->lexicon(\'ticket_comment_captcha\', $tmp);
    }
    $form = $pdoFetch->getChunk($tplCommentFormGuest, $pls);
} else {
    $form = $pdoFetch->getChunk($tplCommentForm, $pls);
}

$commentForm = $thread->get(\'closed\')
    ? $modx->lexicon(\'ticket_thread_err_closed\')
    : $form;
$output = !empty($formBefore)
    ? $commentForm . $commentsThread
    : $commentsThread . $commentForm;

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="CommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

$modx->regClientStartupScript(\'<script type="text/javascript">TicketsConfig.formBefore = \' . (int)!empty($formBefore) . \';TicketsConfig.thread_depth = \' . (int)$depth . \';</script>\',
    true);

// Return output
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    if (!empty($separatePlaceholder)) {
        $modx->setPlaceholder($toPlaceholder.\'_form\', $commentForm);
        $modx->setPlaceholder($toPlaceholder.\'_thread\', $commentsThread);
    }
} else {
    return $output;
}',
    ),
  ),
  '964a7013599917ecab18d2aa793062f9' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketLatest',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketLatest',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (!empty($cacheKey) && $output = $modx->cacheManager->get(\'tickets/latest.\' . $cacheKey)) {
    return $output;
}

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($action)) {
    $action = \'comments\';
}
if ($action == \'tickets\' && $scriptProperties[\'tpl\'] == \'tpl.Tickets.comment.latest\') {
    $scriptProperties[\'tpl\'] = \'tpl.Tickets.ticket.latest\';
}
$action = strtolower($action);
$where = $action == \'tickets\'
    ? array(\'class_key\' => \'Ticket\')
    : array();

if (empty($showUnpublished)) {
    $where[\'Ticket.published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'Ticket.hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'Ticket.deleted\'] = 0;
}
if (!isset($cacheTime)) {
    $cacheTime = 1800;
}
if (!empty($user)) {
    $user = array_map(\'trim\', explode(\',\', $user));
    $user_id = $user_username = array();
    foreach ($user as $v) {
        if (is_numeric($v)) {
            $user_id[] = $v;
        } else {
            $user_username[] = $v;
        }
    }
    if (!empty($user_id) && !empty($user_username)) {
        $where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\',
                $user_username) . \'\\\'))\';
    } else {
        if (!empty($user_id)) {
            $where[\'User.id:IN\'] = $user_id;
        } else {
            if (!empty($user_username)) {
                $where[\'User.username:IN\'] = $user_username;
            }
        }
    }
}

// Filter by ids
if (!empty($resources)) {
    $resources = array_map(\'trim\', explode(\',\', $resources));
    $in = $out = array();
    foreach ($resources as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v < 0) {
            $out[] = abs($v);
        } else {
            $in[] = $v;
        }
    }
    if (!empty($in)) {
        $where[\'id:IN\'] = $in;
    }
    if (!empty($out)) {
        $where[\'id:NOT IN\'] = $out;
    }
} // Filter by parents
else {
    if (!empty($parents) && $parents > 0) {
        $pids = array_map(\'trim\', explode(\',\', $parents));
        $parents = $pids;
        if (!empty($depth) && $depth > 0) {
            foreach ($pids as $v) {
                if (!is_numeric($v)) {
                    continue;
                }
                $parents = array_merge($parents, $modx->getChildIds($v, $depth));
            }
        }
        if (!empty($parents)) {
            $where[\'Ticket.parent:IN\'] = $parents;
        }
    }
}

// Joining tables
if ($action == \'comments\') {
    $class = \'TicketComment\';

    $innerJoin = array();
    $innerJoin[\'Thread\'] = empty($user)
        ? array(
            \'class\' => \'TicketThread\',
            \'on\' => \'`TicketComment`.`id` = `Thread`.`comment_last` AND `Thread`.`deleted` = 0\',
        )
        : array(
            \'class\' => \'TicketThread\',
            \'on\' => \'`TicketComment`.`thread` = `Thread`.`id` AND `Thread`.`deleted` = 0\',
        );
    $innerJoin[\'Ticket\'] = array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\');

    $leftJoin = array(
        \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
        \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
        \'Profile\' => array(
            \'class\' => \'modUserProfile\',
            \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\',
        ),
    );

    $select = array(
        \'TicketComment\' => !empty($includeContent)
            ? $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true)
            : $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'text\', \'raw\'), true),
        \'Ticket\' => !empty($includeContent)
            ? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
            : $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
        \'Thread\' => \'`Thread`.`comments`\',
    );
    $groupby = empty($user)
        ? \'`Ticket`.`id`\'
        : \'`TicketComment`.`id`\';
    $where[\'TicketComment.deleted\'] = 0;
} elseif ($action == \'tickets\') {
    $class = \'Ticket\';

    $innerJoin = array();
    $leftJoin = array(
        \'Thread\' => array(
            \'class\' => \'TicketThread\',
            \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\',
        ),
        \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
        \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
        \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `Ticket`.`createdby`\'),
    );

    $select = array(
        \'Ticket\' => !empty($includeContent)
            ? $modx->getSelectColumns(\'Ticket\', \'Ticket\')
            : $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'\', array(\'content\'), true),
        \'Thread\' => \'`Thread`.`id` as `thread`, `Thread`.`comments`\',
    );
    $groupby = \'`Ticket`.`id`\';
} else {
    return \'Wrong action. You must use "ticket" or "comment".\';
}

// Fields to select
$select = array_merge($select, array(
    \'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
    \'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
));

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => \'createdon\',
    \'sortdir\' => \'DESC\',
    \'groupby\' => $groupby,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    foreach ($rows as $k => $row) {
        // Prepare row
        if ($class == \'Ticket\') {
            $row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
            $properties = is_string($row[\'properties\'])
                ? json_decode($row[\'properties\'], true)
                : $row[\'properties\'];
            if (empty($properties[\'process_tags\'])) {
                foreach ($row as $field => $value) {
                    $row[$field] = str_replace(
                        array(\'[\', \']\', \'`\', \'{\', \'}\'),
                        array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
                        $value
                    );
                }
            }
        } else {
            if (empty($row[\'createdby\'])) {
                $row[\'fullname\'] = $row[\'name\'];
                $row[\'guest\'] = 1;
            }
            $row[\'resource\'] = $row[\'ticket.id\'];
            $row = $Tickets->prepareComment($row);
        }

        // Processing chunk
        $row[\'idx\'] = $pdoFetch->idx++;
        $tpl = $pdoFetch->defineChunk($row);
        $output[] = !empty($tpl)
            ? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
            : $pdoFetch->getChunk(\'\', $row);
    }
    $pdoFetch->addTime(\'Returning processed chunks\');
}
if (empty($outputSeparator)) {
    $outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

if (!empty($cacheKey)) {
    $modx->cacheManager->set(\'tickets/latest.\' . $cacheKey, $output, $cacheTime);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="TicketLatestLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => 'a:23:{s:6:"action";a:7:{s:4:"name";s:6:"action";s:4:"desc";s:19:"tickets_prop_action";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:8:"Comments";s:5:"value";s:8:"comments";}i:1;a:2:{s:4:"text";s:7:"Tickets";s:5:"value";s:7:"tickets";}}s:5:"value";s:8:"comments";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:26:"tpl.Tickets.comment.latest";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:17:"tickets_prop_user";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"cacheKey";a:7:{s:4:"name";s:8:"cacheKey";s:4:"desc";s:21:"tickets_prop_cacheKey";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"cacheTime";a:7:{s:4:"name";s:9:"cacheTime";s:4:"desc";s:22:"tickets_prop_cacheTime";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:1800;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_latest.php',
      'content' => '/** @var array $scriptProperties */
if (!empty($cacheKey) && $output = $modx->cacheManager->get(\'tickets/latest.\' . $cacheKey)) {
    return $output;
}

/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($action)) {
    $action = \'comments\';
}
if ($action == \'tickets\' && $scriptProperties[\'tpl\'] == \'tpl.Tickets.comment.latest\') {
    $scriptProperties[\'tpl\'] = \'tpl.Tickets.ticket.latest\';
}
$action = strtolower($action);
$where = $action == \'tickets\'
    ? array(\'class_key\' => \'Ticket\')
    : array();

if (empty($showUnpublished)) {
    $where[\'Ticket.published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'Ticket.hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'Ticket.deleted\'] = 0;
}
if (!isset($cacheTime)) {
    $cacheTime = 1800;
}
if (!empty($user)) {
    $user = array_map(\'trim\', explode(\',\', $user));
    $user_id = $user_username = array();
    foreach ($user as $v) {
        if (is_numeric($v)) {
            $user_id[] = $v;
        } else {
            $user_username[] = $v;
        }
    }
    if (!empty($user_id) && !empty($user_username)) {
        $where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\',
                $user_username) . \'\\\'))\';
    } else {
        if (!empty($user_id)) {
            $where[\'User.id:IN\'] = $user_id;
        } else {
            if (!empty($user_username)) {
                $where[\'User.username:IN\'] = $user_username;
            }
        }
    }
}

// Filter by ids
if (!empty($resources)) {
    $resources = array_map(\'trim\', explode(\',\', $resources));
    $in = $out = array();
    foreach ($resources as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v < 0) {
            $out[] = abs($v);
        } else {
            $in[] = $v;
        }
    }
    if (!empty($in)) {
        $where[\'id:IN\'] = $in;
    }
    if (!empty($out)) {
        $where[\'id:NOT IN\'] = $out;
    }
} // Filter by parents
else {
    if (!empty($parents) && $parents > 0) {
        $pids = array_map(\'trim\', explode(\',\', $parents));
        $parents = $pids;
        if (!empty($depth) && $depth > 0) {
            foreach ($pids as $v) {
                if (!is_numeric($v)) {
                    continue;
                }
                $parents = array_merge($parents, $modx->getChildIds($v, $depth));
            }
        }
        if (!empty($parents)) {
            $where[\'Ticket.parent:IN\'] = $parents;
        }
    }
}

// Joining tables
if ($action == \'comments\') {
    $class = \'TicketComment\';

    $innerJoin = array();
    $innerJoin[\'Thread\'] = empty($user)
        ? array(
            \'class\' => \'TicketThread\',
            \'on\' => \'`TicketComment`.`id` = `Thread`.`comment_last` AND `Thread`.`deleted` = 0\',
        )
        : array(
            \'class\' => \'TicketThread\',
            \'on\' => \'`TicketComment`.`thread` = `Thread`.`id` AND `Thread`.`deleted` = 0\',
        );
    $innerJoin[\'Ticket\'] = array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\');

    $leftJoin = array(
        \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
        \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
        \'Profile\' => array(
            \'class\' => \'modUserProfile\',
            \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\',
        ),
    );

    $select = array(
        \'TicketComment\' => !empty($includeContent)
            ? $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true)
            : $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'text\', \'raw\'), true),
        \'Ticket\' => !empty($includeContent)
            ? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
            : $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
        \'Thread\' => \'`Thread`.`comments`\',
    );
    $groupby = empty($user)
        ? \'`Ticket`.`id`\'
        : \'`TicketComment`.`id`\';
    $where[\'TicketComment.deleted\'] = 0;
} elseif ($action == \'tickets\') {
    $class = \'Ticket\';

    $innerJoin = array();
    $leftJoin = array(
        \'Thread\' => array(
            \'class\' => \'TicketThread\',
            \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\',
        ),
        \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
        \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
        \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `Ticket`.`createdby`\'),
    );

    $select = array(
        \'Ticket\' => !empty($includeContent)
            ? $modx->getSelectColumns(\'Ticket\', \'Ticket\')
            : $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'\', array(\'content\'), true),
        \'Thread\' => \'`Thread`.`id` as `thread`, `Thread`.`comments`\',
    );
    $groupby = \'`Ticket`.`id`\';
} else {
    return \'Wrong action. You must use "ticket" or "comment".\';
}

// Fields to select
$select = array_merge($select, array(
    \'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
    \'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
));

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => \'createdon\',
    \'sortdir\' => \'DESC\',
    \'groupby\' => $groupby,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    foreach ($rows as $k => $row) {
        // Prepare row
        if ($class == \'Ticket\') {
            $row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
            $properties = is_string($row[\'properties\'])
                ? json_decode($row[\'properties\'], true)
                : $row[\'properties\'];
            if (empty($properties[\'process_tags\'])) {
                foreach ($row as $field => $value) {
                    $row[$field] = str_replace(
                        array(\'[\', \']\', \'`\', \'{\', \'}\'),
                        array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
                        $value
                    );
                }
            }
        } else {
            if (empty($row[\'createdby\'])) {
                $row[\'fullname\'] = $row[\'name\'];
                $row[\'guest\'] = 1;
            }
            $row[\'resource\'] = $row[\'ticket.id\'];
            $row = $Tickets->prepareComment($row);
        }

        // Processing chunk
        $row[\'idx\'] = $pdoFetch->idx++;
        $tpl = $pdoFetch->defineChunk($row);
        $output[] = !empty($tpl)
            ? $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\'])
            : $pdoFetch->getChunk(\'\', $row);
    }
    $pdoFetch->addTime(\'Returning processed chunks\');
}
if (empty($outputSeparator)) {
    $outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

if (!empty($cacheKey)) {
    $modx->cacheManager->set(\'tickets/latest.\' . $cacheKey, $output, $cacheTime);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="TicketLatestLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
    ),
  ),
  '375fe81e3ccd98e94077e26a3f8a009e' => 
  array (
    'criteria' => 
    array (
      'name' => 'TicketMeta',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'TicketMeta',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$scriptProperties[\'nestedChunkPrefix\'] = \'tickets_\';
/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {
    $id = $modx->resource->id;
}
/** @var Ticket|modResource $ticket */
if (!$ticket = $modx->getObject(\'modResource\', array(\'id\' => $id))) {
    return \'Could not load resource with id = \' . $id;
}

$class = $ticket instanceof Ticket
    ? \'Ticket\'
    : \'modResource\';

/** @var TicketTotal $total */
if ($class == \'Ticket\' && $total = $ticket->getOne(\'Total\')) {
    $total->fetchValues();
    $total->save();
}
$data = $ticket->toArray();
$data[\'date_ago\'] = $Tickets->dateFormat($data[\'createdon\']);

$vote = $pdoFetch->getObject(\'TicketVote\',
    array(
        \'id\' => $ticket->id,
        \'class\' => \'Ticket\',
        \'createdby\' => $modx->user->id,
    ),
    array(
        \'select\' => \'value\',
        \'sortby\' => \'id\',
    )
);
if (!empty($vote)) {
    $data[\'vote\'] = $vote[\'value\'];
}

$star = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id));
$data[\'stared\'] = !empty($star);
$data[\'unstared\'] = empty($star);

if ($class != \'Ticket\') {
    // Rating
    if (!$modx->user->id || $modx->user->id == $ticket->createdby) {
        $data[\'voted\'] = 0;
    } else {
        $q = $modx->newQuery(\'TicketVote\');
        $q->where(array(\'id\' => $ticket->id, \'createdby\' => $modx->user->id, \'class\' => \'Ticket\'));
        $q->select(\'`value`\');
        $tstart = microtime(true);
        if ($q->prepare() && $q->stmt->execute()) {
            $modx->startTime += microtime(true) - $tstart;
            $modx->executedQueries++;
            $voted = $q->stmt->fetchColumn();
            if ($voted > 0) {
                $voted = 1;
            } elseif ($voted < 0) {
                $voted = -1;
            }
            $data[\'voted\'] = $voted;
        }
    }
    $data[\'can_vote\'] = $data[\'voted\'] === false && $Tickets->authenticated && $modx->user->id != $ticket->createdby;
    $data = array_merge($ticket->getProperties(\'tickets\'), $data);
    if (!isset($data[\'rating\'])) {
        $data[\'rating\'] = $data[\'rating_total\'] = $data[\'rating_plus\'] = $data[\'rating_minus\'] = 0;
    }

    // Views
    $data[\'views\'] = $modx->getCount(\'TicketView\', array(\'parent\' => $ticket->id));

    // Comments
    $data[\'comments\'] = 0;
    $thread = empty($thread)
        ? \'resource-\' . $ticket->id
        : $thread;
    $q = $modx->newQuery(\'TicketThread\', array(\'name\' => $thread));
    $q->leftJoin(\'TicketComment\', \'TicketComment\',
        "TicketThread.id = TicketComment.thread AND TicketComment.published = 1"
    );
    $q->select(\'COUNT(`TicketComment`.`id`) as `comments`\');
    $tstart = microtime(true);
    if ($q->prepare() && $q->stmt->execute()) {
        $modx->startTime += microtime(true) - $tstart;
        $modx->executedQueries++;
        $data[\'comments\'] = (int)$q->stmt->fetchColumn();
    }

    // Stars
    $data[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\'));
}

if ($data[\'rating\'] > 0) {
    $data[\'rating\'] = \'+\' . $data[\'rating\'];
    $data[\'rating_positive\'] = 1;
} elseif ($data[\'rating\'] < 0) {
    $data[\'rating_negative\'] = 1;
}
$data[\'rating_total\'] = abs($data[\'rating_plus\']) + abs($data[\'rating_minus\']);

/** @var TicketsSection $section */
if ($section = $modx->getObject(\'TicketsSection\', array(\'id\' => $ticket->parent))) {
    $data = array_merge($data, $section->toArray(\'section.\'));
}
if (isset($data[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'])) {
    if ($data[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] !== \'\') {
        $max = strtotime($data[\'createdon\']) + ((float)$data[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] * 86400);
        if (time() > $max) {
            $data[\'cant_vote\'] = 1;
        }
    }
}
if (!isset($data[\'cant_vote\'])) {
    if (!$Tickets->authenticated || $modx->user->id == $ticket->createdby) {
        $data[\'cant_vote\'] = 1;

    } elseif (array_key_exists(\'vote\', $data)) {
        if ($data[\'vote\'] == \'\') {
            $data[\'can_vote\'] = 1;
        } elseif ($data[\'vote\'] > 0) {
            $data[\'voted_plus\'] = 1;
            $data[\'cant_vote\'] = 1;
        } elseif ($data[\'vote\'] < 0) {
            $data[\'voted_minus\'] = 1;
            $data[\'cant_vote\'] = 1;
        } else {
            $data[\'voted_none\'] = 1;
            $data[\'cant_vote\'] = 1;
        }
    } else {
        $data[\'can_vote\'] = 1;
    }
}

$data[\'active\'] = (int)!empty($data[\'can_vote\']);
$data[\'inactive\'] = (int)!empty($data[\'cant_vote\']);
$data[\'can_star\'] = $Tickets->authenticated;

if (!empty($getUser)) {
    $fields = $modx->getFieldMeta(\'modUserProfile\');
    $user = $pdoFetch->getObject(\'modUserProfile\', array(\'internalKey\' => $ticket->createdby), array(
        \'innerJoin\' => array(
            \'modUser\' => array(\'class\' => \'modUser\', \'on\' => \'modUserProfile.internalKey = modUser.id\'),
        ),
        \'select\' => array(
            \'modUserProfile\' => implode(\',\', array_keys($fields)),
            \'modUser\' => \'username\',
        ),
    ));
    if ($user) {
        $data = array_merge($data, $user);
    }
}

if (!empty($getFiles)) {
    $where = array(\'deleted\' => 0, \'class\' => \'Ticket\', \'parent\' => $ticket->id);
    $collection = $pdoFetch->getCollection(\'TicketFile\', $where, array(\'sortby\' => \'createdon\', \'sortdir\' => \'ASC\'));
    $data[\'files\'] = $content = \'\';
    if (!empty($unusedFiles)) {
        $content = $ticket->getContent();
    }
    foreach ($collection as $item) {
        if ($content && strpos($content, $item[\'url\']) !== false) {
            continue;
        }
        $item[\'size\'] = round($item[\'size\'] / 1024, 2);
        $data[\'files\'] .= !empty($tplFile)
            ? $Tickets->getChunk($tplFile, $item)
            : $Tickets->getChunk(\'\', $item);
    }
    $data[\'has_files\'] = !empty($data[\'files\']);
}
$data[\'id\'] = $ticket->get(\'id\');

return !empty($tpl)
    ? $Tickets->getChunk($tpl, $data)
    : $Tickets->getChunk(\'\', $data);',
      'locked' => 0,
      'properties' => 'a:6:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:21:"tickets_prop_meta_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:16:"tpl.Tickets.meta";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:25:"tickets_prop_meta_tplFile";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.Tickets.meta.file";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"getUser";a:7:{s:4:"name";s:7:"getUser";s:4:"desc";s:20:"tickets_prop_getUser";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"getFiles";a:7:{s:4:"name";s:8:"getFiles";s:4:"desc";s:21:"tickets_prop_getFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"unusedFiles";a:7:{s:4:"name";s:11:"unusedFiles";s:4:"desc";s:24:"tickets_prop_unusedFiles";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:19:"tickets_prop_thread";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.ticket_meta.php',
      'content' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

$scriptProperties[\'nestedChunkPrefix\'] = \'tickets_\';
/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (empty($id)) {
    $id = $modx->resource->id;
}
/** @var Ticket|modResource $ticket */
if (!$ticket = $modx->getObject(\'modResource\', array(\'id\' => $id))) {
    return \'Could not load resource with id = \' . $id;
}

$class = $ticket instanceof Ticket
    ? \'Ticket\'
    : \'modResource\';

/** @var TicketTotal $total */
if ($class == \'Ticket\' && $total = $ticket->getOne(\'Total\')) {
    $total->fetchValues();
    $total->save();
}
$data = $ticket->toArray();
$data[\'date_ago\'] = $Tickets->dateFormat($data[\'createdon\']);

$vote = $pdoFetch->getObject(\'TicketVote\',
    array(
        \'id\' => $ticket->id,
        \'class\' => \'Ticket\',
        \'createdby\' => $modx->user->id,
    ),
    array(
        \'select\' => \'value\',
        \'sortby\' => \'id\',
    )
);
if (!empty($vote)) {
    $data[\'vote\'] = $vote[\'value\'];
}

$star = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\', \'createdby\' => $modx->user->id));
$data[\'stared\'] = !empty($star);
$data[\'unstared\'] = empty($star);

if ($class != \'Ticket\') {
    // Rating
    if (!$modx->user->id || $modx->user->id == $ticket->createdby) {
        $data[\'voted\'] = 0;
    } else {
        $q = $modx->newQuery(\'TicketVote\');
        $q->where(array(\'id\' => $ticket->id, \'createdby\' => $modx->user->id, \'class\' => \'Ticket\'));
        $q->select(\'`value`\');
        $tstart = microtime(true);
        if ($q->prepare() && $q->stmt->execute()) {
            $modx->startTime += microtime(true) - $tstart;
            $modx->executedQueries++;
            $voted = $q->stmt->fetchColumn();
            if ($voted > 0) {
                $voted = 1;
            } elseif ($voted < 0) {
                $voted = -1;
            }
            $data[\'voted\'] = $voted;
        }
    }
    $data[\'can_vote\'] = $data[\'voted\'] === false && $Tickets->authenticated && $modx->user->id != $ticket->createdby;
    $data = array_merge($ticket->getProperties(\'tickets\'), $data);
    if (!isset($data[\'rating\'])) {
        $data[\'rating\'] = $data[\'rating_total\'] = $data[\'rating_plus\'] = $data[\'rating_minus\'] = 0;
    }

    // Views
    $data[\'views\'] = $modx->getCount(\'TicketView\', array(\'parent\' => $ticket->id));

    // Comments
    $data[\'comments\'] = 0;
    $thread = empty($thread)
        ? \'resource-\' . $ticket->id
        : $thread;
    $q = $modx->newQuery(\'TicketThread\', array(\'name\' => $thread));
    $q->leftJoin(\'TicketComment\', \'TicketComment\',
        "TicketThread.id = TicketComment.thread AND TicketComment.published = 1"
    );
    $q->select(\'COUNT(`TicketComment`.`id`) as `comments`\');
    $tstart = microtime(true);
    if ($q->prepare() && $q->stmt->execute()) {
        $modx->startTime += microtime(true) - $tstart;
        $modx->executedQueries++;
        $data[\'comments\'] = (int)$q->stmt->fetchColumn();
    }

    // Stars
    $data[\'stars\'] = $modx->getCount(\'TicketStar\', array(\'id\' => $ticket->id, \'class\' => \'Ticket\'));
}

if ($data[\'rating\'] > 0) {
    $data[\'rating\'] = \'+\' . $data[\'rating\'];
    $data[\'rating_positive\'] = 1;
} elseif ($data[\'rating\'] < 0) {
    $data[\'rating_negative\'] = 1;
}
$data[\'rating_total\'] = abs($data[\'rating_plus\']) + abs($data[\'rating_minus\']);

/** @var TicketsSection $section */
if ($section = $modx->getObject(\'TicketsSection\', array(\'id\' => $ticket->parent))) {
    $data = array_merge($data, $section->toArray(\'section.\'));
}
if (isset($data[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'])) {
    if ($data[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] !== \'\') {
        $max = strtotime($data[\'createdon\']) + ((float)$data[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] * 86400);
        if (time() > $max) {
            $data[\'cant_vote\'] = 1;
        }
    }
}
if (!isset($data[\'cant_vote\'])) {
    if (!$Tickets->authenticated || $modx->user->id == $ticket->createdby) {
        $data[\'cant_vote\'] = 1;

    } elseif (array_key_exists(\'vote\', $data)) {
        if ($data[\'vote\'] == \'\') {
            $data[\'can_vote\'] = 1;
        } elseif ($data[\'vote\'] > 0) {
            $data[\'voted_plus\'] = 1;
            $data[\'cant_vote\'] = 1;
        } elseif ($data[\'vote\'] < 0) {
            $data[\'voted_minus\'] = 1;
            $data[\'cant_vote\'] = 1;
        } else {
            $data[\'voted_none\'] = 1;
            $data[\'cant_vote\'] = 1;
        }
    } else {
        $data[\'can_vote\'] = 1;
    }
}

$data[\'active\'] = (int)!empty($data[\'can_vote\']);
$data[\'inactive\'] = (int)!empty($data[\'cant_vote\']);
$data[\'can_star\'] = $Tickets->authenticated;

if (!empty($getUser)) {
    $fields = $modx->getFieldMeta(\'modUserProfile\');
    $user = $pdoFetch->getObject(\'modUserProfile\', array(\'internalKey\' => $ticket->createdby), array(
        \'innerJoin\' => array(
            \'modUser\' => array(\'class\' => \'modUser\', \'on\' => \'modUserProfile.internalKey = modUser.id\'),
        ),
        \'select\' => array(
            \'modUserProfile\' => implode(\',\', array_keys($fields)),
            \'modUser\' => \'username\',
        ),
    ));
    if ($user) {
        $data = array_merge($data, $user);
    }
}

if (!empty($getFiles)) {
    $where = array(\'deleted\' => 0, \'class\' => \'Ticket\', \'parent\' => $ticket->id);
    $collection = $pdoFetch->getCollection(\'TicketFile\', $where, array(\'sortby\' => \'createdon\', \'sortdir\' => \'ASC\'));
    $data[\'files\'] = $content = \'\';
    if (!empty($unusedFiles)) {
        $content = $ticket->getContent();
    }
    foreach ($collection as $item) {
        if ($content && strpos($content, $item[\'url\']) !== false) {
            continue;
        }
        $item[\'size\'] = round($item[\'size\'] / 1024, 2);
        $data[\'files\'] .= !empty($tplFile)
            ? $Tickets->getChunk($tplFile, $item)
            : $Tickets->getChunk(\'\', $item);
    }
    $data[\'has_files\'] = !empty($data[\'files\']);
}
$data[\'id\'] = $ticket->get(\'id\');

return !empty($tpl)
    ? $Tickets->getChunk($tpl, $data)
    : $Tickets->getChunk(\'\', $data);',
    ),
  ),
  '4867280d4532c417d6f0b78b67a58bd9' => 
  array (
    'criteria' => 
    array (
      'name' => 'getTickets',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getTickets',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'Ticket\';
$where = array(\'class_key\' => $class);

// Filter by user
if (!empty($user)) {
    $user = array_map(\'trim\', explode(\',\', $user));
    $user_id = $user_username = array();
    foreach ($user as $v) {
        if (is_numeric($v)) {
            $user_id[] = $v;
        } else {
            $user_username[] = $v;
        }
    }
    if (!empty($user_id) && !empty($user_username)) {
        $where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\',
                $user_username) . \'\\\'))\';
    } else {
        if (!empty($user_id)) {
            $where[\'User.id:IN\'] = $user_id;
        } else {
            if (!empty($user_username)) {
                $where[\'User.username:IN\'] = $user_username;
            }
        }
    }
}

// Joining tables
$leftJoin = array(
    \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `User`.`id`\'),
    \'Total\' => array(\'class\' => \'TicketTotal\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `Ticket`.`id` AND `Vote`.`class` = "Ticket" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `Ticket`.`id` AND `Star`.`class` = "Ticket" AND `Star`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Thread\'] = array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\',
    );
}

// Fields to select
$select = array(
    \'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
    \'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
    \'Ticket\' => !empty($includeContent)
        ? $modx->getSelectColumns($class, $class)
        : $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
    \'Total\' => \'comments, views, stars, rating, rating_plus, rating_minus\',
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
    $select[\'Thread\'] = \'`Thread`.`id` as `thread`\';
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => \'createdon\',
    \'sortdir\' => \'DESC\',
    \'groupby\' => $class . \'.id\',
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
    return $rows;
}
ini_set(\'error_reporting\', -1);
ini_set(\'display_errors\', 1);
// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    foreach ($rows as $k => $row) {
        // Handle properties
        $properties = is_string($row[\'properties\'])
            ? json_decode($row[\'properties\'], true)
            : $row[\'properties\'];
        if (!empty($properties[\'tickets\'])) {
            $properties = $properties[\'tickets\'];
        }
        if (empty($properties[\'process_tags\'])) {
            foreach ($row as $field => $value) {
                $row[$field] = str_replace(
                    array(\'[\', \']\', \'`\', \'{\', \'}\'),
                    array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
                    $value
                );
            }
        }
        if (!is_array($properties)) {
            $properties = array();
        }

        // Handle rating
        if ($row[\'rating\'] > 0) {
            $row[\'rating\'] = \'+\' . $row[\'rating\'];
            $row[\'rating_positive\'] = 1;
        } elseif ($row[\'rating\'] < 0) {
            $row[\'rating_negative\'] = 1;
        }
        $row[\'rating_total\'] = abs($row[\'rating_plus\']) + abs($row[\'rating_minus\']);
        // Handle rating
        if (isset($row[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'])) {
            if ($row[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] !== \'\') {
                $max = $row[\'createdon\'] + ((float)$row[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] * 86400);
                if (time() > $max) {
                    $row[\'cant_vote\'] = 1;
                }
            }
        }
        if (!isset($row[\'cant_vote\'])) {
            if (!$Tickets->authenticated || $modx->user->id == $row[\'createdby\']) {
                $row[\'cant_vote\'] = 1;
            } elseif (array_key_exists(\'vote\', $row)) {
                if ($row[\'vote\'] == \'\') {
                    $row[\'can_vote\'] = 1;
                } elseif ($row[\'vote\'] > 0) {
                    $row[\'voted_plus\'] = 1;
                    $row[\'cant_vote\'] = 1;
                } elseif ($row[\'vote\'] < 0) {
                    $row[\'voted_minus\'] = 1;
                    $row[\'cant_vote\'] = 1;
                } else {
                    $row[\'voted_none\'] = 1;
                    $row[\'cant_vote\'] = 1;
                }
            }
        }
        // Special fields for quick placeholders
        $row[\'active\'] = (int)!empty($row[\'can_vote\']);
        $row[\'inactive\'] = (int)!empty($row[\'cant_vote\']);
        $row[\'can_star\'] = $Tickets->authenticated;
        $row[\'stared\'] = !empty($row[\'star\']);
        $row[\'unstared\'] = empty($row[\'star\']);
        $row[\'isauthor\'] = $modx->user->id == $row[\'createdby\'];
        $row[\'unpublished\'] = empty($row[\'published\']);

        $row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
        $row[\'idx\'] = $pdoFetch->idx++;
        // Processing new comments
        if ($Tickets->authenticated && !empty($row[\'thread\'])) {
            $last_view = $pdoFetch->getObject(\'TicketView\', array(
                \'parent\' => $row[\'id\'],
                \'uid\' => $modx->user->id,
            ), array(
                \'sortby\' => \'timestamp\',
                \'sortdir\' => \'DESC\',
                \'limit\' => 1,
            ));
            if (!empty($last_view[\'timestamp\'])) {
                $row[\'new_comments\'] = $modx->getCount(\'TicketComment\', array(
                    \'published\' => 1,
                    \'thread\' => $row[\'thread\'],
                    \'createdon:>\' => $last_view[\'timestamp\'],
                    \'createdby:!=\' => $modx->user->id,
                ));
            } else {
                $row[\'new_comments\'] = $row[\'comments\'];
            }
        } else {
            $row[\'new_comments\'] = \'\';
        }

        // Processing chunk
        $tpl = $pdoFetch->defineChunk($row);
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
    }
}
$pdoFetch->addTime(\'Returning processed chunks\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="getTicketsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (empty($outputSeparator)) {
        $outputSeparator = "\\n";
    }
    $output = implode($outputSeparator, $output);
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $array = array(\'output\' => $output);
        if ($Tickets->authenticated && $modx->resource->class_key == \'TicketsSection\') {
            /** @var TicketsSection $section */
            $section = &$modx->resource;
            $array[\'subscribed\'] = $section->isSubscribed();
        }
        $output = $pdoFetch->getChunk($tplWrapper, $array, $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
      'locked' => 0,
      'properties' => 'a:21:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.Tickets.list.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:17:"tickets_prop_user";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:23:"tickets_prop_tplWrapper";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_tickets.php',
      'content' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'Ticket\';
$where = array(\'class_key\' => $class);

// Filter by user
if (!empty($user)) {
    $user = array_map(\'trim\', explode(\',\', $user));
    $user_id = $user_username = array();
    foreach ($user as $v) {
        if (is_numeric($v)) {
            $user_id[] = $v;
        } else {
            $user_username[] = $v;
        }
    }
    if (!empty($user_id) && !empty($user_username)) {
        $where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\',
                $user_username) . \'\\\'))\';
    } else {
        if (!empty($user_id)) {
            $where[\'User.id:IN\'] = $user_id;
        } else {
            if (!empty($user_username)) {
                $where[\'User.username:IN\'] = $user_username;
            }
        }
    }
}

// Joining tables
$leftJoin = array(
    \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `Ticket`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `User`.`id`\'),
    \'Total\' => array(\'class\' => \'TicketTotal\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `Ticket`.`id` AND `Vote`.`class` = "Ticket" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `Ticket`.`id` AND `Star`.`class` = "Ticket" AND `Star`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Thread\'] = array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`resource` = `Ticket`.`id` AND `Thread`.`deleted` = 0\',
    );
}

// Fields to select
$select = array(
    \'Section\' => $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
    \'User\' => $modx->getSelectColumns(\'modUser\', \'User\', \'\', array(\'username\')),
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\'), true),
    \'Ticket\' => !empty($includeContent)
        ? $modx->getSelectColumns($class, $class)
        : $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
    \'Total\' => \'comments, views, stars, rating, rating_plus, rating_minus\',
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
    $select[\'Thread\'] = \'`Thread`.`id` as `thread`\';
}
$pdoFetch->addTime(\'Conditions prepared\');

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => \'createdon\',
    \'sortdir\' => \'DESC\',
    \'groupby\' => $class . \'.id\',
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
    return $rows;
}
ini_set(\'error_reporting\', -1);
ini_set(\'display_errors\', 1);
// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    foreach ($rows as $k => $row) {
        // Handle properties
        $properties = is_string($row[\'properties\'])
            ? json_decode($row[\'properties\'], true)
            : $row[\'properties\'];
        if (!empty($properties[\'tickets\'])) {
            $properties = $properties[\'tickets\'];
        }
        if (empty($properties[\'process_tags\'])) {
            foreach ($row as $field => $value) {
                $row[$field] = str_replace(
                    array(\'[\', \']\', \'`\', \'{\', \'}\'),
                    array(\'&#91;\', \'&#93;\', \'&#96;\', \'&#123;\', \'&#125;\'),
                    $value
                );
            }
        }
        if (!is_array($properties)) {
            $properties = array();
        }

        // Handle rating
        if ($row[\'rating\'] > 0) {
            $row[\'rating\'] = \'+\' . $row[\'rating\'];
            $row[\'rating_positive\'] = 1;
        } elseif ($row[\'rating\'] < 0) {
            $row[\'rating_negative\'] = 1;
        }
        $row[\'rating_total\'] = abs($row[\'rating_plus\']) + abs($row[\'rating_minus\']);
        // Handle rating
        if (isset($row[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'])) {
            if ($row[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] !== \'\') {
                $max = $row[\'createdon\'] + ((float)$row[\'section.properties\'][\'ratings\'][\'days_ticket_vote\'] * 86400);
                if (time() > $max) {
                    $row[\'cant_vote\'] = 1;
                }
            }
        }
        if (!isset($row[\'cant_vote\'])) {
            if (!$Tickets->authenticated || $modx->user->id == $row[\'createdby\']) {
                $row[\'cant_vote\'] = 1;
            } elseif (array_key_exists(\'vote\', $row)) {
                if ($row[\'vote\'] == \'\') {
                    $row[\'can_vote\'] = 1;
                } elseif ($row[\'vote\'] > 0) {
                    $row[\'voted_plus\'] = 1;
                    $row[\'cant_vote\'] = 1;
                } elseif ($row[\'vote\'] < 0) {
                    $row[\'voted_minus\'] = 1;
                    $row[\'cant_vote\'] = 1;
                } else {
                    $row[\'voted_none\'] = 1;
                    $row[\'cant_vote\'] = 1;
                }
            }
        }
        // Special fields for quick placeholders
        $row[\'active\'] = (int)!empty($row[\'can_vote\']);
        $row[\'inactive\'] = (int)!empty($row[\'cant_vote\']);
        $row[\'can_star\'] = $Tickets->authenticated;
        $row[\'stared\'] = !empty($row[\'star\']);
        $row[\'unstared\'] = empty($row[\'star\']);
        $row[\'isauthor\'] = $modx->user->id == $row[\'createdby\'];
        $row[\'unpublished\'] = empty($row[\'published\']);

        $row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
        $row[\'idx\'] = $pdoFetch->idx++;
        // Processing new comments
        if ($Tickets->authenticated && !empty($row[\'thread\'])) {
            $last_view = $pdoFetch->getObject(\'TicketView\', array(
                \'parent\' => $row[\'id\'],
                \'uid\' => $modx->user->id,
            ), array(
                \'sortby\' => \'timestamp\',
                \'sortdir\' => \'DESC\',
                \'limit\' => 1,
            ));
            if (!empty($last_view[\'timestamp\'])) {
                $row[\'new_comments\'] = $modx->getCount(\'TicketComment\', array(
                    \'published\' => 1,
                    \'thread\' => $row[\'thread\'],
                    \'createdon:>\' => $last_view[\'timestamp\'],
                    \'createdby:!=\' => $modx->user->id,
                ));
            } else {
                $row[\'new_comments\'] = $row[\'comments\'];
            }
        } else {
            $row[\'new_comments\'] = \'\';
        }

        // Processing chunk
        $tpl = $pdoFetch->defineChunk($row);
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
    }
}
$pdoFetch->addTime(\'Returning processed chunks\');

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="getTicketsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    if (empty($outputSeparator)) {
        $outputSeparator = "\\n";
    }
    $output = implode($outputSeparator, $output);
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $array = array(\'output\' => $output);
        if ($Tickets->authenticated && $modx->resource->class_key == \'TicketsSection\') {
            /** @var TicketsSection $section */
            $section = &$modx->resource;
            $array[\'subscribed\'] = $section->isSubscribed();
        }
        $output = $pdoFetch->getChunk($tplWrapper, $array, $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
    ),
  ),
  'e67039c920e1942995a90af279bcbe8d' => 
  array (
    'criteria' => 
    array (
      'name' => 'getTicketsSections',
    ),
    'object' => 
    array (
      'id' => 18,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getTicketsSections',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'TicketsSection\';
$where = array(\'class_key\' => $class);

// Add custom parameters
foreach (array(\'where\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Joining tables
$leftJoin = array(
    \'Total\' => array(\'class\' => \'TicketTotal\'),
);

// Fields to select
$select = array(
    \'TicketsSection\' => !empty($includeContent)
        ? $modx->getSelectColumns($class, $class)
        : $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
    \'Total\' => \'tickets, comments, views, stars, rating, rating_plus, rating_minus\',
);

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => \'views\',
    \'sortdir\' => \'DESC\',
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
    return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    foreach ($rows as $k => $row) {
        $row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
        $row[\'idx\'] = $pdoFetch->idx++;

        $tpl = $pdoFetch->defineChunk($row);
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
    }
}
$pdoFetch->addTime(\'Returning processed chunks\');
if (empty($outputSeparator)) {
    $outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="getSectionsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
      'locked' => 0,
      'properties' => 'a:19:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:24:"tpl.Tickets.sections.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:18:"tickets_prop_limit";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"offset";a:7:{s:4:"name";s:6:"offset";s:4:"desc";s:19:"tickets_prop_offset";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"views";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"includeTVs";a:7:{s:4:"name";s:10:"includeTVs";s:4:"desc";s:23:"tickets_prop_includeTVs";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"tvPrefix";a:7:{s:4:"name";s:8:"tvPrefix";s:4:"desc";s:21:"tickets_prop_tvPrefix";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:8:"fastMode";a:7:{s:4:"name";s:8:"fastMode";s:4:"desc";s:21:"tickets_prop_fastMode";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:10:"showHidden";a:7:{s:4:"name";s:10:"showHidden";s:4:"desc";s:23:"tickets_prop_showHidden";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_sections.php',
      'content' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

if (isset($parents) && $parents === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
}

$class = \'TicketsSection\';
$where = array(\'class_key\' => $class);

// Add custom parameters
foreach (array(\'where\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Joining tables
$leftJoin = array(
    \'Total\' => array(\'class\' => \'TicketTotal\'),
);

// Fields to select
$select = array(
    \'TicketsSection\' => !empty($includeContent)
        ? $modx->getSelectColumns($class, $class)
        : $modx->getSelectColumns($class, $class, \'\', array(\'content\'), true),
    \'Total\' => \'tickets, comments, views, stars, rating, rating_plus, rating_minus\',
);

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => \'views\',
    \'sortdir\' => \'DESC\',
    \'return\' => !empty($returnIds)
        ? \'ids\'
        : \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties));
$pdoFetch->addTime(\'Query parameters are prepared.\');
$rows = $pdoFetch->run();

if (!empty($returnIds)) {
    return $rows;
}

// Processing rows
$output = array();
if (!empty($rows) && is_array($rows)) {
    foreach ($rows as $k => $row) {
        $row[\'date_ago\'] = $Tickets->dateFormat($row[\'createdon\']);
        $row[\'idx\'] = $pdoFetch->idx++;

        $tpl = $pdoFetch->defineChunk($row);
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $pdoFetch->config[\'fastMode\']);
    }
}
$pdoFetch->addTime(\'Returning processed chunks\');
if (empty($outputSeparator)) {
    $outputSeparator = "\\n";
}
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="getSectionsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
    ),
  ),
  'd83fe1b98a2f5ccb30859b6a232edc38' => 
  array (
    'criteria' => 
    array (
      'name' => 'getComments',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getComments',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.comment.list.row\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

// Define threads of comments
if (!empty($parents) || !empty($resources) || !empty($threads)) {
    $where = array();
    $options = array(
        \'innerJoin\' => array(
            \'Thread\' => array(
                \'class\' => \'TicketThread\',
                \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\',
            ),
        ),
        \'groupby\' => \'`Ticket`.`id`\',
        \'select\' => array(\'Thread\' => \'`Thread`.`id`\'),
        \'showUnpublished\' => !empty($showUnpublished),
        \'showDeleted\' => !empty($showDeleted),
        \'depth\' => isset($depth)
            ? (int)$depth
            : 10,
    );
    if (!empty($parents)) {
        $options[\'parents\'] = $parents;
    }
    if (!empty($resources)) {
        $options[\'resources\'] = $resources;
    }
    if (!empty($threads)) {
        $threads = array_map(\'trim\', explode(\',\', $threads));
        $threads_in = $threads_out = array();
        foreach ($threads as $v) {
            if (!is_numeric($v)) {
                continue;
            }
            if ($v[0] == \'-\') {
                $threads_out[] = abs($v);
            } else {
                $threads_in[] = abs($v);
            }
        }
        if (!empty($threads_in)) {
            $where[\'Thread.id:IN\'] = $threads_in;
        }
        if (!empty($threads_out)) {
            $where[\'Thread.id:NOT IN\'] = $threads_out;
        }
    }

    $rows = $pdoFetch->getCollection(\'Ticket\', $where, $options);
    $threads = array();
    foreach ($rows as $item) {
        $threads[] = $item[\'id\'];
    }
    if (!count($threads)) {
        return;
    };
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
    $where[\'published\'] = 1;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}

// Filter by user
if (!empty($user)) {
    $user = array_map(\'trim\', explode(\',\', $user));
    $user_id = $user_username = array();
    foreach ($user as $v) {
        if (is_numeric($v)) {
            $user_id[] = $v;
        } else {
            $user_username[] = $v;
        }
    }
    if (!empty($user_id) && !empty($user_username)) {
        $where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\',
                $user_username) . \'\\\'))\';
    } elseif (!empty($user_id)) {
        $where[\'User.id:IN\'] = $user_id;
    } elseif (!empty($user_username)) {
        $where[\'User.username:IN\'] = $user_username;
    }
}
// Filter by threads
if (!empty($threads)) {
    $where[\'thread:IN\'] = $threads;
}
// Filter by comments
if (!empty($comments)) {
    $comments = array_map(\'trim\', explode(\',\', $comments));
    $comments_in = $comments_out = array();
    foreach ($comments as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $comments_out[] = abs($v);
        } else {
            $comments_in[] = abs($v);
        }
    }
    if (!empty($comments_in)) {
        $where[\'id:IN\'] = $comments_in;
    }
    if (!empty($comments_out)) {
        $where[\'id:NOT IN\'] = $comments_out;
    }
}

// Joining tables
$innerJoin = array(
    \'Thread\' => array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`id` = `TicketComment`.`thread`\',
    ),
);
$leftJoin = array(
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
    \'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\'),
    \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id,
    );
}
// Fields to select
$select = array(
    \'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true),
    \'Thread\' => \'`Thread`.`resource`, `Thread`.`comments`\',
    \'User\' => \'`User`.`username`\',
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'),
            true) . \',`Profile`.`email` as `user_email`\',
    \'Ticket\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
        : $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
    \'Section\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\')
        : $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => $class . \'.createdon\',
    \'sortdir\' => \'DESC\',
    \'groupby\' => $class . \'.id\',
    \'fastMode\' => true,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows)) {
    foreach ($rows as $row) {
        $row[\'ratings\'] = !empty($row[\'section.properties\'][\'ratings\'])
            ? $row[\'section.properties\'][\'ratings\']
            : array();
        $output[] = $Tickets->templateNode($row, $tpl);
    }
}
$pdoFetch->addTime(\'Returning processed chunks\');
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="getCommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
      'locked' => 0,
      'properties' => 'a:15:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.comment.list.row";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:17:"tplCommentDeleted";a:7:{s:4:"name";s:17:"tplCommentDeleted";s:4:"desc";s:30:"tickets_prop_tplCommentDeleted";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:31:"tpl.Tickets.comment.one.deleted";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"depth";a:7:{s:4:"name";s:5:"depth";s:4:"desc";s:18:"tickets_prop_depth";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:10;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"threads";a:7:{s:4:"name";s:7:"threads";s:4:"desc";s:20:"tickets_prop_threads";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"parents";a:7:{s:4:"name";s:7:"parents";s:4:"desc";s:20:"tickets_prop_parents";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"resources";a:7:{s:4:"name";s:9:"resources";s:4:"desc";s:22:"tickets_prop_resources";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:19:"tickets_prop_sortby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:9:"createdon";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"sortdir";a:7:{s:4:"name";s:7:"sortdir";s:4:"desc";s:20:"tickets_prop_sortdir";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:3:"ASC";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:4:"DESC";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:14:"includeContent";a:7:{s:4:"name";s:14:"includeContent";s:4:"desc";s:27:"tickets_prop_includeContent";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:26:"tickets_prop_toPlaceholder";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:5:"where";a:7:{s:4:"name";s:5:"where";s:4:"desc";s:18:"tickets_prop_where";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"outputSeparator";a:7:{s:4:"name";s:15:"outputSeparator";s:4:"desc";s:28:"tickets_prop_outputSeparator";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"
";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:7:"showLog";a:7:{s:4:"name";s:7:"showLog";s:4:"desc";s:20:"tickets_prop_showLog";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:15:"showUnpublished";a:7:{s:4:"name";s:15:"showUnpublished";s:4:"desc";s:28:"tickets_prop_showUnpublished";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"showDeleted";a:7:{s:4:"name";s:11:"showDeleted";s:4:"desc";s:24:"tickets_prop_showDeleted";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_comments.php',
      'content' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);
$Tickets->initialize($modx->context->key, $scriptProperties);

/** @var pdoFetch $pdoFetch */
$pdoFetch = $modx->getService(\'pdoFetch\');
$pdoFetch->setConfig($scriptProperties);
$pdoFetch->addTime(\'pdoTools loaded\');

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.comment.list.row\');
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, "\\n");

// Define threads of comments
if (!empty($parents) || !empty($resources) || !empty($threads)) {
    $where = array();
    $options = array(
        \'innerJoin\' => array(
            \'Thread\' => array(
                \'class\' => \'TicketThread\',
                \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\',
            ),
        ),
        \'groupby\' => \'`Ticket`.`id`\',
        \'select\' => array(\'Thread\' => \'`Thread`.`id`\'),
        \'showUnpublished\' => !empty($showUnpublished),
        \'showDeleted\' => !empty($showDeleted),
        \'depth\' => isset($depth)
            ? (int)$depth
            : 10,
    );
    if (!empty($parents)) {
        $options[\'parents\'] = $parents;
    }
    if (!empty($resources)) {
        $options[\'resources\'] = $resources;
    }
    if (!empty($threads)) {
        $threads = array_map(\'trim\', explode(\',\', $threads));
        $threads_in = $threads_out = array();
        foreach ($threads as $v) {
            if (!is_numeric($v)) {
                continue;
            }
            if ($v[0] == \'-\') {
                $threads_out[] = abs($v);
            } else {
                $threads_in[] = abs($v);
            }
        }
        if (!empty($threads_in)) {
            $where[\'Thread.id:IN\'] = $threads_in;
        }
        if (!empty($threads_out)) {
            $where[\'Thread.id:NOT IN\'] = $threads_out;
        }
    }

    $rows = $pdoFetch->getCollection(\'Ticket\', $where, $options);
    $threads = array();
    foreach ($rows as $item) {
        $threads[] = $item[\'id\'];
    }
    if (!count($threads)) {
        return;
    };
}

// Prepare query to db
$class = \'TicketComment\';
$where = array();
if (empty($showUnpublished)) {
    $where[\'published\'] = 1;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}

// Filter by user
if (!empty($user)) {
    $user = array_map(\'trim\', explode(\',\', $user));
    $user_id = $user_username = array();
    foreach ($user as $v) {
        if (is_numeric($v)) {
            $user_id[] = $v;
        } else {
            $user_username[] = $v;
        }
    }
    if (!empty($user_id) && !empty($user_username)) {
        $where[] = \'(`User`.`id` IN (\' . implode(\',\', $user_id) . \') OR `User`.`username` IN (\\\'\' . implode(\'\\\',\\\'\',
                $user_username) . \'\\\'))\';
    } elseif (!empty($user_id)) {
        $where[\'User.id:IN\'] = $user_id;
    } elseif (!empty($user_username)) {
        $where[\'User.username:IN\'] = $user_username;
    }
}
// Filter by threads
if (!empty($threads)) {
    $where[\'thread:IN\'] = $threads;
}
// Filter by comments
if (!empty($comments)) {
    $comments = array_map(\'trim\', explode(\',\', $comments));
    $comments_in = $comments_out = array();
    foreach ($comments as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $comments_out[] = abs($v);
        } else {
            $comments_in[] = abs($v);
        }
    }
    if (!empty($comments_in)) {
        $where[\'id:IN\'] = $comments_in;
    }
    if (!empty($comments_out)) {
        $where[\'id:NOT IN\'] = $comments_out;
    }
}

// Joining tables
$innerJoin = array(
    \'Thread\' => array(
        \'class\' => \'TicketThread\',
        \'on\' => \'`Thread`.`id` = `TicketComment`.`thread`\',
    ),
);
$leftJoin = array(
    \'User\' => array(\'class\' => \'modUser\', \'on\' => \'`User`.`id` = `TicketComment`.`createdby`\'),
    \'Profile\' => array(\'class\' => \'modUserProfile\', \'on\' => \'`Profile`.`internalKey` = `TicketComment`.`createdby`\'),
    \'Ticket\' => array(\'class\' => \'Ticket\', \'on\' => \'`Ticket`.`id` = `Thread`.`resource`\'),
    \'Section\' => array(\'class\' => \'TicketsSection\', \'on\' => \'`Section`.`id` = `Ticket`.`parent`\'),
);
if ($Tickets->authenticated) {
    $leftJoin[\'Vote\'] = array(
        \'class\' => \'TicketVote\',
        \'on\' => \'`Vote`.`id` = `TicketComment`.`id` AND `Vote`.`class` = "TicketComment" AND `Vote`.`createdby` = \' . $modx->user->id,
    );
    $leftJoin[\'Star\'] = array(
        \'class\' => \'TicketStar\',
        \'on\' => \'`Star`.`id` = `TicketComment`.`id` AND `Star`.`class` = "TicketComment" AND `Star`.`createdby` = \' . $modx->user->id,
    );
}
// Fields to select
$select = array(
    \'TicketComment\' => $modx->getSelectColumns(\'TicketComment\', \'TicketComment\', \'\', array(\'raw\'), true),
    \'Thread\' => \'`Thread`.`resource`, `Thread`.`comments`\',
    \'User\' => \'`User`.`username`\',
    \'Profile\' => $modx->getSelectColumns(\'modUserProfile\', \'Profile\', \'\', array(\'id\', \'email\'),
            true) . \',`Profile`.`email` as `user_email`\',
    \'Ticket\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\')
        : $modx->getSelectColumns(\'Ticket\', \'Ticket\', \'ticket.\', array(\'content\'), true),
    \'Section\' => !empty($includeContent)
        ? $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\')
        : $modx->getSelectColumns(\'TicketsSection\', \'Section\', \'section.\', array(\'content\'), true),
);
if ($Tickets->authenticated) {
    $select[\'Vote\'] = \'`Vote`.`value` as `vote`\';
    $select[\'Star\'] = \'COUNT(`Star`.`id`) as `star`\';
}

// Add custom parameters
foreach (array(\'where\', \'select\', \'leftJoin\', \'innerJoin\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'innerJoin\' => json_encode($innerJoin),
    \'leftJoin\' => json_encode($leftJoin),
    \'select\' => json_encode($select),
    \'sortby\' => $class . \'.createdon\',
    \'sortdir\' => \'DESC\',
    \'groupby\' => $class . \'.id\',
    \'fastMode\' => true,
    \'return\' => \'data\',
    \'nestedChunkPrefix\' => \'tickets_\',
);

// Merge all properties and run!
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$pdoFetch->addTime(\'Query parameters prepared.\');
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows)) {
    foreach ($rows as $row) {
        $row[\'ratings\'] = !empty($row[\'section.properties\'][\'ratings\'])
            ? $row[\'section.properties\'][\'ratings\']
            : array();
        $output[] = $Tickets->templateNode($row, $tpl);
    }
}
$pdoFetch->addTime(\'Returning processed chunks\');
$output = implode($outputSeparator, $output);

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="getCommentsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
    ),
  ),
  '4c6bc14b758006c7c73f140f335be284' => 
  array (
    'criteria' => 
    array (
      'name' => 'getStars',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'getStars',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
if (empty($class)) {
    $class = \'Ticket\';
}
/** @var integer $user */
if (empty($user)) {
    $user = $modx->user->get(\'id\');
}
unset($scriptProperties[\'user\']);

$ids = array();
$q = $modx->newQuery(\'TicketStar\', array(\'class\' => $class, \'createdby\' => $user));
$q->select(\'id\');
$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
    $modx->queryTime = microtime(true) - $tstart;
    $modx->executedQueries++;

    $ids = $q->stmt->fetchAll(PDO::FETCH_COLUMN);
}

if (empty($ids)) {
    return false;
}

$where = array($class . \'.id:IN\' => $ids);
foreach (array(\'where\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$scriptProperties[\'where\'] = json_encode($where);
if (empty($parents)) {
    $scriptProperties[\'parents\'] = 0;
}
if (empty($tpl)) {
    unset($scriptProperties[\'tpl\']);
}

return $class == \'Ticket\'
    ? $modx->runSnippet(\'getTickets\', $scriptProperties)
    : $modx->runSnippet(\'getComments\', $scriptProperties);',
      'locked' => 0,
      'properties' => 'a:2:{s:5:"class";a:7:{s:4:"name";s:5:"class";s:4:"desc";s:18:"tickets_prop_class";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:6:"Ticket";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.get_stars.php',
      'content' => '/** @var array $scriptProperties */
if (empty($class)) {
    $class = \'Ticket\';
}
/** @var integer $user */
if (empty($user)) {
    $user = $modx->user->get(\'id\');
}
unset($scriptProperties[\'user\']);

$ids = array();
$q = $modx->newQuery(\'TicketStar\', array(\'class\' => $class, \'createdby\' => $user));
$q->select(\'id\');
$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
    $modx->queryTime = microtime(true) - $tstart;
    $modx->executedQueries++;

    $ids = $q->stmt->fetchAll(PDO::FETCH_COLUMN);
}

if (empty($ids)) {
    return false;
}

$where = array($class . \'.id:IN\' => $ids);
foreach (array(\'where\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$scriptProperties[\'where\'] = json_encode($where);
if (empty($parents)) {
    $scriptProperties[\'parents\'] = 0;
}
if (empty($tpl)) {
    unset($scriptProperties[\'tpl\']);
}

return $class == \'Ticket\'
    ? $modx->runSnippet(\'getTickets\', $scriptProperties)
    : $modx->runSnippet(\'getComments\', $scriptProperties);',
    ),
  ),
  '3becf8286a3ffcb8c51941e30056c165' => 
  array (
    'criteria' => 
    array (
      'name' => 'subscribeAuthor',
    ),
    'object' => 
    array (
      'id' => 21,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'subscribeAuthor',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);

if (!$Tickets->authenticated || empty($scriptProperties[\'createdby\'])) {
    return \'\';
}

if (!empty($scriptProperties[\'TicketsInit\'])) {
    $Tickets->initialize($modx->context->key, $scriptProperties);
}

if ($profile = $modx->getObject(\'TicketAuthor\', array(\'id\' => $scriptProperties[\'createdby\']))) {
    $properties = $profile->get(\'properties\');
    if (!empty($properties[\'subscribers\'])) {
        $found = array_search($modx->user->id, $properties[\'subscribers\']);
        $subscribed = ($found === false) ? 0:1;
    }
}

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.author.subscribe\');
$data = [
    \'author_id\' => $scriptProperties[\'createdby\'],
    \'subscribed\' => $subscribed
];
$output = $Tickets->getChunk($tpl, $data);

// Return output
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
      'locked' => 0,
      'properties' => 'a:3:{s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"tickets_prop_tpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:28:"tpl.Tickets.author.subscribe";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:11:"TicketsInit";a:7:{s:4:"name";s:11:"TicketsInit";s:4:"desc";s:24:"tickets_prop_TicketsInit";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"0";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}s:9:"createdby";a:7:{s:4:"name";s:9:"createdby";s:4:"desc";s:22:"tickets_prop_createdby";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"0";s:7:"lexicon";s:18:"tickets:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/snippets/snippet.subscribe_author.php',
      'content' => '/** @var array $scriptProperties */
/** @var Tickets $Tickets */
$Tickets = $modx->getService(\'tickets\', \'Tickets\', $modx->getOption(\'tickets.core_path\', null,
        $modx->getOption(\'core_path\') . \'components/tickets/\') . \'model/tickets/\', $scriptProperties);

if (!$Tickets->authenticated || empty($scriptProperties[\'createdby\'])) {
    return \'\';
}

if (!empty($scriptProperties[\'TicketsInit\'])) {
    $Tickets->initialize($modx->context->key, $scriptProperties);
}

if ($profile = $modx->getObject(\'TicketAuthor\', array(\'id\' => $scriptProperties[\'createdby\']))) {
    $properties = $profile->get(\'properties\');
    if (!empty($properties[\'subscribers\'])) {
        $found = array_search($modx->user->id, $properties[\'subscribers\']);
        $subscribed = ($found === false) ? 0:1;
    }
}

$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'tpl.Tickets.author.subscribe\');
$data = [
    \'author_id\' => $scriptProperties[\'createdby\'],
    \'subscribed\' => $subscribed
];
$output = $Tickets->getChunk($tpl, $data);

// Return output
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
    ),
  ),
  '3be883dc192ea34ce72830969987d7b7' => 
  array (
    'criteria' => 
    array (
      'name' => 'Tickets',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnSiteRefresh\':
        if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
            $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
        }
        break;

    case \'OnDocFormSave\':
        /** @var Ticket $resource */
        if ($mode == \'new\' && $resource->class_key == "Ticket") {
            $modx->cacheManager->delete(\'tickets/latest.tickets\');
        }

if ($resource->get(\'template\') === 4) {
$currUnpublishDate = $resource->get(\'unpub_date\');
        //if (strlen($currUnpublishDate)<=2){
        if (empty($resource->get(\'unpub_date\'))){
            $currDate = time();
            $offset = 604800; //7 days
            $newUnpublishDate = $currDate + $offset;
            $resource->set(\'unpub_date\', $newUnpublishDate);
            //the change wouldnt\' stick without the save command. It would show in the field
            //but disappear when the resource was reloaded
            $resource->save();
       }
       else{
           return \'unpub date was not empty \'.$currUnpublishDate;
       }
}
else{
    return \'not the right template\';
}
        break;

    case \'OnWebPagePrerender\':
        $output = &$modx->resource->_output;
        $output = str_replace(
            array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
            array(\'[\', \']\', \'{\', \'}\'),
            $output
        );
        break;

    case \'OnPageNotFound\':
        // It is working only with friendly urls enabled
        $q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
        $matches = explode(\'/\', rtrim($q, \'/\'));
        if (count($matches) < 2) {
            return;
        }

        $ticket_uri = array_pop($matches);
        $section_uri = implode(\'/\', $matches) . \'/\';

        if ($section_id = $modx->findResource($section_uri)) {
            /** @var TicketsSection $section */
            if ($section = $modx->getObject(\'TicketsSection\', array(\'id\' => $section_id))) {
                if (is_numeric($ticket_uri)) {
                    $ticket_id = $ticket_uri;
                } elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
                    $ticket_id = $tmp[0];
                } else {
                    $properties = $section->getProperties(\'tickets\');
                    if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
                        $pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
                        $pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
                        if (@preg_match(\'#\' . trim($pcre, \'/\') . \'#\', $ticket_uri, $matches)) {
                            $ticket_id = $matches[1];
                        }
                    }
                }
                if (!empty($ticket_id)) {
                    if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
                        if ($ticket->published) {
                            $modx->sendRedirect($modx->makeUrl($ticket_id),
                                array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
                        } elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
                            $modx->sendForward($unp_id, \'HTTP/1.1 403 Forbidden\');
                        }
                    }
                }
            }
        }
        break;

    case \'OnLoadWebDocument\':
        $authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
        $key = \'Tickets_User\';

        if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
            return;
        }

        if (empty($_COOKIE[$key])) {
            if (!empty($_SESSION[$key])) {
                $guest_key = $_SESSION[$key];
            } else {
                $guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
            }
            setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
        } else {
            $guest_key = $_COOKIE[$key];
        }

        if (empty($_SESSION[$key])) {
            $_SESSION[$key] = $guest_key;
        }

        if ($authenticated) {
            /** @var TicketAuthor $profile */
            if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
                $profile = $modx->newObject(\'TicketAuthor\');
                $modx->user->addOne($profile);
            }
            $profile->set(\'visitedon\', time());
            $profile->save();
        }
        break;

    case \'OnWebPageComplete\':
        /** @var Tickets $Tickets */
        $Tickets = $modx->getService(\'tickets\');
        $Tickets->logView($modx->resource->get(\'id\'));
        break;

    case \'OnUserSave\':
        /** @var modUser $user */
        if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
            $profile = $modx->newObject(\'TicketAuthor\');
            $user->addOne($profile);
            $profile->save();
        }
        break;

}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
      'content' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnSiteRefresh\':
        if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
            $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
        }
        break;

    case \'OnDocFormSave\':
        /** @var Ticket $resource */
        if ($mode == \'new\' && $resource->class_key == "Ticket") {
            $modx->cacheManager->delete(\'tickets/latest.tickets\');
        }

if ($resource->get(\'template\') === 4) {
$currUnpublishDate = $resource->get(\'unpub_date\');
        //if (strlen($currUnpublishDate)<=2){
        if (empty($resource->get(\'unpub_date\'))){
            $currDate = time();
            $offset = 604800; //7 days
            $newUnpublishDate = $currDate + $offset;
            $resource->set(\'unpub_date\', $newUnpublishDate);
            //the change wouldnt\' stick without the save command. It would show in the field
            //but disappear when the resource was reloaded
            $resource->save();
       }
       else{
           return \'unpub date was not empty \'.$currUnpublishDate;
       }
}
else{
    return \'not the right template\';
}
        break;

    case \'OnWebPagePrerender\':
        $output = &$modx->resource->_output;
        $output = str_replace(
            array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
            array(\'[\', \']\', \'{\', \'}\'),
            $output
        );
        break;

    case \'OnPageNotFound\':
        // It is working only with friendly urls enabled
        $q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
        $matches = explode(\'/\', rtrim($q, \'/\'));
        if (count($matches) < 2) {
            return;
        }

        $ticket_uri = array_pop($matches);
        $section_uri = implode(\'/\', $matches) . \'/\';

        if ($section_id = $modx->findResource($section_uri)) {
            /** @var TicketsSection $section */
            if ($section = $modx->getObject(\'TicketsSection\', array(\'id\' => $section_id))) {
                if (is_numeric($ticket_uri)) {
                    $ticket_id = $ticket_uri;
                } elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
                    $ticket_id = $tmp[0];
                } else {
                    $properties = $section->getProperties(\'tickets\');
                    if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
                        $pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
                        $pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
                        if (@preg_match(\'#\' . trim($pcre, \'/\') . \'#\', $ticket_uri, $matches)) {
                            $ticket_id = $matches[1];
                        }
                    }
                }
                if (!empty($ticket_id)) {
                    if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
                        if ($ticket->published) {
                            $modx->sendRedirect($modx->makeUrl($ticket_id),
                                array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
                        } elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
                            $modx->sendForward($unp_id, \'HTTP/1.1 403 Forbidden\');
                        }
                    }
                }
            }
        }
        break;

    case \'OnLoadWebDocument\':
        $authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
        $key = \'Tickets_User\';

        if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
            return;
        }

        if (empty($_COOKIE[$key])) {
            if (!empty($_SESSION[$key])) {
                $guest_key = $_SESSION[$key];
            } else {
                $guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
            }
            setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
        } else {
            $guest_key = $_COOKIE[$key];
        }

        if (empty($_SESSION[$key])) {
            $_SESSION[$key] = $guest_key;
        }

        if ($authenticated) {
            /** @var TicketAuthor $profile */
            if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
                $profile = $modx->newObject(\'TicketAuthor\');
                $modx->user->addOne($profile);
            }
            $profile->set(\'visitedon\', time());
            $profile->save();
        }
        break;

    case \'OnWebPageComplete\':
        /** @var Tickets $Tickets */
        $Tickets = $modx->getService(\'tickets\');
        $Tickets->logView($modx->resource->get(\'id\'));
        break;

    case \'OnUserSave\':
        /** @var modUser $user */
        if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
            $profile = $modx->newObject(\'TicketAuthor\');
            $user->addOne($profile);
            $profile->save();
        }
        break;

}',
    ),
  ),
  '3529e60be336d1c37bc77b03a3b947c5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormSave',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnDocFormSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'bd7682b2be55cc841520c05ac2c96afc' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnSiteRefresh',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnSiteRefresh',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '9613f8f16719005496b4e5e46d1c77df' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnWebPagePrerender',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnWebPagePrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '624e081cd14d9466e806d93f185481e5' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnPageNotFound',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnPageNotFound',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'd621c6291105219e2756d0afec1d5b19' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnLoadWebDocument',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnLoadWebDocument',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '910988c4bea61e02570a621ddcca70ec' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnWebPageComplete',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnWebPageComplete',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'd3c1dfe3c5ff98329d23f71e69f6d6f1' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'e7c5287df6fe5e0212713f23e0dd899b' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnUserSave',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnUserSave',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '74cc8d64badbfaa408aef86570392a9f' => 
  array (
    'criteria' => 
    array (
      'text' => 'tickets',
    ),
    'object' => 
    array (
      'text' => 'tickets',
      'parent' => 'components',
      'action' => 'home',
      'description' => 'ticket_menu_desc',
      'icon' => '<i class="icon icon-large icon-comments-0"></i>',
      'menuindex' => 0,
      'params' => '',
      'handler' => '',
      'permissions' => '',
      'namespace' => 'tickets',
    ),
  ),
);