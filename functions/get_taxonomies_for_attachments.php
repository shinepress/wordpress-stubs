<?php


/**
 * Retrieves all of the taxonomy names that are registered for attachments.
 *
 * Handles mime-type-specific taxonomies such as attachment:image and attachment:video.
 *
 * @since 3.5.0
 *
 * @see get_taxonomies()
 *
 * @param string $output Optional. The type of taxonomy output to return. Accepts 'names' or 'objects'.
 *                       Default 'names'.
 * @return array The names of all taxonomy of $object_type.
 * @phpstan-return ($output is 'names' ? array<int, string> : array<string, \WP_Taxonomy>)
 */
function get_taxonomies_for_attachments($output = 'names')
{
}