<?php


/**
 * Sanitizes meta value.
 *
 * @since 3.1.3
 * @since 4.9.8 The `$object_subtype` parameter was added.
 *
 * @param string $meta_key       Metadata key.
 * @param mixed  $meta_value     Metadata value to sanitize.
 * @param string $object_type    Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                               or any other object type with an associated meta table.
 * @param string $object_subtype Optional. The subtype of the object type.
 * @return mixed Sanitized $meta_value.
 */
function sanitize_meta($meta_key, $meta_value, $object_type, $object_subtype = '')
{
}