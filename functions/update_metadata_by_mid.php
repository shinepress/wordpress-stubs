<?php


/**
 * Updates metadata by meta ID.
 *
 * @since 3.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string       $meta_type  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                                 or any other object type with an associated meta table.
 * @param int          $meta_id    ID for a specific meta row.
 * @param string       $meta_value Metadata value. Must be serializable if non-scalar.
 * @param string|false $meta_key   Optional. You can provide a meta key to update it. Default false.
 * @return bool True on successful update, false on failure.
 */
function update_metadata_by_mid($meta_type, $meta_id, $meta_value, $meta_key = \false)
{
}