<?php
/**
 * File containing the ezcGraphPaletteEzRed class
 *
 * @package Graph
 * @version 1.4.1
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Light red color pallet for ezcGraph based on red eZ colors
 *
 * @package Graph
 */
class ezcGraphPaletteEzRed extends ezcGraphPalette
{
    /**
     * Axiscolor 
     * 
     * @var ezcGraphColor
     */
    protected $axisColor = '#2E3436';

    /**
     * Array with colors for datasets
     * 
     * @var array
     */
    protected $dataSetColor = array(
        '#B50D2C',
        '#C42926',
        '#C34009',
        '#CA3C04',
        '#D86300',
    );

    /**
     * Array with symbols for datasets 
     * 
     * @var array
     */
    protected $dataSetSymbol = array(
        ezcGraph::BULLET,
    );

    /**
     * Name of font to use
     * 
     * @var string
     */
    protected $fontName = 'sans-serif';

    /**
     * Fontcolor 
     * 
     * @var ezcGraphColor
     */
    protected $fontColor = '#2E3436';

    /**
     * Backgroundcolor for chart
     * 
     * @var ezcGraphColor
     */
    protected $chartBackground = '#FFFFFF';

    /**
     * Padding in elements
     * 
     * @var integer
     */
    protected $padding = 1;

    /**
     * Margin of elements
     * 
     * @var integer
     */
    protected $margin = 0;
}

?>
