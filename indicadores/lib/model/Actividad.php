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

    foreach (FuentePeer::doSelect(new Criteria()) as $fuente)
    {
      $fuentes[$fuente->getId()] = 0;
    }
    
    // rellenar con los montos de la tabla fuentes_actividad
    foreach ($this->getFuenteActividads() as $fa) {
      $fuentes[$fa->getFuenteId()] = $fa->getMonto();
    }

    return $fuentes;
  }

  public function getArrayLocalidades() {
    // rellenar el array de localidades con los identificadores de la tabla
    $localidades = array();

    foreach (LocalidadPeer::doSelect(new Criteria()) as $localidad)
    {
      $localidades[$localidad->getId()] = 0;
    }

    // rellenar con los montos de la tabla localidad_actividad
    foreach ($this->getLocalidadActividads() as $la) {
      $localidades[$la->getLocalidadId()] = $la->getMonto();
    }

    return $localidades;
  }

    public function getArrayClientes() {
    // rellenar el array de clientes con los identificadores de la tabla
    $clientes = array();

    foreach (ClientePeer::doSelect(new Criteria()) as $cliente)
    {
      $clientes[$cliente->getId()] = 0;
    }

    // rellenar con los montos de la tabla cliente_actividad
    foreach ($this->getClienteActividads() as $ca) {
      $clientes[$ca->getClienteId()] = $ca->getMonto();
    }

    return $clientes;
  }
}
