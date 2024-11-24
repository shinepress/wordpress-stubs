<?php


/**
 * Core class used as a store for WP_Style_Engine_CSS_Rule objects.
 *
 * Holds, sanitizes, processes, and prints CSS declarations for the style engine.
 *
 * @since 6.1.0
 */
#[\AllowDynamicProperties]
class WP_Style_Engine_CSS_Rules_Store
{
    /**
     * An array of named WP_Style_Engine_CSS_Rules_Store objects.
     *
     * @static
     *
     * @since 6.1.0
     * @var WP_Style_Engine_CSS_Rules_Store[]
     */
    protected static $stores = array();
    /**
     * The store name.
     *
     * @since 6.1.0
     * @var string
     */
    protected $name = '';
    /**
     * An array of CSS Rules objects assigned to the store.
     *
     * @since 6.1.0
     * @var WP_Style_Engine_CSS_Rule[]
     */
    protected $rules = array();
    /**
     * Gets an instance of the store.
     *
     * @since 6.1.0
     *
     * @param string $store_name The name of the store.
     * @return WP_Style_Engine_CSS_Rules_Store|void
     */
    public static function get_store($store_name = 'default')
    {
    }
    /**
     * Gets an array of all available stores.
     *
     * @since 6.1.0
     *
     * @return WP_Style_Engine_CSS_Rules_Store[]
     */
    public static function get_stores()
    {
    }
    /**
     * Clears all stores from static::$stores.
     *
     * @since 6.1.0
     */
    public static function remove_all_stores()
    {
    }
    /**
     * Sets the store name.
     *
     * @since 6.1.0
     *
     * @param string $name The store name.
     */
    public function set_name($name)
    {
    }
    /**
     * Gets the store name.
     *
     * @since 6.1.0
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Gets an array of all rules.
     *
     * @since 6.1.0
     *
     * @return WP_Style_Engine_CSS_Rule[]
     */
    public function get_all_rules()
    {
    }
    /**
     * Gets a WP_Style_Engine_CSS_Rule object by its selector.
     * If the rule does not exist, it will be created.
     *
     * @since 6.1.0
     * @since 6.6.0 Added the $rules_group parameter.
     *
     * @param string $selector The CSS selector.
     * @param string $rules_group A parent CSS selector in the case of nested CSS, or a CSS nested @rule,
     *                            such as `@media (min-width: 80rem)` or `@layer module`.
     * @return WP_Style_Engine_CSS_Rule|void Returns a WP_Style_Engine_CSS_Rule object,
     *                                       or void if the selector is empty.
     */
    public function add_rule($selector, $rules_group = '')
    {
    }
    /**
     * Removes a selector from the store.
     *
     * @since 6.1.0
     *
     * @param string $selector The CSS selector.
     */
    public function remove_rule($selector)
    {
    }
}