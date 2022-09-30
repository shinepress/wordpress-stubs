<?php


/**
 * Inserts a link into the database, or updates an existing link.
 *
 * Runs all the necessary sanitizing, provides default values if arguments are missing,
 * and finally saves the link.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $linkdata {
 *     Elements that make up the link to insert.
 *
 *     @type int    $link_id          Optional. The ID of the existing link if updating.
 *     @type string $link_url         The URL the link points to.
 *     @type string $link_name        The title of the link.
 *     @type string $link_image       Optional. A URL of an image.
 *     @type string $link_target      Optional. The target element for the anchor tag.
 *     @type string $link_description Optional. A short description of the link.
 *     @type string $link_visible     Optional. 'Y' means visible, anything else means not.
 *     @type int    $link_owner       Optional. A user ID.
 *     @type int    $link_rating      Optional. A rating for the link.
 *     @type string $link_updated     Optional. When the link was last updated.
 *     @type string $link_rel         Optional. A relationship of the link to you.
 *     @type string $link_notes       Optional. An extended description of or notes on the link.
 *     @type string $link_rss         Optional. A URL of an associated RSS feed.
 *     @type int    $link_category    Optional. The term ID of the link category.
 *                                    If empty, uses default link category.
 * }
 * @param bool  $wp_error Optional. Whether to return a WP_Error object on failure. Default false.
 * @return int|WP_Error Value 0 or WP_Error on failure. The link ID on success.
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
 *   link_updated?: string,
 *   link_rel?: string,
 *   link_notes?: string,
 *   link_rss?: string,
 *   link_category?: int,
 * } $linkdata
 */
function wp_insert_link($linkdata, $wp_error = \false)
{
}