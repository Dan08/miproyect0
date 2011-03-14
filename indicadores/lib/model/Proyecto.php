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

  /**
   * Genera un array con los valores de las diferentes fuentes para el proyecto seleccionado
   */
  public function getArrayFuentes() {
    $fuentes = array();
    
    // inicializar el array con los identificadores de las fuentes disponibles  
    foreach (FuentePeer::doSelect(new Criteria()) as $fuente)
    {
      $fuentes[$fuente->getId()]['pro'] = 0;
      $fuentes[$fuente->getId()]['eje'] = 0;
    }

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayFuentes() as $key => $value) {
        $fuentes[$key]['pro'] += $value;
      }
    }
    
    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayFuentesCRP() as $key => $value) {
        $fuentes[$key]['eje'] += $value;
      }
    }

    return $fuentes;
  }

  public function getArrayLocalidades() {
    $localidades = array();
    
    foreach (LocalidadPeer::doSelect(new Criteria()) as $localidad)
    {
      $localidades[$localidad->getId()]['pro'] = 0;
      $localidades[$localidad->getId()]['eje'] = 0;
    }

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayLocalidades() as $key => $value) {
        $localidades[$key]['pro'] += $value;
      }
    }

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayLocalidadesCRP() as $key => $value) {
        $localidades[$key]['eje'] += $value;
      }
    }
    return $localidades;
  }

  public function getArrayClientes() {
    $clientes = array();
    
    foreach (ClientePeer::doSelect(new Criteria()) as $cliente)
    {
      $clientes[$cliente->getId()]['pro'] = 0;
      $clientes[$cliente->getId()]['eje'] = 0;
    }

    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayClientes() as $key => $value) {
        $clientes[$key]['pro'] += $value;
      }
    }
    
    foreach($this->getActividads() as $actividad) {
      foreach ($actividad->getArrayClientesCRP() as $key => $value) {
        $clientes[$key]['eje'] += $value;
      }
    }

    return $clientes;
  }
}
