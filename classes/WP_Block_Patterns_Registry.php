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
final class WP_Block_Patterns_Registry
{
    /**
     * Registers a block pattern.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name       Block pattern name including namespace.
     * @param array  $pattern_properties {
     *     List of properties for the block pattern.
     *
     *     @type string $title         Required. A human-readable title for the pattern.
     *     @type string $content       Required. Block HTML markup for the pattern.
     *     @type string $description   Optional. Visually hidden text used to describe the pattern in the
     *                                 inserter. A description is optional, but is strongly
     *                                 encouraged when the title does not fully describe what the
     *                                 pattern does. The description will help users discover the
     *                                 pattern while searching.
     *     @type int    $viewportWidth Optional. The intended width of the pattern to allow for a scaled
     *                                 preview within the pattern inserter.
     *     @type array  $categories    Optional. A list of registered pattern categories used to group block
     *                                 patterns. Block patterns can be shown on multiple categories.
     *                                 A category must be registered separately in order to be used
     *                                 here.
     *     @type array  $keywords      Optional. A list of aliases or keywords that help users discover the
     *                                 pattern while searching.
     * }
     * @return bool True if the pattern was registered with success and false otherwise.
     * @phpstan-param array{
     *   title?: string,
     *   content?: string,
     *   description?: string,
     *   viewportWidth?: int,
     *   categories?: array,
     *   keywords?: array,
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
     * @return array Array of arrays containing the registered block patterns properties,
     *               and per style.
     */
    public function get_all_registered()
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