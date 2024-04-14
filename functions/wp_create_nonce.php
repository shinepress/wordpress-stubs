<?php


/**
 * Creates a cryptographic token tied to a specific action, user, user session,
 * and window of time.
 *
 * @since 2.0.3
 * @since 4.0.0 Session tokens were integrated with nonce creation.
 *
 * @param string|int $action Scalar value to add context to the nonce.
 * @return string The token.
 */
function wp_create_nonce($action = -1)
{
}