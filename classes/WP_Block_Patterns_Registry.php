<?php


/**
 * Blocks API: WP_Block_Patterns_Registry class
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.5.0
 */
/**
 * Class used for interacting with patterns.
 *
 * @since 5.5.0
 */
final class WP_Block_Patterns_Registry
{
    /**
     * Registers a pattern.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name       Pattern name including namespace.
     * @param array  $pattern_properties Array containing the properties of the pattern: title,
     *                                   content, description, viewportWidth, categories, keywords.
     * @return bool True if the pattern was registered with success and false otherwise.
     */
    public function register($pattern_name, $pattern_properties)
    {
    }
    /**
     * Unregisters a pattern.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name Pattern name including namespace.
     * @return bool True if the pattern was unregistered with success and false otherwise.
     */
    public function unregister($pattern_name)
    {
    }
    /**
     * Retrieves an array containing the properties of a registered pattern.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name Pattern name including namespace.
     * @return array Registered pattern properties.
     */
    public function get_registered($pattern_name)
    {
    }
    /**
     * Retrieves all registered patterns.
     *
     * @since 5.5.0
     *
     * @return array Array of arrays containing the registered patterns properties,
     *               and per style.
     */
    public function get_all_registered()
    {
    }
    /**
     * Checks if a pattern is registered.
     *
     * @since 5.5.0
     *
     * @param string $pattern_name Pattern name including namespace.
     * @return bool True if the pattern is registered, false otherwise.
     */
    public function is_registered($pattern_name)
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