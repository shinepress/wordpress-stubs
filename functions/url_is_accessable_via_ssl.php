<?php


/**
 * Determines if the URL can be accessed over SSL.
 *
 * Determines if the URL can be accessed over SSL by using the WordPress HTTP API to access
 * the URL using https as the scheme.
 *
 * @since 2.5.0
 * @deprecated 4.0.0
 *
 * @param string $url The URL to test.
 * @return bool Whether SSL access is available.
 */
function url_is_accessable_via_ssl($url)
{
}