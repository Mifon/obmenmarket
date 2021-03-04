<?php

class ideasStatusCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'ideasStatus';
    public $classKey = 'ideasStatus';
    public $languageTopics = ['ideas'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('ideas_status_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('ideas_status_err_ae'));
        }

        return parent::beforeSet();
    }

    /**
     * @return bool
     */
    public function beforeSave()
    {
        $this->object->fromArray(array(
            'rank' => $this->modx->getCount($this->classKey),
        ));

        return parent::beforeSave();
    }

}

return 'ideasStatusCreateProcessor';