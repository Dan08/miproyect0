<?php
/**
 * File containing the ezcTemplateConcatAssignmentOperatorTstNode class
 *
 * @package Template
 * @version 1.3.2
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Fetching of property value in an expression.
 *
 * @package Template
 * @version 1.3.2
 * @access private
 */
class ezcTemplateConcatAssignmentOperatorTstNode extends ezcTemplateModifyingOperatorTstNode
{
    /**
     * Constructs a new concat assignment operator.
     *
     * @param ezcTemplateSource $source
     * @param ezcTemplateCursor $start
     * @param ezcTemplateCursor $end
     */
    public function __construct( ezcTemplateSourceCode $source, /*ezcTemplateCursor*/ $start, /*ezcTemplateCursor*/ $end )
    {
        parent::__construct( $source, $start, $end,
                             1, 6, self::RIGHT_ASSOCIATIVE,
                             '.=' );
    }
}
?>
