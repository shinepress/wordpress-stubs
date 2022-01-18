<?php


/**
 * Retrieves the value of a metadata field for the specified object type and ID.
 *
 * If the meta field exists, a single value is returned if `$single` is true,
 * or an array of values if it's false.
 *
 * If the meta field does not exist, the result depends on get_metadata_default().
 * By default, an empty string is returned if `$single` is true, or an empty array
 * if it's false.
 *
 * @since 2.9.0
 *
 * @see get_metadata_raw()
 * @see get_metadata_default()
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int    $object_id ID of the object metadata is for.
 * @param string $meta_key  Optional. Metadata key. If not specified, retrieve all metadata for
 *                          the specified object. Default empty.
 * @param bool   $single    Optional. If true, return only the first value of the specified meta_key.
 *                          This parameter has no effect if meta_key is not specified. Default false.
 * @return mixed Single metadata value, or array of values.
 *               False if there's a problem with the parameters passed to the function.
 */
function get_metadata($meta_type, $object_id, $meta_key = '', $single = \false)
{
}