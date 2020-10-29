<?php


/**
 * Update the `custom_css` post for a given theme.
 *
 * Inserts a `custom_css` post when one doesn't yet exist.
 *
 * @since 4.7.0
 *
 * @param string $css CSS, stored in `post_content`.
 * @param array  $args {
 *     Args.
 *
 *     @type string $preprocessed Pre-processed CSS, stored in `post_content_filtered`. Normally empty string. Optional.
 *     @type string $stylesheet   Stylesheet (child theme) to update. Optional, defaults to current theme/stylesheet.
 * }
 * @return WP_Post|WP_Error Post on success, error on failure.
 */
function wp_update_custom_css_post($css, $args = array())
{
}