<?php


/**
 * Returns meta data for the given post ID.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $postid A post ID.
 * @return array[] {
 *     Array of meta data arrays for the given post ID.
 *
 *     @type array ...$0 {
 *         Associative array of meta data.
 *
 *         @type string $meta_key   Meta key.
 *         @type mixed  $meta_value Meta value.
 *         @type string $meta_id    Meta ID as a numeric string.
 *         @type string $post_id    Post ID as a numeric string.
 *     }
 * }
 */
function has_meta($postid)
{
}