<?php


/**
 * Retrieves a list of registered metadata args for an object type, keyed by their meta keys.
 *
 * @since 4.6.0
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $object_type    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                               or any other object type with an associated meta table.
 * @param string $object_subtype Optional. The subtype of the object type.
 * @return array[] List of registered metadata args, keyed by their meta keys.
 */
function get_registered_meta_keys($object_type, $object_subtype = '')
{
}