<?php
/**
 * File containing the ezcConfigurationIntalidReaderClassException class
 *
 * @package Configuration
 * @version 1.3.2
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception that is thrown if an invalid class is passed as INI reader to the manager.
 *
 * @package Configuration
 * @version 1.3.2
 */
class ezcConfigurationInvalidReaderClassException extends ezcConfigurationException
{
    /**
     * Constructs a new ezcConfigurationInvalidReaderClassException for the $readerClass.
     *
     * @param string $readerClass
     * @return void
     */
    function __construct( $readerClass )
    {
        parent::__construct( "Class '{$readerClass}' does not exist, or does not implement the 'ezcConfigurationReader' interface." );
    }
}
?>
