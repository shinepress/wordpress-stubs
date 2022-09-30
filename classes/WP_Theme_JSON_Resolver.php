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
     * Container for data coming from core.
     *
     * @since 5.8.0
     * @var WP_Theme_JSON
     */
    private static $core = \null;
    /**
     * Container for data coming from the theme.
     *
     * @since 5.8.0
     * @var WP_Theme_JSON
     */
    private static $theme = \null;
    /**
     * Whether or not the theme supports theme.json.
     *
     * @since 5.8.0
     * @var bool
     */
    private static $theme_has_support = \null;
    /**
     * Structure to hold i18n metadata.
     *
     * @since 5.8.0
     * @var array
     */
    private static $theme_json_i18n = \null;
    /**
     * Processes a file that adheres to the theme.json schema
     * and returns an array with its contents, or a void array if none found.
     *
     * @since 5.8.0
     *
     * @param string $file_path Path to file. Empty if no file.
     * @return array Contents that adhere to the theme.json schema.
     */
    private static function read_json_file($file_path)
    {
    }
    /**
     * Converts a tree as in i18n-theme.json into a linear array
     * containing metadata to translate a theme.json file.
     *
     * For example, given this input:
     *
     *     {
     *       "settings": {
     *         "*": {
     *           "typography": {
     *             "fontSizes": [ { "name": "Font size name" } ],
     *             "fontStyles": [ { "name": "Font size name" } ]
     *           }
     *         }
     *       }
     *     }
     *
     * will return this output:
     *
     *     [
     *       0 => [
     *         'path'    => [ 'settings', '*', 'typography', 'fontSizes' ],
     *         'key'     => 'name',
     *         'context' => 'Font size name'
     *       ],
     *       1 => [
     *         'path'    => [ 'settings', '*', 'typography', 'fontStyles' ],
     *         'key'     => 'name',
     *         'context' => 'Font style name'
     *       ]
     *     ]
     *
     * @since 5.8.0
     *
     * @param array $i18n_partial A tree that follows the format of i18n-theme.json.
     * @param array $current_path Optional. Keeps track of the path as we walk down the given tree.
     *                            Default empty array.
     * @return array A linear array containing the paths to translate.
     */
    private static function extract_paths_to_translate($i18n_partial, $current_path = array())
    {
    }
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
     * Translates a chunk of the loaded theme.json structure.
     *
     * @since 5.8.0
     *
     * @param array  $array_to_translate The chunk of theme.json to translate.
     * @param string $key                The key of the field that contains the string to translate.
     * @param string $context            The context to apply in the translation call.
     * @param string $domain             Text domain. Unique identifier for retrieving translated strings.
     * @return array Returns the modified $theme_json chunk.
     */
    private static function translate_theme_json_chunk(array $array_to_translate, $key, $context, $domain)
    {
    }
    /**
     * Given a theme.json structure modifies it in place to update certain values
     * by its translated strings according to the language set by the user.
     *
     * @since 5.8.0
     *
     * @param array  $theme_json The theme.json to translate.
     * @param string $domain     Optional. Text domain. Unique identifier for retrieving translated strings.
     *                           Default 'default'.
     * @return array Returns the modified $theme_json_structure.
     */
    private static function translate($theme_json, $domain = 'default')
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
     * Builds the path to the given file and checks that it is readable.
     *
     * If it isn't, returns an empty string, otherwise returns the whole file path.
     *
     * @since 5.8.0
     *
     * @param string $file_name Name of the file.
     * @return string The whole file path or empty if the file doesn't exist.
     */
    private static function get_file_path_from_theme($file_name)
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