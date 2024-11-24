<?php


/**
 * Fires actions after a post, its terms and meta data has been saved.
 *
 * @since 5.6.0
 *
 * @param int|WP_Post  $post        The post ID or object that has been saved.
 * @param bool         $update      Whether this is an existing post being updated.
 * @param null|WP_Post $post_before Null for new posts, the WP_Post object prior
 *                                  to the update for updated posts.
 * @phpstan-return void
 */
function wp_after_insert_post($post, $update, $post_before)
{
}