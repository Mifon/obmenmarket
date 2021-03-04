<?php return array (
  'f51e021370ce536892f2da906d7e5a19' => 
  array (
    'criteria' => 
    array (
      'name' => 'cookieconsent',
    ),
    'object' => 
    array (
      'name' => 'cookieconsent',
      'path' => '{core_path}components/cookieconsent/',
      'assets_path' => '',
    ),
  ),
  '1efad33e306280789bdd5a657f024af7' => 
  array (
    'criteria' => 
    array (
      'category' => 'CookieConsent',
    ),
    'object' => 
    array (
      'id' => 43,
      'parent' => 0,
      'category' => 'CookieConsent',
      'rank' => 0,
    ),
  ),
  'f02ddfd215715add539c23f034009c64' => 
  array (
    'criteria' => 
    array (
      'name' => 'CookieConsent',
    ),
    'object' => 
    array (
      'id' => 32,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'CookieConsent',
      'description' => 'Append cookie consent disclaimer to body tag if consent has not been set.',
      'editor_type' => 0,
      'category' => 43,
      'cache_type' => 0,
      'plugincode' => 'switch ($modx->event->name)
{
  case \'OnWebPagePrerender\':

    $c = $modx->getOption(\'cookieName\', $scriptProperties, \'CookieConsent\');

    if (!isset($_COOKIE[ $c ]))
    {
      //cookie disclaimer has NOT been acknowledged as read

      if ($modx->getOption(\'site_dev\') == 1)
      {
          $p = $modx->getOption(\'cookieconsent.core_path\');
        } else {
          $p = $modx->getOption(\'core_path\').\'components/cookieconsent/\';
      }
      
      $cc = $modx->getService(  \'cookieconsent\',
                                \'CookieConsent\',
                                $p.\'model/cookieconsent/\'
                              );
                                
      if (!($cc instanceof CookieConsent)) return \'\';

      $cc->appendDisclaimer($scriptProperties);
      
      unset($cc, $c);
    }
    
    break;
}',
      'locked' => 0,
      'properties' => 'a:9:{s:5:"class";a:7:{s:4:"name";s:5:"class";s:4:"desc";s:29:"prop_cookieconsent.class_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"cookieconsent";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:10:"cookieDays";a:7:{s:4:"name";s:10:"cookieDays";s:4:"desc";s:34:"prop_cookieconsent.cookieDays_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:3:"365";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:10:"cookieName";a:7:{s:4:"name";s:10:"cookieName";s:4:"desc";s:34:"prop_cookieconsent.cookieName_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:13:"CookieConsent";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:14:"idCookiePolicy";a:7:{s:4:"name";s:14:"idCookiePolicy";s:4:"desc";s:38:"prop_cookieconsent.idCookiePolicy_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"86";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:10:"includeCSS";a:7:{s:4:"name";s:10:"includeCSS";s:4:"desc";s:34:"prop_cookieconsent.includeCSS_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:9:"includeJS";a:7:{s:4:"name";s:9:"includeJS";s:4:"desc";s:33:"prop_cookieconsent.includeJS_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:1:"1";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:7:"pathCSS";a:7:{s:4:"name";s:7:"pathCSS";s:4:"desc";s:31:"prop_cookieconsent.pathCSS_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:64:"{assets_path}/components/cookieconsent/css/cookieconsent-min.css";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:6:"pathJS";a:7:{s:4:"name";s:6:"pathJS";s:4:"desc";s:30:"prop_cookieconsent.pathJS_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:61:"{assets_path}/components/cookieconsent/js/mabCookieSet-min.js";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:27:"prop_cookieconsent.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:11:"cookies.tpl";s:7:"lexicon";s:24:"cookieconsent:properties";s:4:"area";s:0:"";}}',
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => 'switch ($modx->event->name)
{
  case \'OnWebPagePrerender\':

    $c = $modx->getOption(\'cookieName\', $scriptProperties, \'CookieConsent\');

    if (!isset($_COOKIE[ $c ]))
    {
      //cookie disclaimer has NOT been acknowledged as read

      if ($modx->getOption(\'site_dev\') == 1)
      {
          $p = $modx->getOption(\'cookieconsent.core_path\');
        } else {
          $p = $modx->getOption(\'core_path\').\'components/cookieconsent/\';
      }
      
      $cc = $modx->getService(  \'cookieconsent\',
                                \'CookieConsent\',
                                $p.\'model/cookieconsent/\'
                              );
                                
      if (!($cc instanceof CookieConsent)) return \'\';

      $cc->appendDisclaimer($scriptProperties);
      
      unset($cc, $c);
    }
    
    break;
}',
    ),
  ),
  '98b3b023696f07e29055c012084065c8' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 32,
      'event' => 'OnWebPagePrerender',
    ),
    'object' => 
    array (
      'pluginid' => 32,
      'event' => 'OnWebPagePrerender',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
);