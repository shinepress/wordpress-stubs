<?php


/**
 * Order the pages with children under parents in a flat list.
 *
 * It uses auxiliary structure to hold parent-children relationships and
 * runs in O(N) complexity
 *
 * @since 2.0.0
 *
 * @param WP_Post[] $pages   Posts array (passed by reference).
 * @param int       $page_id Optional. Parent page ID. Default 0.
 * @return string[] Array of post names keyed by ID and arranged by hierarchy. Children immediately follow their parents.
 */
function get_page_hierarchy(&$pages, $page_id = 0)
{
}