<?php


/**
 * List Table API: WP_Post_Comments_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */
/**
 * Core class used to implement displaying post comments in a list table.
 *
 * @since 3.1.0
 * @access private
 *
 * @see WP_Comments_List_Table
 */
class WP_Post_Comments_List_Table extends \WP_Comments_List_Table
{
    /**
     *
     * @return array
     */
    protected function get_column_info()
    {
    }
    /**
     *
     * @return array
     */
    protected function get_table_classes()
    {
    }
    /**
     *
     * @param bool $output_empty
     */
    public function display($output_empty = \false)
    {
    }
    /**
     *
     * @param bool $comment_status
     * @return int
     */
    public function get_per_page($comment_status = \false)
    {
    }
}