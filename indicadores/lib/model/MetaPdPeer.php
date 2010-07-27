<?php

/**
 * Subclass for performing query and update operations on the 'meta_pd' table.
 *
 * 
 *
 * @package lib.model
 */ 
class MetaPdPeer extends BaseMetaPdPeer
{
  static public function getWithProyectos()
  {
    $c = new Criteria();
    $c->addJoin(self::ID, MetaProyectoPeer::META_PD_ID);
    $c->addJoin(ProyectoPeer::ID, MetaProyectoPeer::PROYECTO_ID);
    $c->add(MetaProyectoPeer::META_PD_ID, self::ID);

    return self::doSelect($c);
  }
}
