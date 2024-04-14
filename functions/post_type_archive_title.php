<?php


/**
 * Display or retrieve title for a post type archive.
 *
 * This is optimized for archive.php and archive-{$post_type}.php template files
 * for displaying the title of the post type.
 *
 * @since 3.1.0
 *
 * @param string $prefix  Optional. What to display before the title.
 * @param bool   $display Optional. Whether to display or retrieve title. Default true.
 * @return string|void Title when retrieving, null when displaying or failure.
 * @phpstan-return ($display is true ? void : string|void)
 */
function post_type_archive_title($prefix = '', $display = \true)
{
}