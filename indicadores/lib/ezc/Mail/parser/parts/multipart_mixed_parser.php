<?php
/**
 * File containing the ezcMailMultipartMixedParser class
 *
 * @package Mail
 * @version 1.6.1
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Parses multipart/mixed mail parts.
 *
 * @package Mail
 * @version 1.6.1
 * @access private
 */
class ezcMailMultipartMixedParser extends ezcMailMultipartParser
{
    /**
     * Holds the ezcMailMultipartMixed part corresponding to the data parsed with this parser.
     *
     * @var ezcMailMultipartMixed
     */
    private $part = null;

    /**
     * Constructs a new ezcMailMultipartMixedParser.
     *
     * @param ezcMailHeadersHolder $headers
     */
    public function __construct( ezcMailHeadersHolder $headers )
    {
        parent::__construct( $headers );
        $this->part = new ezcMailMultipartMixed();
    }

    /**
     * Adds the part $part to the list of multipart messages.
     *
     * This method is called automatically by ezcMailMultipartParser
     * each time a part is parsed.
     *
     * @param ezcMailPart $part
     */
    public function partDone( ezcMailPart $part )
    {
        $this->part->appendPart( $part );
    }

    /**
     * Returns the parts parsed for this multipart.
     *
     * @return ezcMailMultipartMixed
     */
    public function finishMultipart()
    {
        $size = 0;
        foreach ( $this->part->getParts() as $part )
        {
            $size += $part->size;
        }
        $this->part->size = $size;
        return $this->part;
    }
}
?>
