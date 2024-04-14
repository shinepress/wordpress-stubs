<?php


/**
 * Retrieves unvalidated referer from the '_wp_http_referer' URL query variable or the HTTP referer.
 *
 * If the value of the '_wp_http_referer' URL query variable is not a string then it will be ignored.
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