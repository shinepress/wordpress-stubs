<?php


/**
 * Blocks API: WP_Block_Type_Registry class
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.0.0
 */
/**
 * Core class used for interacting with block types.
 *
 * @since 5.0.0
 */
final class WP_Block_Type_Registry
{
    /**
     * Registered block types, as `$name => $instance` pairs.
     *
     * @since 5.0.0
     * @var WP_Block_Type[]
     */
    private $registered_block_types = array();
    /**
     * Container for the main instance of the class.
     *
     * @since 5.0.0
     * @var WP_Block_Type_Registry|null
     */
    private static $instance = \null;
    /**
     * Registers a block type.
     *
     * @since 5.0.0
     *
     * @see WP_Block_Type::__construct()
     *
     * @param string|WP_Block_Type $name Block type name including namespace, or alternatively
     *                                   a complete WP_Block_Type instance. In case a WP_Block_Type
     *                                   is provided, the $args parameter will be ignored.
     * @param array                $args Optional. Array of block type arguments. Accepts any public property
     *                                   of `WP_Block_Type`. See WP_Block_Type::__construct() for information
     *                                   on accepted arguments. Default empty array.
     * @return WP_Block_Type|false The registered block type on success, or false on failure.
     * @phpstan-param array{
     *   title?: string,
     *   category?: string|null,
     *   parent?: array|null,
     *   icon?: string|null,
     *   description?: string,
     *   keywords?: array,
     *   textdomain?: string|null,
     *   styles?: array,
     *   supports?: array|null,
     *   example?: array|null,
     *   render_callback?: callable|null,
     *   attributes?: array|null,
     *   uses_context?: array,
     *   provides_context?: array|null,
     *   editor_script?: string|null,
     *   script?: string|null,
     *   editor_style?: string|null,
     *   style?: string|null,
     * } $args See WP_Block_Type::__construct()
     */
    public function register($name, $args = array())
    {
    }
    /**
     * Unregisters a block type.
     *
     * @since 5.0.0
     *
     * @param string|WP_Block_Type $name Block type name including namespace, or alternatively
     *                                   a complete WP_Block_Type instance.
     * @return WP_Block_Type|false The unregistered block type on success, or false on failure.
     */
    public function unregister($name)
    {
    }
    /**
     * Retrieves a registered block type.
     *
     * @since 5.0.0
     *
     * @param string $name Block type name including namespace.
     * @return WP_Block_Type|null The registered block type, or null if it is not registered.
     */
    public function get_registered($name)
    {
    }
    /**
     * Retrieves all registered block types.
     *
     * @since 5.0.0
     *
     * @return WP_Block_Type[] Associative array of `$block_type_name => $block_type` pairs.
     */
    public function get_all_registered()
    {
    }
    /**
     * Checks if a block type is registered.
     *
     * @since 5.0.0
     *
     * @param string $name Block type name including namespace.
     * @return bool True if the block type is registered, false otherwise.
     */
    public function is_registered($name)
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 5.0.0
     *
     * @return WP_Block_Type_Registry The main instance.
     */
    public static function get_instance()
    {
    }
}