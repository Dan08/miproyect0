<?php
/**
 * File containing the ezcGraphUnknownFontTypeException class
 *
 * @package Graph
 * @version 1.4.1
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Exception thrown if font type is unknown or not supported.
 *
 * @package Graph
 * @version 1.4.1
 */
class ezcGraphUnknownFontTypeException extends ezcGraphException
{
    /**
     * Constructor
     * 
     * @param string $file
     * @param string $extension
     * @return void
     * @ignore
     */
    public function __construct( $file, $extension )
    {
        parent::__construct( "Unknown font type '{$extension}' of file '{$file}'." );
    }
}

?>
