<?php


/**
 * Class for providing debug data based on a users WordPress environment.
 *
 * @package WordPress
 * @subpackage Site_Health
 * @since 5.2.0
 */
class WP_Debug_Data
{
    /**
     * Calls all core functions to check for updates.
     *
     * @since 5.2.0
     */
    public static function check_for_updates()
    {
    }
    /**
     * Static function for generating site debug data when required.
     *
     * @since 5.2.0
     * @since 5.3.0 Added database charset, database collation,
     *              and timezone information.
     * @since 5.5.0 Added pretty permalinks support information.
     *
     * @throws ImagickException
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return array The debug data for the site.
     */
    public static function debug_data()
    {
    }
    /**
     * Returns the value of a MySQL variable.
     *
     * @since 5.9.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $var Name of the MySQL variable.
     * @return string|null The variable value on success. Null if the variable does not exist.
     */
    public static function get_mysql_var($var)
    {
    }
    /**
     * Format the information gathered for debugging, in a manner suitable for copying to a forum or support ticket.
     *
     * @since 5.2.0
     *
     * @param array  $info_array Information gathered from the `WP_Debug_Data::debug_data` function.
     * @param string $type       The data type to return, either 'info' or 'debug'.
     * @return string The formatted data.
     * @phpstan-param 'info'|'debug' $type
     */
    public static function format($info_array, $type)
    {
    }
    /**
     * Fetch the total size of all the database tables for the active database user.
     *
     * @since 5.2.0
     *
     * @return int The size of the database, in bytes.
     */
    public static function get_database_size()
    {
    }
    /**
     * Fetch the sizes of the WordPress directories: `wordpress` (ABSPATH), `plugins`, `themes`, and `uploads`.
     * Intended to supplement the array returned by `WP_Debug_Data::debug_data()`.
     *
     * @since 5.2.0
     *
     * @return array The sizes of the directories, also the database size and total installation size.
     */
    public static function get_sizes()
    {
    }
}