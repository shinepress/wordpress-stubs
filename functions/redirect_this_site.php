<?php


/**
 * Ensure that the current site's domain is listed in the allowed redirect host list.
 *
 * @see wp_validate_redirect()
 * @since MU (3.0.0)
 *
 * @param array|string $deprecated Not used.
 * @return string[] {
 *     An array containing the current site's domain.
 *
 *     @type string $0 The current site's domain.
 * }
 */
function redirect_this_site($deprecated = '')
{
}