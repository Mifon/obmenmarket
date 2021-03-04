<?php

class cfFieldGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'cfField';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'ASC';

	/** {@inheritDoc} */
	public function initialize() {
		if (!$this->getProperty('limit'))
			$this->setProperty('limit', 20);

		return parent::initialize();
	}

	/** {@inheritDoc} */
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		$c->leftJoin('cfCity', 'cfCity', 'cfField.city_id = cfCity.id');
		$c->select('cfField.id, cfField.city_id', cfField.placeholder, cfField.value);
		$c->select('cfCity.name');
		$c->where(array(
			'placeholder:NOT LIKE' => '[pre]%[/pre]'
		));
		if ($placeholder = $this->getProperty('placeholder',null)) {
			$c->andCondition(array(
				'placeholder' => $placeholder
			));
		}
		if ($city = $this->getProperty('city',null)) {
			$c->andCondition(array('city_id' => $city), '', 1);
		}
		return $c;
	}

	/** {@inheritDoc} */
	public function prepareRow(xPDOObject $object) {
		$array = $object->toArray('', true);
		$array['value'] = htmlspecialchars($array['value'], ENT_NOQUOTES);
		return $array;
	}

}

return 'cfFieldGetListProcessor';
