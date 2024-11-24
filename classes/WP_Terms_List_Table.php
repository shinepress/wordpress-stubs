<?php


/**
 * Core class used to implement displaying terms in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_Terms_List_Table extends \WP_List_Table
{
    public $callback_args;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @see WP_List_Table::__construct() for more information on default arguments.
     *
     * @global string $post_type Global post type.
     * @global string $taxonomy  Global taxonomy.
     * @global string $action
     * @global object $tax
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
     * @return string
     */
    public function current_action()
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
     * @phpstan-return void
     */
    public function display_rows_or_placeholder()
    {
    }
    /**
     * @global string $taxonomy Global taxonomy.
     *
     * @param WP_Term $tag   Term object.
     * @param int     $level
     */
    public function single_row($tag, $level = 0)
    {
    }
    /**
     * @since 5.9.0 Renamed `$tag` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Term $item Term object.
     * @return string
     */
    public function column_cb($item)
    {
    }
    /**
     * @param WP_Term $tag Term object.
     * @return string
     */
    public function column_name($tag)
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 4.3.0
     *
     * @return string Name of the default primary column, in this case, 'name'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Generates and displays row action links.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$tag` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Term $item        Tag being acted upon.
     * @param string  $column_name Current column name.
     * @param string  $primary     Primary column name.
     * @return string Row actions output for terms, or an empty string
     *                if the current column is not the primary column.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
    /**
     * @param WP_Term $tag Term object.
     * @return string
     */
    public function column_description($tag)
    {
    }
    /**
     * @param WP_Term $tag Term object.
     * @return string
     */
    public function column_slug($tag)
    {
    }
    /**
     * @param WP_Term $tag Term object.
     * @return string
     */
    public function column_posts($tag)
    {
    }
    /**
     * @param WP_Term $tag Term object.
     * @return string
     */
    public function column_links($tag)
    {
    }
    /**
     * @since 5.9.0 Renamed `$tag` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Term $item        Term object.
     * @param string  $column_name Name of the column.
     * @return string
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Outputs the hidden row displayed when inline editing
     *
     * @since 3.1.0
     * @phpstan-return void
     */
    public function inline_edit()
    {
    }
}