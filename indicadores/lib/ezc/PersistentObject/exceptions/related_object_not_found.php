<?php
/**
 * File containing the ezcPersistentRelatedObjectNotFoundException class
 *
 * @package PersistentObject
 * @version 1.5
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception thrown, if the given relation class could not be found.
 *
 * @package PersistentObject
 * @version 1.5
 */
class ezcPersistentRelatedObjectNotFoundException extends ezcPersistentObjectException
{

    /**
     * Constructs a new ezcPersistentRelatedObjectNotFoundException for the object $object
     * which does not have a relation for $relatedClass.
     *
     * @param object $object
     * @param string $relatedClass
     * @return void
     */
    public function __construct( $object, $relatedClass )
    {
        parent::__construct( "No related object found with class '{$relatedClass}' for object of class '" . get_class( $object ) . "'." );
    }
}
?>
