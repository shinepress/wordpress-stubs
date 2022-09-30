<?php


/**
 * Render the SVG filters supplied by theme.json.
 *
 * Note that this doesn't render the per-block user-defined
 * filters which are handled by wp_render_duotone_support,
 * but it should be rendered before the filtered content
 * in the body to satisfy Safari's rendering quirks.
 *
 * @since 5.9.1
 */
function wp_global_styles_render_svg_filters()
{
}