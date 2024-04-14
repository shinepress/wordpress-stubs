<?php


/**
 * Retrieves category parents with separator.
 *
 * @since 1.2.0
 * @since 4.8.0 The `$visited` parameter was deprecated and renamed to `$deprecated`.
 *
 * @param int    $category_id Category ID.
 * @param bool   $link        Optional. Whether to format with link. Default false.
 * @param string $separator   Optional. How to separate categories. Default '/'.
 * @param bool   $nicename    Optional. Whether to use nice name for display. Default false.
 * @param array  $deprecated  Not used.
 * @return string|WP_Error A list of category parents on success, WP_Error on failure.
 */
function get_category_parents($category_id, $link = \false, $separator = '/', $nicename = \false, $deprecated = array())
{
}