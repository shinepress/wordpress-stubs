<?php


/**
 * List Table API: WP_Links_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying links in a list table.
 *
 * @since 3.1.0
 * @access private
 *
 * @see WP_List_Tsble
 */
class WP_Links_List_Table extends \WP_List_Table
{
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
     * @global int    $cat_id
     * @global string $s
     * @global string $orderby
     * @global string $order
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
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * @global int $cat_id
     * @param string $which
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
     * Get the name of the default primary column.
     *
     * @since 4.3.0
     *
     * @return string Name of the default primary column, in this case, 'name'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @since 4.3.0
     *
     * @param object $link The current link object.
     */
    public function column_cb($link)
    {
    }
    /**
     * Handles the link name column output.
     *
     * @since 4.3.0
     *
     * @param object $link The current link object.
     */
    public function column_name($link)
    {
    }
    /**
     * Handles the link URL column output.
     *
     * @since 4.3.0
     *
     * @param object $link The current link object.
     */
    public function column_url($link)
    {
    }
    /**
     * Handles the link categories column output.
     *
     * @since 4.3.0
     *
     * @global int $cat_id
     *
     * @param object $link The current link object.
     */
    public function column_categories($link)
    {
    }
    /**
     * Handles the link relation column output.
     *
     * @since 4.3.0
     *
     * @param object $link The current link object.
     */
    public function column_rel($link)
    {
    }
    /**
     * Handles the link visibility column output.
     *
     * @since 4.3.0
     *
     * @param object $link The current link object.
     */
    public function column_visible($link)
    {
    }
    /**
     * Handles the link rating column output.
     *
     * @since 4.3.0
     *
     * @param object $link The current link object.
     */
    public function column_rating($link)
    {
    }
    /**
     * Handles the default column output.
     *
     * @since 4.3.0
     *
     * @param object $link        Link object.
     * @param string $column_name Current column name.
     */
    public function column_default($link, $column_name)
    {
    }
    public function display_rows()
    {
    }
    /**
     * Generates and displays row action links.
     *
     * @since 4.3.0
     *
     * @param object $link        Link being acted upon.
     * @param string $column_name Current column name.
     * @param string $primary     Primary column name.
     * @return string Row actions output for links, or an empty string
     *                if the current column is not the primary column.
     */
    protected function handle_row_actions($link, $column_name, $primary)
    {
    }
}