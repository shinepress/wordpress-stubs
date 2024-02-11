<?php


/**
 * List Table API: WP_Media_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying media items in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_Media_List_Table extends \WP_List_Table
{
    /**
     * Holds the number of pending comments for each post.
     *
     * @since 4.4.0
     * @var array
     */
    protected $comment_pending_count = array();
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
     * @global string   $mode                  List table view mode.
     * @global WP_Query $wp_query              WordPress Query object.
     * @global array    $post_mime_types
     * @global array    $avail_post_mime_types
     */
    public function prepare_items()
    {
    }
    /**
     * @global array $post_mime_types
     * @global array $avail_post_mime_types
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
     * @return bool
     */
    public function has_items()
    {
    }
    /**
     */
    public function no_items()
    {
    }
    /**
     * Overrides parent views to use the filter bar display.
     *
     * @global string $mode List table view mode.
     */
    public function views()
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
     * Handles the checkbox column output.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$post` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Post $item The current WP_Post object.
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the title column output.
     *
     * @since 4.3.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_title($post)
    {
    }
    /**
     * Handles the author column output.
     *
     * @since 4.3.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_author($post)
    {
    }
    /**
     * Handles the description column output.
     *
     * @since 4.3.0
     * @deprecated 6.2.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_desc($post)
    {
    }
    /**
     * Handles the date column output.
     *
     * @since 4.3.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_date($post)
    {
    }
    /**
     * Handles the parent column output.
     *
     * @since 4.3.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_parent($post)
    {
    }
    /**
     * Handles the comments column output.
     *
     * @since 4.3.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_comments($post)
    {
    }
    /**
     * Handles output for the default column.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$post` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Post $item        The current WP_Post object.
     * @param string  $column_name Current column name.
     * @phpstan-return void
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * @global WP_Post  $post     Global post object.
     * @global WP_Query $wp_query WordPress Query object.
     */
    public function display_rows()
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 4.3.0
     *
     * @return string Name of the default primary column, in this case, 'title'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Generates and displays row action links.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$post` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Post $item        Attachment being acted upon.
     * @param string  $column_name Current column name.
     * @param string  $primary     Primary column name.
     * @return string Row actions output for media attachments, or an empty string
     *                if the current column is not the primary column.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
}