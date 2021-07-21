<?php


/**
 * Core Metadata API
 *
 * Functions for retrieving and manipulating metadata of various WordPress object types. Metadata
 * for an object is a represented by a simple key-value pair. Objects may contain multiple
 * metadata entries that share the same key and differ only in their value.
 *
 * @package WordPress
 * @subpackage Meta
 */
/**
 * Adds metadata for the specified object.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $meta_type  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                           or any other object type with an associated meta table.
 * @param int    $object_id  ID of the object metadata is for.
 * @param string $meta_key   Metadata key.
 * @param mixed  $meta_value Metadata value. Must be serializable if non-scalar.
 * @param bool   $unique     Optional. Whether the specified metadata key should be unique for the object.
 *                           If true, and the object already has a value for the specified metadata key,
 *                           no change will be made. Default false.
 * @return int|false The meta ID on success, false on failure.
 */
function add_metadata($meta_type, $object_id, $meta_key, $meta_value, $unique = \false)
{
}