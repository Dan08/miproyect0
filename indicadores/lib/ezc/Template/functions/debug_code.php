<?php
/**
 * File containing the ezcTemplateDebug class
 *
 * @package Template
 * @version 1.3.2
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * This class contains a bundle of static functions, each implementing a specific
 * function used inside the template language. 
 *
 * @package Template
 * @version 1.3.2
 * @access private
 */
class ezcTemplateDebug
{
    /**
     * Returns a string describing (var_export) the variable $var.
     *
     * @param mixed $var
     * @return string
     */
    public static function debug_dump( $var )
    {
        return var_export( $var, true );
    }
}


?>
