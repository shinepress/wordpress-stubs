<?php


/**
 * Blocks API: WP_Block_Patterns_Registry class
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.5.0
 */
/**
 * Class used for interacting with block patterns.
 *
 * @since 5.5.0
 */
#[\AllowDynamicProperties]
final class WP_Block_Patterns_Registry
{
    /**
     * Registers a block pattern.
     *
     * @since 5.5.0
     * @since 5.8.0 Added support for the `blockTypes` property.
     * @since 6.1.0 Added support for the `postTypes` property.
     * @since 6.2.0 Added support for the `templateTypes` property.
     * @since 6.5.0 Added support for the `filePath` property.
     *
     * @param string $pattern_name       Block pattern name including namespace.
     * @param array  $pattern_properties {
     *     List of properties for the block pattern.
     *
     *     @type string   $title         Required. A human-readable title for the pattern.
     *     @type string   $content       Optional. Block HTML markup for the pattern.
     *                                   If not provided, the content will be retrieved from the `filePath` if set.
     *                                   If both `content` and `filePath` are not set, the pattern will not be registered.
     *     @type string   $description   Optional. Visually hidden text used to describe the pattern
     *                                   in the inserter. A description is optional, but is strongly
     *                                   encouraged when the title does not fully describe what the
     *                                   pattern does. The description will help users discover the
     *                                   pattern while searching.
     *     @type int      $viewportWidth Optional. The intended width of the pattern to allow for a scaled
     *                                   preview within the pattern inserter.
     *     @type bool     $inserter      Optional. Determines whether the pattern is visible in inserter.
     *                                   To hide a pattern so that it can only be inserted programmatically,
     *                                   set this to false. Default true.
     *     @type string[] $categories    Optional. A list of registered pattern categories used to group
     *                                   block patterns. Block patterns can be shown on multiple categories.
     *                                   A category must be registered separately in order to be used here.
     *     @type string[] $keywords      Optional. A list of aliases or keywords that help users discover
     *                                   the pattern while searching.
     *     @type string[] $blockTypes    Optional. A list of block names including namespace that could use
     *                                   the block pattern in certain contexts (placeholder, transforms).
     *                                   The block pattern is available in the block editor inserter
     *                                   regardless of this list of block names.
     *                                   Certain blocks support further specificity besides the block name
     *                                   (e.g. for `core/template-part` you can specify areas
     *                                   like `core/template-part/header` or `core/template-part/footer`).
     *     @type string[] $postTypes     Optional. An array of post types that the pattern is restricted
     *                                   to be used with. The pattern will only be available when editing one
     *                                   of the post types passed on the array. For all the other post types
     *                                   not part of the array the pattern is not available at all.
     *     @type string[] $templateTypes Optional. An array of template types where the pattern fits.
     *     @type string   $filePath      Optional. The full path to the file containing the block pattern content.
     * }
     * @return bool True if the pattern was registered with success and false otherwise.
     * @phpstan-param array{
     *   title?: string,
     *   content?: string,
     *   description?: string,
     *   viewportWidth?: int,
     *   inserter?: bool,
     *   categories?: string[],
     *   keywords?: string[],
     *   blockTypes?: string[],
     *   postTypes?: string[],
     *   templateTypes?: string[],
     *   filePath?: string,
     * } $pattern_properties
     */
    public function register($pattern_name, $pattern_properties)
    {
    }
    /**
     * Unregisters a block pattern.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name Block pattern name including namespace.
     * @return bool True if the pattern was unregistered with success and false otherwise.
     */
    public function unregister($pattern_name)
    {
    }
    /**
     * Retrieves an array containing the properties of a registered block pattern.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name Block pattern name including namespace.
     * @return array Registered pattern properties.
     */
    public function get_registered($pattern_name)
    {
    }
    /**
     * Retrieves all registered block patterns.
     *
     * @since 5.5.0
     *
     * @param bool $outside_init_only Return only patterns registered outside the `init` action.
     * @return array[] Array of arrays containing the registered block patterns properties,
     *                 and per style.
     */
    public function get_all_registered($outside_init_only = \false)
    {
    }
    /**
     * Checks if a block pattern is registered.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name Block pattern name including namespace.
     * @return bool True if the pattern is registered, false otherwise.
     */
    public function is_registered($pattern_name)
    {
    }
    public function __wakeup()
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 5.5.0
     *
     * @return WP_Block_Patterns_Registry The main instance.
     */
    public static function get_instance()
    {
    }
}