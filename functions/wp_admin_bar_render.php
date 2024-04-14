<?php


/**
 * Renders the admin bar to the page based on the $wp_admin_bar->menu member var.
 *
 * This is called very early on the {@see 'wp_body_open'} action so that it will render
 * before anything else being added to the page body.
 *
 * For backward compatibility with themes not using the 'wp_body_open' action,
 * the function is also called late on {@see 'wp_footer'}.
 *
 * It includes the {@see 'admin_bar_menu'} action which should be used to hook in and
 * add new menus to the admin bar. That way you can be sure that you are adding at most
 * optimal point, right before the admin bar is rendered. This also gives you access to
 * the `$post` global, among others.
 *
 * @since 3.1.0
 * @since 5.4.0 Called on 'wp_body_open' action first, with 'wp_footer' as a fallback.
 *
 * @global WP_Admin_Bar $wp_admin_bar
 *
 * @staticvar bool $rendered
 * @phpstan-return void
 */
function wp_admin_bar_render()
{
}