<?php


/**
 * Retrieves the URL for editing a given term.
 *
 * @since 3.1.0
 * @since 4.5.0 The `$taxonomy` parameter was made optional.
 *
 * @param int|WP_Term|object $term        The ID or term object whose edit link will be retrieved.
 * @param string             $taxonomy    Optional. Taxonomy. Defaults to the taxonomy of the term identified
 *                                        by `$term`.
 * @param string             $object_type Optional. The object type. Used to highlight the proper post type
 *                                        menu on the linked page. Defaults to the first object_type associated
 *                                        with the taxonomy.
 * @return string|null The edit term link URL for the given term, or null on failure.
 */
function get_edit_term_link($term, $taxonomy = '', $object_type = '')
{
}