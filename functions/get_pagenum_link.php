<?php


/**
 * Retrieves the link for a page number.
 *
 * @since 1.5.0
 *
 * @global WP_Rewrite $wp_rewrite
 *
 * @param int  $pagenum Optional. Page ID. Default 1.
 * @param bool $escape  Optional. Whether to escape the URL for display, with esc_url(). Defaults to true.
 * 	                    Otherwise, prepares the URL with esc_url_raw().
 * @return string The link URL for the given page number.
 */
function get_pagenum_link($pagenum = 1, $escape = \true)
{
}