<?php

class cfCityGetProcessor extends modObjectGetProcessor {
	public $objectType = 'cfCity';
	public $classKey = 'cfCity';
	public $languageTopics = array('cityfields:default');

	/** {inheritDoc} */
	public function cleanup() {
		$array = $this->object->toArray('', true);
		$array['isdefault'] = $this->modx->getOption('cityfields_default_city', null, 1) == $array['id'];
		return $this->success('', $array);
	}

}

return 'cfCityGetProcessor';
