<?php
/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService('reMessages', 'reMessages', MODX_CORE_PATH . 'components/remessages/model/', $scriptProperties);
if (!$reMessages) {
    return 'Could not load reMessages class!';
}

if ($modx->getOption('remessages_reg_comet')) {
    $modx->regClientScript($reMessages->config['jsUrl'] . 'web/vendor/cometserverapi.js');
}
if ($modx->getOption('remessages_reg_pnotify')) {
    $modx->regClientScript($reMessages->config['jsUrl'] . 'web/vendor/pnotify/pnotify.js');
    $modx->regClientCSS($reMessages->config['jsUrl'] . 'web/vendor/pnotify/pnotifybrighttheme.css');
}
if ($modx->getOption('remessages_reg_kemoji')) {
    $modx->regClientScript($reMessages->config['jsUrl'] . 'web/vendor/kemoji/kemoji.min.js');
    $modx->regClientCSS($reMessages->config['jsUrl'] . 'web/vendor/kemoji/css/emoji.min.css');
    $modx->regClientCSS($reMessages->config['jsUrl'] . 'web/vendor/kemoji/css/smiles.css');
}
if ($modx->getOption('remessages_reg_fancybox')) {
    $modx->regClientScript($reMessages->config['jsUrl'] . 'web/vendor/fancybox/jquery.fancybox.pack.js');
    $modx->regClientCSS($reMessages->config['jsUrl'] . 'web/vendor/fancybox/jquery.fancybox.css');
}
if ($modx->getOption('remessages_reg_fontawesome')) {
    $modx->regClientCSS($reMessages->config['jsUrl'] . 'web/vendor/font-awesome/css/font-awesome.min.css');
}

$modx->regClientScript($reMessages->config['jsUrl'] . 'web/default.js');
$modx->regClientCSS($reMessages->config['cssUrl'] . 'web/default.css');

if ($modx->user->id) {
    $comet = [
      'id' => $modx->getOption('remessages_comet_id'),
      'key' => $modx->getOption('remessages_comet_key'),
    ];
    $link = mysqli_connect('app.comet-server.ru', $comet['id'], $comet['key'], 'CometQL_v1');
    if ($link) {
        $result = mysqli_query($link, 'INSERT INTO users_auth (id, hash) VALUES ('.$modx->user->id.', "'.md5($modx->user->password).'")');
        if(mysqli_errno($link) != 0) {
            $modx->log(modX::LOG_LEVEL_ERROR, '[reMessages] Comet error #' . mysqli_errno($link). ' ' . mysqli_error($link));
        }
    }
    $modx->regClientHTMLBlock('<script>
        cometApi.start({ dev_id: ' . $comet['id'] . ', user_id: '.$modx->user->id.', user_key: "'.md5($modx->user->password).'" });
        cometApi.subscription("re_messages_'.$modx->user->id.'", function(data) {
            reMessages.newMessage(data);
        });
        cometApi.subscription("track_online");
    </script>');
} else {
    $modx->regClientHTMLBlock('<script>
        cometApi.start({ dev_id: ' . $comet['id'] . ', user_id: 99999999, user_key: "'.md5(99999999).'" });
        cometApi.subscription("re_messages_99999999", function(data) {
            reMessages.newMessage(data);
        });
        cometApi.subscription("track_online");
    </script>');
}