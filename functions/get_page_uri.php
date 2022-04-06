<?php


/**
 * Build the URI path for a page.
 *
 * Sub pages will be in the "directory" under the parent page post name.
 *
 * @since 1.5.0
 * @since 4.6.0 The `$page` parameter was made optional.
 *
 * @param WP_Post|object|int $page Optional. Page ID or WP_Post object. Default is global $post.
 * @return string|false Page URI, false on error.
 */
function get_page_uri($page = 0)
{
}