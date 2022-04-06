<?php


/**
 * Check if the current post has any of given terms.
 *
 * The given terms are checked against the post's terms' term_ids, names and slugs.
 * Terms given as integers will only be checked against the post's terms' term_ids.
 * If no terms are given, determines if post has any terms.
 *
 * @since 3.1.0
 *
 * @param string|int|array $term Optional. The term name/term_id/slug or array of them to check for.
 * @param string $taxonomy Taxonomy name
 * @param int|object $post Optional. Post to check instead of the current post.
 * @return bool True if the current post has any of the given tags (or any tag, if no tag specified).
 */
function has_term($term = '', $taxonomy = '', $post = \null)
{
}