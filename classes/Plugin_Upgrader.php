<?php


/**
 * Upgrade API: Plugin_Upgrader class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Core class used for upgrading/installing plugins.
 *
 * It is designed to upgrade/install plugins from a local zip, remote zip URL,
 * or uploaded zip file.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php.
 *
 * @see WP_Upgrader
 */
class Plugin_Upgrader extends \WP_Upgrader
{
    /**
     * Plugin upgrade result.
     *
     * @since 2.8.0
     * @access public
     * @var array|WP_Error $result
     *
     * @see WP_Upgrader::$result
     */
    public $result;
    /**
     * Whether a bulk upgrade/install is being performed.
     *
     * @since 2.9.0
     * @access public
     * @var bool $bulk
     */
    public $bulk = \false;
    /**
     * Initialize the upgrade strings.
     *
     * @since 2.8.0
     * @access public
     */
    public function upgrade_strings()
    {
    }
    /**
     * Initialize the install strings.
     *
     * @since 2.8.0
     * @access public
     */
    public function install_strings()
    {
    }
    /**
     * Install a plugin package.
     *
     * @since 2.8.0
     * @since 3.7.0 The `$args` parameter was added, making clearing the plugin update cache optional.
     * @access public
     *
     * @param string $package The full local path or URI of the package.
     * @param array  $args {
     *     Optional. Other arguments for installing a plugin package. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the plugin updates cache if successful.
     *                                    Default true.
     * }
     * @return bool|WP_Error True if the install was successful, false or a WP_Error otherwise.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function install($package, $args = array())
    {
    }
    /**
     * Upgrade a plugin.
     *
     * @since 2.8.0
     * @since 3.7.0 The `$args` parameter was added, making clearing the plugin update cache optional.
     * @access public
     *
     * @param string $plugin The basename path to the main plugin file.
     * @param array  $args {
     *     Optional. Other arguments for upgrading a plugin package. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the plugin updates cache if successful.
     *                                    Default true.
     * }
     * @return bool|WP_Error True if the upgrade was successful, false or a WP_Error object otherwise.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function upgrade($plugin, $args = array())
    {
    }
    /**
     * Bulk upgrade several plugins at once.
     *
     * @since 2.8.0
     * @since 3.7.0 The `$args` parameter was added, making clearing the plugin update cache optional.
     * @access public
     *
     * @param array $plugins Array of the basename paths of the plugins' main files.
     * @param array $args {
     *     Optional. Other arguments for upgrading several plugins at once. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the plugin updates cache if successful.
     *                                    Default true.
     * }
     * @return array|false An array of results indexed by plugin file, or false if unable to connect to the filesystem.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function bulk_upgrade($plugins, $args = array())
    {
    }
    /**
     * Check a source package to be sure it contains a plugin.
     *
     * This function is added to the {@see 'upgrader_source_selection'} filter by
     * Plugin_Upgrader::install().
     *
     * @since 3.3.0
     * @access public
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param string $source The path to the downloaded package source.
     * @return string|WP_Error The source as passed, or a WP_Error object
     *                         if no plugins were found.
     */
    public function check_package($source)
    {
    }
    /**
     * Retrieve the path to the file that contains the plugin info.
     *
     * This isn't used internally in the class, but is called by the skins.
     *
     * @since 2.8.0
     * @access public
     *
     * @return string|false The full path to the main plugin file, or false.
     */
    public function plugin_info()
    {
    }
    /**
     * Deactivates a plugin before it is upgraded.
     *
     * Hooked to the {@see 'upgrader_pre_install'} filter by Plugin_Upgrader::upgrade().
     *
     * @since 2.8.0
     * @since 4.1.0 Added a return value.
     * @access public
     *
     * @param bool|WP_Error  $return Upgrade offer return.
     * @param array          $plugin Plugin package arguments.
     * @return bool|WP_Error The passed in $return param or WP_Error.
     */
    public function deactivate_plugin_before_upgrade($return, $plugin)
    {
    }
    /**
     * Delete the old plugin during an upgrade.
     *
     * Hooked to the {@see 'upgrader_clear_destination'} filter by
     * Plugin_Upgrader::upgrade() and Plugin_Upgrader::bulk_upgrade().
     *
     * @since 2.8.0
     * @access public
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param bool|WP_Error $removed
     * @param string        $local_destination
     * @param string        $remote_destination
     * @param array         $plugin
     * @return WP_Error|bool
     */
    public function delete_old_plugin($removed, $local_destination, $remote_destination, $plugin)
    {
    }
}