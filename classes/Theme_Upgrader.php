<?php


/**
 * Upgrade API: Theme_Upgrader class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Core class used for upgrading/installing themes.
 *
 * It is designed to upgrade/install themes from a local zip, remote zip URL,
 * or uploaded zip file.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php.
 *
 * @see WP_Upgrader
 */
class Theme_Upgrader extends \WP_Upgrader
{
    /**
     * Result of the theme upgrade offer.
     *
     * @since 2.8.0
     * @var array|WP_Error $result
     * @see WP_Upgrader::$result
     */
    public $result;
    /**
     * Whether multiple themes are being upgraded/installed in bulk.
     *
     * @since 2.9.0
     * @var bool $bulk
     */
    public $bulk = \false;
    /**
     * Initialize the upgrade strings.
     *
     * @since 2.8.0
     */
    public function upgrade_strings()
    {
    }
    /**
     * Initialize the installation strings.
     *
     * @since 2.8.0
     */
    public function install_strings()
    {
    }
    /**
     * Check if a child theme is being installed and we need to install its parent.
     *
     * Hooked to the {@see 'upgrader_post_install'} filter by Theme_Upgrader::install().
     *
     * @since 3.4.0
     *
     * @param bool  $install_result
     * @param array $hook_extra
     * @param array $child_result
     * @return type
     */
    public function check_parent_theme_filter($install_result, $hook_extra, $child_result)
    {
    }
    /**
     * Don't display the activate and preview actions to the user.
     *
     * Hooked to the {@see 'install_theme_complete_actions'} filter by
     * Theme_Upgrader::check_parent_theme_filter() when installing
     * a child theme and installing the parent theme fails.
     *
     * @since 3.4.0
     *
     * @param array $actions Preview actions.
     * @return array
     */
    public function hide_activate_preview_actions($actions)
    {
    }
    /**
     * Install a theme package.
     *
     * @since 2.8.0
     * @since 3.7.0 The `$args` parameter was added, making clearing the update cache optional.
     *
     * @param string $package The full local path or URI of the package.
     * @param array  $args {
     *     Optional. Other arguments for installing a theme package. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the updates cache if successful.
     *                                    Default true.
     * }
     *
     * @return bool|WP_Error True if the installation was successful, false or a WP_Error object otherwise.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function install($package, $args = array())
    {
    }
    /**
     * Upgrade a theme.
     *
     * @since 2.8.0
     * @since 3.7.0 The `$args` parameter was added, making clearing the update cache optional.
     *
     * @param string $theme The theme slug.
     * @param array  $args {
     *     Optional. Other arguments for upgrading a theme. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the update cache if successful.
     *                                    Default true.
     * }
     * @return bool|WP_Error True if the upgrade was successful, false or a WP_Error object otherwise.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function upgrade($theme, $args = array())
    {
    }
    /**
     * Upgrade several themes at once.
     *
     * @since 3.0.0
     * @since 3.7.0 The `$args` parameter was added, making clearing the update cache optional.
     *
     * @param array $themes The theme slugs.
     * @param array $args {
     *     Optional. Other arguments for upgrading several themes at once. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the update cache if successful.
     *                                    Default true.
     * }
     * @return array[]|false An array of results, or false if unable to connect to the filesystem.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function bulk_upgrade($themes, $args = array())
    {
    }
    /**
     * Check that the package source contains a valid theme.
     *
     * Hooked to the {@see 'upgrader_source_selection'} filter by Theme_Upgrader::install().
     * It will return an error if the theme doesn't have style.css or index.php
     * files.
     *
     * @since 3.3.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param string $source The full path to the package source.
     * @return string|WP_Error The source or a WP_Error.
     */
    public function check_package($source)
    {
    }
    /**
     * Turn on maintenance mode before attempting to upgrade the current theme.
     *
     * Hooked to the {@see 'upgrader_pre_install'} filter by Theme_Upgrader::upgrade() and
     * Theme_Upgrader::bulk_upgrade().
     *
     * @since 2.8.0
     *
     * @param bool|WP_Error  $return
     * @param array          $theme
     * @return bool|WP_Error
     */
    public function current_before($return, $theme)
    {
    }
    /**
     * Turn off maintenance mode after upgrading the current theme.
     *
     * Hooked to the {@see 'upgrader_post_install'} filter by Theme_Upgrader::upgrade()
     * and Theme_Upgrader::bulk_upgrade().
     *
     * @since 2.8.0
     *
     * @param bool|WP_Error  $return
     * @param array          $theme
     * @return bool|WP_Error
     */
    public function current_after($return, $theme)
    {
    }
    /**
     * Delete the old theme during an upgrade.
     *
     * Hooked to the {@see 'upgrader_clear_destination'} filter by Theme_Upgrader::upgrade()
     * and Theme_Upgrader::bulk_upgrade().
     *
     * @since 2.8.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param bool   $removed
     * @param string $local_destination
     * @param string $remote_destination
     * @param array  $theme
     * @return bool
     */
    public function delete_old_theme($removed, $local_destination, $remote_destination, $theme)
    {
    }
    /**
     * Get the WP_Theme object for a theme.
     *
     * @since 2.8.0
     * @since 3.0.0 The `$theme` argument was added.
     *
     * @param string $theme The directory name of the theme. This is optional, and if not supplied,
     *                      the directory name from the last result will be used.
     * @return WP_Theme|false The theme's info object, or false `$theme` is not supplied
     *                        and the last result isn't set.
     */
    public function theme_info($theme = \null)
    {
    }
}