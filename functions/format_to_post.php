<?php


/**
 * Formerly used to escape strings before inserting into the DB.
 *
 * Has not performed this function for many, many years. Use wpdb::prepare() instead.
 *
 * @since 0.71
 * @deprecated 3.9.0
 *
 * @param string $content The text to format.
 * @return string The very same text.
 */
function format_to_post($content)
{
}