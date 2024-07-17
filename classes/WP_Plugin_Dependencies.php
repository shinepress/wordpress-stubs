<?php


/**
 * WordPress Plugin Administration API: WP_Plugin_Dependencies class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 6.5.0
 */
/**
 * Core class for installing plugin dependencies.
 *
 * It is designed to add plugin dependencies as designated in the
 * `Requires Plugins` header to a new view in the plugins install page.
 */
class WP_Plugin_Dependencies
{
    /**
     * Holds 'get_plugins()'.
     *
     * @since 6.5.0
     *
     * @var array
     */
    protected static $plugins;
    /**
     * Holds plugin directory names to compare with cache.
     *
     * @since 6.5.0
     *
     * @var array
     */
    protected static $plugin_dirnames;
    /**
     * Holds sanitized plugin dependency slugs.
     *
     * Keyed on the dependent plugin's filepath,
     * relative to the plugins directory.
     *
     * @since 6.5.0
     *
     * @var array
     */
    protected static $dependencies;
    /**
     * Holds an array of sanitized plugin dependency slugs.
     *
     * @since 6.5.0
     *
     * @var array
     */
    protected static $dependency_slugs;
    /**
     * Holds an array of dependent plugin slugs.
     *
     * Keyed on the dependent plugin's filepath,
     * relative to the plugins directory.
     *
     * @since 6.5.0
     *
     * @var array
     */
    protected static $dependent_slugs;
    /**
     * Holds 'plugins_api()' data for plugin dependencies.
     *
     * @since 6.5.0
     *
     * @var array
     */
    protected static $dependency_api_data;
    /**
     * Holds plugin dependency filepaths, relative to the plugins directory.
     *
     * Keyed on the dependency's slug.
     *
     * @since 6.5.0
     *
     * @var string[]
     */
    protected static $dependency_filepaths;
    /**
     * An array of circular dependency pairings.
     *
     * @since 6.5.0
     *
     * @var array[]
     */
    protected static $circular_dependencies_pairs;
    /**
     * An array of circular dependency slugs.
     *
     * @since 6.5.0
     *
     * @var string[]
     */
    protected static $circular_dependencies_slugs;
    /**
     * Whether Plugin Dependencies have been initialized.
     *
     * @since 6.5.0
     *
     * @var bool
     */
    protected static $initialized = \false;
    /**
     * Initializes by fetching plugin header and plugin API data.
     *
     * @since 6.5.0
     */
    public static function initialize()
    {
    }
    /**
     * Determines whether the plugin has plugins that depend on it.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return bool Whether the plugin has plugins that depend on it.
     */
    public static function has_dependents($plugin_file)
    {
    }
    /**
     * Determines whether the plugin has plugin dependencies.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return bool Whether a plugin has plugin dependencies.
     */
    public static function has_dependencies($plugin_file)
    {
    }
    /**
     * Determines whether the plugin has active dependents.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return bool Whether the plugin has active dependents.
     */
    public static function has_active_dependents($plugin_file)
    {
    }
    /**
     * Gets filepaths of plugins that require the dependency.
     *
     * @since 6.5.0
     *
     * @param string $slug The dependency's slug.
     * @return array An array of dependent plugin filepaths, relative to the plugins directory.
     */
    public static function get_dependents($slug)
    {
    }
    /**
     * Gets the slugs of plugins that the dependent requires.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The dependent plugin's filepath, relative to the plugins directory.
     * @return array An array of dependency plugin slugs.
     */
    public static function get_dependencies($plugin_file)
    {
    }
    /**
     * Gets a dependent plugin's filepath.
     *
     * @since 6.5.0
     *
     * @param string $slug  The dependent plugin's slug.
     * @return string|false The dependent plugin's filepath, relative to the plugins directory,
     *                      or false if the plugin has no dependencies.
     */
    public static function get_dependent_filepath($slug)
    {
    }
    /**
     * Determines whether the plugin has unmet dependencies.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return bool Whether the plugin has unmet dependencies.
     */
    public static function has_unmet_dependencies($plugin_file)
    {
    }
    /**
     * Determines whether the plugin has a circular dependency.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return bool Whether the plugin has a circular dependency.
     */
    public static function has_circular_dependency($plugin_file)
    {
    }
    /**
     * Gets the names of plugins that require the plugin.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return array An array of dependent names.
     */
    public static function get_dependent_names($plugin_file)
    {
    }
    /**
     * Gets the names of plugins required by the plugin.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The dependent plugin's filepath, relative to the plugins directory.
     * @return array An array of dependency names.
     */
    public static function get_dependency_names($plugin_file)
    {
    }
    /**
     * Gets the filepath for a dependency, relative to the plugin's directory.
     *
     * @since 6.5.0
     *
     * @param string $slug The dependency's slug.
     * @return string|false If installed, the dependency's filepath relative to the plugins directory, otherwise false.
     */
    public static function get_dependency_filepath($slug)
    {
    }
    /**
     * Returns API data for the dependency.
     *
     * @since 6.5.0
     *
     * @param string $slug The dependency's slug.
     * @return array|false The dependency's API data on success, otherwise false.
     */
    public static function get_dependency_data($slug)
    {
    }
    /**
     * Displays an admin notice if dependencies are not installed.
     *
     * @since 6.5.0
     */
    public static function display_admin_notice_for_unmet_dependencies()
    {
    }
    /**
     * Displays an admin notice if circular dependencies are installed.
     *
     * @since 6.5.0
     */
    public static function display_admin_notice_for_circular_dependencies()
    {
    }
    /**
     * Checks plugin dependencies after a plugin is installed via AJAX.
     *
     * @since 6.5.0
     */
    public static function check_plugin_dependencies_during_ajax()
    {
    }
    /**
     * Gets data for installed plugins.
     *
     * @since 6.5.0
     *
     * @return array An array of plugin data.
     */
    protected static function get_plugins()
    {
    }
    /**
     * Reads and stores dependency slugs from a plugin's 'Requires Plugins' header.
     *
     * @since 6.5.0
     */
    protected static function read_dependencies_from_plugin_headers()
    {
    }
    /**
     * Sanitizes slugs.
     *
     * @since 6.5.0
     *
     * @param string $slugs A comma-separated string of plugin dependency slugs.
     * @return array An array of sanitized plugin dependency slugs.
     */
    protected static function sanitize_dependency_slugs($slugs)
    {
    }
    /**
     * Gets the filepath of installed dependencies.
     * If a dependency is not installed, the filepath defaults to false.
     *
     * @since 6.5.0
     *
     * @return array An array of install dependencies filepaths, relative to the plugins directory.
     */
    protected static function get_dependency_filepaths()
    {
    }
    /**
     * Retrieves and stores dependency plugin data from the WordPress.org Plugin API.
     *
     * @since 6.5.0
     *
     * @global string $pagenow The filename of the current screen.
     *
     * @return array|void An array of dependency API data, or void on early exit.
     */
    protected static function get_dependency_api_data()
    {
    }
    /**
     * Gets plugin directory names.
     *
     * @since 6.5.0
     *
     * @return array An array of plugin directory names.
     */
    protected static function get_plugin_dirnames()
    {
    }
    /**
     * Gets circular dependency data.
     *
     * @since 6.5.0
     *
     * @return array[] An array of circular dependency pairings.
     */
    protected static function get_circular_dependencies()
    {
    }
    /**
     * Checks for circular dependencies.
     *
     * @since 6.5.0
     *
     * @param array $dependents   Array of dependent plugins.
     * @param array $dependencies Array of plugins dependencies.
     * @return array A circular dependency pairing, or an empty array if none exists.
     */
    protected static function check_for_circular_dependencies($dependents, $dependencies)
    {
    }
    /**
     * Converts a plugin filepath to a slug.
     *
     * @since 6.5.0
     *
     * @param string $plugin_file The plugin's filepath, relative to the plugins directory.
     * @return string The plugin's slug.
     */
    protected static function convert_to_slug($plugin_file)
    {
    }
}