<?php

/**
 * Subclass for representing a row from the 'anualizacion' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Anualizacion extends BaseAnualizacion
{
    public function  __toString() {
        return $this->getMetaPd();
    }
}
