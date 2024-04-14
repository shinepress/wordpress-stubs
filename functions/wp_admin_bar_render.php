<?php


/**
 * Renders the admin bar to the page based on the $wp_admin_bar->menu member var.
 *
 * This is called very late on the footer actions so that it will render after
 * anything else being added to the footer.
 *
 * It includes the {@see 'admin_bar_menu'} action which should be used to hook in and
 * add new menus to the admin bar. That way you can be sure that you are adding at most
 * optimal point, right before the admin bar is rendered. This also gives you access to
 * the `$post` global, among others.
 *
 * @since 3.1.0
 *
 * @global WP_Admin_Bar $wp_admin_bar
 * @phpstan-return void
 */
function wp_admin_bar_render()
{
}