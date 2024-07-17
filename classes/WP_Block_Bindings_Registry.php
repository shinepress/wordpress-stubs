<?php


/**
 * Block Bindings API: WP_Block_Bindings_Registry class.
 *
 * Supports overriding content in blocks by connecting them to different sources.
 *
 * @package WordPress
 * @subpackage Block Bindings
 * @since 6.5.0
 */
/**
 * Core class used for interacting with block bindings sources.
 *
 * @since 6.5.0
 */
final class WP_Block_Bindings_Registry
{
    /**
     * Registers a new block bindings source.
     *
     * This is a low-level method. For most use cases, it is recommended to use
     * the `register_block_bindings_source()` function instead.
     *
     * @see register_block_bindings_source()
     *
     * Sources are used to override block's original attributes with a value
     * coming from the source. Once a source is registered, it can be used by a
     * block by setting its `metadata.bindings` attribute to a value that refers
     * to the source.
     *
     * @since 6.5.0
     *
     * @param string $source_name       The name of the source. It must be a string containing a namespace prefix, i.e.
     *                                  `my-plugin/my-custom-source`. It must only contain lowercase alphanumeric
     *                                  characters, the forward slash `/` and dashes.
     * @param array  $source_properties {
     *     The array of arguments that are used to register a source.
     *
     *     @type string   $label              The label of the source.
     *     @type callable $get_value_callback A callback executed when the source is processed during block rendering.
     *                                        The callback should have the following signature:
     *
     *                                        `function( $source_args, $block_instance, $attribute_name ): mixed`
     *                                            - @param array    $source_args    Array containing source arguments
     *                                                                              used to look up the override value,
     *                                                                              i.e. {"key": "foo"}.
     *                                            - @param WP_Block $block_instance The block instance.
     *                                            - @param string   $attribute_name The name of the target attribute.
     *                                        The callback has a mixed return type; it may return a string to override
     *                                        the block's original value, null, false to remove an attribute, etc.
     *     @type string[] $uses_context       Optional. Array of values to add to block `uses_context` needed by the source.
     * }
     * @return WP_Block_Bindings_Source|false Source when the registration was successful, or `false` on failure.
     * @phpstan-param array{
     *   label?: string,
     *   get_value_callback?: callable,
     *   uses_context?: string[],
     * } $source_properties
     */
    public function register(string $source_name, array $source_properties)
    {
    }
    /**
     * Unregisters a block bindings source.
     *
     * @since 6.5.0
     *
     * @param string $source_name Block bindings source name including namespace.
     * @return WP_Block_Bindings_Source|false The unregistered block bindings source on success and `false` otherwise.
     */
    public function unregister(string $source_name)
    {
    }
    /**
     * Retrieves the list of all registered block bindings sources.
     *
     * @since 6.5.0
     *
     * @return WP_Block_Bindings_Source[] The array of registered sources.
     */
    public function get_all_registered()
    {
    }
    /**
     * Retrieves a registered block bindings source.
     *
     * @since 6.5.0
     *
     * @param string $source_name The name of the source.
     * @return WP_Block_Bindings_Source|null The registered block bindings source, or `null` if it is not registered.
     */
    public function get_registered(string $source_name)
    {
    }
    /**
     * Checks if a block bindings source is registered.
     *
     * @since 6.5.0
     *
     * @param string $source_name The name of the source.
     * @return bool `true` if the block bindings source is registered, `false` otherwise.
     */
    public function is_registered($source_name)
    {
    }
    /**
     * Wakeup magic method.
     *
     * @since 6.5.0
     * @phpstan-return void
     */
    public function __wakeup()
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 6.5.0
     *
     * @return WP_Block_Bindings_Registry The main instance.
     */
    public static function get_instance()
    {
    }
}