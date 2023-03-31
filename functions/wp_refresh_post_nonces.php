<?php


/**
 * Checks nonce expiration on the New/Edit Post screen and refresh if needed.
 *
 * @since 3.6.0
 *
 * @param array  $response  The Heartbeat response.
 * @param array  $data      The $_POST data sent.
 * @param string $screen_id The screen ID.
 * @return array The Heartbeat response.
 */
function wp_refresh_post_nonces($response, $data, $screen_id)
{
}