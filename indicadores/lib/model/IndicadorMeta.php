<?php

/**
 * Subclass for representing a row from the 'indicador_meta' table.
 *
 * 
 *
 * @package lib.model
 */ 
class IndicadorMeta extends BaseIndicadorMeta
{
    public function  __toString() {
        return $this->getDescripcion();
    }

    public function  getMetaPd($con = null) {
        return parent::getMetaPd($con);
    }

    public function getLastValue($year) {
      $c = new Criteria();
      $c->add(SeguimientoIndicadorMetaPeer::INDICADOR_META_ID, $this->id);
      $c->add(SeguimientoIndicadorMetaPeer::ANYO, $year);
      $c->addAscendingOrderByColumn(SeguimientoIndicadorMetaPeer::ID);
      
      $valor = SeguimientoIndicadorMetaPeer::doSelectOne($c);

      if ($valor == null)
      {
        return null;
      } else {
        return $valor->getValor();
      }
    }
}
