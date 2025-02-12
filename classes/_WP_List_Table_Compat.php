<?php


/**
 * Helper class to be used only by back compat functions.
 *
 * @since 3.1.0
 */
class _WP_List_Table_Compat extends \WP_List_Table
{
    public $_screen;
    public $_columns;
    /**
     * Constructor.
     *
     * @since 3.1.0
     *
     * @param string|WP_Screen $screen  The screen hook name or screen object.
     * @param string[]         $columns An array of columns with column IDs as the keys
     *                                  and translated column names as the values.
     */
    public function __construct($screen, $columns = array())
    {
    }
    /**
     * Gets a list of all, hidden, and sortable columns.
     *
     * @since 3.1.0
     *
     * @return array
     */
    protected function get_column_info()
    {
    }
    /**
     * Gets a list of columns.
     *
     * @since 3.1.0
     *
     * @return array
     */
    public function get_columns()
    {
    }
}