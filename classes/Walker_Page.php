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
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = 'page';
    /**
     * Database fields to use.
     *
     * @since 2.1.0
     * @var string[]
     *
     * @see Walker::$db_fields
     * @todo Decouple this.
     */
    public $db_fields = array('parent' => 'post_parent', 'id' => 'ID');
    /**
     * Outputs the beginning of the current level in the tree before elements are output.
     *
     * @since 2.1.0
     *
     * @see Walker::start_lvl()
     *
     * @param string $output Used to append additional content (passed by reference).
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
     *
     * @see Walker::end_lvl()
     *
     * @param string $output Used to append additional content (passed by reference).
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
     * @since 5.9.0 Renamed `$page` to `$data_object` and `$current_page` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @param string  $output            Used to append additional content. Passed by reference.
     * @param WP_Post $data_object       Page data object.
     * @param int     $depth             Optional. Depth of page. Used for padding. Default 0.
     * @param array   $args              Optional. Array of arguments. Default empty array.
     * @param int     $current_object_id Optional. ID of the current page. Default 0.
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
    /**
     * Outputs the end of the current element in the tree.
     *
     * @since 2.1.0
     * @since 5.9.0 Renamed `$page` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::end_el()
     *
     * @param string  $output      Used to append additional content. Passed by reference.
     * @param WP_Post $data_object Page data object. Not used.
     * @param int     $depth       Optional. Depth of page. Default 0 (unused).
     * @param array   $args        Optional. Array of arguments. Default empty array.
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = array())
    {
    }
}