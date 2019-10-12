<?php


/**
 * Class WP_Block_Parser_Block
 *
 * Holds the block structure in memory
 *
 * @since 3.8.0
 */
class WP_Block_Parser_Block
{
    /**
     * Name of block
     *
     * @example "core/paragraph"
     *
     * @since 3.8.0
     * @var string
     */
    public $blockName;
    /**
     * Optional set of attributes from block comment delimiters
     *
     * @example null
     * @example array( 'columns' => 3 )
     *
     * @since 3.8.0
     * @var array|null
     */
    public $attrs;
    /**
     * List of inner blocks (of this same class)
     *
     * @since 3.8.0
     * @var WP_Block_Parser_Block[]
     */
    public $innerBlocks;
    /**
     * Resultant HTML from inside block comment delimiters
     * after removing inner blocks
     *
     * @example "...Just <!-- wp:test /--> testing..." -> "Just testing..."
     *
     * @since 3.8.0
     * @var string
     */
    public $innerHTML;
    /**
     * List of string fragments and null markers where inner blocks were found
     *
     * @example array(
     *   'innerHTML'    => 'BeforeInnerAfter',
     *   'innerBlocks'  => array( block, block ),
     *   'innerContent' => array( 'Before', null, 'Inner', null, 'After' ),
     * )
     *
     * @since 4.2.0
     * @var array
     */
    public $innerContent;
    function __construct($name, $attrs, $innerBlocks, $innerHTML, $innerContent)
    {
    }
}