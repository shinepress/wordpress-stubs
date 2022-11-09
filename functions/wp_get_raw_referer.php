<?php


/**
 * Retrieves unvalidated referer from '_wp_http_referer' or HTTP referer.
 *
 * Do not use for redirects, use wp_get_referer() instead.
 *
 * @since 4.5.0
 *
 * @return string|false Referer URL on success, false on failure.
 */
function wp_get_raw_referer()
{
}