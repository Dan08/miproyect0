<?php

/**
 * Subclass for representing a row from the 'variable' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Variable extends BaseVariable
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
