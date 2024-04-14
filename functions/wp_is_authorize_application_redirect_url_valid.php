<?php


/**
 * Validates the redirect URL protocol scheme. The protocol can be anything except http and javascript.
 *
 * @since 6.3.2
 *
 * @param string $url - The redirect URL to be validated.
 *
 * @return true|WP_Error True if the redirect URL is valid, a WP_Error object otherwise.
 */
function wp_is_authorize_application_redirect_url_valid($url)
{
}