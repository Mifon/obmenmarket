<?php
/** @var modX $modx */
/* @var array $scriptProperties */
switch ($modx->event->name) {
    case 'OnLoadWebDocument':
        /* @var antiSovetYandex $antiSovetYandex*/
        $antiSovetYandex = $modx->getService('antisovetyandex', 'antiSovetYandex', $modx->getOption('antisovetyandex_core_path', $scriptProperties, $modx->getOption('core_path') . 'components/antisovetyandex/') . 'model/');
        if ($antiSovetYandex instanceof antiSovetYandex) {
            $antiSovetYandex->loadHandlerEvent($modx->event, $scriptProperties);
        }
        break;
}
return '';