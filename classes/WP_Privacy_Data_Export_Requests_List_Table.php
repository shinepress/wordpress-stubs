<?php


/**
 * WP_Privacy_Data_Export_Requests_Table class.
 *
 * @since 4.9.6
 */
class WP_Privacy_Data_Export_Requests_List_Table extends \WP_Privacy_Requests_Table
{
    /**
     * Action name for the requests this table will work with.
     *
     * @since 4.9.6
     *
     * @var string $request_type Name of action.
     */
    protected $request_type = 'export_personal_data';
    /**
     * Post type for the requests.
     *
     * @since 4.9.6
     *
     * @var string $post_type The post type.
     */
    protected $post_type = 'user_request';
    /**
     * Actions column.
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
     * Displays the next steps column.
     *
     * @since 4.9.6
     *
     * @param WP_User_Request $item Item being shown.
     */
    public function column_next_steps($item)
    {
    }
}