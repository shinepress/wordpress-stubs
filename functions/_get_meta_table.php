<?php


/**
 * Retrieve the name of the metadata table for the specified object type.
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $type Type of object to get metadata table for (e.g., comment, post, or user)
 * @return string|false Metadata table name, or false if no metadata table exists
 */
function _get_meta_table($type)
{
}