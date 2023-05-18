<?php


/**
 * List Table API: WP_MS_Users_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying users in a list table for the network admin.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_MS_Users_List_Table extends \WP_List_Table
{
    /**
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * @global string $mode       List table view mode.
     * @global string $usersearch
     * @global string $role
     */
    public function prepare_items()
    {
    }
    /**
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     */
    public function no_items()
    {
    }
    /**
     * @global string $role
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * @global string $mode List table view mode.
     *
     * @param string $which
     */
    protected function pagination($which)
    {
    }
    /**
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * @return array
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$user` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_User $item The current WP_User object.
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the ID column output.
     *
     * @since 4.4.0
     *
     * @param WP_User $user The current WP_User object.
     */
    public function column_id($user)
    {
    }
    /**
     * Handles the username column output.
     *
     * @since 4.3.0
     *
     * @param WP_User $user The current WP_User object.
     */
    public function column_username($user)
    {
    }
    /**
     * Handles the name column output.
     *
     * @since 4.3.0
     *
     * @param WP_User $user The current WP_User object.
     */
    public function column_name($user)
    {
    }
    /**
     * Handles the email column output.
     *
     * @since 4.3.0
     *
     * @param WP_User $user The current WP_User object.
     */
    public function column_email($user)
    {
    }
    /**
     * Handles the registered date column output.
     *
     * @since 4.3.0
     *
     * @global string $mode List table view mode.
     *
     * @param WP_User $user The current WP_User object.
     */
    public function column_registered($user)
    {
    }
    /**
     * @since 4.3.0
     *
     * @param WP_User $user
     * @param string  $classes
     * @param string  $data
     * @param string  $primary
     */
    protected function _column_blogs($user, $classes, $data, $primary)
    {
    }
    /**
     * Handles the sites column output.
     *
     * @since 4.3.0
     *
     * @param WP_User $user The current WP_User object.
     */
    public function column_blogs($user)
    {
    }
    /**
     * Handles the default column output.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$user` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_User $item        The current WP_User object.
     * @param string  $column_name The current column name.
     */
    public function column_default($item, $column_name)
    {
    }
    public function display_rows()
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 4.3.0
     *
     * @return string Name of the default primary column, in this case, 'username'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Generates and displays row action links.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$user` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_User $item        User being acted upon.
     * @param string  $column_name Current column name.
     * @param string  $primary     Primary column name.
     * @return string Row actions output for users in Multisite, or an empty string
     *                if the current column is not the primary column.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
}