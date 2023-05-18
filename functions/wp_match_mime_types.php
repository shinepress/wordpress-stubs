<?php


/**
 * Check a MIME-Type against a list.
 *
 * If the wildcard_mime_types parameter is a string, it must be comma separated
 * list. If the real_mime_types is a string, it is also comma separated to
 * create the list.
 *
 * @since 2.5.0
 *
 * @param string|array $wildcard_mime_types Mime types, e.g. audio/mpeg or image (same as image/*)
 *                                          or flash (same as *flash*).
 * @param string|array $real_mime_types     Real post mime type values.
 * @return array array(wildcard=>array(real types)).
 */
function wp_match_mime_types($wildcard_mime_types, $real_mime_types)
{
}