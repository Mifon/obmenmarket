<?php

class cfCityCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'cfCity';
	public $classKey = 'cfCity';
	public $languageTopics = array('cityfields:default');

	/**
	 * @return bool
	 */
	public function beforeSet() {
		$required = array('key','name');
		foreach ($required as $tmp) {
			if (!$this->getProperty($tmp)) {
				$this->addFieldError($tmp, $this->modx->lexicon('field_required'));
			}
		}
		/*if ( file_exists($this->modx->cityFields->config['modelPath'] . 'sxgeo/SxGeoCity.tsv') ) {
			$name = $this->getProperty('name');
			$cities = explode("\n", file_get_contents($this->modx->cityFields->config['modelPath'] . 'sxgeo/SxGeoCity.tsv'));
			foreach ( $cities as $city ) {
				if ( strpos($city, $name) !== false ) {
					$id = strstr($city, "\t", true);
					break;
				}
			}
			if ( is_numeric($id) )
				$this->setProperty('id', intval($id));
			else
				$this->addFieldError('name', $this->modx->lexicon('cityfields_err_cnf'));
		}*/
		$active = $this->getProperty('active');
		$this->setProperty('active', !empty($active) && $active != 'false');
		return !$this->hasErrors();
	}

	public function afterSave() {
		$isDefault = $this->getProperty('isdefault') || !$this->modx->getOption('cityfields_default_city', null, 0);
		if ( $isDefault ) {
			$setting = $this->modx->getObject('modSystemSetting', 'cityfields_default_city');
			$setting->set('value', $this->object->get('id'));
			$setting->save();
			$this->modx->cacheManager->refresh(array('system_settings' => array()));
		}

		return parent::afterSave();
	}

}

return 'cfCityCreateProcessor';
