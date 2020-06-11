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
 * @return object|false Meta object or false.
 */
function get_metadata_by_mid($meta_type, $meta_id)
{
}