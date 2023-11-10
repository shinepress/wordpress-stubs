<?php


/**
 * Filter the `wp_get_attachment_image_context` hook during shortcode rendering.
 *
 * When wp_get_attachment_image() is called during shortcode rendering, we need to make clear
 * that the context is a shortcode and not part of the theme's template rendering logic.
 *
 * @since 6.3.0
 * @access private
 *
 * @return string The filtered context value for wp_get_attachment_images when doing shortcodes.
 */
function _filter_do_shortcode_context()
{
}