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
    public function __toString() {
        return $this->getCodigo()." - ".$this->getMeta();
    }

}
