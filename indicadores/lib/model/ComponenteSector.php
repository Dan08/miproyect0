<?php

/**
 * Subclass for representing a row from the 'componente_sector' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ComponenteSector extends BaseComponenteSector
{
  public function  __toString() {
    return $this->getComponenteSector();
  }
}
