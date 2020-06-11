<?php


/**
 * Helper functions for displaying a list of items in an ajaxified HTML table.
 *
 * @package WordPress
 * @subpackage List_Table
 * @since 4.7.0
 */
/**
 * Helper class to be used only by back compat functions
 *
 * @since 3.1.0
 */
class _WP_List_Table_Compat extends \WP_List_Table
{
    public $_screen;
    public $_columns;
    public function __construct($screen, $columns = array())
    {
    }
    /**
     * @access protected
     *
     * @return array
     */
    protected function get_column_info()
    {
    }
    /**
     * @access public
     *
     * @return array
     */
    public function get_columns()
    {
    }
}