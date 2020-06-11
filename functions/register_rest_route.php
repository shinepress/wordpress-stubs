<?php


/**
 * Registers a REST API route.
 *
 * @since 4.4.0
 *
 * @param string $namespace The first URL segment after core prefix. Should be unique to your package/plugin.
 * @param string $route     The base URL for route you are adding.
 * @param array  $args      Optional. Either an array of options for the endpoint, or an array of arrays for
 *                          multiple methods. Default empty array.
 * @param bool   $override  Optional. If the route already exists, should we override it? True overrides,
 *                          false merges (with newer overriding if duplicate keys exist). Default false.
 * @return bool True on success, false on error.
 */
function register_rest_route($namespace, $route, $args = array(), $override = \false)
{
}