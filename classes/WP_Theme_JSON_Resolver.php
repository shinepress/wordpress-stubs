<?php


/**
 * WP_Theme_JSON_Resolver class
 *
 * @package WordPress
 * @subpackage Theme
 * @since 5.8.0
 */
/**
 * Class that abstracts the processing of the different data sources
 * for site-level config and offers an API to work with them.
 *
 * @access private
 */
class WP_Theme_JSON_Resolver
{
    /**
     * Returns a data structure used in theme.json translation.
     *
     * @since 5.8.0
     *
     * @return array An array of theme.json fields that are translatable and the keys that are translatable.
     */
    public static function get_fields_to_translate()
    {
    }
    /**
     * Return core's origin config.
     *
     * @since 5.8.0
     *
     * @return WP_Theme_JSON Entity that holds core data.
     */
    public static function get_core_data()
    {
    }
    /**
     * Returns the theme's data.
     *
     * Data from theme.json can be augmented via the $theme_support_data variable.
     * This is useful, for example, to backfill the gaps in theme.json that a theme
     * has declared via add_theme_supports.
     *
     * Note that if the same data is present in theme.json and in $theme_support_data,
     * the theme.json's is not overwritten.
     *
     * @since 5.8.0
     *
     * @param array $theme_support_data Optional. Theme support data in theme.json format.
     *                                  Default empty array.
     * @return WP_Theme_JSON Entity that holds theme data.
     */
    public static function get_theme_data($theme_support_data = array())
    {
    }
    /**
     * There are different sources of data for a site: core and theme.
     *
     * While the getters {@link get_core_data}, {@link get_theme_data} return the raw data
     * from the respective origins, this method merges them all together.
     *
     * If the same piece of data is declared in different origins (core and theme),
     * the last origin overrides the previous. For example, if core disables custom colors
     * but a theme enables them, the theme config wins.
     *
     * @since 5.8.0
     *
     * @param array $settings Optional. Existing block editor settings. Default empty array.
     * @return WP_Theme_JSON
     */
    public static function get_merged_data($settings = array())
    {
    }
    /**
     * Whether the current theme has a theme.json file.
     *
     * @since 5.8.0
     *
     * @return bool
     */
    public static function theme_has_support()
    {
    }
    /**
     * Cleans the cached data so it can be recalculated.
     *
     * @since 5.8.0
     */
    public static function clean_cached_data()
    {
    }
}