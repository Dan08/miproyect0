<?php

/**
 * Subclass for representing a row from the 'proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Proyecto extends BaseProyecto
{
  public function  __toString()
  {
    return $this->getCodigo()." - ".$this->getProyecto();
  }
}
