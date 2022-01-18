<?php


/**
 * Retrieves the URL for a given site where WordPress application files
 * (e.g. wp-blog-header.php or the wp-admin/ folder) are accessible.
 *
 * Returns the 'site_url' option with the appropriate protocol, 'https' if
 * is_ssl() and 'http' otherwise. If `$scheme` is 'http' or 'https',
 * `is_ssl()` is overridden.
 *
 * @since 3.0.0
 *
 * @param int    $blog_id Optional. Site ID. Default null (current site).
 * @param string $path    Optional. Path relative to the site URL. Default empty.
 * @param string $scheme  Optional. Scheme to give the site URL context. Accepts
 *                        'http', 'https', 'login', 'login_post', 'admin', or
 *                        'relative'. Default null.
 * @return string Site URL link with optional path appended.
 */
function get_site_url($blog_id = \null, $path = '', $scheme = \null)
{
}