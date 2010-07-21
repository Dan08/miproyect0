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
   * Devuelve la duracion en meses de una subactividad
   *
   * @todo limitar la lista a meses sin registro (se necesita consultar con anterioridad
   * los meses en la tabla subactividad_ejecucion)
   */
  public function getMesMedicion()
  {
    $subactividad = SubactividadProyectoPeer::retrieveByPk($this->getSubactividadProyectoId());
    return $subactividad->getDuracion();

  }
}
