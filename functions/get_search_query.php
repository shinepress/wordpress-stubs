<?php


/**
 * Retrieves the contents of the search WordPress query variable.
 *
 * The search query string is passed through esc_attr() to ensure that it is safe
 * for placing in an html attribute.
 *
 * @since 2.3.0
 *
 * @param bool $escaped Whether the result is escaped. Default true.
 * 	                    Only use when you are later escaping it. Do not use unescaped.
 * @return string
 */
function get_search_query($escaped = \true)
{
}