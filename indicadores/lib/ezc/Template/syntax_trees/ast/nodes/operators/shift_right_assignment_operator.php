<?php
/**
 * File containing the ezcTemplateShiftRightAssignmentOperatorAstNode class
 *
 * @package Template
 * @version 1.3.2
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Represents the PHP shift right assignment operator >>=
 *
 * @package Template
 * @version 1.3.2
 * @access private
 */
class ezcTemplateShiftRightAssignmentOperatorAstNode extends ezcTemplateBinaryOperatorAstNode
{
    /**
     * Returns a text string representing the PHP operator.
     * @return string
     */
    public function getOperatorPHPSymbol()
    {
        return '>>=';
    }
}
?>
