<?php


/**
 * List Table API: WP_Plugins_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying installed plugins in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_Plugins_List_Table extends \WP_List_Table
{
    /**
     * Whether to show the auto-updates UI.
     *
     * @since 5.5.0
     *
     * @var bool True if auto-updates UI is to be shown, false otherwise.
     */
    protected $show_autoupdates = \true;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @see WP_List_Table::__construct() for more information on default arguments.
     *
     * @global string $status
     * @global int    $page
     *
     * @param array $args An associative array of arguments.
     */
    public function __construct($args = array())
    {
    }
    /**
     * @return array
     */
    protected function get_table_classes()
    {
    }
    /**
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * @global string $status
     * @global array  $plugins
     * @global array  $totals
     * @global int    $page
     * @global string $orderby
     * @global string $order
     * @global string $s
     */
    public function prepare_items()
    {
    }
    /**
     * @global string $s URL encoded search term.
     *
     * @param array $plugin
     * @return bool
     */
    public function _search_callback($plugin)
    {
    }
    /**
     * @global string $orderby
     * @global string $order
     * @param array $plugin_a
     * @param array $plugin_b
     * @return int
     */
    public function _order_callback($plugin_a, $plugin_b)
    {
    }
    /**
     * @global array $plugins
     */
    public function no_items()
    {
    }
    /**
     * Displays the search box.
     *
     * @since 4.6.0
     *
     * @param string $text     The 'submit' button label.
     * @param string $input_id ID attribute value for the search input field.
     * @phpstan-return void
     */
    public function search_box($text, $input_id)
    {
    }
    /**
     * @global string $status
     *
     * @return string[] Array of column titles keyed by their column name.
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
     * @global array $totals
     * @global string $status
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * @global string $status
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * @global string $status
     * @param string $which
     * @phpstan-return void
     */
    public function bulk_actions($which = '')
    {
    }
    /**
     * @global string $status
     * @param string $which
     * @phpstan-return void
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * @return string
     */
    public function current_action()
    {
    }
    /**
     * @global string $status
     * @phpstan-return void
     */
    public function display_rows()
    {
    }
    /**
     * @global string $status
     * @global int $page
     * @global string $s
     * @global array $totals
     *
     * @param array $item
     */
    public function single_row($item)
    {
    }
    /**
     * Gets the name of the primary column for this specific list table.
     *
     * @since 4.3.0
     *
     * @return string Unalterable name for the primary column, in this case, 'name'.
     */
    protected function get_primary_column_name()
    {
    }
    /**
     * Prints a list of other plugins that depend on the plugin.
     *
     * @since 6.5.0
     *
     * @param string $dependency The dependency's filepath, relative to the plugins directory.
     * @phpstan-return void
     */
    protected function add_dependents_to_dependency_plugin_row($dependency)
    {
    }
    /**
     * Prints a list of other plugins that the plugin depends on.
     *
     * @since 6.5.0
     *
     * @param string $dependent The dependent plugin's filepath, relative to the plugins directory.
     * @phpstan-return void
     */
    protected function add_dependencies_to_dependent_plugin_row($dependent)
    {
    }
    /**
     * Returns a 'View details' like link for a dependency.
     *
     * @since 6.5.0
     *
     * @param string $name The dependency's name.
     * @param string $slug The dependency's slug.
     * @return string A 'View details' link for the dependency.
     */
    protected function get_dependency_view_details_link($name, $slug)
    {
    }
    /**
     * Returns a 'View details' link for the plugin.
     *
     * @since 6.5.0
     *
     * @param string $name The plugin's name.
     * @param string $slug The plugin's slug.
     * @return string A 'View details' link for the plugin.
     */
    protected function get_view_details_link($name, $slug)
    {
    }
}