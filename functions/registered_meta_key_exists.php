<?php


/**
 * Checks if a meta key is registered.
 *
 * @since 4.6.0
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $object_type    The type of object.
 * @param string $meta_key       The meta key.
 * @param string $object_subtype Optional. The subtype of the object type.
 *
 * @return bool True if the meta key is registered to the object type and, if provided,
 *              the object subtype. False if not.
 */
function registered_meta_key_exists($object_type, $meta_key, $object_subtype = '')
{
}