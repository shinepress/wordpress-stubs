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
     * Block API version.
     *
     * @since 5.6.0
     * @var int
     */
    public $api_version = 1;
    /**
     * Block type key.
     *
     * @since 5.0.0
     * @var string
     */
    public $name;
    /**
     * @since 5.5.0
     * @var string
     */
    public $title = '';
    /**
     * @since 5.5.0
     * @var string|null
     */
    public $category = \null;
    /**
     * @since 5.5.0
     * @var array|null
     */
    public $parent = \null;
    /**
     * @since 5.5.0
     * @var string|null
     */
    public $icon = \null;
    /**
     * @since 5.5.0
     * @var string
     */
    public $description = '';
    /**
     * @since 5.5.0
     * @var array
     */
    public $keywords = array();
    /**
     * @since 5.5.0
     * @var string|null
     */
    public $textdomain = \null;
    /**
     * @since 5.5.0
     * @var array
     */
    public $styles = array();
    /**
     * @since 5.5.0
     * @var array|null
     */
    public $supports = \null;
    /**
     * @since 5.5.0
     * @var array|null
     */
    public $example = \null;
    /**
     * Block type render callback.
     *
     * @since 5.0.0
     * @var callable
     */
    public $render_callback = \null;
    /**
     * Block type attributes property schemas.
     *
     * @since 5.0.0
     * @var array|null
     */
    public $attributes = \null;
    /**
     * Context values inherited by blocks of this type.
     *
     * @since 5.5.0
     * @var array
     */
    public $uses_context = array();
    /**
     * Context provided by blocks of this type.
     *
     * @since 5.5.0
     * @var array|null
     */
    public $provides_context = \null;
    /**
     * Block type editor script handle.
     *
     * @since 5.0.0
     * @var string|null
     */
    public $editor_script = \null;
    /**
     * Block type front end script handle.
     *
     * @since 5.0.0
     * @var string|null
     */
    public $script = \null;
    /**
     * Block type editor style handle.
     *
     * @since 5.0.0
     * @var string|null
     */
    public $editor_style = \null;
    /**
     * Block type front end style handle.
     *
     * @since 5.0.0
     * @var string|null
     */
    public $style = \null;
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
     * @return bool Whether block type is dynamic.
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
     * @param array $attributes Original block attributes.
     * @return array Prepared block attributes.
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