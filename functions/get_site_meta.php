<?php


/**
 * Retrieves metadata for a site.
 *
 * @since 5.1.0
 *
 * @param int    $site_id Site ID.
 * @param string $key     Optional. The meta key to retrieve. By default, returns
 *                        data for all keys. Default empty.
 * @param bool   $single  Optional. Whether to return a single value. Default false.
 * @return mixed Will be an array if $single is false. Will be value of meta data
 *               field if $single is true.
 */
function get_site_meta($site_id, $key = '', $single = \false)
{
}