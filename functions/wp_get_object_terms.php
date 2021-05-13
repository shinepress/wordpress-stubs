<?php


/**
 * Retrieves the terms associated with the given object(s), in the supplied taxonomies.
 *
 * @since 2.3.0
 * @since 4.2.0 Added support for 'taxonomy', 'parent', and 'term_taxonomy_id' values of `$orderby`.
 *              Introduced `$parent` argument.
 * @since 4.4.0 Introduced `$meta_query` and `$update_term_meta_cache` arguments. When `$fields` is 'all' or
 *              'all_with_object_id', an array of `WP_Term` objects will be returned.
 * @since 4.7.0 Refactored to use WP_Term_Query, and to support any WP_Term_Query arguments.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int|array    $object_ids The ID(s) of the object(s) to retrieve.
 * @param string|array $taxonomies The taxonomies to retrieve terms from.
 * @param array|string $args       See WP_Term_Query::__construct() for supported arguments.
 * @return array|WP_Error The requested term data or empty array if no terms found.
 *                        WP_Error if any of the $taxonomies don't exist.
 */
function wp_get_object_terms($object_ids, $taxonomies, $args = array())
{
}