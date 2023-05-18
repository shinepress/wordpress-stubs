<?php


/**
 * Retrieves a list of registered meta keys for an object type.
 *
 * @since 4.6.0
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $object_type    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                               or any other object type with an associated meta table.
 * @param string $object_subtype Optional. The subtype of the object type.
 * @return string[] List of registered meta keys.
 */
function get_registered_meta_keys($object_type, $object_subtype = '')
{
}