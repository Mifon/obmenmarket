<?php

class cfFieldCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'cfField';
	public $classKey = 'cfField';
	public $languageTopics = array('cityfields:default');

	/**
	 * @return bool
	 */
	public function beforeSet() {
		$required = array('city_id', 'value', 'product_id');
		foreach ($required as $tmp) {
			if (!$this->getProperty($tmp)) {
				$this->addFieldError($tmp, $this->modx->lexicon('field_required'));
			}
		}
		$value = $this->getProperty('value');
		if ( !is_numeric($value) )
			$this->addFieldError('value', $this->modx->lexicon('ext_nanfield'));
		if ($this->hasErrors()) {
			return false;
		}
		$this->setProperty('placeholder', '[pre]' . $this->getProperty('product_id') . '_price[/pre]');
		$this->setProperty('value', floatval($value));
		return !$this->hasErrors();
	}

}

return 'cfFieldCreateProcessor';