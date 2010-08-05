<?php

/**
 * Subclass for representing a row from the 'proceso' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Proceso extends BaseProceso
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
