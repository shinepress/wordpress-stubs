<?php


/**
 * List Table API: WP_Users_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying users in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_Users_List_Table extends \WP_List_Table
{
    /**
     * Site ID to generate the Users list table for.
     *
     * @since 3.1.0
     * @var int
     */
    public $site_id;
    /**
     * Whether or not the current Users list table is for Multisite.
     *
     * @since 3.1.0
     * @var bool
     */
    public $is_site_users;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @see WP_List_Table::__construct() for more information on default arguments.
     *
     * @param array $args An associative array of arguments.
     */
    public function __construct($args = array())
    {
    }
    /**
     * Checks the current user's permissions.
     *
     * @since 3.1.0
     *
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * Prepares the users list for display.
     *
     * @since 3.1.0
     *
     * @global string $role
     * @global string $usersearch
     */
    public function prepare_items()
    {
    }
    /**
     * Outputs 'no users' message.
     *
     * @since 3.1.0
     */
    public function no_items()
    {
    }
    /**
     * Returns an associative array listing all the views that can be used
     * with this table.
     *
     * Provides a list of roles and user count for that role for easy
     * Filtersing of the user table.
     *
     * @since 3.1.0
     *
     * @global string $role
     *
     * @return string[] An array of HTML links keyed by their view.
     */
    protected function get_views()
    {
    }
    /**
     * Retrieves an associative array of bulk actions available on this table.
     *
     * @since 3.1.0
     *
     * @return array Array of bulk action labels keyed by their action.
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Outputs the controls to allow user roles to be changed in bulk.
     *
     * @since 3.1.0
     *
     * @param string $which Whether this is being invoked above ("top")
     *                      or below the table ("bottom").
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * Captures the bulk action required, and return it.
     *
     * Overridden from the base class implementation to capture
     * the role change drop-down.
     *
     * @since 3.1.0
     *
     * @return string The bulk action required.
     */
    public function current_action()
    {
    }
    /**
     * Gets a list of columns for the list table.
     *
     * @since 3.1.0
     *
     * @return string[] Array of column titles keyed by their column name.
     */
    public function get_columns()
    {
    }
    /**
     * Gets a list of sortable columns for the list table.
     *
     * @since 3.1.0
     *
     * @return array Array of sortable columns.
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * Generates the list table rows.
     *
     * @since 3.1.0
     */
    public function display_rows()
    {
    }
    /**
     * Generates HTML for a single row on the users.php admin panel.
     *
     * @since 3.1.0
     * @since 4.2.0 The `$style` parameter was deprecated.
     * @since 4.4.0 The `$role` parameter was deprecated.
     *
     * @param WP_User $user_object The current user object.
     * @param string  $style       Deprecated. Not used.
     * @param string  $role        Deprecated. Not used.
     * @param int     $numposts    Optional. Post count to display for this user. Defaults
     *                             to zero, as in, a new user has made zero posts.
     * @return string Output for a single row.
     */
    public function single_row($user_object, $style = '', $role = '', $numposts = 0)
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
     * Returns an array of translated user role names for a given user object.
     *
     * @since 4.4.0
     *
     * @param WP_User $user_object The WP_User object.
     * @return string[] An array of user role names keyed by role.
     */
    protected function get_role_list($user_object)
    {
    }
}