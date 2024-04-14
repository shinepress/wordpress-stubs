<?php


/**
 * Site API
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 5.1.0
 */
/**
 * Inserts a new site into the database.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $data {
 *     Data for the new site that should be inserted.
 *
 *     @type string $domain       Site domain. Default empty string.
 *     @type string $path         Site path. Default '/'.
 *     @type int    $network_id   The site's network ID. Default is the current network ID.
 *     @type string $registered   When the site was registered, in SQL datetime format. Default is
 *                                the current time.
 *     @type string $last_updated When the site was last updated, in SQL datetime format. Default is
 *                                the value of $registered.
 *     @type int    $public       Whether the site is public. Default 1.
 *     @type int    $archived     Whether the site is archived. Default 0.
 *     @type int    $mature       Whether the site is mature. Default 0.
 *     @type int    $spam         Whether the site is spam. Default 0.
 *     @type int    $deleted      Whether the site is deleted. Default 0.
 *     @type int    $lang_id      The site's language ID. Currently unused. Default 0.
 * }
 * @return int|WP_Error The new site's ID on success, or error object on failure.
 * @phpstan-param array{
 *   domain?: string,
 *   path?: string,
 *   network_id?: int,
 *   registered?: string,
 *   last_updated?: string,
 *   public?: int,
 *   archived?: int,
 *   mature?: int,
 *   spam?: int,
 *   deleted?: int,
 *   lang_id?: int,
 * } $data
 */
function wp_insert_site(array $data)
{
}