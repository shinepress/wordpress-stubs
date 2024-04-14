<?php


/**
 * Notify the user when their erasure request is fulfilled.
 *
 * Without this, the user would never know if their data was actually erased.
 *
 * @since 4.9.6
 *
 * @param int $request_id The privacy request post ID associated with this request.
 * @phpstan-return void
 */
function _wp_privacy_send_erasure_fulfillment_notification($request_id)
{
}