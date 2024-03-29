<?php
/**
 * File containing the ezcGraphOutOfLogithmicalBoundingsException class
 *
 * @package Graph
 * @version 1.4.1
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception thrown when data exceeds the values which are displayable on an
 * logarithmical scaled axis.
 *
 * @package Graph
 * @version 1.4.1
 */
class ezcGraphOutOfLogithmicalBoundingsException extends ezcGraphException
{
    /**
     * Constructor
     * 
     * @param int $minimum
     * @return void
     * @ignore
     */
    public function __construct( $minimum )
    {
        parent::__construct( "Value '$minimum' exceeds displayable values on a logarithmical scaled axis." );
    }
}

?>
