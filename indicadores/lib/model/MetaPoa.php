<?php

/**
 * Subclass for representing a row from the 'meta_poa' table.
 *
 * 
 *
 * @package lib.model
 */ 
class MetaPoa extends BaseMetaPoa
{
  public function  __toString() {
    return $this->getMeta();
  }
}
