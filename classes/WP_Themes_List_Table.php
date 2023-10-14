<?php


/**
 * List Table API: WP_Themes_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
/**
 * Core class used to implement displaying installed themes in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_Themes_List_Table extends \WP_List_Table
{
    protected $search_terms = array();
    public $features = array();
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
     * @param string $which
     */
    public function tablenav($which = 'top')
    {
    }
    /**
     * Displays the themes table.
     *
     * Overrides the parent display() method to provide a different container.
     *
     * @since 3.1.0
     */
    public function display()
    {
    }
    /**
     * @return string[] Array of column titles keyed by their column name.
     */
    public function get_columns()
    {
    }
    /**
     */
    public function display_rows_or_placeholder()
    {
    }
    /**
     */
    public function display_rows()
    {
    }
    /**
     * @param WP_Theme $theme
     * @return bool
     */
    public function search_theme($theme)
    {
    }
    /**
     * Send required variables to JavaScript land
     *
     * @since 3.4.0
     *
     * @param array $extra_args
     */
    public function _js_vars($extra_args = array())
    {
    }
}