<?php


/**
 * Handler for updating the has published posts flag when a post status changes.
 *
 * @since 5.9.0
 *
 * @param string  $new_status The status the post is changing to.
 * @param string  $old_status The status the post is changing from.
 * @param WP_Post $post       Post object.
 * @phpstan-return void
 */
function block_core_calendar_update_has_published_post_on_transition_post_status($new_status, $old_status, $post)
{
}