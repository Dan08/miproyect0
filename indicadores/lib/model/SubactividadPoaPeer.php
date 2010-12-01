<?php

/**
 * Subclass for performing query and update operations on the 'subactividad_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SubactividadPoaPeer extends BaseSubactividadPoaPeer
{
  public function getMesMedicion()
  {
    // obtener el numero de mediciones realizadas hasta el momento
    $c = new Criteria();
    $c->add(SubactividadPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, $this->getId());
    $medicion = SubactividadPoaEjecucionPeer::doCount($c);

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
    $c->add(SubactividadPoaEjecucionPeer::SUBACTIVIDAD_POA_ID, $this->getId());
    $resultset = SubactividadPoaEjecucionPeer::doSelect($c);

    $ejecucion = 0;
    foreach ($resultset as $item)
    {
      $ejecucion += $item->getAvance();
    }

    return $ejecucion;
  }
}
