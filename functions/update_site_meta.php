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
 * @param mixed  $prev_value Optional. Previous value to check before removing.
 *                           Default empty.
 * @return int|bool Meta ID if the key didn't exist, true on successful update,
 *                  false on failure.
 */
function update_site_meta($site_id, $meta_key, $meta_value, $prev_value = '')
{
}