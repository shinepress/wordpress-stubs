<?php


/**
 * Retrieves page data given a page ID or page object.
 *
 * Use get_post() instead of get_page().
 *
 * @since 1.5.1
 * @deprecated 3.5.0 Use get_post()
 *
 * @param mixed  $page   Page object or page ID. Passed by reference.
 * @param string $output Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which correspond to
 *                       a WP_Post object, an associative array, or a numeric array, respectively. Default OBJECT.
 * @param string $filter Optional. How the return value should be filtered. Accepts 'raw',
 *                       'edit', 'db', 'display'. Default 'raw'.
 * @return WP_Post|array|null WP_Post (or array) on success, or null on failure.
 */
function get_page($page, $output = \OBJECT, $filter = 'raw')
{
}