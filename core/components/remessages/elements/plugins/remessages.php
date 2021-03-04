<?php
/** @var modX $modx */
/** @var array $scriptProperties */
/** @var reMessages $reMessages */
$reMessages = $modx->getService('reMessages', 'reMessages', MODX_CORE_PATH . 'components/remessages/model/', $scriptProperties);
if (!$reMessages) {
    return 'Could not load reMessages class!';
}

switch ($modx->event->name) {
    case 'OnHandleRequest':
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
            if (!isset($_REQUEST['component']) || $_REQUEST['component'] != 'reMessages' || empty($_REQUEST['action'])) return;
            $output = ['success' => false];
            switch ($_REQUEST['action']) {
                case 'getDialog':
                    $output['success'] = true;
                    $output['data'] = $reMessages->getDialog($_REQUEST['identifier']);
                    if ($pageId = $modx->getOption('remessages_page')) {
                        $url = trim($modx->makeUrl($pageId), '/');
                        $output['url'] = $url . '/' . $_REQUEST['identifier'];
                    }
                    break;
                case 'getThreads':
                    $output['success'] = true;
                    $output['data'] = $reMessages->getThreads();
                    if ($pageId = $modx->getOption('remessages_page')) {
                        $url = trim($modx->makeUrl($pageId), '/');
                        $output['url'] = $url . '/';
                    }
                    break;
                case 'getPageContent':
                    if ($pageId = $modx->getOption('remessages_page')) {
                        $url = trim($modx->makeUrl($pageId), '/');
                        $parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                        if ($url == implode('/', $parts)) {
                            $output['success'] = true;
                            $output['data'] = $reMessages->getThreads();
                        } else {
                            $identifier = array_pop($parts);
                            if ($url == implode('/', $parts)) {
                                $output['success'] = true;
                                $output['data'] = $reMessages->getDialog($identifier);
                            }
                        }
                        $url = trim($modx->makeUrl($pageId), '/');
                        $output['url'] = $url . '/' . $identifier;
                    }
                    break;
                case 'sendMessage':
                    if ($pageId = $modx->getOption('remessages_page')) {
                        $url = trim($modx->makeUrl($pageId), '/');
                        $parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                        $identifier = array_pop($parts);
                        if ($url == implode('/', $parts)) {
                            $output['success'] = true;
                            $output['data'] = $reMessages->sendMessage($identifier, $_POST['text'], $_POST['reply'], $modx->fromJSON($_POST['files']));
                        }
                    }
                    break;
                case 'getTotal':
                    $output['success'] = true;
                    $output['data'] = $reMessages->getTotal();
                    break;
                case 'uploadFile':
                    $output['data'] = [];
                    $dir = 'images/remessages/' . $modx->user->id;
                    if (!file_exists(MODX_ASSETS_PATH . $dir)) {
                        $cacheManager = $modx->getCacheManager();
                        $cacheManager->writeTree(MODX_ASSETS_PATH . $dir);
                    }
                    foreach($_FILES as $file){
                        if ($image_data = getimagesize($file['tmp_name'])) {
                            $ext = image_type_to_extension($image_data[2]);
                            if (!$ext) {
                              $output['data'][] = [
                                  'error' => 'Файл ' . $file['name'] . ' не может быть загружен',
                              ];
                              break;
                            }
                            $file_name = md5_file($file['tmp_name']) . $ext;
                            $file_path = MODX_ASSETS_PATH . $dir . '/' . $file_name;
                            $file_url = MODX_ASSETS_URL . $dir . '/' . $file_name;
                            if(!file_exists($file_path) && move_uploaded_file($file['tmp_name'], $file_path)) {
                                $size = getimagesize($file_path);
                                if ($size[0] >= $size[1]) {
                                    $resize_options = 'w=800';
                                } else {
                                    $resize_options = 'h=800';
                                }
                                if ($resize = $modx->runSnippet('phpthumbon', ['input' => $file_url, 'options' => $resize_options])) {
                                    unlink($file_path);
                                    rename(MODX_BASE_PATH . $resize, $file_path);
                                }
                            }
                            $output['data'][] = [
                                'url' => $file_url,
                                'thumb' => $modx->runSnippet('phpthumbon', ['input' => $file_url, 'options' => 'h=80']),
                            ];
                        } else {
                            $output['data'][] = [
                                'error' => 'Файл ' . $file['name'] . ' не может быть загружен',
                            ];
                        }
                    }
                    $output['success'] = true;
                    break;
                default:
                    break;
            }
            echo $modx->toJSON($output);
            die();
        }
        
        break;
    case 'OnPageNotFound':
        if ($pageId = $modx->getOption('remessages_page')) {
            $url = trim($modx->makeUrl($pageId), '/');
            $parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
            $identifier = array_pop($parts);
            if ($url == implode('/', $parts)) {
                $_REQUEST['identifier'] = $identifier;
                $modx->sendForward($pageId);
            }
        }
        break;
    default:
        break;
}