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

  public function getEjecucion()
  {
    $c = new Criteria();
    $c->add(ActividadProyectoPeer::PROYECTO_ID, $this->id);

    $resultset = ActividadProyectoPeer::doSelect($c);

    $ejecucion = 0;
    foreach ($resultset as $item)
    {
      $ejecucion += $item->getEjecucionPonderada();
    }

    return $ejecucion;
  }
}
