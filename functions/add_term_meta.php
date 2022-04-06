<?php


/**
 * Adds metadata to a term.
 *
 * @since 4.4.0
 *
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Metadata name.
 * @param mixed  $meta_value Metadata value.
 * @param bool   $unique     Optional. Whether to bail if an entry with the same key is found for the term.
 *                           Default false.
 * @return int|WP_Error|bool Meta ID on success. WP_Error when term_id is ambiguous between taxonomies.
 *                           False on failure.
 */
function add_term_meta($term_id, $meta_key, $meta_value, $unique = \false)
{
}