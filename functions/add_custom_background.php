<?php


/**
 * Add callbacks for background image display.
 *
 * @since 3.0.0
 * @deprecated 3.4.0 Use add_theme_support()
 * @see add_theme_support()
 *
 * @param callable $wp_head_callback Call on the {@see 'wp_head'} action.
 * @param callable $admin_head_callback Call on custom background administration screen.
 * @param callable $admin_preview_callback Output a custom background image div on the custom background administration screen. Optional.
 */
function add_custom_background($wp_head_callback = '', $admin_head_callback = '', $admin_preview_callback = '')
{
}