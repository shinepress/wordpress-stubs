<?php


/**
 * Navigation Menu API: Walker_Nav_Menu_Checklist class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */
/**
 * Create HTML list of nav menu input items.
 *
 * @since 3.0.0
 * @uses Walker_Nav_Menu
 */
class Walker_Nav_Menu_Checklist extends \Walker_Nav_Menu
{
    /**
     * @param array $fields
     */
    public function __construct($fields = \false)
    {
    }
    /**
     * Starts the list before the elements are added.
     *
     * @see Walker_Nav_Menu::start_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of page. Used for padding.
     * @param array  $args   Not used.
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker_Nav_Menu::end_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int    $depth  Depth of page. Used for padding.
     * @param array  $args   Not used.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
    }
    /**
     * Start the element output.
     *
     * @see Walker_Nav_Menu::start_el()
     *
     * @since 3.0.0
     *
     * @global int $_nav_menu_placeholder
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   Not used.
     * @param int    $id     Not used.
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
    }
}