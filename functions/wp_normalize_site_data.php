<?php


/**
 * Normalizes data for a site prior to inserting or updating in the database.
 *
 * @since 5.1.0
 *
 * @param array $data Associative array of site data passed to the respective function.
 *                    See {@see wp_insert_site()} for the possibly included data.
 * @return array Normalized site data.
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
function wp_normalize_site_data($data)
{
}