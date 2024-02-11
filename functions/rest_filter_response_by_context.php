<?php


/**
 * Filters the response to remove any fields not available in the given context.
 *
 * @since 5.5.0
 * @since 5.6.0 Support the "patternProperties" keyword for objects.
 *              Support the "anyOf" and "oneOf" keywords.
 *
 * @param array|object $response_data The response data to modify.
 * @param array        $schema        The schema for the endpoint used to filter the response.
 * @param string       $context       The requested context.
 * @return array|object The filtered response data.
 */
function rest_filter_response_by_context($response_data, $schema, $context)
{
}