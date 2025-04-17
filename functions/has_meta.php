<?php


/**
 * Returns meta data for the given post ID.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $post_id A post ID.
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
 * @phpstan-return array<int|string, array{
 *   meta_key: string,
 *   meta_value: mixed,
 *   meta_id: string,
 *   post_id: string,
 * }>
 */
function has_meta($post_id)
{
}