<?php


/**
 * Adds metadata to a term.
 *
 * @since 4.4.0
 *
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Metadata name.
 * @param mixed  $meta_value Metadata value. Must be serializable if non-scalar.
 * @param bool   $unique     Optional. Whether the same key should not be added.
 *                           Default false.
 * @return int|false|WP_Error Meta ID on success, false on failure.
 *                            WP_Error when term_id is ambiguous between taxonomies.
 */
function add_term_meta($term_id, $meta_key, $meta_value, $unique = \false)
{
}