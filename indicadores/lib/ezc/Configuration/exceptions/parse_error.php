<?php
/**
 * File containing the ezcConfigurationException class
 *
 * @package Configuration
 * @version 1.3.2
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception that is thrown if there were errors while parsing a file while the
 * parser was not in validation mode.
 *
 * @package Configuration
 * @version 1.3.2
 */
class ezcConfigurationParseErrorException extends ezcConfigurationException
{
    /**
     * Constructs a new ezcConfigurationParseErrorException.
     *
     * @param string $fileName The name of the file with the parse error.
     * @param int    $lineNr
     * @param string $description
     * @return void
     */
    function __construct( $fileName, $lineNr, $description )
    {
        parent::__construct( "{$description} in '{$fileName}', line '{$lineNr}'." );
    }
}
?>
