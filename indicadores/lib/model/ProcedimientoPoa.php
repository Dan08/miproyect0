<?php

/**
 * Subclass for representing a row from the 'procedimiento_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ProcedimientoPoa extends BaseProcedimientoPoa
{
  public function  __toString() {
    return $this->getProcedimiento();
  }

  public function getPonderacionAcum() {
    $sum = 0;
    foreach ($this->getActividadProcedimientoPoas() as $actividad) {
      $sum += $actividad->getPonderacion();
    }

    return $sum;
  }
}
