<?php


/**
 * Send a JSON response back to an Ajax request, indicating success.
 *
 * @since 3.5.0
 * @since 4.7.0 The `$status_code` parameter was added.
 *
 * @param mixed $data        Data to encode as JSON, then print and die.
 * @param int   $status_code The HTTP status code to output.
 * @phpstan-return never
 */
function wp_send_json_success($data = \null, $status_code = \null)
{
}