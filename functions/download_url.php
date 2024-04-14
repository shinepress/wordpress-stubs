<?php


/**
 * Downloads a URL to a local temporary file using the WordPress HTTP API.
 *
 * Please note that the calling function must unlink() the file.
 *
 * @since 2.5.0
 * @since 5.2.0 Signature Verification with SoftFail was added.
 * @since 5.9.0 Support for Content-Disposition filename was added.
 *
 * @param string $url                    The URL of the file to download.
 * @param int    $timeout                The timeout for the request to download the file.
 *                                       Default 300 seconds.
 * @param bool   $signature_verification Whether to perform Signature Verification.
 *                                       Default false.
 * @return string|WP_Error Filename on success, WP_Error on failure.
 */
function download_url($url, $timeout = 300, $signature_verification = \false)
{
}