<?php


/**
 * Turns menu item data into a nested array of parsed blocks
 *
 * @param array $menu_items               An array of menu items that represent
 *                                        an individual level of a menu.
 * @param array $menu_items_by_parent_id  An array keyed by the id of the
 *                                        parent menu where each element is an
 *                                        array of menu items that belong to
 *                                        that parent.
 * @return array An array of parsed block data.
 */
function block_core_navigation_parse_blocks_from_menu_items($menu_items, $menu_items_by_parent_id)
{
}