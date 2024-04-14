<?php


/**
 * Blocks API: WP_Block_Styles_Registry class
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.3.0
 */
/**
 * Class used for interacting with block styles.
 *
 * @since 5.3.0
 */
#[\AllowDynamicProperties]
final class WP_Block_Styles_Registry
{
    /**
     * Registers a block style for the given block type.
     *
     * If the block styles are present in a standalone stylesheet, register it and pass
     * its handle as the `style_handle` argument. If the block styles should be inline,
     * use the `inline_style` argument. Usually, one of them would be used to pass CSS
     * styles. However, you could also skip them and provide CSS styles in any stylesheet
     * or with an inline tag.
     *
     * @since 5.3.0
     *
     * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
     *
     * @param string $block_name       Block type name including namespace.
     * @param array  $style_properties {
     *     Array containing the properties of the style.
     *
     *     @type string $name         The identifier of the style used to compute a CSS class.
     *     @type string $label        A human-readable label for the style.
     *     @type string $inline_style Inline CSS code that registers the CSS class required
     *                                for the style.
     *     @type string $style_handle The handle to an already registered style that should be
     *                                enqueued in places where block styles are needed.
     *     @type bool   $is_default   Whether this is the default style for the block type.
     * }
     * @return bool True if the block style was registered with success and false otherwise.
     * @phpstan-param array{
     *   name?: string,
     *   label?: string,
     *   inline_style?: string,
     *   style_handle?: string,
     *   is_default?: bool,
     * } $style_properties
     */
    public function register($block_name, $style_properties)
    {
    }
    /**
     * Unregisters a block style of the given block type.
     *
     * @since 5.3.0
     *
     * @param string $block_name       Block type name including namespace.
     * @param string $block_style_name Block style name.
     * @return bool True if the block style was unregistered with success and false otherwise.
     */
    public function unregister($block_name, $block_style_name)
    {
    }
    /**
     * Retrieves the properties of a registered block style for the given block type.
     *
     * @since 5.3.0
     *
     * @param string $block_name       Block type name including namespace.
     * @param string $block_style_name Block style name.
     * @return array Registered block style properties.
     */
    public function get_registered($block_name, $block_style_name)
    {
    }
    /**
     * Retrieves all registered block styles.
     *
     * @since 5.3.0
     *
     * @return array[] Array of arrays containing the registered block styles properties grouped by block type.
     */
    public function get_all_registered()
    {
    }
    /**
     * Retrieves registered block styles for a specific block type.
     *
     * @since 5.3.0
     *
     * @param string $block_name Block type name including namespace.
     * @return array[] Array whose keys are block style names and whose values are block style properties.
     */
    public function get_registered_styles_for_block($block_name)
    {
    }
    /**
     * Checks if a block style is registered for the given block type.
     *
     * @since 5.3.0
     *
     * @param string $block_name       Block type name including namespace.
     * @param string $block_style_name Block style name.
     * @return bool True if the block style is registered, false otherwise.
     */
    public function is_registered($block_name, $block_style_name)
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 5.3.0
     *
     * @return WP_Block_Styles_Registry The main instance.
     */
    public static function get_instance()
    {
    }
}