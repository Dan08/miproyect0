<?php
/**
 * File containing the ezcGraphInvalidArrayDataSourceException class
 *
 * @package Graph
 * @version 1.4.1
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception thrown when an invalid data source is provided for an array 
 * data set.
 *
 * @package Graph
 * @version 1.4.1
 */
class ezcGraphInvalidArrayDataSourceException extends ezcGraphException
{
    /**
     * Constructor
     * 
     * @param mixed $value
     * @return void
     * @ignore
     */
    public function __construct( $value )
    {
        $type = gettype( $value );
        parent::__construct( "The array dataset can only use arrays and iterators, but you supplied '{$type}'." );
    }
}

?>
