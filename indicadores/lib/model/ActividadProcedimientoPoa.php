<?php

/**
 * Subclass for representing a row from the 'actividad_procedimiento_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ActividadProcedimientoPoa extends BaseActividadProcedimientoPoa
{
  public function  __toString() {
    return $this->getActividad();
  }
}
