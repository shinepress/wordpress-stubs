<?php


/**
 * Retrieve category parents with separator.
 *
 * @since 1.2.0
 * @since 4.8.0 The `$visited` parameter was deprecated and renamed to `$deprecated`.
 *
 * @param int $id Category ID.
 * @param bool $link Optional, default is false. Whether to format with link.
 * @param string $separator Optional, default is '/'. How to separate categories.
 * @param bool $nicename Optional, default is false. Whether to use nice name for display.
 * @param array $deprecated Not used.
 * @return string|WP_Error A list of category parents on success, WP_Error on failure.
 */
function get_category_parents($id, $link = \false, $separator = '/', $nicename = \false, $deprecated = array())
{
}