<?php

class cfCityGetListProcessor extends modObjectGetListProcessor {
	public $classKey = 'cfCity';
	public $defaultSortField = 'id';
	public $defaultSortDirection  = 'ASC';

	/**
	 * @return bool
	 */
	public function initialize()
	{
		if ($this->getProperty('combo') && $id = (int) $this->getProperty('id')) {
			$this->item_id = $id;
		}

		return parent::initialize();
	}

	/** {@inheritDoc} */
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		if ($this->getProperty('combo')) {
			$c->select('cfCity.id,cfCity.name');
		}
		if ($query = $this->getProperty('query',null)) {
			$c->where(array(
				'name:LIKE' => '%'.$query.'%'
			));
		}
		return $c;
	}

	/**
	 * @param xPDOObject $object
	 *
	 * @return array
	 */
	public function prepareRow(xPDOObject $object) {
		if ($this->getProperty('combo')) {
			return $object->get(array(
				'id',
				'name',
			));
		}
		$array = $object->toArray('', true);
		$array['isdefault'] = $this->modx->getOption('cityfields_default_city', null, 1) == $array['id'];
		return $array;
	}

}

return 'cfCityGetListProcessor';
