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

    /**
   * Calcula la ejecucion de la actividad a partir de los avances de las subactividades
   * relacionadas
   */
  public function getEjecucion()
  {
    // consultar subactividades relacionadas
    $c = new Criteria();
    $c->add(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, $this->id);

    // revisar por si algo no funciona
    $resultset = SubactividadProcedimientoPoaPeer::doSelectJoinAll($c);

    $ejecucion = 0;
    foreach ($resultset as $item)
    {
      $ejecucion += $item->getEjecucionPonderada();
    }

    return $ejecucion;
  }

  public function getEjecucionPonderada()
  {
    return ($this->getPonderacion()/100)*$this->getEjecucion();
  }

  public function getPonderacionAcum()
  {
    $c = new Criteria();
    $c->add(SubactividadProcedimientoPoaPeer::ACTIVIDAD_PROCEDIMIENTO_ID, $this->id);

    $subactividades = SubactividadProcedimientoPoaPeer::doSelect($c);
    $sum = 0;

    foreach ($subactividades as $subactividad)
    {
      $sum += $subactividad->getPonderacion();
    }

    return $sum;
  }
}
