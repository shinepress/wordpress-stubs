<?php


/**
 * Generates a unique slug for templates.
 *
 * @access private
 * @since 5.8.0
 *
 * @param string $override_slug The filtered value of the slug (starts as `null` from apply_filter).
 * @param string $slug          The original/un-filtered slug (post_name).
 * @param int    $post_id       Post ID.
 * @param string $post_status   No uniqueness checks are made if the post is still draft or pending.
 * @param string $post_type     Post type.
 * @return string The original, desired slug.
 */
function wp_filter_wp_template_unique_post_slug($override_slug, $slug, $post_id, $post_status, $post_type)
{
}