<?php


/**
 * Core class used to implement displaying themes in a list table for the network admin.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_MS_Themes_List_Table extends \WP_List_Table
{
    public $site_id;
    public $is_site_themes;
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
     * @global array $totals
     * @global int $page
     * @global string $orderby
     * @global string $order
     * @global string $s
     */
    public function prepare_items()
    {
    }
    /**
     * @param WP_Theme $theme
     * @return bool
     */
    public function _search_callback($theme)
    {
    }
    /**
     * @global string $orderby
     * @global string $order
     * @param array $theme_a
     * @param array $theme_b
     * @return int
     */
    public function _order_callback($theme_a, $theme_b)
    {
    }
    /**
     */
    public function no_items()
    {
    }
    /**
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
     * Gets the name of the primary column.
     *
     * @since 4.3.0
     *
     * @return string Unalterable name of the primary column name, in this case, 'name'.
     */
    protected function get_primary_column_name()
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
     *
     * @return array
     */
    protected function get_bulk_actions()
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
     * Handles the checkbox column output.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$theme` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Theme $item The current WP_Theme object.
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the name column output.
     *
     * @since 4.3.0
     *
     * @global string $status
     * @global int    $page
     * @global string $s
     *
     * @param WP_Theme $theme The current WP_Theme object.
     */
    public function column_name($theme)
    {
    }
    /**
     * Handles the description column output.
     *
     * @since 4.3.0
     *
     * @global string $status
     * @global array  $totals
     *
     * @param WP_Theme $theme The current WP_Theme object.
     */
    public function column_description($theme)
    {
    }
    /**
     * Handles the auto-updates column output.
     *
     * @since 5.5.0
     *
     * @global string $status
     * @global int  $page
     *
     * @param WP_Theme $theme The current WP_Theme object.
     */
    public function column_autoupdates($theme)
    {
    }
    /**
     * Handles default column output.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$theme` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Theme $item        The current WP_Theme object.
     * @param string   $column_name The current column name.
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Handles the output for a single table row.
     *
     * @since 4.3.0
     *
     * @param WP_Theme $item The current WP_Theme object.
     */
    public function single_row_columns($item)
    {
    }
    /**
     * @global string $status
     * @global array  $totals
     *
     * @param WP_Theme $theme
     */
    public function single_row($theme)
    {
    }
}