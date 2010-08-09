<?php

/**
 * Subclass for performing query and update operations on the 'actividad_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ActividadProyectoPeer extends BaseActividadProyectoPeer
{
  static public function doSelectByProyecto($proyecto) {
    $c = new Criteria();
    $c->add(self::PROYECTO_ID, $proyecto);

    return self::doSelect($c);
  }
}
