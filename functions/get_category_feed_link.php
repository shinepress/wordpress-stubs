<?php


/**
 * Retrieves the feed link for a category.
 *
 * Returns a link to the feed for all posts in a given category. A specific feed
 * can be requested or left blank to get the default feed.
 *
 * @since 2.5.0
 *
 * @param int|WP_Term|object $cat  The ID or term object whose feed link will be retrieved.
 * @param string             $feed Optional. Feed type. Possible values include 'rss2', 'atom'.
 *                                 Default is the value of get_default_feed().
 * @return string Link to the feed for the category specified by $cat_id.
 */
function get_category_feed_link($cat, $feed = '')
{
}