<?php

/**
 * Subclass for representing a row from the 'actividad_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ActividadPoa extends BaseActividadPoa
{
  public function __toString()
  {
    return $this->getDescripcion();
  }
}
