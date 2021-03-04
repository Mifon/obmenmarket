<?php
class rmMessage extends xPDOSimpleObject {
    
    public $timestamps = [
        'createdon'
      ];
    
    public function get($k, $format = null, $formatTemplate= null) {
      $value = parent::get($k, $format, $formatTemplate);
      if (in_array($k, $this->timestamps)) {
        $value = strtotime($value);
      }
      return $value;
    }
    
    public function __get($name) {
      $value = parent::__get($name);
      if (in_array($name, $this->timestamps)) {
        $value = strtotime($value);
      }
      return $value;
    }
  
}