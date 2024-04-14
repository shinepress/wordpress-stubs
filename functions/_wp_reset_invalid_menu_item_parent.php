<?php


/**
 * Prevents menu items from being their own parent.
 *
 * Resets menu_item_parent to 0 when the parent is set to the item itself.
 * For use before saving `_menu_item_menu_item_parent` in nav-menus.php.
 *
 * @since 6.2.0
 * @access private
 *
 * @param array $menu_item_data The menu item data array.
 * @return array The menu item data with reset menu_item_parent.
 */
function _wp_reset_invalid_menu_item_parent($menu_item_data)
{
}