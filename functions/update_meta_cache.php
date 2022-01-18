<?php


/**
 * Updates the metadata cache for the specified objects.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string       $meta_type  Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                                 or any other object type with an associated meta table.
 * @param string|int[] $object_ids Array or comma delimited list of object IDs to update cache for.
 * @return array|false Metadata cache for the specified objects, or false on failure.
 */
function update_meta_cache($meta_type, $object_ids)
{
}