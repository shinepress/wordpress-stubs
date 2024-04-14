<?php


/**
 * Returns the object subtype for a given object ID of a specific type.
 *
 * @since 4.9.8
 *
 * @param string $object_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                            or any other object type with an associated meta table.
 * @param int    $object_id   ID of the object to retrieve its subtype.
 * @return string The object subtype or an empty string if unspecified subtype.
 */
function get_object_subtype($object_type, $object_id)
{
}