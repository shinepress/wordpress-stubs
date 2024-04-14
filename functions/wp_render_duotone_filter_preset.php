<?php


/**
 * Renders the duotone filter SVG and returns the CSS filter property to
 * reference the rendered SVG.
 *
 * @since 5.9.0
 * @deprecated 5.9.1 Use `wp_get_duotone_filter_property` introduced in 5.9.1.
 *
 * @see wp_get_duotone_filter_property()
 *
 * @param array $preset Duotone preset value as seen in theme.json.
 * @return string Duotone CSS filter property.
 */
function wp_render_duotone_filter_preset($preset)
{
}