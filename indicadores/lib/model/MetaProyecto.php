<?php

/**
 * Subclass for representing a row from the 'meta_proyecto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class MetaProyecto extends BaseMetaProyecto
{
  public function  __toString() {
    return $this->getCodigo()."-".$this->getMeta();
  }

  public function getPonderacionAcumulada() {
    $sum = 0;
    foreach ($this->getActividadProyectos() as $actividad) {
      $sum += $actividad->getPonderacion();
    }

    return $sum;
  }


}
