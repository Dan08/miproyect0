<?php

/**
 * Subclass for representing a row from the 'actividad_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ActividadProyecto extends BaseActividadProyecto
{
  public function  __toString()
  {
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
    $c->add(SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID, $this->id);

    $resultset = SubactividadProyectoPeer::doSelectJoinActividadProyecto($c);

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
}
