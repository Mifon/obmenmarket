<?php return array (
  'c2394d71bcb5c35686a9f63fdbff57d2' => 
  array (
    'criteria' => 
    array (
      'name' => 'hybridauth',
    ),
    'object' => 
    array (
      'name' => 'hybridauth',
      'path' => '{core_path}components/hybridauth/',
      'assets_path' => '',
    ),
  ),
  'a00ed484686d8f91bcf7661ef12a0247' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Yandex',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Yandex',
      'value' => '{"keys":{"id":"7abef05d34a74c18b7af4f926fffde68","secret":"47c1670752d74006930884fda729f7ed"}}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2020-11-27 17:51:30',
    ),
  ),
  '09555e0c40b52265ab3129ff41b545e4' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Google',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Google',
      'value' => '{"keys":{"id":"642920326154-m7iv63j7qbs1vjhc76j1o58smqmlh12q.apps.googleusercontent.com","secret":"QbQo2kN6nYcWRG6TUYSckWok"},"scope":"profile https://www.googleapis.com/auth/plus.profile.emails.read"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2020-11-27 18:59:41',
    ),
  ),
  '46d20f487bfd03e389e086321ad6e75c' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Facebook',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Facebook',
      'value' => '{"keys":{"id":"5838082132931263","secret":"5471b2f079c8f331545b562d6059c3d6"},"scope":"public_profile,email"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2020-12-06 18:03:51',
    ),
  ),
  '3598d86ce9ec74b4f20ebfa0a98c8c52' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.keys.Vkontakte',
    ),
    'object' => 
    array (
      'key' => 'ha.keys.Vkontakte',
      'value' => '{"keys":{"id":"7679405","secret":"ZQWnDpaddUuXhU2MMGbP"},"scope":"email"}',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.keys',
      'editedon' => '2020-11-27 18:05:16',
    ),
  ),
  'e1cd4764fe008e9c5fc9188f922bab82' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.register_users',
    ),
    'object' => 
    array (
      'key' => 'ha.register_users',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'hybridauth',
      'area' => 'ha.main',
      'editedon' => NULL,
    ),
  ),
  'fdd6593749d3bd7d8d5cbf3d5b96bf59' => 
  array (
    'criteria' => 
    array (
      'key' => 'ha.frontend_css',
    ),
    'object' => 
    array (
      'key' => 'ha.frontend_css',
      'value' => '[[+assetsUrl]]css/web/default.css',
      'xtype' => 'textfield',
      'namespace' => 'hybridauth',
      'area' => 'ha.main',
      'editedon' => NULL,
    ),
  ),
  'a2eb85852d9968bf42e485a7d4a429bd' => 
  array (
    'criteria' => 
    array (
      'category' => 'HybridAuth',
    ),
    'object' => 
    array (
      'id' => 3,
      'parent' => 0,
      'category' => 'HybridAuth',
      'rank' => 0,
    ),
  ),
  '9a39cf4cdf11f7f24193ab0a5b924865' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.login',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.login',
      'description' => 'Chunk for guest',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<p class="header__pads-enter">Войти через:</p>
          <div class="header__pads-loginbtns hybridauth">
[[+providers]]
</div>
<button class="header__pads-loginOlay" id="buttonLogin"></button>
          <div class="header__overlay">
          </div>
[[+error:notempty=`
<div class="alert alert-block alert-error">[[+error]]</div>`]]',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.login.tpl',
      'content' => '<p class="header__pads-enter">Войти через:</p>
          <div class="header__pads-loginbtns hybridauth">
[[+providers]]
</div>
<button class="header__pads-loginOlay" id="buttonLogin"></button>
          <div class="header__overlay">
          </div>
[[+error:notempty=`
<div class="alert alert-block alert-error">[[+error]]</div>`]]',
    ),
  ),
  '1de74938bbcf821a653a9b57617ae42d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.logout',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.logout',
      'description' => 'Chunk for logged in',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<div class="header__pads hybridauth">
          <a href="http://obmen.market/profile?user=[[+modx.user.id]]" class="header__pads-user">
            <p class="header__pads-username">[[+fullname]]</p>
            <img
              class="header__pads-usericon"
              src="[[+photo]]"
              alt="[[+fullname]]"
            />
          </a>
        </div>
        
        [[+error:notempty=`
<div class="alert alert-block alert-error">[[+error]]</div>`]]',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.logout.tpl',
      'content' => '<div class="header__pads hybridauth">
          <a href="http://obmen.market/profile?user=[[+modx.user.id]]" class="header__pads-user">
            <p class="header__pads-username">[[+fullname]]</p>
            <img
              class="header__pads-usericon"
              src="[[+photo]]"
              alt="[[+fullname]]"
            />
          </a>
        </div>
        
        [[+error:notempty=`
<div class="alert alert-block alert-error">[[+error]]</div>`]]',
    ),
  ),
  'c864bc676b050314531cb0673c541ecc' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.profile',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.profile',
      'description' => 'Chunk for profile update',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<form action="[[~[[*id]]]]" method="post" class="form-horizontal" id="profileForm" enctype="multipart/form-data">

    <div class="control-group">
        <label class="control-label">[[%ha.providers_available]]</label>
        <div class="controls">
            [[+providers]]
        </div>
    </div>

    <input type="hidden" name="hauth_action" value="updateProfile"/>

</form>
[[+success:is=`1`:then=`
<div class="alert alert-block">[[%ha.profile_update_success]]</div>`]]
[[+success:is=`0`:then=`
<div class="alert alert-block alert-error">[[%ha.profile_update_error]] [[+error.message]]</div>`]]',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.profile.tpl',
      'content' => '<form action="[[~[[*id]]]]" method="post" class="form-horizontal" id="profileForm" enctype="multipart/form-data">

    <div class="control-group">
        <label class="control-label">[[%ha.providers_available]]</label>
        <div class="controls">
            [[+providers]]
        </div>
    </div>

    <input type="hidden" name="hauth_action" value="updateProfile"/>

</form>
[[+success:is=`1`:then=`
<div class="alert alert-block">[[%ha.profile_update_success]]</div>`]]
[[+success:is=`0`:then=`
<div class="alert alert-block alert-error">[[%ha.profile_update_error]] [[+error.message]]</div>`]]',
    ),
  ),
  '33f787827c5e586a561ef4091e82cbfc' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.provider',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.provider',
      'description' => 'Chunk for authorization provider',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<a
  href="[[+login_url]]&amp;provider=[[+title]]"
  rel="nofollow"
  title="[[+title]]"
  class="[[+provider]] header__pads-[[+title:is=`Facebook`:then=`facebook`]][[+title:is=`Vkontakte`:then=`vkontakte`]][[+title:is=`Google`:then=`google`]][[+title:is=`Yandex`:then=`yandex`]]"
></a>
',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.provider.tpl',
      'content' => '<a
  href="[[+login_url]]&amp;provider=[[+title]]"
  rel="nofollow"
  title="[[+title]]"
  class="[[+provider]] header__pads-[[+title:is=`Facebook`:then=`facebook`]][[+title:is=`Vkontakte`:then=`vkontakte`]][[+title:is=`Google`:then=`google`]][[+title:is=`Yandex`:then=`yandex`]]"
></a>
',
    ),
  ),
  'bd8822cadb074f1487d560e965fcd8f3' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.HybridAuth.provider.active',
    ),
    'object' => 
    array (
      'id' => 17,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.HybridAuth.provider.active',
      'description' => 'Chunk for active authorization provider',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '<a href="[[+login_url]]&amp;provider=[[+title]]" rel="nofollow" title="[[+title]]" class="[[+provider]] header__pads-[[+title:is=`Facebook`:then=`facebook`]][[+title:is=`Vkontakte`:then=`vkontakte`]][[+title:is=`Google`:then=`google`]][[+title:is=`Yandex`:then=`yandex`]] active [[+provider]]" data-link="[[+site_url]]assets/images/icons/[[+title:is=`Facebook`:then=`fb`]][[+title:is=`Vkontakte`:then=`vk`]][[+title:is=`Google`:then=`google`]][[+title:is=`Yandex`:then=`yandex`]].png" ></a>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/chunks/chunk.provider_active.tpl',
      'content' => '<a href="[[+login_url]]&amp;provider=[[+title]]" rel="nofollow" title="[[+title]]" class="[[+provider]] header__pads-[[+title:is=`Facebook`:then=`facebook`]][[+title:is=`Vkontakte`:then=`vkontakte`]][[+title:is=`Google`:then=`google`]][[+title:is=`Yandex`:then=`yandex`]] active [[+provider]]" data-link="[[+site_url]]assets/images/icons/[[+title:is=`Facebook`:then=`fb`]][[+title:is=`Vkontakte`:then=`vk`]][[+title:is=`Google`:then=`google`]][[+title:is=`Yandex`:then=`yandex`]].png" ></a>',
    ),
  ),
  '9ee36a3737990e6c48f43174ff02fd10' => 
  array (
    'criteria' => 
    array (
      'name' => 'HybridAuth',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'HybridAuth',
      'description' => 'Social authorization',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */

$modx->error->reset();
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
    return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
    return $modx->error->message;
} // For compatibility with old snippet
elseif (!empty($action)) {
    $tmp = strtolower($action);
    if ($tmp == \'getprofile\' || $tmp == \'updateprofile\') {
        return $modx->runSnippet(\'haProfile\', $scriptProperties);
    }
}

if (empty($loginTpl)) {
    $loginTpl = \'tpl.HybridAuth.login\';
}
if (empty($logoutTpl)) {
    $logoutTpl = \'tpl.HybridAuth.logout\';
}
if (empty($providerTpl)) {
    $providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
    $activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}

$url = $HybridAuth->getUrl();
$error = \'\';
if (!empty($_SESSION[\'HybridAuth\'][\'error\'])) {
    $error = $_SESSION[\'HybridAuth\'][\'error\'];
    unset($_SESSION[\'HybridAuth\'][\'error\']);
}

if ($modx->user->isAuthenticated($modx->context->key)) {
    $add = array();
    if ($services = $modx->user->getMany(\'Services\')) {
        /** @var haUserService $service */
        foreach ($services as $service) {
            $add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
        }
    }

    $user = $modx->user->toArray();
    $profile = $modx->user->Profile->toArray();
    unset($profile[\'id\']);
    $arr = array_merge(
        $user,
        $profile,
        $add,
        array(
            \'login_url\' => $url . \'login\',
            \'logout_url\' => $url . \'logout\',
            \'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
            \'error\' => $error,
            \'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
        )
    );

    return $HybridAuth->getChunk($logoutTpl, $arr);
} else {
    $arr = array(
        \'login_url\' => $url . \'login\',
        \'logout_url\' => $url . \'logout\',
        \'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
        \'error\' => $error,
    );

    return $HybridAuth->getChunk($loginTpl, $arr);
}',
      'locked' => 0,
      'properties' => 'a:12:{s:9:"providers";a:7:{s:4:"name";s:9:"providers";s:4:"desc";s:12:"ha.providers";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:10:"rememberme";a:7:{s:4:"name";s:10:"rememberme";s:4:"desc";s:13:"ha.rememberme";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:1;s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:8:"loginTpl";a:7:{s:4:"name";s:8:"loginTpl";s:4:"desc";s:11:"ha.loginTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:20:"tpl.HybridAuth.login";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:9:"logoutTpl";a:7:{s:4:"name";s:9:"logoutTpl";s:4:"desc";s:12:"ha.logoutTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:21:"tpl.HybridAuth.logout";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"providerTpl";a:7:{s:4:"name";s:11:"providerTpl";s:4:"desc";s:14:"ha.providerTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.HybridAuth.provider";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:17:"activeProviderTpl";a:7:{s:4:"name";s:17:"activeProviderTpl";s:4:"desc";s:20:"ha.activeProviderTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.HybridAuth.provider.active";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:6:"groups";a:7:{s:4:"name";s:6:"groups";s:4:"desc";s:9:"ha.groups";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:12:"loginContext";a:7:{s:4:"name";s:12:"loginContext";s:4:"desc";s:15:"ha.loginContext";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"addContexts";a:7:{s:4:"name";s:11:"addContexts";s:4:"desc";s:14:"ha.addContexts";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:15:"loginResourceId";a:7:{s:4:"name";s:15:"loginResourceId";s:4:"desc";s:18:"ha.loginResourceId";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:16:"logoutResourceId";a:7:{s:4:"name";s:16:"logoutResourceId";s:4:"desc";s:19:"ha.logoutResourceId";s:4:"type";s:11:"numberfield";s:7:"options";a:0:{}s:5:"value";i:0;s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"redirectUri";a:7:{s:4:"name";s:11:"redirectUri";s:4:"desc";s:14:"ha.redirectUri";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/snippets/snippet.hybridauth.php',
      'content' => '/** @var array $scriptProperties */

$modx->error->reset();
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
    return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
    return $modx->error->message;
} // For compatibility with old snippet
elseif (!empty($action)) {
    $tmp = strtolower($action);
    if ($tmp == \'getprofile\' || $tmp == \'updateprofile\') {
        return $modx->runSnippet(\'haProfile\', $scriptProperties);
    }
}

if (empty($loginTpl)) {
    $loginTpl = \'tpl.HybridAuth.login\';
}
if (empty($logoutTpl)) {
    $logoutTpl = \'tpl.HybridAuth.logout\';
}
if (empty($providerTpl)) {
    $providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
    $activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}

$url = $HybridAuth->getUrl();
$error = \'\';
if (!empty($_SESSION[\'HybridAuth\'][\'error\'])) {
    $error = $_SESSION[\'HybridAuth\'][\'error\'];
    unset($_SESSION[\'HybridAuth\'][\'error\']);
}

if ($modx->user->isAuthenticated($modx->context->key)) {
    $add = array();
    if ($services = $modx->user->getMany(\'Services\')) {
        /** @var haUserService $service */
        foreach ($services as $service) {
            $add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
        }
    }

    $user = $modx->user->toArray();
    $profile = $modx->user->Profile->toArray();
    unset($profile[\'id\']);
    $arr = array_merge(
        $user,
        $profile,
        $add,
        array(
            \'login_url\' => $url . \'login\',
            \'logout_url\' => $url . \'logout\',
            \'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
            \'error\' => $error,
            \'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
        )
    );

    return $HybridAuth->getChunk($logoutTpl, $arr);
} else {
    $arr = array(
        \'login_url\' => $url . \'login\',
        \'logout_url\' => $url . \'logout\',
        \'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
        \'error\' => $error,
    );

    return $HybridAuth->getChunk($loginTpl, $arr);
}',
    ),
  ),
  '671ec720c4acedfe900e32437802e70a' => 
  array (
    'criteria' => 
    array (
      'name' => 'haProfile',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'haProfile',
      'description' => 'Update your profile',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'snippet' => '/** @var array $scriptProperties */

$modx->error->reset();
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
    return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
    return $modx->error->message;
} elseif (!$modx->user->isAuthenticated($modx->context->key)) {
    return $modx->lexicon(\'ha_err_not_logged_in\');
}

if (empty($profileTpl)) {
    $profileTpl = \'tpl.HybridAuth.profile\';
}
if (empty($profileFields)) {
    $profileFields = \'username:25,email:50,fullname:50,phone:12,mobilephone:12,dob:10,gender,address,country,city,state,zip,fax,photo,comment,website\';
}
if (empty($requiredFields)) {
    $requiredFields = \'username,email,fullname\';
}
if (empty($providerTpl)) {
    $providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
    $activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}
$data = array();

// Update of profile
if ((!empty($_REQUEST[\'action\']) && strtolower($_REQUEST[\'action\']) == \'updateprofile\') || (!empty($_REQUEST[\'hauth_action\']) && strtolower($_REQUEST[\'hauth_action\']) == \'updateprofile\')) {
    $profileFields = array_map(\'trim\', explode(\',\', $profileFields));
    foreach ($profileFields as $field) {
        if (strpos($field, \':\') !== false) {
            list($key, $length) = explode(\':\', $field);
        } else {
            $key = $field;
            $length = 0;
        }

        if (isset($_REQUEST[$key])) {
            if ($key == \'comment\') {
                $data[$key] = empty($length) ? $_REQUEST[$key] : substr($_REQUEST[$key], $length);
            } else {
                $data[$key] = $HybridAuth->Sanitize($_REQUEST[$key], $length);
            }
        }
    }

    $data[\'requiredFields\'] = array_map(\'trim\', explode(\',\', $requiredFields));

    /** @var modProcessorResponse $response */
    $response = $HybridAuth->runProcessor(\'web/user/update\', $data);
    if ($response->isError()) {
        $data[\'error.message\'] = $response->getMessage();
        foreach ($response->errors as $error) {
            $data[\'error.\' . $error->field] = $error->message;
        }
    }
    $data[\'success\'] = (integer)!$response->isError();
}

$add = array();
if ($services = $modx->user->getMany(\'Services\')) {
    /** @var haUserService $service */
    foreach ($services as $service) {
        $add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
    }
}

$url = $HybridAuth->getUrl();
$user = $modx->user->toArray();
$profile = $modx->user->Profile->toArray();
$data = array_merge(
    $user,
    $profile,
    $add,
    $data,
    array(
        \'login_url\' => $url . \'login\',
        \'logout_url\' => $url . \'logout\',
        \'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
        \'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
    )
);

return $HybridAuth->getChunk($profileTpl, $data);',
      'locked' => 0,
      'properties' => 'a:5:{s:10:"profileTpl";a:7:{s:4:"name";s:10:"profileTpl";s:4:"desc";s:13:"ha.profileTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:22:"tpl.HybridAuth.profile";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:13:"profileFields";a:7:{s:4:"name";s:13:"profileFields";s:4:"desc";s:16:"ha.profileFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:127:"username:25,email:50,fullname:50,phone:12,mobilephone:12,dob:10,gender,address,country,city,state,zip,fax,photo,comment,website";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:14:"requiredFields";a:7:{s:4:"name";s:14:"requiredFields";s:4:"desc";s:17:"ha.requiredFields";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"username,email,fullname";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:11:"providerTpl";a:7:{s:4:"name";s:11:"providerTpl";s:4:"desc";s:14:"ha.providerTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:23:"tpl.HybridAuth.provider";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}s:17:"activeProviderTpl";a:7:{s:4:"name";s:17:"activeProviderTpl";s:4:"desc";s:20:"ha.activeProviderTpl";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:30:"tpl.HybridAuth.provider.active";s:7:"lexicon";s:21:"hybridauth:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/snippets/snippet.haprofile.php',
      'content' => '/** @var array $scriptProperties */

$modx->error->reset();
if (!$modx->loadClass(\'hybridauth\', MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\', false, true)) {
    return;
}
$HybridAuth = new HybridAuth($modx, $scriptProperties);
$HybridAuth->initialize($modx->context->key);

if ($modx->error->hasError()) {
    return $modx->error->message;
} elseif (!$modx->user->isAuthenticated($modx->context->key)) {
    return $modx->lexicon(\'ha_err_not_logged_in\');
}

if (empty($profileTpl)) {
    $profileTpl = \'tpl.HybridAuth.profile\';
}
if (empty($profileFields)) {
    $profileFields = \'username:25,email:50,fullname:50,phone:12,mobilephone:12,dob:10,gender,address,country,city,state,zip,fax,photo,comment,website\';
}
if (empty($requiredFields)) {
    $requiredFields = \'username,email,fullname\';
}
if (empty($providerTpl)) {
    $providerTpl = \'tpl.HybridAuth.provider\';
}
if (empty($activeProviderTpl)) {
    $activeProviderTpl = \'tpl.HybridAuth.provider.active\';
}
$data = array();

// Update of profile
if ((!empty($_REQUEST[\'action\']) && strtolower($_REQUEST[\'action\']) == \'updateprofile\') || (!empty($_REQUEST[\'hauth_action\']) && strtolower($_REQUEST[\'hauth_action\']) == \'updateprofile\')) {
    $profileFields = array_map(\'trim\', explode(\',\', $profileFields));
    foreach ($profileFields as $field) {
        if (strpos($field, \':\') !== false) {
            list($key, $length) = explode(\':\', $field);
        } else {
            $key = $field;
            $length = 0;
        }

        if (isset($_REQUEST[$key])) {
            if ($key == \'comment\') {
                $data[$key] = empty($length) ? $_REQUEST[$key] : substr($_REQUEST[$key], $length);
            } else {
                $data[$key] = $HybridAuth->Sanitize($_REQUEST[$key], $length);
            }
        }
    }

    $data[\'requiredFields\'] = array_map(\'trim\', explode(\',\', $requiredFields));

    /** @var modProcessorResponse $response */
    $response = $HybridAuth->runProcessor(\'web/user/update\', $data);
    if ($response->isError()) {
        $data[\'error.message\'] = $response->getMessage();
        foreach ($response->errors as $error) {
            $data[\'error.\' . $error->field] = $error->message;
        }
    }
    $data[\'success\'] = (integer)!$response->isError();
}

$add = array();
if ($services = $modx->user->getMany(\'Services\')) {
    /** @var haUserService $service */
    foreach ($services as $service) {
        $add = array_merge($add, $service->toArray(strtolower($service->get(\'provider\') . \'.\')));
    }
}

$url = $HybridAuth->getUrl();
$user = $modx->user->toArray();
$profile = $modx->user->Profile->toArray();
$data = array_merge(
    $user,
    $profile,
    $add,
    $data,
    array(
        \'login_url\' => $url . \'login\',
        \'logout_url\' => $url . \'logout\',
        \'providers\' => $HybridAuth->getProvidersLinks($providerTpl, $activeProviderTpl),
        \'gravatar\' => \'https://gravatar.com/avatar/\' . md5(strtolower($profile[\'email\'])),
    )
);

return $HybridAuth->getChunk($profileTpl, $data);',
    ),
  ),
  '42d60dc0fffb572b62207f12c06b72f9' => 
  array (
    'criteria' => 
    array (
      'name' => 'HybridAuth',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'HybridAuth',
      'description' => '',
      'editor_type' => 0,
      'category' => 3,
      'cache_type' => 0,
      'plugincode' => 'switch ($modx->event->name) {

    case \'OnHandleRequest\':
        if ($modx->context->key != \'web\' && !$modx->user->id) {
            if ($user = $modx->getAuthenticatedUser($modx->context->key)) {
                $modx->user = $user;
                $modx->getUser($modx->context->key);
            }
        }

        if ($modx->user->isAuthenticated($modx->context->key)) {
            if (!$modx->user->active || $modx->user->Profile->blocked) {
                $modx->runProcessor(\'security/logout\');
                $modx->sendRedirect($modx->makeUrl($modx->getOption(\'site_start\'), \'\', \'\', \'full\'));
            }
        }

        if (!empty($_REQUEST[\'hauth_action\']) || !empty($_REQUEST[\'hauth_done\'])) {
            $config = !empty($_SESSION[\'HybridAuth\'][$modx->context->key])
                ? $_SESSION[\'HybridAuth\'][$modx->context->key]
                : array();

            $path = MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\';
            /** @var HybridAuth $HybridAuth */
            if ($HybridAuth = $modx->getService(\'HybridAuth\', \'HybridAuth\', $path, $config)) {
                if (!empty($_REQUEST[\'hauth_action\'])) {
                    switch ($_REQUEST[\'hauth_action\']) {
                        case \'login\':
                            if (!empty($_REQUEST[\'provider\'])) {
                                $HybridAuth->Login($_REQUEST[\'provider\']);
                            } else {
                                $HybridAuth->Refresh();
                            }
                            break;
                        case \'logout\':
                            $HybridAuth->Logout();
                            break;
                        case \'unbind\':
                            if (!empty($_REQUEST[\'provider\'])) {
                                $HybridAuth->runProcessor(\'web/service/remove\', array(
                                    \'provider\' => $_REQUEST[\'provider\'],
                                ));
                            }
                            $HybridAuth->Refresh();
                            break;
                    }
                } else {
                    $HybridAuth->Login($_REQUEST[\'hauth_done\']);
                }
            }
        }
        break;

    case \'OnWebAuthentication\':
        $modx->event->_output = !empty($_SESSION[\'HybridAuth\'][\'verified\']);
        unset($_SESSION[\'HybridAuth\'][\'verified\']);
        break;

    case \'OnUserFormPrerender\':
        /** @var modUser $user */
        if (!isset($user) || $user->get(\'id\') < 1) {
            return;
        }
        $path = MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\';
        if ($HybridAuth = $modx->getService(\'HybridAuth\', \'HybridAuth\', $path)) {
            $HybridAuth->regManagerTab($modx->controller, $user);
        }
        break;
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => 'core/components/hybridauth/elements/plugins/plugin.hybridauth.php',
      'content' => 'switch ($modx->event->name) {

    case \'OnHandleRequest\':
        if ($modx->context->key != \'web\' && !$modx->user->id) {
            if ($user = $modx->getAuthenticatedUser($modx->context->key)) {
                $modx->user = $user;
                $modx->getUser($modx->context->key);
            }
        }

        if ($modx->user->isAuthenticated($modx->context->key)) {
            if (!$modx->user->active || $modx->user->Profile->blocked) {
                $modx->runProcessor(\'security/logout\');
                $modx->sendRedirect($modx->makeUrl($modx->getOption(\'site_start\'), \'\', \'\', \'full\'));
            }
        }

        if (!empty($_REQUEST[\'hauth_action\']) || !empty($_REQUEST[\'hauth_done\'])) {
            $config = !empty($_SESSION[\'HybridAuth\'][$modx->context->key])
                ? $_SESSION[\'HybridAuth\'][$modx->context->key]
                : array();

            $path = MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\';
            /** @var HybridAuth $HybridAuth */
            if ($HybridAuth = $modx->getService(\'HybridAuth\', \'HybridAuth\', $path, $config)) {
                if (!empty($_REQUEST[\'hauth_action\'])) {
                    switch ($_REQUEST[\'hauth_action\']) {
                        case \'login\':
                            if (!empty($_REQUEST[\'provider\'])) {
                                $HybridAuth->Login($_REQUEST[\'provider\']);
                            } else {
                                $HybridAuth->Refresh();
                            }
                            break;
                        case \'logout\':
                            $HybridAuth->Logout();
                            break;
                        case \'unbind\':
                            if (!empty($_REQUEST[\'provider\'])) {
                                $HybridAuth->runProcessor(\'web/service/remove\', array(
                                    \'provider\' => $_REQUEST[\'provider\'],
                                ));
                            }
                            $HybridAuth->Refresh();
                            break;
                    }
                } else {
                    $HybridAuth->Login($_REQUEST[\'hauth_done\']);
                }
            }
        }
        break;

    case \'OnWebAuthentication\':
        $modx->event->_output = !empty($_SESSION[\'HybridAuth\'][\'verified\']);
        unset($_SESSION[\'HybridAuth\'][\'verified\']);
        break;

    case \'OnUserFormPrerender\':
        /** @var modUser $user */
        if (!isset($user) || $user->get(\'id\') < 1) {
            return;
        }
        $path = MODX_CORE_PATH . \'components/hybridauth/model/hybridauth/\';
        if ($HybridAuth = $modx->getService(\'HybridAuth\', \'HybridAuth\', $path)) {
            $HybridAuth->regManagerTab($modx->controller, $user);
        }
        break;
}',
    ),
  ),
  '7331e80a973f29b0020a93ec669ab8af' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnHandleRequest',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnHandleRequest',
      'priority' => 10,
      'propertyset' => 0,
    ),
  ),
  'bb1d8b9c6c13a0fa0d4cb1a374501444' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnUserFormPrerender',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnUserFormPrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '30ba6a6c41d8512e6bc4bc0d1e82193f' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 2,
      'event' => 'OnWebAuthentication',
    ),
    'object' => 
    array (
      'pluginid' => 2,
      'event' => 'OnWebAuthentication',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);