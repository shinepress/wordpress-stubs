<?php


/**
 * Look for "lost" widgets, this has to run at least on each theme change.
 *
 * @since 2.8.0
 *
 * @global array $wp_registered_sidebars Registered sidebars.
 * @global array $sidebars_widgets
 * @global array $wp_registered_widgets
 *
 * @param string|bool $theme_changed Whether the theme was changed as a boolean. A value
 *                                   of 'customize' defers updates for the Customizer.
 * @return array Updated sidebars widgets.
 */
function retrieve_widgets($theme_changed = \false)
{
}