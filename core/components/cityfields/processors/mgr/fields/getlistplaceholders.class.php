<?php

class cfGetListPlaceholdersProcessor extends modObjectGetListProcessor {
	public $classKey = 'cfField';
	public $defaultSortField = 'placeholder';
	public $defaultSortDirection  = 'ASC';

	/** {@inheritDoc} */
	public function prepareQueryBeforeCount(xPDOQuery $c) {
		$c->groupby('placeholder');
		$c->where(array(
			'placeholder:NOT LIKE' => '[pre]%[/pre]'
		));
		if ($query = $this->getProperty('query',null)) {
			$c->andCondition(array(
				'placeholder:LIKE' => '%'.$query.'%'
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
		$array = $object->toArray('', true);
		return $array;
	}

}

return 'cfGetListPlaceholdersProcessor';
