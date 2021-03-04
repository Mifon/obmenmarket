<?php
/*
 * This file is part of the Fred package.
 *
 * Copyright (c) MODX, LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fred\Endpoint\Ajax;

use Fred\RenderResource;
use Fred\Utils;

class CreateResource extends Endpoint
{
    function process()
    {
        if (!$this->modx->hasPermission('new_document')) {
            return $this->failure($this->modx->lexicon('fred.fe.err.permission_denied'));
        }
        
        if (!isset($this->body['parent'])) {
            return $this->failure($this->modx->lexicon('fred.fe.err.resource_ns_parent'));
        }
        
        $parentId = intval($this->body['parent']);

        if (!isset($this->body['template'])) {
            return $this->failure($this->modx->lexicon('fred.fe.err.resource_ns_template'));
        }
        
        if (empty($this->body['pagetitle'])) {
            return $this->failure($this->modx->lexicon('fred.fe.err.resource_ns_pagetitle'), ['pagetitle' => $this->modx->lexicon('fred.fe.err.resource_ns_pagetitle')]);
        }
        
        if (empty($this->body['contextKey'])) {
            $context = 'web';
        } else {
            $context = $this->body['contextKey'];
        }
        
        if (!empty($parentId)) {
            /** @var \modResource $parent */
            $parent = $this->modx->getObject('modResource', ['id' => intval($parentId)]);
            if ($parent) {
                $context = $parent->context_key;
            }
        }

        $blueprint = isset($this->body['blueprint']) ? intval($this->body['blueprint']) : 0;

        $c = $this->modx->newQuery('modResource');
        $c->where([
            'context_key' => $context,
            'parent' => $parentId
        ]);
        $c->sortby('menuindex', 'DESC');
        $c->limit(1);
        $lastResource = $this->modx->getObject('modResource', $c);
        $menuindex = $lastResource ? ($lastResource->menuindex + 1) : 0;
        
        $props = [
            'context_key' => $context,
            'parent' => $parentId,
            'template' => $this->body['template'],
            'pagetitle' => $this->body['pagetitle'],
            'richtext' => 0,
            'menuindex' => $menuindex
        ];
        
        $response = $this->modx->runProcessor('resource/create', $props);
        
        if ($response->isError()) {
            return $this->failure($this->modx->lexicon('fred.fe.err.resource_save_new'));
        }
        
        $object = $response->getObject();

        /** @var \modResource $resource */
        $resource = $this->modx->getObject('modResource', $object['id']);
        
        if (!empty($blueprint)) {
            $blueprintObject = $this->modx->getObject('FredBlueprint', $blueprint);
            if ($blueprintObject) {
                $data = $blueprintObject->get('data');

                $data['fingerprint'] = Utils::resourceFingerprint($resource);
                $resource->setProperty('data', $data, 'fred');
                
                $renderer = new RenderResource($resource, $this->modx);
                $renderer->render();
            }
        }
        
        $data = [
            'message' => $this->modx->lexicon('fred.fe.pages.created'),
            'url' => $this->getPreviewUrl($resource)
        ];

        return $this->success($data);
    }

    /**
     * @param \modResource $resource
     * @return string
     */
    public function getPreviewUrl($resource) {
        $previewUrl = '';

        if (!$resource->get('deleted')) {
            $this->modx->setOption('cache_alias_map', false);
            $sessionEnabled = '';

            $ctxSetting = $this->modx->getObject('modContextSetting', array('context_key' => $resource->get('context_key'), 'key' => 'session_enabled'));

            if ($ctxSetting) {
                $sessionEnabled = $ctxSetting->get('value') == 0 ? array('preview' => 'true') : '';
            }

            $previewUrl = $this->modx->makeUrl($resource->get('id'), $resource->get('context_key'), $sessionEnabled, 'full', array('xhtml_urls' => false));
        }
        return $previewUrl;
    }
}
