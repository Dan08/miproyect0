<?php

/**
 * Subclass for representing a row from the 'tipo_gasto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TipoGasto extends BaseTipoGasto
{
  public function  __toString() {
    return $this->getTipoGasto();
  }
}
