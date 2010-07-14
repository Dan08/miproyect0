<?php

/**
 * Subclass for representing a row from the 'metas_pd' table.
 *
 * 
 *
 * @package lib.model
 */ 
class MetasPd extends BaseMetasPd
{
    public function  __toString() {
        return $this->getMeta();
    }
}
