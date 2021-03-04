<?php

class cfFieldGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'cfField';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'ASC';

	/** {@inheritDoc} */
	public function initialize() {
		if (!$this->getProperty('product_id'))
			return $this->modx->lexicon('invalid_data');
		if (!$this->getProperty('limit'))
			$this->setProperty('limit', 20);

		return parent::initialize();
	}

	/** {@inheritDoc} */
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		$c->where(array(
			'placeholder' => '[pre]'.$this->getProperty('product_id').'_price[/pre]'
		));
		return $c;
	}

	/** {@inheritDoc} */
	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray('', true);
		return $array;
	}

}

return 'cfFieldGetListProcessor';