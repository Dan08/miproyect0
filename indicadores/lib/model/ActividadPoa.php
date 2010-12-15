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

  /**
   * Calcula la ejecucion de la actividad a partir de los avances de las subactividades
   * relacionadas
   */
  public function getEjecucion()
  {
    // consultar subactividades relacionadas
    $c = new Criteria();
    $c->add(SubactividadPoaPeer::ACTIVIDAD_POA_ID, $this->id);

    // revisar por si algo no funciona
    $resultset = SubactividadPoaPeer::doSelectJoinAll($c);

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
    $c->add(SubactividadPoaPeer::ACTIVIDAD_POA_ID, $this->id);

    $subactividades = SubactividadPoaPeer::doSelect($c);
    $sum = 0;

    foreach ($subactividades as $subactividad)
    {
      $sum += $subactividad->getPonderacion();
    }

    return $sum;
  }
}
