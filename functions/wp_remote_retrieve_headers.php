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
 * @return array|\Requests_Utility_CaseInsensitiveDictionary The headers of the response. Empty array if incorrect parameter given.
 */
function wp_remote_retrieve_headers($response)
{
}