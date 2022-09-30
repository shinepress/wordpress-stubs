<?php


/**
 * Blocks API: WP_Block_Pattern_Categories_Registry class
 *
 * @package WordPress
 * @subpackage Blocks
 * @since 5.5.0
 */
/**
 * Class used for interacting with block pattern categories.
 */
final class WP_Block_Pattern_Categories_Registry
{
    /**
     * Registered block pattern categories array.
     *
     * @since 5.5.0
     * @var array
     */
    private $registered_categories = array();
    /**
     * Container for the main instance of the class.
     *
     * @since 5.5.0
     * @var WP_Block_Pattern_Categories_Registry|null
     */
    private static $instance = \null;
    /**
     * Registers a pattern category.
     *
     * @since 5.5.0
     *
     * @param string $category_name       Pattern category name including namespace.
     * @param array  $category_properties Array containing the properties of the category: label.
     * @return bool True if the pattern was registered with success and false otherwise.
     */
    public function register($category_name, $category_properties)
    {
    }
    /**
     * Unregisters a pattern category.
     *
     * @since 5.5.0
     *
     * @param string $category_name Pattern category name including namespace.
     * @return bool True if the pattern was unregistered with success and false otherwise.
     */
    public function unregister($category_name)
    {
    }
    /**
     * Retrieves an array containing the properties of a registered pattern category.
     *
     * @since 5.5.0
     *
     * @param string $category_name Pattern category name including namespace.
     * @return array Registered pattern properties.
     */
    public function get_registered($category_name)
    {
    }
    /**
     * Retrieves all registered pattern categories.
     *
     * @since 5.5.0
     *
     * @return array Array of arrays containing the registered pattern categories properties.
     */
    public function get_all_registered()
    {
    }
    /**
     * Checks if a pattern category is registered.
     *
     * @since 5.5.0
     *
     * @param string $category_name Pattern category name including namespace.
     * @return bool True if the pattern category is registered, false otherwise.
     */
    public function is_registered($category_name)
    {
    }
    /**
     * Utility method to retrieve the main instance of the class.
     *
     * The instance will be created if it does not exist yet.
     *
     * @since 5.5.0
     *
     * @return WP_Block_Pattern_Categories_Registry The main instance.
     */
    public static function get_instance()
    {
    }
}