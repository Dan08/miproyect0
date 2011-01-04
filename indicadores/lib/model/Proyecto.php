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

  public function getArrayFuentes() {
    $fuentes = array();

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayFuentes() as $key => $value) {
        $fuentes[$key] += $value;
      }
    }

    return $fuentes;
  }

  public function getArrayLocalidades() {
    $localidades = array();

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayLocalidades() as $key => $value) {
        $localidades[$key] += $value;
      }
    }

    return $localidades;
  }

  public function getArrayClientes() {
    $clientes = array();

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayClientes() as $key => $value) {
        $clientes[$key] += $value;
      }
    }

    return $clientes;
  }
}
