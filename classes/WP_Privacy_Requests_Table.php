<?php


/**
 * List Table API: WP_Privacy_Requests_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.9.6
 */
abstract class WP_Privacy_Requests_Table extends \WP_List_Table
{
    /**
     * Action name for the requests this table will work with. Classes
     * which inherit from WP_Privacy_Requests_Table should define this.
     *
     * Example: 'export_personal_data'.
     *
     * @since 4.9.6
     *
     * @var string $request_type Name of action.
     */
    protected $request_type = 'INVALID';
    /**
     * Post type to be used.
     *
     * @since 4.9.6
     *
     * @var string $post_type The post type.
     */
    protected $post_type = 'INVALID';
    /**
     * Get columns to show in the list table.
     *
     * @since 4.9.6
     *
     * @return string[] Array of column titles keyed by their column name.
     */
    public function get_columns()
    {
    }
    /**
     * Normalize the admin URL to the current page (by request_type).
     *
     * @since 5.3.0
     *
     * @return string URL to the current admin page.
     */
    protected function get_admin_url()
    {
    }
    /**
     * Get a list of sortable columns.
     *
     * @since 4.9.6
     *
     * @return array Default sortable columns.
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * Default primary column.
     *
     * @since 4.9.6
     *
     * @return string Default primary column name.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Count number of requests for each status.
     *
     * @since 4.9.6
     *
     * @return object Number of posts for each status.
     */
    protected function get_request_counts()
    {
    }
    /**
     * Get an associative array ( id => link ) with the list of views available on this table.
     *
     * @since 4.9.6
     *
     * @return string[] An array of HTML links keyed by their view.
     */
    protected function get_views()
    {
    }
    /**
     * Get bulk actions.
     *
     * @since 4.9.6
     *
     * @return array Array of bulk action labels keyed by their action.
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Process bulk actions.
     *
     * @since 4.9.6
     * @since 5.6.0 Added support for the `complete` action.
     */
    public function process_bulk_action()
    {
    }
    /**
     * Prepare items to output.
     *
     * @since 4.9.6
     * @since 5.1.0 Added support for column sorting.
     */
    public function prepare_items()
    {
    }
    /**
     * Checkbox column.
     *
     * @since 4.9.6
     *
     * @param WP_User_Request $item Item being shown.
     * @return string Checkbox column markup.
     */
    public function column_cb($item)
    {
    }
    /**
     * Status column.
     *
     * @since 4.9.6
     *
     * @param WP_User_Request $item Item being shown.
     * @return string Status column markup.
     */
    public function column_status($item)
    {
    }
    /**
     * Convert timestamp for display.
     *
     * @since 4.9.6
     *
     * @param int $timestamp Event timestamp.
     * @return string Human readable date.
     */
    protected function get_timestamp_as_date($timestamp)
    {
    }
    /**
     * Default column handler.
     *
     * @since 4.9.6
     * @since 5.7.0 Added `manage_{$this->screen->id}_custom_column` action.
     *
     * @param WP_User_Request $item        Item being shown.
     * @param string          $column_name Name of column being shown.
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Created timestamp column. Overridden by children.
     *
     * @since 5.7.0
     *
     * @param WP_User_Request $item Item being shown.
     * @return string Human readable date.
     */
    public function column_created_timestamp($item)
    {
    }
    /**
     * Actions column. Overridden by children.
     *
     * @since 4.9.6
     *
     * @param WP_User_Request $item Item being shown.
     * @return string Email column markup.
     */
    public function column_email($item)
    {
    }
    /**
     * Next steps column. Overridden by children.
     *
     * @since 4.9.6
     *
     * @param WP_User_Request $item Item being shown.
     */
    public function column_next_steps($item)
    {
    }
    /**
     * Generates content for a single row of the table,
     *
     * @since 4.9.6
     *
     * @param WP_User_Request $item The current item.
     */
    public function single_row($item)
    {
    }
    /**
     * Embed scripts used to perform actions. Overridden by children.
     *
     * @since 4.9.6
     */
    public function embed_scripts()
    {
    }
}