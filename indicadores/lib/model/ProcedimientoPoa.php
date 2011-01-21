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
  
  public function getEjecucion()
  {
    $c = new Criteria();
    $c->add(ActividadProcedimientoPoaPeer::PROCEDIMIENTO_POA_ID, $this->id);

    $resultset = ActividadProcedimientoPoaPeer::doSelect($c);

    $ejecucion = 0;
    foreach ($resultset as $item)
    {
      $ejecucion += $item->getEjecucionPonderada();
    }

    return $ejecucion;
  }
}