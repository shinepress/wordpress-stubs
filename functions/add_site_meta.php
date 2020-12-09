<?php


/**
 * Adds metadata to a site.
 *
 * @since 5.1.0
 *
 * @param int    $site_id    Site ID.
 * @param string $meta_key   Metadata name.
 * @param mixed  $meta_value Metadata value. Must be serializable if non-scalar.
 * @param bool   $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false Meta ID on success, false on failure.
 */
function add_site_meta($site_id, $meta_key, $meta_value, $unique = \false)
{
}