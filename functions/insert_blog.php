<?php


/**
 * Store basic site info in the blogs table.
 *
 * This function creates a row in the wp_blogs table and returns
 * the new blog's ID. It is the first step in creating a new blog.
 *
 * @since MU (3.0.0)
 * @deprecated 5.1.0 Use wp_insert_site()
 * @see wp_insert_site()
 *
 * @param string $domain  The domain of the new site.
 * @param string $path    The path of the new site.
 * @param int    $site_id Unless you're running a multi-network install, be sure to set this value to 1.
 * @return int|false The ID of the new row
 */
function insert_blog($domain, $path, $site_id)
{
}