<?php
/**
 * File containing the ezcConsoleOptionStringNotWellformedException.
 * 
 * @package ConsoleTools
 * @version 1.5
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * The option definition string supplied is not wellformed.
 *
 * @package ConsoleTools
 * @version 1.5
 */
class ezcConsoleOptionStringNotWellformedException extends ezcConsoleException
{
    /**
     * Creates a new exception object. 
     * 
     * @param string $reason The reason for that the string was invalid.
     * @return void
     */
    public function __construct( $reason )
    {
        parent::__construct( "The provided option defintion string was not well formed. " . $reason );
    }
}

?>
