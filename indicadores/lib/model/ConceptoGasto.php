<?php

/**
 * Subclass for representing a row from the 'concepto_gasto' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ConceptoGasto extends BaseConceptoGasto
{
  public function  __toString() {
    return $this->getConceptoGasto();
  }
}
