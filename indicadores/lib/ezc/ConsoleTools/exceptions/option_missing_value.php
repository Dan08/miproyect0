<?php
/**
 * File containing the ezcConsoleOptionMissingValueException.
 * 
 * @package ConsoleTools
 * @version 1.5
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * An option which expects a value was submitted without.
 * This exception can be caught using {@link ezcConsoleOptionException}.
 *
 * @package ConsoleTools
 * @version 1.5
 */
class ezcConsoleOptionMissingValueException extends ezcConsoleOptionException
{
    /**
     * Creates a new exception object. 
     * 
     * @param ezcConsoleOption $option The option the value is missing for The option the value is missing for.. 
     * @return void
     */
    public function __construct( ezcConsoleOption $option )
    {
        parent::__construct( "The option '{$option->long}' expects a value, but none was submitted." );
    }
}

?>
