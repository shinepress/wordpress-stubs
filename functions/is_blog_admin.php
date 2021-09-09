<?php


/**
 * Whether the current request is for a site's administrative interface.
 *
 * e.g. `/wp-admin/`
 *
 * Does not check if the user is an administrator; use current_user_can()
 * for checking roles and capabilities.
 *
 * @since 3.1.0
 *
 * @global WP_Screen $current_screen WordPress current screen object.
 *
 * @return bool True if inside WordPress blog administration pages.
 */
function is_blog_admin()
{
}