<?php


/**
 * Outputs Page list markup from an array of pages with nested children.
 *
 * @param boolean $open_submenus_on_click Whether to open submenus on click instead of hover.
 * @param boolean $show_submenu_icons Whether to show submenu indicator icons.
 * @param boolean $is_navigation_child If block is a child of Navigation block.
 * @param array   $nested_pages The array of nested pages.
 * @param array   $active_page_ancestor_ids An array of ancestor ids for active page.
 * @param array   $colors Color information for overlay styles.
 * @param integer $depth The nesting depth.
 *
 * @return string List markup.
 */
function block_core_page_list_render_nested_page_list($open_submenus_on_click, $show_submenu_icons, $is_navigation_child, $nested_pages, $active_page_ancestor_ids = array(), $colors = array(), $depth = 0)
{
}