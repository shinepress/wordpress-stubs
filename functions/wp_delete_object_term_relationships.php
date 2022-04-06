<?php


/**
 * Will unlink the object from the taxonomy or taxonomies.
 *
 * Will remove all relationships between the object and any terms in
 * a particular taxonomy or taxonomies. Does not remove the term or
 * taxonomy itself.
 *
 * @since 2.3.0
 *
 * @param int          $object_id  The term object ID that refers to the term.
 * @param string|array $taxonomies List of taxonomy names or single taxonomy name.
 */
function wp_delete_object_term_relationships($object_id, $taxonomies)
{
}