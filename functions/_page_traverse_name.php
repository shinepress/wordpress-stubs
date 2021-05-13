<?php


/**
 * Traverse and return all the nested children post names of a root page.
 *
 * $children contains parent-children relations
 *
 * @since 2.9.0
 * @access private
 *
 * @see _page_traverse_name()
 *
 * @param int      $page_id  Page ID.
 * @param array    $children Parent-children relations (passed by reference).
 * @param string[] $result   Array of page names keyed by ID (passed by reference).
 */
function _page_traverse_name($page_id, &$children, &$result)
{
}