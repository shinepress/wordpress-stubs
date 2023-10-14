<?php


/**
 * Updates a link in the database.
 *
 * @since 2.0.0
 *
 * @param array $linkdata Link data to update. See wp_insert_link() for accepted arguments.
 * @return int|WP_Error Value 0 or WP_Error on failure. The updated link ID on success.
 * @phpstan-param array{
 *   link_id?: int,
 *   link_url?: string,
 *   link_name?: string,
 *   link_image?: string,
 *   link_target?: string,
 *   link_description?: string,
 *   link_visible?: string,
 *   link_owner?: int,
 *   link_rating?: int,
 *   link_rel?: string,
 *   link_notes?: string,
 *   link_rss?: string,
 *   link_category?: int,
 * } $linkdata See wp_insert_link()
 */
function wp_update_link($linkdata)
{
}