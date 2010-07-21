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
  public function  __toString() {
    return $this->getActividad();
  }
}
