<?php


/**
 * Add callbacks for image header display.
 *
 * @since 2.1.0
 * @deprecated 3.4.0 Use add_theme_support()
 * @see add_theme_support()
 *
 * @param callable $wp_head_callback Call on the {@see 'wp_head'} action.
 * @param callable $admin_head_callback Call on custom header administration screen.
 * @param callable $admin_preview_callback Output a custom header image div on the custom header administration screen. Optional.
 */
function add_custom_image_header($wp_head_callback, $admin_head_callback, $admin_preview_callback = '')
{
}