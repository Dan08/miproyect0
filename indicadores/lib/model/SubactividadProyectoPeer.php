<?php

/**
 * Subclass for performing query and update operations on the 'subactividad_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SubactividadProyectoPeer extends BaseSubactividadProyectoPeer
{
  public static function getConEjecuciones()
  {
    $c = new Criteria();
    //$c->add(self::ID, SubactividadProyectoPeer::ACTIVIDAD_PROYECTO_ID);

    return SubactividadEjecucionPeer::doSelectJoinSubactividadProyecto($c);
  }
}
