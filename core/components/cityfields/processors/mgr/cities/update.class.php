<?php

class cfCityUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'cfCity';
	public $classKey = 'cfCity';
	public $languageTopics = array('cityfields:default');

	/**
	 * @return bool
	 */
	public function beforeSet() {
		$required = array('id','key','name');
		foreach ($required as $tmp) {
			if (!$this->getProperty($tmp)) {
				$this->addFieldError($tmp, $this->modx->lexicon('field_required'));
			}
		}
		$active = $this->getProperty('active');
		$this->setProperty('active', !empty($active) && $active != 'false');
		return !$this->hasErrors();
	}

	public function afterSave() {
		$isDefault = $this->getProperty('isdefault');
		if ( $isDefault ) {
			$setting = $this->modx->getObject('modSystemSetting', 'cityfields_default_city');
			$setting->set('value', $this->getProperty('id'));
			$setting->save();
			$this->modx->cacheManager->refresh(array('system_settings' => array()));
		}

		return parent::afterSave();
	}

}

return 'cfCityUpdateProcessor';
