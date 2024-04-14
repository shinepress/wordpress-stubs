<?php


/**
 * Retrieves the URL for a given site where the front end is accessible.
 *
 * Returns the 'home' option with the appropriate protocol. The protocol will be 'https'
 * if is_ssl() evaluates to true; otherwise, it will be the same as the 'home' option.
 * If `$scheme` is 'http' or 'https', is_ssl() is overridden.
 *
 * @since 3.0.0
 *
 * @global string $pagenow
 *
 * @param int         $blog_id Optional. Site ID. Default null (current site).
 * @param string      $path    Optional. Path relative to the home URL. Default empty.
 * @param string|null $scheme  Optional. Scheme to give the home URL context. Accepts
 *                             'http', 'https', 'relative', 'rest', or null. Default null.
 * @return string Home URL link with optional path appended.
 */
function get_home_url($blog_id = \null, $path = '', $scheme = \null)
{
}