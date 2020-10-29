<?php


/**
 * Update term based on arguments provided.
 *
 * The $args will indiscriminately override all values with the same field name.
 * Care must be taken to not override important information need to update or
 * update will fail (or perhaps create a new term, neither would be acceptable).
 *
 * Defaults will set 'alias_of', 'description', 'parent', and 'slug' if not
 * defined in $args already.
 *
 * 'alias_of' will create a term group, if it doesn't already exist, and update
 * it for the $term.
 *
 * If the 'slug' argument in $args is missing, then the 'name' in $args will be
 * used. It should also be noted that if you set 'slug' and it isn't unique then
 * a WP_Error will be passed back. If you don't pass any slug, then a unique one
 * will be created for you.
 *
 * For what can be overrode in `$args`, check the term scheme can contain and stay
 * away from the term keys.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int          $term_id  The ID of the term
 * @param string       $taxonomy The context in which to relate the term to the object.
 * @param array|string $args     Optional. Array of get_terms() arguments. Default empty array.
 * @return array|WP_Error Returns Term ID and Taxonomy Term ID
 */
function wp_update_term($term_id, $taxonomy, $args = array())
{
}