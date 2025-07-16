<?php


/**
 * Remove the `menu-item-has-children` class from bottom level menu items.
 *
 * This runs on the {@see 'nav_menu_css_class'} filter. The $args and $depth
 * parameters were added after the filter was originally introduced in
 * WordPress 3.0.0 so this needs to allow for cases in which the filter is
 * called without them.
 *
 * @see https://core.trac.wordpress.org/ticket/56926
 *
 * @since 6.2.0
 *
 * @param string[]       $classes   Array of the CSS classes that are applied to the menu item's `<li>` element.
 * @param WP_Post        $menu_item The current menu item object.
 * @param stdClass|false $args      An object of wp_nav_menu() arguments. Default false ($args unspecified when filter is called).
 * @param int|false      $depth     Depth of menu item. Default false ($depth unspecified when filter is called).
 * @return string[] Modified nav menu classes.
 */
function wp_nav_menu_remove_menu_item_has_children_class($classes, $menu_item, $args = \false, $depth = \false)
{
}