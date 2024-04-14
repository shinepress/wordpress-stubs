<?php


/**
 * Validates data for a site prior to inserting or updating in the database.
 *
 * @since 5.1.0
 *
 * @param WP_Error     $errors   Error object, passed by reference. Will contain validation errors if
 *                               any occurred.
 * @param array        $data     Associative array of complete site data. See {@see wp_insert_site()}
 *                               for the included data.
 * @param WP_Site|null $old_site The old site object if the data belongs to a site being updated,
 *                               or null if it is a new site being inserted.
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
 * } $data See wp_insert_site()
 * @phpstan-return void
 */
function wp_validate_site_data($errors, $data, $old_site = \null)
{
}