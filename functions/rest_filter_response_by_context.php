<?php


/**
 * Filters the response to remove any fields not available in the given context.
 *
 * @since 5.5.0
 *
 * @param array|object $data    The response data to modify.
 * @param array        $schema  The schema for the endpoint used to filter the response.
 * @param string       $context The requested context.
 * @return array|object The filtered response data.
 */
function rest_filter_response_by_context($data, $schema, $context)
{
}