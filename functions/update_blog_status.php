<?php


/**
 * Updates a blog details field.
 *
 * @since MU (3.0.0)
 * @since 5.1.0 Use wp_update_site() internally.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $blog_id    Blog ID.
 * @param string $pref       Field name.
 * @param string $value      Field value.
 * @param null   $deprecated Not used.
 * @return string|false $value
 */
function update_blog_status($blog_id, $pref, $value, $deprecated = \null)
{
}