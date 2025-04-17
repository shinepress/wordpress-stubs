<?php


/**
 * Adds the "Edit Site" link to the Toolbar.
 *
 * @since 5.9.0
 * @since 6.3.0 Added `$_wp_current_template_id` global for editing of current template directly from the admin bar.
 * @since 6.6.0 Added the `canvas` query arg to the Site Editor link.
 * @since 6.8.0 Removed the query args to ensure that the link opens the starting screen of the Site Editor.
 *
 * @param WP_Admin_Bar $wp_admin_bar The WP_Admin_Bar instance.
 * @phpstan-return void
 */
function wp_admin_bar_edit_site_menu($wp_admin_bar)
{
}