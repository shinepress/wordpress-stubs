<?php


/**
 * Updates metadata for a site.
 *
 * Use the $prev_value parameter to differentiate between meta fields with the
 * same key and site ID.
 *
 * If the meta field for the site does not exist, it will be added.
 *
 * @since 5.1.0
 *
 * @param int    $site_id    Site ID.
 * @param string $meta_key   Metadata key.
 * @param mixed  $meta_value Metadata value. Must be serializable if non-scalar.
 * @param mixed  $prev_value Optional. Previous value to check before updating.
 *                           If specified, only update existing metadata entries with
 *                           this value. Otherwise, update all entries. Default empty.
 * @return int|bool Meta ID if the key didn't exist, true on successful update,
 *                  false on failure or if the value passed to the function
 *                  is the same as the one that is already in the database.
 */
function update_site_meta($site_id, $meta_key, $meta_value, $prev_value = '')
{
}