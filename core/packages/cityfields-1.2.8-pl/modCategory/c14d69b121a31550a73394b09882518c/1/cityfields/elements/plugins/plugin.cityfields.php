<?php
if (!$modx->getOption('cityfields_active')) return false;

$cityFields = $modx->getService('cityfields','cityFields',$modx->getOption('cityfields.core_path',null,$modx->getOption('core_path').'components/cityfields/').'model/cityfields/',$scriptProperties);
if (!($cityFields instanceof cityFields)) return false;

switch($modx->event->name) {
    
    case 'msOnBeforeCreateOrder':
        $order = $modx->getOption('msOrder', $scriptProperties);
        $properties = $order->get('properties');
        $properties['cf.from_city'] = $cityFields->currentCityId;
        $order->set('properties', $properties);
        break;

    case 'msOnGetProductPrice':
        $data = $modx->getOption('data', $scriptProperties);
        $product = $modx->getOption('product', $scriptProperties);
        $product_id = $product ? $product->get('id') : $data['id'];
        $field = $modx->getObject('cfField', array(
            'city_id' => $cityFields->currentCityId,
            'placeholder' => '[pre]'.$product_id.'_price[/pre]'
        ));
        if ( $field ) {
            $values = & $modx->event->returnedValues;
            $values['price'] = $field->get('value');
        }
        break;

    case 'msop2OnBeforeProductGetPrice': case 'msopOnBeforeGetCost':
        $product_id = $modx->getOption('rid', $scriptProperties);
        $price = $modx->getOption('price', $scriptProperties);
        $modification = $modx->getOption('modification', $scriptProperties);
        $field = $modx->getObject('cfField', array(
            'city_id' => $cityFields->currentCityId,
            'placeholder' => '[pre]'.$product_id.'_price[/pre]'
        ));
        if ( $field ) {
            $values = & $modx->event->returnedValues;
            $values['price'] = $field->get('value');
            if ( is_array($modification) && $modification['id'] == 0 && $modification['type'] == 1 && $price == $modification['price'] ) {
                $values['modification']['price'] = $field->get('value');
            }
        }
        break;

    case 'OnDocFormPrerender':
        $mode = $modx->getOption('mode', $scriptProperties);
        if ($mode != 'upd') break;
        $res = $modx->getObject("modResource", $scriptProperties['id']);
        if ( !$res || $res->get('class_key') != 'msProduct' ) break;
        $modx->controller->addLexiconTopic('cityfields:manager');
        $modx->controller->addJavascript($cityFields->config['jsUrl'].'mgr/cityfields.js');
        $modx->controller->addLastJavascript($cityFields->config['jsUrl'].'mgr/prices.grid.js');
        $modx->controller->addLastJavascript($cityFields->config['jsUrl'] . 'mgr/cityfields.utils.js');
        if ($modx->getCount('modPlugin', array('name' => 'AjaxManager', 'disabled' => false))) {
            $modx->controller->addHtml(str_replace('                    ', '', '
                <script type="text/javascript">
                    cityFields.config.connector_url = \'' . $cityFields->config['connectorUrl'] . '\';
                    Ext.onReady(function() {
                        window.setTimeout(function() {
                            var tabs = Ext.getCmp(\'minishop2-product-settings-panel\');
                            if (!tabs) tabs = Ext.getCmp(\'minishop2-product-tabs\');
                            if (tabs) {
                                tabs.add({
                                    title: _(\'cityfields_prices\')
                                    ,hideMode: \'offsets\'
                                    ,items: [
                                        {
                                            html: _(\'cityfields_prices_intro\'),
                                            cls: \'modx-page-header container\',
                                            border: false
                                        },{
                                            xtype: \'cityfields-grid-prices\',
                                            cls: (tabs.id == \'minishop2-product-tabs\' ? \'main-wrapper\' : \'\'),
                                            style: (tabs.id == \'minishop2-product-tabs\' ? \'padding-top: 0px;\' : \'\')
                                        }
                                    ]
                                });
                            }
                        }, 10);
                    });
                </script>'
            ));
        } else {
            $modx->controller->addHtml(str_replace('                    ', '', '
                <script type="text/javascript">
                    cityFields.config.connector_url = \'' . $cityFields->config['connectorUrl'] . '\';
                    var tabs = [\'minishop2-product-settings-panel\', \'minishop2-product-tabs\'];
                    for (var i=0; i<tabs.length; i++) {
                        Ext.ComponentMgr.onAvailable(tabs[i], function() {
                            this.on(\'beforerender\', function() {
                                this.add({
                                    title: _(\'cityfields_prices\')
                                    ,hideMode: \'offsets\'
                                    ,items: [
                                        {
                                            html: _(\'cityfields_prices_intro\'),
                                            cls: \'modx-page-header container\',
                                            border: false
                                        },{
                                            xtype: \'cityfields-grid-prices\',
                                            cls: (this.id == \'minishop2-product-tabs\' ? \'main-wrapper\' : \'\'),
                                            style: (this.id == \'minishop2-product-tabs\' ? \'padding-top: 0px;\' : \'\')
                                        }
                                    ]
                                });
                            });
                        });
                    }
                </script>
            '));
        }
        break;

    case 'OnHandleRequest':
        if ( $modx->context->get('key') == 'mgr' ) break;
        $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
        if ( !$isAjax && !$this->cityInDomain && isset($_REQUEST['city']) ) {
            if ( !is_numeric($_REQUEST['city']) ) {
                $city = $modx->getObject('cfCity', array(
                    array(
                        'key' => $_REQUEST['city'],
                        'OR:name:=' => $_REQUEST['city']
                    ),
                    'active' => 1
                ));
                if ( is_object($city) ) {
                    $city = $city->get('id');
                } else break;
            }
            setcookie('cfCity', $city ?: $_REQUEST['city'], time()+94608000, '/', '.'.MODX_HTTP_HOST);
            $modx->sendRedirect(MODX_URL_SCHEME . MODX_HTTP_HOST . preg_replace('/[?&]?city=[^&]+/ui', '', $_SERVER['REQUEST_URI']));
            break;
        }
        if ( empty($_REQUEST['cityfields_action']) || !$isAjax ) break;
        $action = trim($_REQUEST['cityfields_action']);
        switch ($action) {
            case 'city/select':
                $city = intval($_REQUEST['city']);
                if ( $city > 0 ) {
                    setcookie('cfCity', $city, time()+94608000, '/', '.'.MODX_HTTP_HOST);
                    $response = array(
                        'success' => true,
                        'city' => $city
                    );
                } else
                    $response = array(
                        'success' => false,
                        'message' => $modx->lexicon('invalid_data')
                    );
                break;
            case 'city/search':
                $q = $modx->newQuery('cfCity');
                $q->where(array('active' => 1));
                if ( !empty($_REQUEST['query']) ) $q->where(array('name:LIKE' => $modx->sanitizeString($_REQUEST['query']).'%'));
                $q->sortby('name', 'ASC');
                $cities = $modx->getCollection('cfCity', $q);
                $response = array();
                if ( count($cities) > 0 ) {
                    if ( $cityFields->cityInDomain ) {
                        $default = $modx->getOption('cityfields_default_city', $scriptProperties, 1);
                        //$host = function_exists('idn_to_utf8') ? idn_to_utf8($_SERVER['HTTP_REFERER']) : $_SERVER['HTTP_REFERER'];
                        $host = $_SERVER['HTTP_REFERER'];
                        $q = $modx->getObject('cfCity', $cityFields->currentCityId);
                        //if ( $q && $q->get('id') != $default ) $host = preg_replace('/^(\w+):\/\/'.$q->get('key').'\./ui', '$1://', $host, 1);
                        if ( $q && $q->get('id') != $default ) $host = preg_replace('/^(\w+):\/\/'.(function_exists('idn_to_ascii') ? idn_to_ascii($q->get('key')) : $q->get('key')).'\./ui', '$1://', $host, 1);
                    }
                    $i = 0;
                    foreach ( $cities as $city ) {
                        $response[$i] = $city->toArray();
                        if ( $cityFields->cityInDomain ) {
                            //$response[$i]['link'] = $city->get('id') != $default ? preg_replace('/^(\w+)\:\/\//ui', '$1://'.$city->get('key').'.', $host, 1) : $host;
                            $response[$i]['link'] = $city->get('id') != $default ? preg_replace('/^(\w+)\:\/\//ui', '$1://'.(function_exists('idn_to_ascii') ? idn_to_ascii($city->get('key')) : $city->get('key')).'.', $host, 1) : $host;
                        } else {
                            $response[$i]['link'] = $_SERVER['HTTP_REFERER'].(strpos($_SERVER['HTTP_REFERER'], '?')===false?'?':'&').'city='.$city->get('id');
                        }
                        $i++;
                    }
                }
                break;
            default:
                $response = array(
                    'success' => false,
                    'message' => $modx->lexicon('invalid_data')
                );
                break;
        }
        @session_write_close();
        echo $modx->toJSON($response);
        exit();
        break;

    case 'OnWebPageInit':
    case 'OnPageNotFound':
        $prefix = $modx->getOption('cityfields_prefix', $config, 'cf.');
        $city = $modx->getObject('cfCity', $cityFields->currentCityId);
        if ( !$city ) break;
        $pls = array(
            'current_city' => $city->get('name'),
            'current_city.id' => $cityFields->currentCityId,
            'current_city.key' => $city->get('key'),
            'current_city.url' => MODX_SITE_URL
        );
        if ( $modx->getOption('cityfields_placeholders', $config, false) ) {
            $q = $modx->newQuery('cfField');
            $q->where(array(
                'city_id' => $cityFields->currentCityId
                ,'placeholder:NOT LIKE' => '[pre]%[/pre]'
            ));
            $fields = $modx->getCollection('cfField', $q);
            foreach ( $fields as $field ) {
                $pls[$field->get('placeholder')] = $field->get('value');
            }
        }
        $modx->setPlaceholders($pls, $prefix);
        break;

}