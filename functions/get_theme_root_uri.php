<?php


/**
 * Retrieve URI for themes directory.
 *
 * Does not have trailing slash.
 *
 * @since 1.5.0
 *
 * @global array $wp_theme_directories
 *
 * @param string $stylesheet_or_template Optional. The stylesheet or template name of the theme.
 *                                       Default is to leverage the main theme root.
 * @param string $theme_root             Optional. The theme root for which calculations will be based, preventing
 *                                       the need for a get_raw_theme_root() call.
 * @return string Themes URI.
 */
function get_theme_root_uri($stylesheet_or_template = \false, $theme_root = \false)
{
}