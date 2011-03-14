<?php

/**
 * Subclass for representing a row from the 'actividad' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Actividad extends BaseActividad
{
  public function  __toString() {
    return $this->getDescripcion();
  }

  /**
   * Devuelve un array de las fuentes asignadas a la actividad y su respectivo
   * monto
   * 
   * @return array Listado de Fuentes con su monto
   */
  public function getArrayFuentes() {
    // rellenar el array de fuentes con los identificadores de la tabla
    $fuentes = array();

    // rellenar con los montos de la tabla fuentes_actividad
    foreach ($this->getFuenteActividads() as $fa) {
      $fuentes[$fa->getFuenteId()] = $fa->getMonto();
    }

    return $fuentes;
  }
  
  /**
   * Devuelve solo los valores si la actividad tiene CRP asignado
   */
  public function getArrayFuentesCRP() {
    // rellenar el array de fuentes con los identificadores de la tabla
    $fuentes = array();
    $CRP = $this->getCRP();
    
    if (!empty($CRP)) {
	    // rellenar con los montos de la tabla fuentes_actividad
	    foreach ($this->getFuenteActividads() as $fa) {
	      $fuentes[$fa->getFuenteId()] = $fa->getMonto();
	    }
    }

    return $fuentes;
  }

  public function getArrayLocalidades() {
    // rellenar el array de localidades con los identificadores de la tabla
    $localidades = array();

    // rellenar con los montos de la tabla localidad_actividad
    foreach ($this->getLocalidadActividads() as $la) {
      $localidades[$la->getLocalidadId()] = $la->getMonto();
    }

    return $localidades;
  }

  public function getArrayLocalidadesCRP() {
    // rellenar el array de localidades con los identificadores de la tabla
    $localidades = array();
    $CRP = $this->getCRP();
    
    if (!empty($CRP)) {
	    // rellenar con los montos de la tabla localidad_actividad
	    foreach ($this->getLocalidadActividads() as $la) {
	      $localidades[$la->getLocalidadId()] = $la->getMonto();
	    }
    }

    return $localidades;
  }
  
  public function getArrayClientes() {
    // rellenar el array de clientes con los identificadores de la tabla
    $clientes = array();

    // rellenar con los montos de la tabla cliente_actividad
    foreach ($this->getClienteActividads() as $ca) {
      $clientes[$ca->getClienteId()] = $ca->getMonto();
    }

    return $clientes;
  }
  
  public function getArrayClientesCRP() {
    // rellenar el array de clientes con los identificadores de la tabla
    $clientes = array();
    $CRP = $this->getCRP();
    
    if (!empty($CRP)) {
	    // rellenar con los montos de la tabla cliente_actividad
	    foreach ($this->getClienteActividads() as $ca) {
	      $clientes[$ca->getClienteId()] = $ca->getMonto();
	    }
    }

    return $clientes;
  }
}
