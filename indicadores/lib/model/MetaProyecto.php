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


}
