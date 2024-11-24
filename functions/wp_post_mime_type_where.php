<?php


/**
 * Converts MIME types into SQL.
 *
 * @since 2.5.0
 *
 * @param string|string[] $post_mime_types List of mime types or comma separated string
 *                                         of mime types.
 * @param string          $table_alias     Optional. Specify a table alias, if needed.
 *                                         Default empty.
 * @return string The SQL AND clause for mime searching.
 */
function wp_post_mime_type_where($post_mime_types, $table_alias = '')
{
}