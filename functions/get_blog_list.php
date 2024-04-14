<?php


/**
 * Deprecated functionality to retrieve a list of all sites.
 *
 * @since MU (3.0.0)
 * @deprecated 3.0.0 Use wp_get_sites()
 * @see wp_get_sites()
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int    $start      Optional. Offset for retrieving the blog list. Default 0.
 * @param int    $num        Optional. Number of blogs to list. Default 10.
 * @param string $deprecated Unused.
 */
function get_blog_list($start = 0, $num = 10, $deprecated = '')
{
}