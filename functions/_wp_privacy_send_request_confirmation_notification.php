<?php


/**
 * Notify the site administrator via email when a request is confirmed.
 *
 * Without this, the admin would have to manually check the site to see if any
 * action was needed on their part yet.
 *
 * @since 4.9.6
 *
 * @param int $request_id The ID of the request.
 * @phpstan-return void
 */
function _wp_privacy_send_request_confirmation_notification($request_id)
{
}