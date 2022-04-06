<?php


/**
 * Upgrade API: Language_Pack_Upgrader class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Core class used for updating/installing language packs (translations)
 * for plugins, themes, and core.
 *
 * @since 3.7.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php.
 *
 * @see WP_Upgrader
 */
class Language_Pack_Upgrader extends \WP_Upgrader
{
    /**
     * Result of the language pack upgrade.
     *
     * @since 3.7.0
     * @var array|WP_Error $result
     * @see WP_Upgrader::$result
     */
    public $result;
    /**
     * Whether a bulk upgrade/installation is being performed.
     *
     * @since 3.7.0
     * @var bool $bulk
     */
    public $bulk = \true;
    /**
     * Asynchronously upgrades language packs after other upgrades have been made.
     *
     * Hooked to the {@see 'upgrader_process_complete'} action by default.
     *
     * @since 3.7.0
     *
     * @param false|WP_Upgrader $upgrader Optional. WP_Upgrader instance or false. If `$upgrader` is
     *                                    a Language_Pack_Upgrader instance, the method will bail to
     *                                    avoid recursion. Otherwise unused. Default false.
     */
    public static function async_upgrade($upgrader = \false)
    {
    }
    /**
     * Initialize the upgrade strings.
     *
     * @since 3.7.0
     */
    public function upgrade_strings()
    {
    }
    /**
     * Upgrade a language pack.
     *
     * @since 3.7.0
     *
     * @param string|false $update Optional. Whether an update offer is available. Default false.
     * @param array        $args   Optional. Other optional arguments, see
     *                             Language_Pack_Upgrader::bulk_upgrade(). Default empty array.
     * @return array|bool|WP_Error The result of the upgrade, or a WP_Error object instead.
     */
    public function upgrade($update = \false, $args = array())
    {
    }
    /**
     * Bulk upgrade language packs.
     *
     * @since 3.7.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @param object[] $language_updates Optional. Array of language packs to update. @see wp_get_translation_updates().
     *                                   Default empty array.
     * @param array    $args {
     *     Other arguments for upgrading multiple language packs. Default empty array.
     *
     *     @type bool $clear_update_cache Whether to clear the update cache when done.
     *                                    Default true.
     * }
     * @return array|bool|WP_Error Will return an array of results, or true if there are no updates,
     *                             false or WP_Error for initial errors.
     * @phpstan-param array{
     *   clear_update_cache?: bool,
     * } $args
     */
    public function bulk_upgrade($language_updates = array(), $args = array())
    {
    }
    /**
     * Check the package source to make sure there are .mo and .po files.
     *
     * Hooked to the {@see 'upgrader_source_selection'} filter by
     * Language_Pack_Upgrader::bulk_upgrade().
     *
     * @since 3.7.0
     *
     * @global WP_Filesystem_Base $wp_filesystem Subclass
     *
     * @param string|WP_Error $source
     * @param string          $remote_source
     */
    public function check_package($source, $remote_source)
    {
    }
    /**
     * Get the name of an item being updated.
     *
     * @since 3.7.0
     *
     * @param object $update The data for an update.
     * @return string The name of the item being updated.
     */
    public function get_name_for_update($update)
    {
    }
    /**
     * Clears existing translations where this item is going to be installed into.
     *
     * @since 5.1.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @param string $remote_destination The location on the remote filesystem to be cleared.
     * @return bool|WP_Error True upon success, WP_Error on failure.
     */
    public function clear_destination($remote_destination)
    {
    }
}