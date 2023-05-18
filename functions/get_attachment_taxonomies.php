<?php


/**
 * Retrieves taxonomies attached to given the attachment.
 *
 * @since 2.5.0
 * @since 4.7.0 Introduced the `$output` parameter.
 *
 * @param int|array|object $attachment Attachment ID, data array, or data object.
 * @param string           $output     Output type. 'names' to return an array of taxonomy names,
 *                                     or 'objects' to return an array of taxonomy objects.
 *                                     Default is 'names'.
 * @return array Empty array on failure. List of taxonomies on success.
 * @phpstan-return ($output is 'names' ? array<int, string> : array<string, \WP_Taxonomy>)
 */
function get_attachment_taxonomies($attachment, $output = 'names')
{
}