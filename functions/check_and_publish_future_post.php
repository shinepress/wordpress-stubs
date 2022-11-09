<?php


/**
 * Publishes future post and make sure post ID has future post status.
 *
 * Invoked by cron 'publish_future_post' event. This safeguard prevents cron
 * from publishing drafts, etc.
 *
 * @since 2.5.0
 *
 * @param int|WP_Post $post Post ID or post object.
 */
function check_and_publish_future_post($post)
{
}