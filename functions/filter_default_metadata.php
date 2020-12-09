<?php


/**
 * Filters into default_{$object_type}_metadata and adds in default value.
 *
 * @since 5.5.0
 *
 * @param mixed  $value     Current value passed to filter.
 * @param int    $object_id ID of the object metadata is for.
 * @param string $meta_key  Metadata key.
 * @param bool   $single    If true, return only the first value of the specified meta_key.
 *                          This parameter has no effect if meta_key is not specified.
 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table.
 * @return mixed Single metadata default, or array of defaults.
 */
function filter_default_metadata($value, $object_id, $meta_key, $single, $meta_type)
{
}