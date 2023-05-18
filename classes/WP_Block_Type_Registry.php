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
     * Registers a block type.
     *
     * @since 5.0.0
     *
     * @param string|WP_Block_Type $name Block type name including namespace, or alternatively a
     *                                   complete WP_Block_Type instance. In case a WP_Block_Type
     *                                   is provided, the $args parameter will be ignored.
     * @param array                $args {
     *     Optional. Array of block type arguments. Any arguments may be defined, however the
     *     ones described below are supported by default. Default empty array.
     *
     *     @type callable $render_callback Callback used to render blocks of this block type.
     *     @type array    $attributes      Block attributes mapping, property name to schema.
     * }
     * @return WP_Block_Type|false The registered block type on success, or false on failure.
     * @phpstan-param array{
     *   render_callback?: callable,
     *   attributes?: array,
     * } $args
     */
    public function register($name, $args = array())
    {
    }
    /**
     * Unregisters a block type.
     *
     * @since 5.0.0
     *
     * @param string|WP_Block_Type $name Block type name including namespace, or alternatively a
     *                                   complete WP_Block_Type instance.
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