<?php


/**
 * Retrieves only the headers from the raw response.
 *
 * @since 2.7.0
 * @since 4.6.0 Return value changed from an array to an WpOrg\Requests\Utility\CaseInsensitiveDictionary instance.
 *
 * @see \WpOrg\Requests\Utility\CaseInsensitiveDictionary
 *
 * @param array|WP_Error $response HTTP response.
 * @return \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array The headers of the response, or empty array
 *                                                                 if incorrect parameter given.
 */
function wp_remote_retrieve_headers($response)
{
}