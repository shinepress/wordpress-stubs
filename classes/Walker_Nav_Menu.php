<?php


/**
 * Nav Menu API: Walker_Nav_Menu class
 *
 * @package WordPress
 * @subpackage Nav_Menus
 * @since 4.6.0
 */
/**
 * Core class used to implement an HTML list of nav menu items.
 *
 * @since 3.0.0
 *
 * @see Walker
 */
class Walker_Nav_Menu extends \Walker
{
    /**
     * What the class handles.
     *
     * @since 3.0.0
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = array('post_type', 'taxonomy', 'custom');
    /**
     * Database fields to use.
     *
     * @since 3.0.0
     * @todo Decouple this.
     * @var string[]
     *
     * @see Walker::$db_fields
     */
    public $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
    /**
     * Starts the list before the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::start_lvl()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function start_lvl(&$output, $depth = 0, $args = \null)
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::end_lvl()
     *
     * @param string   $output Used to append additional content (passed by reference).
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_lvl(&$output, $depth = 0, $args = \null)
    {
    }
    /**
     * Starts the element output.
     *
     * @since 3.0.0
     * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::start_el()
     *
     * @param string   $output            Used to append additional content (passed by reference).
     * @param WP_Post  $data_object       Menu item data object.
     * @param int      $depth             Depth of menu item. Used for padding.
     * @param stdClass $args              An object of wp_nav_menu() arguments.
     * @param int      $current_object_id Optional. ID of the current menu item. Default 0.
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = \null, $current_object_id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @since 3.0.0
     * @since 5.9.0 Renamed `$item` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::end_el()
     *
     * @param string   $output      Used to append additional content (passed by reference).
     * @param WP_Post  $data_object Menu item data object. Not used.
     * @param int      $depth       Depth of page. Not Used.
     * @param stdClass $args        An object of wp_nav_menu() arguments.
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = \null)
    {
    }
}