<?php


/**
 * Outputs the HTML for a network's "Edit Site" tabular interface.
 *
 * @since 4.6.0
 *
 * @param array $args {
 *     Optional. Array or string of Query parameters. Default empty array.
 *
 *     @type int    $blog_id  The site ID. Default is the current site.
 *     @type array  $links    The tabs to include with (label|url|cap) keys.
 *     @type string $selected The ID of the selected link.
 * }
 * @phpstan-param array{
 *   blog_id?: int,
 *   links?: array,
 *   selected?: string,
 * } $args
 */
function network_edit_site_nav($args = array())
{
}