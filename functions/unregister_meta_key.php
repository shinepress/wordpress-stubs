<?php


/**
 * Unregisters a meta key from the list of registered keys.
 *
 * @since 4.6.0
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $object_type    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                               or any other object type with an associated meta table.
 * @param string $meta_key       Metadata key.
 * @param string $object_subtype Optional. The subtype of the object type.
 * @return bool True if successful. False if the meta key was not registered.
 */
function unregister_meta_key($object_type, $meta_key, $object_subtype = '')
{
}