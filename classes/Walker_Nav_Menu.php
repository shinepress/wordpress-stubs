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
     * @access public
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = array('post_type', 'taxonomy', 'custom');
    /**
     * Database fields to use.
     *
     * @since 3.0.0
     * @access public
     * @todo Decouple this.
     * @var array
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
     * @param string   $output Passed by reference. Used to append additional content.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::end_lvl()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Starts the element output.
     *
     * @since 3.0.0
     * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     *
     * @see Walker::start_el()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param WP_Post  $item   Menu item data object.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     * @param int      $id     Current item ID.
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
    }
    /**
     * Ends the element output, if needed.
     *
     * @since 3.0.0
     *
     * @see Walker::end_el()
     *
     * @param string   $output Passed by reference. Used to append additional content.
     * @param WP_Post  $item   Page data object. Not used.
     * @param int      $depth  Depth of page. Not Used.
     * @param stdClass $args   An object of wp_nav_menu() arguments.
     */
    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
    }
}