<?php


//
// Menu
//
/**
 * Add a top-level menu page.
 *
 * This function takes a capability which will be used to determine whether
 * or not a page is included in the menu.
 *
 * The function which is hooked in to handle the output of the page must check
 * that the user has the required capability as well.
 *
 * @global array $menu
 * @global array $admin_page_hooks
 * @global array $_registered_pages
 * @global array $_parent_pages
 *
 * @param string   $page_title The text to be displayed in the title tags of the page when the menu is selected.
 * @param string   $menu_title The text to be used for the menu.
 * @param string   $capability The capability required for this menu to be displayed to the user.
 * @param string   $menu_slug  The slug name to refer to this menu by (should be unique for this menu).
 * @param callable $function   The function to be called to output the content for this page.
 * @param string   $icon_url   The URL to the icon to be used for this menu.
 *                             * Pass a base64-encoded SVG using a data URI, which will be colored to match
 *                               the color scheme. This should begin with 'data:image/svg+xml;base64,'.
 *                             * Pass the name of a Dashicons helper class to use a font icon,
 *                               e.g. 'dashicons-chart-pie'.
 *                             * Pass 'none' to leave div.wp-menu-image empty so an icon can be added via CSS.
 * @param int      $position   The position in the menu order this one should appear.
 * @return string The resulting page's hook_suffix.
 */
function add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = \null)
{
}