<?php

/**
 * Subclass for representing a row from the 'procedimiento' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Procedimiento extends BaseProcedimiento
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
