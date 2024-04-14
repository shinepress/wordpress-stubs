<?php


/**
 * Retrieves metadata by meta ID.
 *
 * @since 3.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int    $meta_id   ID for a specific meta row.
 * @return stdClass|false {
 *     Metadata object, or boolean `false` if the metadata doesn't exist.
 *
 *     @type string $meta_key   The meta key.
 *     @type mixed  $meta_value The unserialized meta value.
 *     @type string $meta_id    Optional. The meta ID when the meta type is any value except 'user'.
 *     @type string $umeta_id   Optional. The meta ID when the meta type is 'user'.
 *     @type string $post_id    Optional. The object ID when the meta type is 'post'.
 *     @type string $comment_id Optional. The object ID when the meta type is 'comment'.
 *     @type string $term_id    Optional. The object ID when the meta type is 'term'.
 *     @type string $user_id    Optional. The object ID when the meta type is 'user'.
 * }
 * @phpstan-return false|object{
 *   meta_key: string,
 *   meta_value: mixed,
 *   meta_id: string,
 *   umeta_id: string,
 *   post_id: string,
 *   comment_id: string,
 *   term_id: string,
 *   user_id: string,
 * }
 */
function get_metadata_by_mid($meta_type, $meta_id)
{
}