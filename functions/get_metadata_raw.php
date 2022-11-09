<?php


/**
 * Retrieves raw metadata value for the specified object.
 *
 * @since 5.5.0
 *
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @param int    $object_id ID of the object metadata is for.
 * @param string $meta_key  Optional. Metadata key. If not specified, retrieve all metadata for
 *                          the specified object. Default empty.
 * @param bool   $single    Optional. If true, return only the first value of the specified meta_key.
 *                          This parameter has no effect if meta_key is not specified. Default false.
 * @return mixed Single metadata value, or array of values. Null if the value does not exist.
 *               False if there's a problem with the parameters passed to the function.
 */
function get_metadata_raw($meta_type, $object_id, $meta_key = '', $single = \false)
{
}