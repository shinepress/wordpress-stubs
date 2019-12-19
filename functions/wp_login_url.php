<?php


/**
 * Retrieves the login URL.
 *
 * @since 2.7.0
 *
 * @param string $redirect     Path to redirect to on log in.
 * @param bool   $force_reauth Whether to force reauthorization, even if a cookie is present.
 *                             Default false.
 * @return string The login URL. Not HTML-encoded.
 */
function wp_login_url($redirect = '', $force_reauth = \false)
{
}