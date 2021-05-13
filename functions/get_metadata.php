<?php


/**
 * Retrieve metadata for the specified object.
 *
 * @since 2.9.0
 *
 * @param string $meta_type Type of object metadata is for (e.g., comment, post, term, or user).
 * @param int    $object_id ID of the object metadata is for
 * @param string $meta_key  Optional. Metadata key. If not specified, retrieve all metadata for
 *                          the specified object.
 * @param bool   $single    Optional, default is false.
 *                          If true, return only the first value of the specified meta_key.
 *                          This parameter has no effect if meta_key is not specified.
 * @return mixed Single metadata value, or array of values
 */
function get_metadata($meta_type, $object_id, $meta_key = '', $single = \false)
{
}