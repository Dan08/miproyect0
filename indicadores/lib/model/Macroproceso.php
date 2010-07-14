<?php

/**
 * Subclass for representing a row from the 'macroproceso' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Macroproceso extends BaseMacroproceso
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
