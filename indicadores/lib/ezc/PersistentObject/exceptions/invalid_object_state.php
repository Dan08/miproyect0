<?php
/**
 * File containing the ezcPersistentObjectAlreadyPersistentException class
 *
 * @package PersistentObject
 * @version 1.5
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception thrown if the result of $object->getState() is invalid.
 *
 * @package PersistentObject
 * @version 1.5
 */
class ezcPersistentInvalidObjectStateException extends ezcPersistentObjectException
{
    /**
     * Creates a new exception.
     *
     * Creates a new ezcPersistentInvalidObjectStateException for the given
     * $object with the given $reason.
     * 
     * @param object $object 
     * @param string $reason 
     */
    public function __construct( $object, $reason = null )
    {
        parent::__construct(
            'The state returned by an object of class ' . get_class( $object ) . ' was invalid.'
                . ( $reason !== null ? " (Reason: $reason)" : '' )
        );
    }
}

?>
