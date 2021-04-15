<?php


/**
 * Retrieves the feed link for a term.
 *
 * Returns a link to the feed for all posts in a given term. A specific feed
 * can be requested or left blank to get the default feed.
 *
 * @since 3.0.0
 *
 * @param int    $term_id  Term ID.
 * @param string $taxonomy Optional. Taxonomy of `$term_id`. Default 'category'.
 * @param string $feed     Optional. Feed type. Default empty.
 * @return string|false Link to the feed for the term specified by $term_id and $taxonomy.
 */
function get_term_feed_link($term_id, $taxonomy = 'category', $feed = '')
{
}