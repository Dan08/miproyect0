<?php

/**
 * Subclass for representing a row from the 'cliente' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Cliente extends BaseCliente
{
  public function  __toString() {
    return $this->getCliente();
  }
}
