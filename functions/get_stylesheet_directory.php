<?php


/**
 * Retrieves stylesheet directory path for the active theme.
 *
 * @since 1.5.0
 * @since 6.4.0 Memoizes filter execution so that it only runs once for the current theme.
 *
 * @global string $wp_stylesheet_path Current theme stylesheet directory path.
 *
 * @return string Path to active theme's stylesheet directory.
 */
function get_stylesheet_directory()
{
}