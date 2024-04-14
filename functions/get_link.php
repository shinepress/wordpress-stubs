<?php


/**
 * Retrieves bookmark data based on ID.
 *
 * @since 2.0.0
 * @deprecated 2.1.0 Use get_bookmark()
 * @see get_bookmark()
 *
 * @param int    $bookmark_id ID of link
 * @param string $output      Optional. Type of output. Accepts OBJECT, ARRAY_N, or ARRAY_A.
 *                            Default OBJECT.
 * @param string $filter      Optional. How to filter the link for output. Accepts 'raw', 'edit',
 *                            'attribute', 'js', 'db', or 'display'. Default 'raw'.
 * @return object|array Bookmark object or array, depending on the type specified by `$output`.
 * @phpstan-param 'raw'|'edit'|'attribute'|'js'|'db'|'display' $filter
 */
function get_link($bookmark_id, $output = \OBJECT, $filter = 'raw')
{
}