<?php


/**
 * Downloads a URL to a local temporary file using the WordPress HTTP Class.
 * Please note, That the calling function must unlink() the file.
 *
 * @since 2.5.0
 *
 * @param string $url the URL of the file to download
 * @param int $timeout The timeout for the request to download the file default 300 seconds
 * @return mixed WP_Error on failure, string Filename on success.
 */
function download_url($url, $timeout = 300)
{
}