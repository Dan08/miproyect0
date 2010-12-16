<?php

/**
 * Subclass for representing a row from the 'subactividad_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SubactividadPoa extends BaseSubactividadPoa
{
  public function  __toString() {
    return $this->getDescripcion();
  }

  
}
