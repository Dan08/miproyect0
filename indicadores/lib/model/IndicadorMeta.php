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
}
