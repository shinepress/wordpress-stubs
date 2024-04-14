<?php


/**
 * List Table API: WP_Posts_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying posts in a list table.
 *
 * @since 3.1.0
 * @access private
 *
 * @see WP_List_Table
 */
class WP_Posts_List_Table extends \WP_List_Table
{
    /**
     * Whether the items should be displayed hierarchically or linearly.
     *
     * @since 3.1.0
     * @var bool
     */
    protected $hierarchical_display;
    /**
     * Holds the number of pending comments for each post.
     *
     * @since 3.1.0
     * @var array
     */
    protected $comment_pending_count;
    /**
     * Current level for output.
     *
     * @since 4.3.0
     * @var int
     */
    protected $current_level = 0;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @see WP_List_Table::__construct() for more information on default arguments.
     *
     * @global WP_Post_Type $post_type_object
     * @global wpdb         $wpdb             WordPress database abstraction object.
     *
     * @param array $args An associative array of arguments.
     */
    public function __construct($args = array())
    {
    }
    /**
     * Sets whether the table layout should be hierarchical or not.
     *
     * @since 4.2.0
     *
     * @param bool $display Whether the table layout should be hierarchical.
     */
    public function set_hierarchical_display($display)
    {
    }
    /**
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * @global string   $mode             List table view mode.
     * @global array    $avail_post_stati
     * @global WP_Query $wp_query         WordPress Query object.
     * @global int      $per_page
     */
    public function prepare_items()
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
     * Determine if the current view is the "All" view.
     *
     * @since 4.2.0
     *
     * @return bool Whether the current view is the "All" view.
     */
    protected function is_base_request()
    {
    }
    /**
     * Helper to create links to edit.php with params.
     *
     * @since 4.4.0
     *
     * @param string[] $args      Associative array of URL parameters for the link.
     * @param string   $link_text Link text.
     * @param string   $css_class Optional. Class attribute. Default empty string.
     * @return string The formatted link string.
     */
    protected function get_edit_link($args, $link_text, $css_class = '')
    {
    }
    /**
     * @global array $locked_post_status This seems to be deprecated.
     * @global array $avail_post_stati
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
     * Displays a categories drop-down for filtering on the Posts list table.
     *
     * @since 4.6.0
     *
     * @global int $cat Currently selected category.
     *
     * @param string $post_type Post type slug.
     * @phpstan-return void
     */
    protected function categories_dropdown($post_type)
    {
    }
    /**
     * Displays a formats drop-down for filtering items.
     *
     * @since 5.2.0
     * @access protected
     *
     * @param string $post_type Post type slug.
     * @phpstan-return void
     */
    protected function formats_dropdown($post_type)
    {
    }
    /**
     * @param string $which
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
     * @global string $mode List table view mode.
     *
     * @return array
     */
    protected function get_table_classes()
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
     * @global WP_Query $wp_query WordPress Query object.
     * @global int $per_page
     * @param array $posts
     * @param int   $level
     */
    public function display_rows($posts = array(), $level = 0)
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
     * @since 4.3.0
     *
     * @param WP_Post $post
     * @param string  $classes
     * @param string  $data
     * @param string  $primary
     */
    protected function _column_title($post, $classes, $data, $primary)
    {
    }
    /**
     * Handles the title column output.
     *
     * @since 4.3.0
     *
     * @global string $mode List table view mode.
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_title($post)
    {
    }
    /**
     * Handles the post date column output.
     *
     * @since 4.3.0
     *
     * @global string $mode List table view mode.
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_date($post)
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
     * Handles the post author column output.
     *
     * @since 4.3.0
     *
     * @param WP_Post $post The current WP_Post object.
     */
    public function column_author($post)
    {
    }
    /**
     * Handles the default column output.
     *
     * @since 4.3.0
     * @since 5.9.0 Renamed `$post` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Post $item        The current WP_Post object.
     * @param string  $column_name The current column name.
     * @phpstan-return void
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * @global WP_Post $post Global post object.
     *
     * @param int|WP_Post $post
     * @param int         $level
     */
    public function single_row($post, $level = 0)
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
     * @param WP_Post $item        Post being acted upon.
     * @param string  $column_name Current column name.
     * @param string  $primary     Primary column name.
     * @return string Row actions output for posts, or an empty string
     *                if the current column is not the primary column.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
    /**
     * Outputs the hidden row displayed when inline editing
     *
     * @since 3.1.0
     *
     * @global string $mode List table view mode.
     */
    public function inline_edit()
    {
    }
}