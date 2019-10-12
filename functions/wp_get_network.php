<?php


/**
 * Retrieve an object containing information about the requested network.
 *
 * @since 3.9.0
 * @deprecated 4.7.0 Use `get_network()`
 * @see get_network()
 *
 * @internal In 4.6.0, converted to use get_network()
 *
 * @param object|int $network The network's database row or ID.
 * @return WP_Network|false Object containing network information if found, false if not.
 */
function wp_get_network($network)
{
}