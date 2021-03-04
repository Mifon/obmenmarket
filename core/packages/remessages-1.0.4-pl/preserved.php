<?php return array (
  '05711120741232eb302f0b1ce2fe221e' => 
  array (
    'criteria' => 
    array (
      'name' => 'remessages',
    ),
    'object' => 
    array (
      'name' => 'remessages',
      'path' => '{core_path}components/remessages/',
      'assets_path' => '',
    ),
  ),
  '2f6f959553ca09afcf4314a5b833c9db' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_page',
    ),
    'object' => 
    array (
      'key' => 'remessages_page',
      'value' => '68',
      'xtype' => 'numberfield',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => '2021-01-29 20:13:07',
    ),
  ),
  'da00d3b00349abd9a941b08c3e5fa69d' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_comet_id',
    ),
    'object' => 
    array (
      'key' => 'remessages_comet_id',
      'value' => '3345',
      'xtype' => 'numberfield',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => '2021-01-29 20:14:11',
    ),
  ),
  '5ced9a1560036cce8ef420a200ba6be4' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_comet_key',
    ),
    'object' => 
    array (
      'key' => 'remessages_comet_key',
      'value' => 'Nox9OhdaFF3uBxD6keKRVfMu2QkA8ekrlCW0mzsbdjYg5oZNOpaKHajGG2xLjTWZ',
      'xtype' => 'textfield',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => '2021-01-29 20:14:42',
    ),
  ),
  'acd44ff30d31f4938568a7422f0d452a' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_reg_comet',
    ),
    'object' => 
    array (
      'key' => 'remessages_reg_comet',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => NULL,
    ),
  ),
  '0959e883faac12d47d7a7e8f9314da22' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_reg_pnotify',
    ),
    'object' => 
    array (
      'key' => 'remessages_reg_pnotify',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => '2021-01-29 20:14:48',
    ),
  ),
  '7dc95b8b04eefbba33d8a4510e720c27' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_reg_kemoji',
    ),
    'object' => 
    array (
      'key' => 'remessages_reg_kemoji',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => NULL,
    ),
  ),
  'd6ce4734a7f89c3e55c453d8c0733686' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_reg_fancybox',
    ),
    'object' => 
    array (
      'key' => 'remessages_reg_fancybox',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => NULL,
    ),
  ),
  'f4b179d863df86ac256a74c2137f12f2' => 
  array (
    'criteria' => 
    array (
      'key' => 'remessages_reg_fontawesome',
    ),
    'object' => 
    array (
      'key' => 'remessages_reg_fontawesome',
      'value' => '0',
      'xtype' => 'combo-boolean',
      'namespace' => 'remessages',
      'area' => 'remessages_main',
      'editedon' => '2021-01-31 11:20:13',
    ),
  ),
  'd54e79b37b3256b56794fd1d8a811555' => 
  array (
    'criteria' => 
    array (
      'category' => 'reMessages',
    ),
    'object' => 
    array (
      'id' => 46,
      'parent' => 0,
      'category' => 'reMessages',
      'rank' => 0,
    ),
  ),
  'f16b4e5e776be767a28e255efeb7888d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.reMessages.contact',
    ),
    'object' => 
    array (
      'id' => 167,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.reMessages.contact',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '<li class="thread_wrap media {$identifier}" data-identifier="{$identifier}">
    {if $photo}
        <img src="{$photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo mr-3" alt="{$fullname | Jevix}">
    {else}
        <div class="author_nophoto text-center mr-3">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
    {/if}
    <div class="media-body">
        <div class="float-right">
            <span class="thread_date text-muted">{$createdon | DateAgo} {$max_createdon | DateAgo}</span>
        </div>
        <h3 class="author_name mt-0">{$fullname | Jevix | ellipsis : 50}</h3>
        {if $count}
            <div class="float-right">
                <span class="thread_count badge badge-primary">{$count}</span>
            </div>
        {/if}
        <div class="message_text">
            {if $createdby == $_modx->user.id}<span class="text-muted">{\'remessages_you\' | lexicon}:</span>{/if}
            {$text | Jevix | striptags | reMessagesSmiles}
        </div>
    </div>
</li>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/chunks/contact.tpl',
      'content' => '<li class="thread_wrap media {$identifier}" data-identifier="{$identifier}">
    {if $photo}
        <img src="{$photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo mr-3" alt="{$fullname | Jevix}">
    {else}
        <div class="author_nophoto text-center mr-3">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
    {/if}
    <div class="media-body">
        <div class="float-right">
            <span class="thread_date text-muted">{$createdon | DateAgo} {$max_createdon | DateAgo}</span>
        </div>
        <h3 class="author_name mt-0">{$fullname | Jevix | ellipsis : 50}</h3>
        {if $count}
            <div class="float-right">
                <span class="thread_count badge badge-primary">{$count}</span>
            </div>
        {/if}
        <div class="message_text">
            {if $createdby == $_modx->user.id}<span class="text-muted">{\'remessages_you\' | lexicon}:</span>{/if}
            {$text | Jevix | striptags | reMessagesSmiles}
        </div>
    </div>
</li>',
    ),
  ),
  '31a17793cfbb5feb07a5adfee50033be' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.reMessages.list',
    ),
    'object' => 
    array (
      'id' => 168,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.reMessages.list',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '{if $output}
    <ul class="list-unstyled">{$output}</ul>
{else}
    {\'remessages_no_treads\' | lexicon}
{/if}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/chunks/list.tpl',
      'content' => '{if $output}
    <ul class="list-unstyled">{$output}</ul>
{else}
    {\'remessages_no_treads\' | lexicon}
{/if}',
    ),
  ),
  'e9b4390661e54ab0e51af0c855d5b38d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.reMessages.message',
    ),
    'object' => 
    array (
      'id' => 169,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.reMessages.message',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '<li class="message_wrap media {if $visit < $createdon}unread{/if}" data-id="{$id}">
    <span>
        {if $photo}
            <img src="{$photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo mr-3" alt="{$fullname | Jevix}">
        {else}
            <div class="author_nophoto text-center mr-3">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        {/if}
    </span>
    <div class="media-body">
        <div class="message_header">
            <div class="float-right">
                <span class="reply_btn"><i class="fa fa-reply" aria-hidden="true"></i></span>
            </div>
            <span class="author_name text-primary">{$fullname | Jevix | ellipsis : 50}</span>
            <span class="thread_date text-muted">{(($createdon | strtotime) - 1) | DateAgo}</span>
        </div>
        {if $reply_text}
            <blockquote>
                <b>{$reply_author}</b><br>
                {$reply_text | Jevix | reMessagesSmiles}
            </blockquote>
        {/if}
        <div class="message_text">
            {$text | Jevix | reMessagesSmiles}
        </div>
    </div>
</li>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/chunks/message.tpl',
      'content' => '<li class="message_wrap media {if $visit < $createdon}unread{/if}" data-id="{$id}">
    <span>
        {if $photo}
            <img src="{$photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo mr-3" alt="{$fullname | Jevix}">
        {else}
            <div class="author_nophoto text-center mr-3">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        {/if}
    </span>
    <div class="media-body">
        <div class="message_header">
            <div class="float-right">
                <span class="reply_btn"><i class="fa fa-reply" aria-hidden="true"></i></span>
            </div>
            <span class="author_name text-primary">{$fullname | Jevix | ellipsis : 50}</span>
            <span class="thread_date text-muted">{(($createdon | strtotime) - 1) | DateAgo}</span>
        </div>
        {if $reply_text}
            <blockquote>
                <b>{$reply_author}</b><br>
                {$reply_text | Jevix | reMessagesSmiles}
            </blockquote>
        {/if}
        <div class="message_text">
            {$text | Jevix | reMessagesSmiles}
        </div>
    </div>
</li>',
    ),
  ),
  'd85cef08f89912851a2137bf6bca1554' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.reMessages.dialog',
    ),
    'object' => 
    array (
      'id' => 170,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.reMessages.dialog',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '<div class="dialog_header pl-4 pr-4" data-identifier="{$identifier}">
    <div class="row">
        <div class="col-2 align-self-center text-left">
            <span class="btn btn-link pl-0 back">{\'remessages_back\' | lexicon}</span>
        </div>
        <div class="col-8 align-self-center text-center">
            <h4>{$fullname | Jevix}</h4>
            <p class="text-{$status == \'Online\' ? \'success\' : \'muted\'} status_holder" data-identifier="{$identifier}">{$status}</p>
        </div>
        <div class="col-2 align-self-center text-right">
            {if $photo}
                <img src="{$photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo" alt="{$fullname | Jevix}">
            {else}
                <div class="author_nophoto">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            {/if}
        </div>
    </div>
</div>
<div class="dialog_messages pl-4 pr-4">
    <ul class="list-unstyled">
        {$output}
    </ul>
</div>
<div class="dialog_form pl-4 pr-4 pt-4">
    <div class="row">
        <div class="col-2 align-self-start text-right pr-1">
            {if $_modx->user.photo}
                <img src="{$_modx->user.photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo" alt="{$fullname | Jevix}">
            {else}
                <div class="author_nophoto">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            {/if}
        </div>
        <div class="col-10 align-self-start text-left pl-2">
            <form action="" class="send_message" method="post">
                <input type="hidden" name="reply" value="">
                <input type="hidden" name="files" value="[]">
                <div class="form-row">
                    <div class="form-group col-12">
                      <div class="text_preview"></div>
                      <div class="attach_preview"></div>
                      [[-<textarea name="text" class="form-control" placeholder="Введите ваше сообщение"></textarea>]]
                      <div class="form-control" id="rmMessageText" contenteditable="true"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 text-right">
                      <input type="file" name="upload_files" multiple="multiple" accept="image/*">
                      <button type="button" class="btn btn-secondary attach_file"><span class="fa fa-paperclip"></span></button>
                      <button type="submit" class="btn btn-primary">{\'remessages_send\' | lexicon}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/chunks/dialog.tpl',
      'content' => '<div class="dialog_header pl-4 pr-4" data-identifier="{$identifier}">
    <div class="row">
        <div class="col-2 align-self-center text-left">
            <span class="btn btn-link pl-0 back">{\'remessages_back\' | lexicon}</span>
        </div>
        <div class="col-8 align-self-center text-center">
            <h4>{$fullname | Jevix}</h4>
            <p class="text-{$status == \'Online\' ? \'success\' : \'muted\'} status_holder" data-identifier="{$identifier}">{$status}</p>
        </div>
        <div class="col-2 align-self-center text-right">
            {if $photo}
                <img src="{$photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo" alt="{$fullname | Jevix}">
            {else}
                <div class="author_nophoto">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            {/if}
        </div>
    </div>
</div>
<div class="dialog_messages pl-4 pr-4">
    <ul class="list-unstyled">
        {$output}
    </ul>
</div>
<div class="dialog_form pl-4 pr-4 pt-4">
    <div class="row">
        <div class="col-2 align-self-start text-right pr-1">
            {if $_modx->user.photo}
                <img src="{$_modx->user.photo | phpthumbon : \'w=60&h=60&zc=1\'}" class="author_photo" alt="{$fullname | Jevix}">
            {else}
                <div class="author_nophoto">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            {/if}
        </div>
        <div class="col-10 align-self-start text-left pl-2">
            <form action="" class="send_message" method="post">
                <input type="hidden" name="reply" value="">
                <input type="hidden" name="files" value="[]">
                <div class="form-row">
                    <div class="form-group col-12">
                      <div class="text_preview"></div>
                      <div class="attach_preview"></div>
                      [[-<textarea name="text" class="form-control" placeholder="Введите ваше сообщение"></textarea>]]
                      <div class="form-control" id="rmMessageText" contenteditable="true"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 text-right">
                      <input type="file" name="upload_files" multiple="multiple" accept="image/*">
                      <button type="button" class="btn btn-secondary attach_file"><span class="fa fa-paperclip"></span></button>
                      <button type="submit" class="btn btn-primary">{\'remessages_send\' | lexicon}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>',
    ),
  ),
  'dddb97b41bf5473128e99ad23f9cdb27' => 
  array (
    'criteria' => 
    array (
      'name' => 'reMessages',
    ),
    'object' => 
    array (
      'id' => 94,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'reMessages',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService(\'reMessages\', \'reMessages\', MODX_CORE_PATH . \'components/remessages/model/\', $scriptProperties);
if (!$reMessages) {
    return \'Could not load reMessages class!\';
}

$scriptProperties[\'pageId\'] = $modx->getOption(\'remessages_page\');
if (!$scriptProperties[\'pageId\']) {
    $pageId = $modx->resource->id;
    if ($setting = $modx->getObject(\'modSystemSetting\', [\'key\' => \'remessages_page\'])) {
        $setting->set(\'value\', $pageId);
        $setting->save();
    }
    $scriptProperties[\'pageId\'] = $pageId;
}
$_SESSION[\'scriptProperties\'] = $scriptProperties;

if (isset($_REQUEST[\'identifier\']) && $_REQUEST[\'identifier\']) {
    return $reMessages->getDialog($_REQUEST[\'identifier\']);
} else {
    return $reMessages->getThreads();
}',
      'locked' => 0,
      'properties' => 'a:4:{s:10:"tplContact";a:7:{s:4:"name";s:10:"tplContact";s:4:"desc";s:26:"remessages_prop_tplContact";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.reMessages.contact";s:7:"lexicon";s:21:"remessages:properties";s:4:"area";s:0:"";}s:7:"tplList";a:7:{s:4:"name";s:7:"tplList";s:4:"desc";s:23:"remessages_prop_tplList";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:19:"tpl.reMessages.list";s:7:"lexicon";s:21:"remessages:properties";s:4:"area";s:0:"";}s:10:"tplMessage";a:7:{s:4:"name";s:10:"tplMessage";s:4:"desc";s:26:"remessages_prop_tplMessage";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.reMessages.message";s:7:"lexicon";s:21:"remessages:properties";s:4:"area";s:0:"";}s:9:"tplDialog";a:7:{s:4:"name";s:9:"tplDialog";s:4:"desc";s:25:"remessages_prop_tplDialog";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.reMessages.dialog";s:7:"lexicon";s:21:"remessages:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/snippets/remessages.php',
      'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService(\'reMessages\', \'reMessages\', MODX_CORE_PATH . \'components/remessages/model/\', $scriptProperties);
if (!$reMessages) {
    return \'Could not load reMessages class!\';
}

$scriptProperties[\'pageId\'] = $modx->getOption(\'remessages_page\');
if (!$scriptProperties[\'pageId\']) {
    $pageId = $modx->resource->id;
    if ($setting = $modx->getObject(\'modSystemSetting\', [\'key\' => \'remessages_page\'])) {
        $setting->set(\'value\', $pageId);
        $setting->save();
    }
    $scriptProperties[\'pageId\'] = $pageId;
}
$_SESSION[\'scriptProperties\'] = $scriptProperties;

if (isset($_REQUEST[\'identifier\']) && $_REQUEST[\'identifier\']) {
    return $reMessages->getDialog($_REQUEST[\'identifier\']);
} else {
    return $reMessages->getThreads();
}',
    ),
  ),
  '96deadfce354b4508e1ed60021830f5a' => 
  array (
    'criteria' => 
    array (
      'name' => 'reMessagesTrack',
    ),
    'object' => 
    array (
      'id' => 95,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'reMessagesTrack',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService(\'reMessages\', \'reMessages\', MODX_CORE_PATH . \'components/remessages/model/\', $scriptProperties);
if (!$reMessages) {
    return \'Could not load reMessages class!\';
}

if ($modx->getOption(\'remessages_reg_comet\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/cometserverapi.js\');
}
if ($modx->getOption(\'remessages_reg_pnotify\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/pnotify/pnotify.js\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/pnotify/pnotifybrighttheme.css\');
}
if ($modx->getOption(\'remessages_reg_kemoji\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/kemoji/kemoji.min.js\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/kemoji/css/emoji.min.css\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/kemoji/css/smiles.css\');
}
if ($modx->getOption(\'remessages_reg_fancybox\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/fancybox/jquery.fancybox.pack.js\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/fancybox/jquery.fancybox.css\');
}
if ($modx->getOption(\'remessages_reg_fontawesome\')) {
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/font-awesome/css/font-awesome.min.css\');
}

$modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/default.js\');
$modx->regClientCSS($reMessages->config[\'cssUrl\'] . \'web/default.css\');

if ($modx->user->id) {
    $comet = [
      \'id\' => $modx->getOption(\'remessages_comet_id\'),
      \'key\' => $modx->getOption(\'remessages_comet_key\'),
    ];
    $link = mysqli_connect(\'app.comet-server.ru\', $comet[\'id\'], $comet[\'key\'], \'CometQL_v1\');
    if ($link) {
        $result = mysqli_query($link, \'INSERT INTO users_auth (id, hash) VALUES (\'.$modx->user->id.\', "\'.md5($modx->user->password).\'")\');
        if(mysqli_errno($link) != 0) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[reMessages] Comet error #\' . mysqli_errno($link). \' \' . mysqli_error($link));
        }
    }
    $modx->regClientHTMLBlock(\'<script>
        cometApi.start({ dev_id: \' . $comet[\'id\'] . \', user_id: \'.$modx->user->id.\', user_key: "\'.md5($modx->user->password).\'" });
        cometApi.subscription("re_messages_\'.$modx->user->id.\'", function(data) {
            reMessages.newMessage(data);
        });
        cometApi.subscription("track_online");
    </script>\');
} else {
    $modx->regClientHTMLBlock(\'<script>
        cometApi.start({ dev_id: \' . $comet[\'id\'] . \', user_id: 99999999, user_key: "\'.md5(99999999).\'" });
        cometApi.subscription("re_messages_99999999", function(data) {
            reMessages.newMessage(data);
        });
        cometApi.subscription("track_online");
    </script>\');
}',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/snippets/remessagestrack.php',
      'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService(\'reMessages\', \'reMessages\', MODX_CORE_PATH . \'components/remessages/model/\', $scriptProperties);
if (!$reMessages) {
    return \'Could not load reMessages class!\';
}

if ($modx->getOption(\'remessages_reg_comet\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/cometserverapi.js\');
}
if ($modx->getOption(\'remessages_reg_pnotify\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/pnotify/pnotify.js\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/pnotify/pnotifybrighttheme.css\');
}
if ($modx->getOption(\'remessages_reg_kemoji\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/kemoji/kemoji.min.js\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/kemoji/css/emoji.min.css\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/kemoji/css/smiles.css\');
}
if ($modx->getOption(\'remessages_reg_fancybox\')) {
    $modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/vendor/fancybox/jquery.fancybox.pack.js\');
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/fancybox/jquery.fancybox.css\');
}
if ($modx->getOption(\'remessages_reg_fontawesome\')) {
    $modx->regClientCSS($reMessages->config[\'jsUrl\'] . \'web/vendor/font-awesome/css/font-awesome.min.css\');
}

$modx->regClientScript($reMessages->config[\'jsUrl\'] . \'web/default.js\');
$modx->regClientCSS($reMessages->config[\'cssUrl\'] . \'web/default.css\');

if ($modx->user->id) {
    $comet = [
      \'id\' => $modx->getOption(\'remessages_comet_id\'),
      \'key\' => $modx->getOption(\'remessages_comet_key\'),
    ];
    $link = mysqli_connect(\'app.comet-server.ru\', $comet[\'id\'], $comet[\'key\'], \'CometQL_v1\');
    if ($link) {
        $result = mysqli_query($link, \'INSERT INTO users_auth (id, hash) VALUES (\'.$modx->user->id.\', "\'.md5($modx->user->password).\'")\');
        if(mysqli_errno($link) != 0) {
            $modx->log(modX::LOG_LEVEL_ERROR, \'[reMessages] Comet error #\' . mysqli_errno($link). \' \' . mysqli_error($link));
        }
    }
    $modx->regClientHTMLBlock(\'<script>
        cometApi.start({ dev_id: \' . $comet[\'id\'] . \', user_id: \'.$modx->user->id.\', user_key: "\'.md5($modx->user->password).\'" });
        cometApi.subscription("re_messages_\'.$modx->user->id.\'", function(data) {
            reMessages.newMessage(data);
        });
        cometApi.subscription("track_online");
    </script>\');
} else {
    $modx->regClientHTMLBlock(\'<script>
        cometApi.start({ dev_id: \' . $comet[\'id\'] . \', user_id: 99999999, user_key: "\'.md5(99999999).\'" });
        cometApi.subscription("re_messages_99999999", function(data) {
            reMessages.newMessage(data);
        });
        cometApi.subscription("track_online");
    </script>\');
}',
    ),
  ),
  'c00620c52a890addbc40806e84288e0f' => 
  array (
    'criteria' => 
    array (
      'name' => 'reMessagesSmiles',
    ),
    'object' => 
    array (
      'id' => 96,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'reMessagesSmiles',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'snippet' => '$parts = explode(\'$#\', $input);
foreach ($parts as $k => $part) {
    $text = explode(\'#$\', $part);
    if (count($text) == 2) {
        $smile = $text[0];
        $words = $text[1];
        $image = \'<img src="/assets/components/remessages/js/web/vendor/kemoji/img/opacity.png" class="ke ke-\' . $smile . \'" emoji="\' . $smile . \'">\';
        $parts[$k] = $image . $words;
    }
}

return implode(\'\', $parts);',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/snippets/remessagessmiles.php',
      'content' => '$parts = explode(\'$#\', $input);
foreach ($parts as $k => $part) {
    $text = explode(\'#$\', $part);
    if (count($text) == 2) {
        $smile = $text[0];
        $words = $text[1];
        $image = \'<img src="/assets/components/remessages/js/web/vendor/kemoji/img/opacity.png" class="ke ke-\' . $smile . \'" emoji="\' . $smile . \'">\';
        $parts[$k] = $image . $words;
    }
}

return implode(\'\', $parts);',
    ),
  ),
  '79044d7050e7b25b73cccdb522183542' => 
  array (
    'criteria' => 
    array (
      'name' => 'reMessages',
    ),
    'object' => 
    array (
      'id' => 41,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'reMessages',
      'description' => '',
      'editor_type' => 0,
      'category' => 46,
      'cache_type' => 0,
      'plugincode' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService(\'reMessages\', \'reMessages\', MODX_CORE_PATH . \'components/remessages/model/\', $scriptProperties);
if (!$reMessages) {
    return \'Could not load reMessages class!\';
}

switch ($modx->event->name) {
    case \'OnHandleRequest\':
        if (!empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\') {
            if (!isset($_REQUEST[\'component\']) || $_REQUEST[\'component\'] != \'reMessages\' || empty($_REQUEST[\'action\'])) return;
            $output = [\'success\' => false];
            switch ($_REQUEST[\'action\']) {
                case \'getDialog\':
                    $output[\'success\'] = true;
                    $output[\'data\'] = $reMessages->getDialog($_REQUEST[\'identifier\']);
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $output[\'url\'] = $url . \'/\' . $_REQUEST[\'identifier\'];
                    }
                    break;
                case \'getThreads\':
                    $output[\'success\'] = true;
                    $output[\'data\'] = $reMessages->getThreads();
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $output[\'url\'] = $url . \'/\';
                    }
                    break;
                case \'getPageContent\':
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $parts = explode(\'/\', trim($_SERVER[\'REQUEST_URI\'], \'/\'));
                        if ($url == implode(\'/\', $parts)) {
                            $output[\'success\'] = true;
                            $output[\'data\'] = $reMessages->getThreads();
                        } else {
                            $identifier = array_pop($parts);
                            if ($url == implode(\'/\', $parts)) {
                                $output[\'success\'] = true;
                                $output[\'data\'] = $reMessages->getDialog($identifier);
                            }
                        }
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $output[\'url\'] = $url . \'/\' . $identifier;
                    }
                    break;
                case \'sendMessage\':
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $parts = explode(\'/\', trim($_SERVER[\'REQUEST_URI\'], \'/\'));
                        $identifier = array_pop($parts);
                        if ($url == implode(\'/\', $parts)) {
                            $output[\'success\'] = true;
                            $output[\'data\'] = $reMessages->sendMessage($identifier, $_POST[\'text\'], $_POST[\'reply\'], $modx->fromJSON($_POST[\'files\']));
                        }
                    }
                    break;
                case \'getTotal\':
                    $output[\'success\'] = true;
                    $output[\'data\'] = $reMessages->getTotal();
                    break;
                case \'uploadFile\':
                    $output[\'data\'] = [];
                    $dir = \'images/remessages/\' . $modx->user->id;
                    if (!file_exists(MODX_ASSETS_PATH . $dir)) {
                        $cacheManager = $modx->getCacheManager();
                        $cacheManager->writeTree(MODX_ASSETS_PATH . $dir);
                    }
                    foreach($_FILES as $file){
                        if ($image_data = getimagesize($file[\'tmp_name\'])) {
                            $ext = image_type_to_extension($image_data[2]);
                            if (!$ext) {
                              $output[\'data\'][] = [
                                  \'error\' => \'Файл \' . $file[\'name\'] . \' не может быть загружен\',
                              ];
                              break;
                            }
                            $file_name = md5_file($file[\'tmp_name\']) . $ext;
                            $file_path = MODX_ASSETS_PATH . $dir . \'/\' . $file_name;
                            $file_url = MODX_ASSETS_URL . $dir . \'/\' . $file_name;
                            if(!file_exists($file_path) && move_uploaded_file($file[\'tmp_name\'], $file_path)) {
                                $size = getimagesize($file_path);
                                if ($size[0] >= $size[1]) {
                                    $resize_options = \'w=800\';
                                } else {
                                    $resize_options = \'h=800\';
                                }
                                if ($resize = $modx->runSnippet(\'phpthumbon\', [\'input\' => $file_url, \'options\' => $resize_options])) {
                                    unlink($file_path);
                                    rename(MODX_BASE_PATH . $resize, $file_path);
                                }
                            }
                            $output[\'data\'][] = [
                                \'url\' => $file_url,
                                \'thumb\' => $modx->runSnippet(\'phpthumbon\', [\'input\' => $file_url, \'options\' => \'h=80\']),
                            ];
                        } else {
                            $output[\'data\'][] = [
                                \'error\' => \'Файл \' . $file[\'name\'] . \' не может быть загружен\',
                            ];
                        }
                    }
                    $output[\'success\'] = true;
                    break;
                default:
                    break;
            }
            echo $modx->toJSON($output);
            die();
        }
        
        break;
    case \'OnPageNotFound\':
        if ($pageId = $modx->getOption(\'remessages_page\')) {
            $url = trim($modx->makeUrl($pageId), \'/\');
            $parts = explode(\'/\', trim($_SERVER[\'REQUEST_URI\'], \'/\'));
            $identifier = array_pop($parts);
            if ($url == implode(\'/\', $parts)) {
                $_REQUEST[\'identifier\'] = $identifier;
                $modx->sendForward($pageId);
            }
        }
        break;
    default:
        break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/remessages/elements/plugins/remessages.php',
      'content' => '/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService(\'reMessages\', \'reMessages\', MODX_CORE_PATH . \'components/remessages/model/\', $scriptProperties);
if (!$reMessages) {
    return \'Could not load reMessages class!\';
}

switch ($modx->event->name) {
    case \'OnHandleRequest\':
        if (!empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\') {
            if (!isset($_REQUEST[\'component\']) || $_REQUEST[\'component\'] != \'reMessages\' || empty($_REQUEST[\'action\'])) return;
            $output = [\'success\' => false];
            switch ($_REQUEST[\'action\']) {
                case \'getDialog\':
                    $output[\'success\'] = true;
                    $output[\'data\'] = $reMessages->getDialog($_REQUEST[\'identifier\']);
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $output[\'url\'] = $url . \'/\' . $_REQUEST[\'identifier\'];
                    }
                    break;
                case \'getThreads\':
                    $output[\'success\'] = true;
                    $output[\'data\'] = $reMessages->getThreads();
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $output[\'url\'] = $url . \'/\';
                    }
                    break;
                case \'getPageContent\':
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $parts = explode(\'/\', trim($_SERVER[\'REQUEST_URI\'], \'/\'));
                        if ($url == implode(\'/\', $parts)) {
                            $output[\'success\'] = true;
                            $output[\'data\'] = $reMessages->getThreads();
                        } else {
                            $identifier = array_pop($parts);
                            if ($url == implode(\'/\', $parts)) {
                                $output[\'success\'] = true;
                                $output[\'data\'] = $reMessages->getDialog($identifier);
                            }
                        }
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $output[\'url\'] = $url . \'/\' . $identifier;
                    }
                    break;
                case \'sendMessage\':
                    if ($pageId = $modx->getOption(\'remessages_page\')) {
                        $url = trim($modx->makeUrl($pageId), \'/\');
                        $parts = explode(\'/\', trim($_SERVER[\'REQUEST_URI\'], \'/\'));
                        $identifier = array_pop($parts);
                        if ($url == implode(\'/\', $parts)) {
                            $output[\'success\'] = true;
                            $output[\'data\'] = $reMessages->sendMessage($identifier, $_POST[\'text\'], $_POST[\'reply\'], $modx->fromJSON($_POST[\'files\']));
                        }
                    }
                    break;
                case \'getTotal\':
                    $output[\'success\'] = true;
                    $output[\'data\'] = $reMessages->getTotal();
                    break;
                case \'uploadFile\':
                    $output[\'data\'] = [];
                    $dir = \'images/remessages/\' . $modx->user->id;
                    if (!file_exists(MODX_ASSETS_PATH . $dir)) {
                        $cacheManager = $modx->getCacheManager();
                        $cacheManager->writeTree(MODX_ASSETS_PATH . $dir);
                    }
                    foreach($_FILES as $file){
                        if ($image_data = getimagesize($file[\'tmp_name\'])) {
                            $ext = image_type_to_extension($image_data[2]);
                            if (!$ext) {
                              $output[\'data\'][] = [
                                  \'error\' => \'Файл \' . $file[\'name\'] . \' не может быть загружен\',
                              ];
                              break;
                            }
                            $file_name = md5_file($file[\'tmp_name\']) . $ext;
                            $file_path = MODX_ASSETS_PATH . $dir . \'/\' . $file_name;
                            $file_url = MODX_ASSETS_URL . $dir . \'/\' . $file_name;
                            if(!file_exists($file_path) && move_uploaded_file($file[\'tmp_name\'], $file_path)) {
                                $size = getimagesize($file_path);
                                if ($size[0] >= $size[1]) {
                                    $resize_options = \'w=800\';
                                } else {
                                    $resize_options = \'h=800\';
                                }
                                if ($resize = $modx->runSnippet(\'phpthumbon\', [\'input\' => $file_url, \'options\' => $resize_options])) {
                                    unlink($file_path);
                                    rename(MODX_BASE_PATH . $resize, $file_path);
                                }
                            }
                            $output[\'data\'][] = [
                                \'url\' => $file_url,
                                \'thumb\' => $modx->runSnippet(\'phpthumbon\', [\'input\' => $file_url, \'options\' => \'h=80\']),
                            ];
                        } else {
                            $output[\'data\'][] = [
                                \'error\' => \'Файл \' . $file[\'name\'] . \' не может быть загружен\',
                            ];
                        }
                    }
                    $output[\'success\'] = true;
                    break;
                default:
                    break;
            }
            echo $modx->toJSON($output);
            die();
        }
        
        break;
    case \'OnPageNotFound\':
        if ($pageId = $modx->getOption(\'remessages_page\')) {
            $url = trim($modx->makeUrl($pageId), \'/\');
            $parts = explode(\'/\', trim($_SERVER[\'REQUEST_URI\'], \'/\'));
            $identifier = array_pop($parts);
            if ($url == implode(\'/\', $parts)) {
                $_REQUEST[\'identifier\'] = $identifier;
                $modx->sendForward($pageId);
            }
        }
        break;
    default:
        break;
}',
    ),
  ),
  '9da0a8dd6c9ad00bb986ecd776359349' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 41,
      'event' => 'OnHandleRequest',
    ),
    'object' => 
    array (
      'pluginid' => 41,
      'event' => 'OnHandleRequest',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'c09a1dcd911382a62a301fef39282502' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 41,
      'event' => 'OnPageNotFound',
    ),
    'object' => 
    array (
      'pluginid' => 41,
      'event' => 'OnPageNotFound',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);