<?php
/**
 * File containing the ezcDbException class.
 *
 * @package Database
 * @version 1.4.3
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * This class provides exception for misc errors that may occur in the component,
 * such as errors parsing database parameters and connecting to the database.
 *
 * @package Database
 * @version 1.4.3
 */
class ezcDbTransactionException extends ezcDbException
{
    /**
     * Constructs a new exception with the message $msg.
     *
     * @param string $msg
     */
    public function __construct( $msg )
    {
        $message = "There was a transaction error caused by unmatched beginTransaction()/commit() calls: {$msg}";
        parent::__construct( $message );
    }
}
?>
