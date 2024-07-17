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
#[\AllowDynamicProperties]
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
     * Human-readable block type label.
     *
     * @since 5.5.0
     * @var string
     */
    public $title = '';
    /**
     * Block type category classification, used in search interfaces
     * to arrange block types by category.
     *
     * @since 5.5.0
     * @var string|null
     */
    public $category = \null;
    /**
     * Setting parent lets a block require that it is only available
     * when nested within the specified blocks.
     *
     * @since 5.5.0
     * @var string[]|null
     */
    public $parent = \null;
    /**
     * Setting ancestor makes a block available only inside the specified
     * block types at any position of the ancestor's block subtree.
     *
     * @since 6.0.0
     * @var string[]|null
     */
    public $ancestor = \null;
    /**
     * Block type icon.
     *
     * @since 5.5.0
     * @var string|null
     */
    public $icon = \null;
    /**
     * A detailed block type description.
     *
     * @since 5.5.0
     * @var string
     */
    public $description = '';
    /**
     * Additional keywords to produce block type as result
     * in search interfaces.
     *
     * @since 5.5.0
     * @var string[]
     */
    public $keywords = array();
    /**
     * The translation textdomain.
     *
     * @since 5.5.0
     * @var string|null
     */
    public $textdomain = \null;
    /**
     * Alternative block styles.
     *
     * @since 5.5.0
     * @var array
     */
    public $styles = array();
    /**
     * Block variations.
     *
     * @since 5.8.0
     * @var array[]
     */
    public $variations = array();
    /**
     * Custom CSS selectors for theme.json style generation.
     *
     * @since 6.3.0
     * @var array
     */
    public $selectors = array();
    /**
     * Supported features.
     *
     * @since 5.5.0
     * @var array|null
     */
    public $supports = \null;
    /**
     * Structured data for the block preview.
     *
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
     * @var string[]
     */
    public $uses_context = array();
    /**
     * Context provided by blocks of this type.
     *
     * @since 5.5.0
     * @var string[]|null
     */
    public $provides_context = \null;
    /**
     * Block type editor only script handles.
     *
     * @since 6.1.0
     * @var string[]
     */
    public $editor_script_handles = array();
    /**
     * Block type front end and editor script handles.
     *
     * @since 6.1.0
     * @var string[]
     */
    public $script_handles = array();
    /**
     * Block type front end only script handles.
     *
     * @since 6.1.0
     * @var string[]
     */
    public $view_script_handles = array();
    /**
     * Block type editor only style handles.
     *
     * @since 6.1.0
     * @var string[]
     */
    public $editor_style_handles = array();
    /**
     * Block type front end and editor style handles.
     *
     * @since 6.1.0
     * @var string[]
     */
    public $style_handles = array();
    /**
     * Attributes supported by every block.
     *
     * @since 6.0.0
     * @var array
     */
    const GLOBAL_ATTRIBUTES = array('lock' => array('type' => 'object'));
    /**
     * Constructor.
     *
     * Will populate object properties from the provided arguments.
     *
     * @since 5.0.0
     * @since 5.5.0 Added the `title`, `category`, `parent`, `icon`, `description`,
     *              `keywords`, `textdomain`, `styles`, `supports`, `example`,
     *              `uses_context`, and `provides_context` properties.
     * @since 5.6.0 Added the `api_version` property.
     * @since 5.8.0 Added the `variations` property.
     * @since 5.9.0 Added the `view_script` property.
     * @since 6.0.0 Added the `ancestor` property.
     * @since 6.1.0 Added the `editor_script_handles`, `script_handles`, `view_script_handles,
     *              `editor_style_handles`, and `style_handles` properties.
     *              Deprecated the `editor_script`, `script`, `view_script`, `editor_style`, and `style` properties.
     * @since 6.3.0 Added the `selectors` property.
     *
     * @see register_block_type()
     *
     * @param string       $block_type Block type name including namespace.
     * @param array|string $args       {
     *     Optional. Array or string of arguments for registering a block type. Any arguments may be defined,
     *     however the ones described below are supported by default. Default empty array.
     *
     *     @type string        $api_version              Block API version.
     *     @type string        $title                    Human-readable block type label.
     *     @type string|null   $category                 Block type category classification, used in
     *                                                   search interfaces to arrange block types by category.
     *     @type string[]|null $parent                   Setting parent lets a block require that it is only
     *                                                   available when nested within the specified blocks.
     *     @type string[]|null $ancestor                 Setting ancestor makes a block available only inside the specified
     *                                                   block types at any position of the ancestor's block subtree.
     *     @type string|null   $icon                     Block type icon.
     *     @type string        $description              A detailed block type description.
     *     @type string[]      $keywords                 Additional keywords to produce block type as
     *                                                   result in search interfaces.
     *     @type string|null   $textdomain               The translation textdomain.
     *     @type array[]       $styles                   Alternative block styles.
     *     @type array[]       $variations               Block variations.
     *     @type array         $selectors                Custom CSS selectors for theme.json style generation.
     *     @type array|null    $supports                 Supported features.
     *     @type array|null    $example                  Structured data for the block preview.
     *     @type callable|null $render_callback          Block type render callback.
     *     @type array|null    $attributes               Block type attributes property schemas.
     *     @type string[]      $uses_context             Context values inherited by blocks of this type.
     *     @type string[]|null $provides_context         Context provided by blocks of this type.
     *     @type string[]      $editor_script_handles    Block type editor only script handles.
     *     @type string[]      $script_handles           Block type front end and editor script handles.
     *     @type string[]      $view_script_handles      Block type front end only script handles.
     *     @type string[]      $editor_style_handles     Block type editor only style handles.
     *     @type string[]      $style_handles            Block type front end and editor style handles.
     * }
     * @phpstan-param array{
     *   api_version?: string,
     *   title?: string,
     *   category?: string|null,
     *   parent?: string[]|null,
     *   ancestor?: string[]|null,
     *   icon?: string|null,
     *   description?: string,
     *   keywords?: string[],
     *   textdomain?: string|null,
     *   styles?: array[],
     *   variations?: array[],
     *   selectors?: array,
     *   supports?: array|null,
     *   example?: array|null,
     *   render_callback?: callable|null,
     *   attributes?: array|null,
     *   uses_context?: string[],
     *   provides_context?: string[]|null,
     *   editor_script_handles?: string[],
     *   script_handles?: string[],
     *   view_script_handles?: string[],
     *   editor_style_handles?: string[],
     *   style_handles?: string[],
     * } $args
     */
    public function __construct($block_type, $args = array())
    {
    }
    /**
     * Proxies getting values for deprecated properties for script and style handles for backward compatibility.
     * Gets the value for the corresponding new property if the first item in the array provided.
     *
     * @since 6.1.0
     *
     * @param string $name Deprecated property name.
     *
     * @return string|string[]|null|void The value read from the new property if the first item in the array provided,
     *                                   null when value not found, or void when unknown property name provided.
     */
    public function __get($name)
    {
    }
    /**
     * Proxies checking for deprecated properties for script and style handles for backward compatibility.
     * Checks whether the corresponding new property has the first item in the array provided.
     *
     * @since 6.1.0
     *
     * @param string $name Deprecated property name.
     *
     * @return boolean Returns true when for the new property the first item in the array exists,
     *                     or false otherwise.
     */
    public function __isset($name)
    {
    }
    /**
     * Proxies setting values for deprecated properties for script and style handles for backward compatibility.
     * Sets the value for the corresponding new property as the first item in the array.
     * It also allows setting custom properties for backward compatibility.
     *
     * @since 6.1.0
     *
     * @param string $name  Property name.
     * @param mixed  $value Property value.
     * @phpstan-return void
     */
    public function __set($name, $value)
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
     *                           See WP_Block_Type::__construct() for information on accepted arguments.
     * @phpstan-param array{
     *   api_version?: string,
     *   title?: string,
     *   category?: string|null,
     *   parent?: string[]|null,
     *   ancestor?: string[]|null,
     *   icon?: string|null,
     *   description?: string,
     *   keywords?: string[],
     *   textdomain?: string|null,
     *   styles?: array[],
     *   variations?: array[],
     *   selectors?: array,
     *   supports?: array|null,
     *   example?: array|null,
     *   render_callback?: callable|null,
     *   attributes?: array|null,
     *   uses_context?: string[],
     *   provides_context?: string[]|null,
     *   editor_script_handles?: string[],
     *   script_handles?: string[],
     *   view_script_handles?: string[],
     *   editor_style_handles?: string[],
     *   style_handles?: string[],
     * } $args See WP_Block_Type::__construct()
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