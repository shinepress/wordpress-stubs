<?php


/**
 * Handler for updating the site's last updated date when a post is published or
 * an already published post is changed.
 *
 * @since 3.3.0
 *
 * @param string  $new_status The new post status.
 * @param string  $old_status The old post status.
 * @param WP_Post $post       Post object.
 * @phpstan-return void
 */
function _update_blog_date_on_post_publish($new_status, $old_status, $post)
{
}