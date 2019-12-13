<?php


/**
 * Save posted nav menu item data.
 *
 * @since 3.0.0
 *
 * @param int     $menu_id   The menu ID for which to save this item. Value of 0 makes a draft, orphaned menu item. Default 0.
 * @param array[] $menu_data The unsanitized POSTed menu item data.
 * @return int[] The database IDs of the items saved
 */
function wp_save_nav_menu_items($menu_id = 0, $menu_data = array())
{
}