<?php


/**
 * List Table API: WP_Comments_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying comments in a list table.
 *
 * @since 3.1.0
 * @access private
 *
 * @see WP_List_Table
 */
class WP_Comments_List_Table extends \WP_List_Table
{
    public $checkbox = \true;
    public $pending_count = array();
    public $extra_items;
    private $user_can;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @see WP_List_Table::__construct() for more information on default arguments.
     *
     * @global int $post_id
     *
     * @param array $args An associative array of arguments.
     */
    public function __construct($args = array())
    {
    }
    public function floated_admin_avatar($name, $comment_ID)
    {
    }
    /**
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * @global int    $post_id
     * @global string $comment_status
     * @global string $search
     * @global string $comment_type
     */
    public function prepare_items()
    {
    }
    /**
     * @param string $comment_status
     * @return int
     */
    public function get_per_page($comment_status = 'all')
    {
    }
    /**
     * @global string $comment_status
     */
    public function no_items()
    {
    }
    /**
     * @global int $post_id
     * @global string $comment_status
     * @global string $comment_type
     */
    protected function get_views()
    {
    }
    /**
     * @global string $comment_status
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * @global string $comment_status
     * @global string $comment_type
     *
     * @param string $which
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * @return string|false
     */
    public function current_action()
    {
    }
    /**
     * @global int $post_id
     *
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
     * @return string Name of the default primary column, in this case, 'comment'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     */
    public function display()
    {
    }
    /**
     * @global WP_Post    $post
     * @global WP_Comment $comment
     *
     * @param WP_Comment $item
     */
    public function single_row($item)
    {
    }
    /**
     * Generate and display row actions links.
     *
     * @since 4.3.0
     *
     * @global string $comment_status Status for the current listed comments.
     *
     * @param WP_Comment $comment     The comment object.
     * @param string     $column_name Current column name.
     * @param string     $primary     Primary column name.
     * @return string|void Comment row actions output.
     */
    protected function handle_row_actions($comment, $column_name, $primary)
    {
    }
    /**
     * @param WP_Comment $comment The comment object.
     */
    public function column_cb($comment)
    {
    }
    /**
     * @param WP_Comment $comment The comment object.
     */
    public function column_comment($comment)
    {
    }
    /**
     * @global string $comment_status
     *
     * @param WP_Comment $comment The comment object.
     */
    public function column_author($comment)
    {
    }
    /**
     * @param WP_Comment $comment The comment object.
     */
    public function column_date($comment)
    {
    }
    /**
     * @param WP_Comment $comment The comment object.
     */
    public function column_response($comment)
    {
    }
    /**
     * @param WP_Comment $comment     The comment object.
     * @param string     $column_name The custom column's name.
     */
    public function column_default($comment, $column_name)
    {
    }
}