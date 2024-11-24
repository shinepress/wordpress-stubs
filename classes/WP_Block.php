<?php


/**
 * Class representing a parsed instance of a block.
 *
 * @since 5.5.0
 * @property array $attributes
 */
#[\AllowDynamicProperties]
class WP_Block
{
    /**
     * Original parsed array representation of block.
     *
     * @since 5.5.0
     * @var array
     */
    public $parsed_block;
    /**
     * Name of block.
     *
     * @example "core/paragraph"
     *
     * @since 5.5.0
     * @var string
     */
    public $name;
    /**
     * Block type associated with the instance.
     *
     * @since 5.5.0
     * @var WP_Block_Type
     */
    public $block_type;
    /**
     * Block context values.
     *
     * @since 5.5.0
     * @var array
     */
    public $context = array();
    /**
     * All available context of the current hierarchy.
     *
     * @since 5.5.0
     * @var array
     * @access protected
     */
    protected $available_context;
    /**
     * Block type registry.
     *
     * @since 5.9.0
     * @var WP_Block_Type_Registry
     * @access protected
     */
    protected $registry;
    /**
     * List of inner blocks (of this same class)
     *
     * @since 5.5.0
     * @var WP_Block_List
     */
    public $inner_blocks = array();
    /**
     * Resultant HTML from inside block comment delimiters after removing inner
     * blocks.
     *
     * @example "...Just <!-- wp:test /--> testing..." -> "Just testing..."
     *
     * @since 5.5.0
     * @var string
     */
    public $inner_html = '';
    /**
     * List of string fragments and null markers where inner blocks were found
     *
     * @example array(
     *   'inner_html'    => 'BeforeInnerAfter',
     *   'inner_blocks'  => array( block, block ),
     *   'inner_content' => array( 'Before', null, 'Inner', null, 'After' ),
     * )
     *
     * @since 5.5.0
     * @var array
     */
    public $inner_content = array();
    /**
     * Constructor.
     *
     * Populates object properties from the provided block instance argument.
     *
     * The given array of context values will not necessarily be available on
     * the instance itself, but is treated as the full set of values provided by
     * the block's ancestry. This is assigned to the private `available_context`
     * property. Only values which are configured to consumed by the block via
     * its registered type will be assigned to the block's `context` property.
     *
     * @since 5.5.0
     *
     * @param array                  $block             {
     *     An associative array of a single parsed block object. See WP_Block_Parser_Block.
     *
     *     @type string   $blockName    Name of block.
     *     @type array    $attrs        Attributes from block comment delimiters.
     *     @type array    $innerBlocks  List of inner blocks. An array of arrays that
     *                                  have the same structure as this one.
     *     @type string   $innerHTML    HTML from inside block comment delimiters.
     *     @type array    $innerContent List of string fragments and null markers where inner blocks were found.
     * }
     * @param array                  $available_context Optional array of ancestry context values.
     * @param WP_Block_Type_Registry $registry          Optional block type registry.
     * @phpstan-param array{
     *   blockName?: string,
     *   attrs?: array,
     *   innerBlocks?: array,
     *   innerHTML?: string,
     *   innerContent?: array,
     * } $block
     */
    public function __construct($block, $available_context = array(), $registry = \null)
    {
    }
    /**
     * Returns a value from an inaccessible property.
     *
     * This is used to lazily initialize the `attributes` property of a block,
     * such that it is only prepared with default attributes at the time that
     * the property is accessed. For all other inaccessible properties, a `null`
     * value is returned.
     *
     * @since 5.5.0
     *
     * @param string $name Property name.
     * @return array|null Prepared attributes, or null.
     */
    public function __get($name)
    {
    }
    /**
     * Generates the render output for the block.
     *
     * @since 5.5.0
     * @since 6.5.0 Added block bindings processing.
     *
     * @global WP_Post $post Global post object.
     *
     * @param array $options {
     *     Optional options object.
     *
     *     @type bool $dynamic Defaults to 'true'. Optionally set to false to avoid using the block's render_callback.
     * }
     * @return string Rendered block output.
     * @phpstan-param array{
     *   dynamic?: bool,
     * } $options
     */
    public function render($options = array())
    {
    }
}