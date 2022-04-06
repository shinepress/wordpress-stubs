<?php


/**
 * Retrieves metadata for a site.
 *
 * @since 5.1.0
 *
 * @param int    $site_id Site ID.
 * @param string $key     Optional. The meta key to retrieve. By default,
 *                        returns data for all keys. Default empty.
 * @param bool   $single  Optional. Whether to return a single value.
 *                        This parameter has no effect if $key is not specified.
 *                        Default false.
 * @return mixed An array if $single is false. The value of meta data field
 *               if $single is true. False for an invalid $site_id.
 */
function get_site_meta($site_id, $key = '', $single = \false)
{
}