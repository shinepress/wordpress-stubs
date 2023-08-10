<?php


/**
 * Adds a middleware to `apiFetch` to set the theme for the preview.
 * This adds a `wp_theme_preview` URL parameter to API requests from the Site Editor, so they also respond as if the theme is set to the value of the parameter.
 *
 * @since 6.3.0
 */
function wp_attach_theme_preview_middleware()
{
}