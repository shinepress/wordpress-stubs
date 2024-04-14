<?php


/**
 * Navigation Menu API: Walker_Nav_Menu_Edit class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */
/**
 * Create HTML list of nav menu input items.
 *
 * @since 3.0.0
 *
 * @see Walker_Nav_Menu
 */
class Walker_Nav_Menu_Edit extends \Walker_Nav_Menu
{
    /**
     * Starts the list before the elements are added.
     *
     * @see Walker_Nav_Menu::start_lvl()
     *
     * @since 3.0.0
     *
     * @param string   $output Passed by reference.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   Not used.
     */
    public function start_lvl(&$output, $depth = 0, $args = \null)
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker_Nav_Menu::end_lvl()
     *
     * @since 3.0.0
     *
     * @param string   $output Passed by reference.
     * @param int      $depth  Depth of menu item. Used for padding.
     * @param stdClass $args   Not used.
     */
    public function end_lvl(&$output, $depth = 0, $args = \null)
    {
    }
    /**
     * Start the element output.
     *
     * @see Walker_Nav_Menu::start_el()
     * @since 3.0.0
     * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @global int $_wp_nav_menu_max_depth
     *
     * @param string   $output            Used to append additional content (passed by reference).
     * @param WP_Post  $data_object       Menu item data object.
     * @param int      $depth             Depth of menu item. Used for padding.
     * @param stdClass $args              Not used.
     * @param int      $current_object_id Optional. ID of the current menu item. Default 0.
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = \null, $current_object_id = 0)
    {
    }
}