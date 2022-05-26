<?php


/**
 * Returns the stylesheet resulting of merging core, theme, and user data.
 *
 * @since 5.9.0
 *
 * @param array $types Types of styles to load. Optional.
 *                     It accepts 'variables', 'styles', 'presets' as values.
 *                     If empty, it'll load all for themes with theme.json support
 *                     and only [ 'variables', 'presets' ] for themes without theme.json support.
 *
 * @return string Stylesheet.
 */
function wp_get_global_stylesheet($types = array())
{
}