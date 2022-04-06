<?php


/**
 * Gets a WP_Theme object for a theme.
 *
 * @since 3.4.0
 *
 * @global array $wp_theme_directories
 *
 * @param string $stylesheet Optional. Directory name for the theme. Defaults to current theme.
 * @param string $theme_root Optional. Absolute path of the theme root to look in.
 *                           If not specified, get_raw_theme_root() is used to calculate
 *                           the theme root for the $stylesheet provided (or current theme).
 * @return WP_Theme Theme object. Be sure to check the object's exists() method
 *                  if you need to confirm the theme's existence.
 */
function wp_get_theme($stylesheet = '', $theme_root = '')
{
}