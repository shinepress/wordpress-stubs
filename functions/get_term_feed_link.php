<?php


/**
 * Retrieves the feed link for a term.
 *
 * Returns a link to the feed for all posts in a given term. A specific feed
 * can be requested or left blank to get the default feed.
 *
 * @since 3.0.0
 *
 * @param int|WP_Term|object $term     The ID or term object whose feed link will be retrieved.
 * @param string             $taxonomy Optional. Taxonomy of `$term_id`.
 * @param string             $feed     Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                                     Default is the value of get_default_feed().
 * @return string|false Link to the feed for the term specified by $term_id and $taxonomy.
 */
function get_term_feed_link($term, $taxonomy = '', $feed = '')
{
}