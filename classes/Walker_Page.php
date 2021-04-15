<?php


/**
 * Post API: Walker_Page class
 *
 * @package WordPress
 * @subpackage Template
 * @since 4.4.0
 */
/**
 * Core walker class used to create an HTML list of pages.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
class Walker_Page extends \Walker
{
    /**
     * What the class handles.
     *
     * @since 2.1.0
     * @access public
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = 'page';
    /**
     * Database fields to use.
     *
     * @since 2.1.0
     * @access private
     * @var array
     *
     * @see Walker::$db_fields
     * @todo Decouple this.
     */
    public $db_fields = array('parent' => 'post_parent', 'id' => 'ID');
    /**
     * Outputs the beginning of the current level in the tree before elements are output.
     *
     * @since 2.1.0
     * @access public
     *
     * @see Walker::start_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Optional. Depth of page. Used for padding. Default 0.
     * @param array  $args   Optional. Arguments for outputting the next level.
     *                       Default empty array.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Outputs the end of the current level in the tree after elements are output.
     *
     * @since 2.1.0
     * @access public
     *
     * @see Walker::end_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Optional. Depth of page. Used for padding. Default 0.
     * @param array  $args   Optional. Arguments for outputting the end of the current level.
     *                       Default empty array.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Outputs the beginning of the current element in the tree.
     *
     * @see Walker::start_el()
     * @since 2.1.0
     * @access public
     *
     * @param string  $output       Used to append additional content. Passed by reference.
     * @param WP_Post $page         Page data object.
     * @param int     $depth        Optional. Depth of page. Used for padding. Default 0.
     * @param array   $args         Optional. Array of arguments. Default empty array.
     * @param int     $current_page Optional. Page ID. Default 0.
     */
    public function start_el(&$output, $page, $depth = 0, $args = array(), $current_page = 0)
    {
    }
    /**
     * Outputs the end of the current element in the tree.
     *
     * @since 2.1.0
     * @access public
     *
     * @see Walker::end_el()
     *
     * @param string  $output Used to append additional content. Passed by reference.
     * @param WP_Post $page   Page data object. Not used.
     * @param int     $depth  Optional. Depth of page. Default 0 (unused).
     * @param array   $args   Optional. Array of arguments. Default empty array.
     */
    public function end_el(&$output, $page, $depth = 0, $args = array())
    {
    }
}