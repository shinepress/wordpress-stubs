<?php


/**
 * Identifies descendants of a given page ID in a list of page objects.
 *
 * Descendants are identified from the `$pages` array passed to the function. No database queries are performed.
 *
 * @since 1.5.1
 *
 * @param int       $page_id Page ID.
 * @param WP_Post[] $pages   List of page objects from which descendants should be identified.
 * @return WP_Post[] List of page children.
 */
function get_page_children($page_id, $pages)
{
}