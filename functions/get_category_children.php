<?php


/**
 * Retrieve category children list separated before and after the term IDs.
 *
 * @since 1.2.0
 * @deprecated 2.8.0 Use get_term_children()
 * @see get_term_children()
 *
 * @param int    $id      Category ID to retrieve children.
 * @param string $before  Optional. Prepend before category term ID. Default '/'.
 * @param string $after   Optional. Append after category term ID. Default empty string.
 * @param array  $visited Optional. Category Term IDs that have already been added.
 *                        Default empty array.
 * @return string
 */
function get_category_children($id, $before = '/', $after = '', $visited = array())
{
}