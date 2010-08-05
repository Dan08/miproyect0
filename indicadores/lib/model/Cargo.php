<?php

/**
 * Subclass for representing a row from the 'cargo' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Cargo extends BaseCargo
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
