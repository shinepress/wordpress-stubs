<?php


/**
 * List Table API: WP_MS_Sites_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying sites in a list table for the network admin.
 *
 * @since 3.1.0
 * @access private
 *
 * @see WP_List_Table
 */
class WP_MS_Sites_List_Table extends \WP_List_Table
{
    /**
     * Site status list.
     *
     * @since 4.3.0
     * @var array
     */
    public $status_list;
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
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * Prepares the list of sites for display.
     *
     * @since 3.1.0
     *
     * @global string $mode List table view mode.
     * @global string $s
     * @global wpdb   $wpdb WordPress database abstraction object.
     */
    public function prepare_items()
    {
    }
    /**
     */
    public function no_items()
    {
    }
    /**
     * Gets links to filter sites by status.
     *
     * @since 5.3.0
     *
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * @global string $mode List table view mode.
     *
     * @param string $which The location of the pagination nav markup: 'top' or 'bottom'.
     */
    protected function pagination($which)
    {
    }
    /**
     * Extra controls to be displayed between bulk actions and pagination.
     *
     * @since 5.3.0
     *
     * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
     */
    protected function extra_tablenav($which)
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
     *
     * @param array $blog Current site.
     */
    public function column_cb($blog)
    {
    }
    /**
     * Handles the ID column output.
     *
     * @since 4.4.0
     *
     * @param array $blog Current site.
     */
    public function column_id($blog)
    {
    }
    /**
     * Handles the site name column output.
     *
     * @since 4.3.0
     *
     * @global string $mode List table view mode.
     *
     * @param array $blog Current site.
     */
    public function column_blogname($blog)
    {
    }
    /**
     * Handles the lastupdated column output.
     *
     * @since 4.3.0
     *
     * @global string $mode List table view mode.
     *
     * @param array $blog Current site.
     */
    public function column_lastupdated($blog)
    {
    }
    /**
     * Handles the registered column output.
     *
     * @since 4.3.0
     *
     * @global string $mode List table view mode.
     *
     * @param array $blog Current site.
     */
    public function column_registered($blog)
    {
    }
    /**
     * Handles the users column output.
     *
     * @since 4.3.0
     *
     * @param array $blog Current site.
     */
    public function column_users($blog)
    {
    }
    /**
     * Handles the plugins column output.
     *
     * @since 4.3.0
     *
     * @param array $blog Current site.
     */
    public function column_plugins($blog)
    {
    }
    /**
     * Handles output for the default column.
     *
     * @since 4.3.0
     *
     * @param array  $blog        Current site.
     * @param string $column_name Current column name.
     */
    public function column_default($blog, $column_name)
    {
    }
    /**
     * @global string $mode List table view mode.
     */
    public function display_rows()
    {
    }
    /**
     * Maybe output comma-separated site states.
     *
     * @since 5.3.0
     *
     * @param array $site
     */
    protected function site_states($site)
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 4.3.0
     *
     * @return string Name of the default primary column, in this case, 'blogname'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Generates and displays row action links.
     *
     * @since 4.3.0
     *
     * @param object $blog        Site being acted upon.
     * @param string $column_name Current column name.
     * @param string $primary     Primary column name.
     * @return string Row actions output for sites in Multisite, or an empty string
     *                if the current column is not the primary column.
     */
    protected function handle_row_actions($blog, $column_name, $primary)
    {
    }
}