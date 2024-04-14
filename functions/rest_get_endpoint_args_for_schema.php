<?php


/**
 * Retrieves an array of endpoint arguments from the item schema and endpoint method.
 *
 * @since 5.6.0
 *
 * @param array  $schema The full JSON schema for the endpoint.
 * @param string $method Optional. HTTP method of the endpoint. The arguments for `CREATABLE` endpoints are
 *                       checked for required values and may fall-back to a given default, this is not done
 *                       on `EDITABLE` endpoints. Default WP_REST_Server::CREATABLE.
 * @return array The endpoint arguments.
 */
function rest_get_endpoint_args_for_schema($schema, $method = \WP_REST_Server::CREATABLE)
{
}