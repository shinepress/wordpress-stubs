<?php


/**
 * Get sanitized Term field.
 *
 * The function is for contextual reasons and for simplicity of usage.
 *
 * @since 2.3.0
 * @since 4.4.0 The `$taxonomy` parameter was made optional. `$term` can also now accept a WP_Term object.
 *
 * @see sanitize_term_field()
 *
 * @param string      $field    Term field to fetch.
 * @param int|WP_Term $term     Term ID or object.
 * @param string      $taxonomy Optional. Taxonomy Name. Default empty.
 * @param string      $context  Optional, default is display. Look at sanitize_term_field() for available options.
 * @return string|int|null|WP_Error Will return an empty string if $term is not an object or if $field is not set in $term.
 */
function get_term_field($field, $term, $taxonomy = '', $context = 'display')
{
}