<?php

/**
 * Subclass for representing a row from the 'subactividad_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SubactividadProyecto extends BaseSubactividadProyecto
{
  public function  __toString()
  {
    return $this->getDescripcion();
  }

  /**
   * Calcula el mes de la proxima medicion como la resta de la duracion de la subactividad menos las
   * mediciones realizadas que se encuentran en la tabla de seguimiento
   */
  public function getMesMedicion()
  {
    // obtener el numero de mediciones realizadas hasta el momento
    $c = new Criteria();
    $c->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());
    $medicion = SubactividadEjecucionPeer::doCount($c);

    // comprobar que quedan mediciones disponibles
    if (($this->getDuracion()-$medicion) < 1)
    {
      return 0;
    } else {
      return $medicion+1;
    }
  }

  /**
   * Obtiene el acumulado de la ejecucion de la tabla subactividad_ejecucion
   */
  public function getEjecucion()
  {
    $c = new Criteria();
    $c->add(SubactividadEjecucionPeer::SUBACTIVIDAD_PROYECTO_ID, $this->getId());
    $resultset = SubactividadEjecucionPeer::doSelect($c);

    $ejecucion = 0;
    foreach ($resultset as $item)
    {
      $ejecucion += $item->getAvance();
    }

    return $ejecucion;
  }

  public function getEjecucionPonderada()
  {
    return ($this->getPonderacion()/100)*$this->getEjecucion();
  }
}
