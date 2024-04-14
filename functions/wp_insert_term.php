<?php


/**
 * Add a new term to the database.
 *
 * A non-existent term is inserted in the following sequence:
 * 1. The term is added to the term table, then related to the taxonomy.
 * 2. If everything is correct, several actions are fired.
 * 3. The 'term_id_filter' is evaluated.
 * 4. The term cache is cleaned.
 * 5. Several more actions are fired.
 * 6. An array is returned containing the term_id and term_taxonomy_id.
 *
 * If the 'slug' argument is not empty, then it is checked to see if the term
 * is invalid. If it is not a valid, existing term, it is added and the term_id
 * is given.
 *
 * If the taxonomy is hierarchical, and the 'parent' argument is not empty,
 * the term is inserted and the term_id will be given.
 *
 * Error handling:
 * If $taxonomy does not exist or $term is empty,
 * a WP_Error object will be returned.
 *
 * If the term already exists on the same hierarchical level,
 * or the term slug and name are not unique, a WP_Error object will be returned.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @since 2.3.0
 *
 * @param string       $term     The term name to add or update.
 * @param string       $taxonomy The taxonomy to which to add the term.
 * @param array|string $args {
 *     Optional. Array or string of arguments for inserting a term.
 *
 *     @type string $alias_of    Slug of the term to make this term an alias of.
 *                               Default empty string. Accepts a term slug.
 *     @type string $description The term description. Default empty string.
 *     @type int    $parent      The id of the parent term. Default 0.
 *     @type string $slug        The term slug to use. Default empty string.
 * }
 * @return array|WP_Error An array containing the `term_id` and `term_taxonomy_id`,
 *                        WP_Error otherwise.
 * @phpstan-param array{
 *   alias_of?: string,
 *   description?: string,
 *   parent?: int,
 *   slug?: string,
 * } $args
 */
function wp_insert_term($term, $taxonomy, $args = array())
{
}