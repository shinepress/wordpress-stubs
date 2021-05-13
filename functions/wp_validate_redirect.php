<?php


/**
 * Validates a URL for use in a redirect.
 *
 * Checks whether the $location is using an allowed host, if it has an absolute
 * path. A plugin can therefore set or remove allowed host(s) to or from the
 * list.
 *
 * If the host is not allowed, then the redirect is to $default supplied
 *
 * @since 2.8.1
 *
 * @param string $location The redirect to validate
 * @param string $default  The value to return if $location is not allowed
 * @return string redirect-sanitized URL
 **/
function wp_validate_redirect($location, $default = '')
{
}