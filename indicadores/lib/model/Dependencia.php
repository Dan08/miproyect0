<?php

/**
 * Subclass for representing a row from the 'dependencia' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Dependencia extends BaseDependencia
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
