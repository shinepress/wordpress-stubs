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
 * @access private
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
     * @access public
     *
     * @see WP_List_Table::__construct() for more information on default arguments.
     *
     * @param array $args An associative array of arguments.
     */
    public function __construct($args = array())
    {
    }
    /**
     *
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * @access public
     */
    public function prepare_items()
    {
    }
    /**
     * @access public
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
     * @access public
     */
    public function display()
    {
    }
    /**
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * @access public
     */
    public function display_rows_or_placeholder()
    {
    }
    /**
     * @access public
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
     * @access public
     *
     * @param array $extra_args
     */
    public function _js_vars($extra_args = array())
    {
    }
}