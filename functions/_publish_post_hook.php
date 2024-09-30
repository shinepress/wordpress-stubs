<?php


/**
 * Hook to schedule pings and enclosures when a post is published.
 *
 * Uses XMLRPC_REQUEST and WP_IMPORTING constants.
 *
 * @since 2.3.0
 * @access private
 *
 * @param int $post_id The ID of the post being published.
 * @phpstan-return void
 */
function _publish_post_hook($post_id)
{
}