<?php


/**
 * Determines if a meta field with the given key exists for the given object ID.
 *
 * @since 3.3.0
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int    $object_id ID of the object metadata is for.
 * @param string $meta_key  Metadata key.
 * @return bool Whether a meta field with the given key exists.
 */
function metadata_exists($meta_type, $object_id, $meta_key)
{
}