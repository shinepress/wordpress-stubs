<?php


/**
 * Perform a HTTP HEAD or GET request.
 *
 * If $file_path is a writable filename, this will do a GET request and write
 * the file to that path.
 *
 * @since 2.5.0
 * @deprecated 4.4.0 Use WP_Http
 * @see WP_Http
 *
 * @param string      $url       URL to fetch.
 * @param string|bool $file_path Optional. File path to write request to. Default false.
 * @param int         $red       Optional. The number of Redirects followed, Upon 5 being hit,
 *                               returns false. Default 1.
 * @return \WpOrg\Requests\Utility\CaseInsensitiveDictionary|false Headers on success, false on failure.
 */
function wp_get_http($url, $file_path = \false, $red = 1)
{
}