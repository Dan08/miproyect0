<?php

/**
 * Subclass for representing a row from the 'fuente' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Fuente extends BaseFuente
{
  public function  __toString() {
    return $this->getFuente();
  }
}
