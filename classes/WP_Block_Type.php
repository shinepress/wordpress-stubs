<?php


/**
 * Blocks API: WP_Block_Type class
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.0.0
 */
/**
 * Core class representing a block type.
 *
 * @since 5.0.0
 *
 * @see register_block_type()
 */
class WP_Block_Type
{
    /**
     * Block type key.
     *
     * @since 5.0.0
     * @var string
     */
    public $name;
    /**
     * Block type render callback.
     *
     * @since 5.0.0
     * @var callable
     */
    public $render_callback;
    /**
     * Block type attributes property schemas.
     *
     * @since 5.0.0
     * @var array
     */
    public $attributes;
    /**
     * Block type editor script handle.
     *
     * @since 5.0.0
     * @var string
     */
    public $editor_script;
    /**
     * Block type front end script handle.
     *
     * @since 5.0.0
     * @var string
     */
    public $script;
    /**
     * Block type editor style handle.
     *
     * @since 5.0.0
     * @var string
     */
    public $editor_style;
    /**
     * Block type front end style handle.
     *
     * @since 5.0.0
     * @var string
     */
    public $style;
    /**
     * Constructor.
     *
     * Will populate object properties from the provided arguments.
     *
     * @since 5.0.0
     *
     * @see register_block_type()
     *
     * @param string       $block_type Block type name including namespace.
     * @param array|string $args       Optional. Array or string of arguments for registering a block type.
     *                                 Default empty array.
     */
    public function __construct($block_type, $args = array())
    {
    }
    /**
     * Renders the block type output for given attributes.
     *
     * @since 5.0.0
     *
     * @param array  $attributes Optional. Block attributes. Default empty array.
     * @param string $content    Optional. Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public function render($attributes = array(), $content = '')
    {
    }
    /**
     * Returns true if the block type is dynamic, or false otherwise. A dynamic
     * block is one which defers its rendering to occur on-demand at runtime.
     *
     * @since 5.0.0
     *
     * @return boolean Whether block type is dynamic.
     */
    public function is_dynamic()
    {
    }
    /**
     * Validates attributes against the current block schema, populating
     * defaulted and missing values.
     *
     * @since 5.0.0
     *
     * @param  array $attributes Original block attributes.
     * @return array             Prepared block attributes.
     */
    public function prepare_attributes_for_render($attributes)
    {
    }
    /**
     * Sets block type properties.
     *
     * @since 5.0.0
     *
     * @param array|string $args Array or string of arguments for registering a block type.
     */
    public function set_props($args)
    {
    }
    /**
     * Get all available block attributes including possible layout attribute from Columns block.
     *
     * @since 5.0.0
     *
     * @return array Array of attributes.
     */
    public function get_attributes()
    {
    }
}