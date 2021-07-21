<?php


/**
 * Upgrade API: Core_Upgrader class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */
/**
 * Core class used for updating core.
 *
 * It allows for WordPress to upgrade itself in combination with
 * the wp-admin/includes/update-core.php file.
 *
 * @since 2.8.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader.php.
 *
 * @see WP_Upgrader
 */
class Core_Upgrader extends \WP_Upgrader
{
    /**
     * Initialize the upgrade strings.
     *
     * @since 2.8.0
     */
    public function upgrade_strings()
    {
    }
    /**
     * Upgrade WordPress core.
     *
     * @since 2.8.0
     *
     * @global WP_Filesystem_Base $wp_filesystem                WordPress filesystem subclass.
     * @global callable           $_wp_filesystem_direct_method
     *
     * @param object $current Response object for whether WordPress is current.
     * @param array  $args {
     *     Optional. Arguments for upgrading WordPress core. Default empty array.
     *
     *     @type bool $pre_check_md5    Whether to check the file checksums before
     *                                  attempting the upgrade. Default true.
     *     @type bool $attempt_rollback Whether to attempt to rollback the chances if
     *                                  there is a problem. Default false.
     *     @type bool $do_rollback      Whether to perform this "upgrade" as a rollback.
     *                                  Default false.
     * }
     * @return string|false|WP_Error New WordPress version on success, false or WP_Error on failure.
     */
    public function upgrade($current, $args = array())
    {
    }
    /**
     * Determines if this WordPress Core version should update to an offered version or not.
     *
     * @since 3.7.0
     *
     * @param string $offered_ver The offered version, of the format x.y.z.
     * @return bool True if we should update to the offered version, otherwise false.
     */
    public static function should_update_to_version($offered_ver)
    {
    }
    /**
     * Compare the disk file checksums against the expected checksums.
     *
     * @since 3.7.0
     *
     * @global string $wp_version       The WordPress version string.
     * @global string $wp_local_package Locale code of the package.
     *
     * @return bool True if the checksums match, otherwise false.
     */
    public function check_files()
    {
    }
}