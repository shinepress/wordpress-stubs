<?php


/**
 * Renders the SVG filters supplied by theme.json.
 *
 * Note that this doesn't render the per-block user-defined
 * filters which are handled by wp_render_duotone_support,
 * but it should be rendered before the filtered content
 * in the body to satisfy Safari's rendering quirks.
 *
 * @since 5.9.1
 * @deprecated 6.3.0 SVG generation is handled on a per-block basis in block supports.
 * @phpstan-return void
 */
function wp_global_styles_render_svg_filters()
{
}