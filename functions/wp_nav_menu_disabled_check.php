<?php


/**
 * Check whether to disable the Menu Locations meta box submit button and inputs.
 *
 * @since 3.6.0
 * @since 5.3.1 The `$echo` parameter was added.
 *
 * @global bool $one_theme_location_no_menus to determine if no menus exist
 *
 * @param int|string $nav_menu_selected_id ID, name, or slug of the currently selected menu.
 * @param bool       $echo                 Whether to echo or just return the string.
 * @return string|false Disabled attribute if at least one menu exists, false if not.
 */
function wp_nav_menu_disabled_check($nav_menu_selected_id, $echo = \true)
{
}