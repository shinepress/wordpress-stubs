<?php


/**
 * Install an empty blog.
 *
 * Creates the new blog tables and options. If calling this function
 * directly, be sure to use switch_to_blog() first, so that $wpdb
 * points to the new blog.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb     $wpdb
 * @global WP_Roles $wp_roles
 *
 * @param int    $blog_id    The value returned by insert_blog().
 * @param string $blog_title The title of the new site.
 */
function install_blog($blog_id, $blog_title = '')
{
}