<?php

/**
 * Subclass for representing a row from the 'meta_pd' table.
 *
 * 
 *
 * @package lib.model
 */ 
class MetaPd extends BaseMetaPd
{
    public function __toString()
    {
        return $this->getCodigo()." - ".$this->getMeta();
    }

    public function  getProyectos()
    {
      $c = new Criteria();
      $c->addJoin(ProyectoPeer::ID, MetaProyectoPeer::PROYECTO_ID);
      //$c->addJoin($this->getId, MetaProyectoPeer::META_PD_ID);
      
      $c->add(MetaProyectoPeer::META_PD_ID, $this->getId());

      return ProyectoPeer::doSelect($c);
    }

    public function getPonderacionAcum()
    {
      $c = new Criteria();
      $c->add(ActividadProyectoPeer::META_PD_ID, $this->getId());

      $actividades = ActividadProyectoPeer::doSelect($c);

      $sum = 0;
      foreach ($actividades as $actividad)
      {
        $sum += $actividad->getPonderacion();
      }

      return $sum;

    }

}
