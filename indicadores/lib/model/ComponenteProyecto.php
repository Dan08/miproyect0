<?php

/**
 * Subclass for representing a row from the 'componente_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ComponenteProyecto extends BaseComponenteProyecto
{
  public function getMontoEjecutado() {
    $monto = 0;
    $c = new Criteria();
    $c->add(ActividadPeer::CRP, Criteria::ISNOTNULL);
    $c->add(ActividadPeer::COMPONENTE_INVERSION_ID, $this->getComponenteId());
    $c->add(ActividadPeer::PROYECTO_ID, $this->getProyectoId());
    
    $actividades = ActividadPeer::doSelect($c);
    
    foreach ($actividades as $actividad) {
      $monto += $actividad->getPlurianualProgramado();
    }
    
    return $monto;
  }
}
