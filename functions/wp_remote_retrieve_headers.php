<?php


/**
 * Retrieve only the headers from the raw response.
 *
 * @since 2.7.0
 * @since 4.6.0 Return value changed from an array to an Requests_Utility_CaseInsensitiveDictionary instance.
 *
 * @see \Requests_Utility_CaseInsensitiveDictionary
 *
 * @param array|WP_Error $response HTTP response.
 * @return \Requests_Utility_CaseInsensitiveDictionary|array The headers of the response, or empty array
 *                                                           if incorrect parameter given.
 */
function wp_remote_retrieve_headers($response)
{
}