<?php


/**
 * Retrieves the permalink for the search results feed.
 *
 * @since 2.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $search_query Optional. Search query. Default empty.
 * @param string $feed         Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                             Default is the value of get_default_feed().
 * @return string The search results feed permalink.
 */
function get_search_feed_link($search_query = '', $feed = '')
{
}