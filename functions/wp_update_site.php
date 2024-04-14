<?php


/**
 * Updates a site in the database.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int   $site_id ID of the site that should be updated.
 * @param array $data    Site data to update. See {@see wp_insert_site()} for the list of supported keys.
 * @return int|WP_Error The updated site's ID on success, or error object on failure.
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
 *   user_id?: int,
 *   title?: string,
 *   options?: array,
 *   meta?: array,
 * } $data See wp_insert_site()
 */
function wp_update_site($site_id, array $data)
{
}