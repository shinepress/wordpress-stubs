<?php


/**
 * Returns the stylesheet resulting of merging core, theme, and user data.
 *
 * @since 5.9.0
 * @since 6.1.0 Added 'base-layout-styles' support.
 * @since 6.6.0 Resolves relative paths in theme.json styles to theme absolute paths.
 *
 * @param array $types Optional. Types of styles to load.
 *                     See {@see 'WP_Theme_JSON::get_stylesheet'} for all valid types.
 *                     If empty, it'll load the following:
 *                     - for themes without theme.json: 'variables', 'presets', 'base-layout-styles'.
 *                     - for themes with theme.json: 'variables', 'presets', 'styles'.
 * @return string Stylesheet.
 */
function wp_get_global_stylesheet($types = array())
{
}