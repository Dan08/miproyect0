<?php

/**
 * Subclass for representing a row from the 'componente' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Componente extends BaseComponente
{
  public function  __toString() {
    return $this->getComponente();
  }
}
