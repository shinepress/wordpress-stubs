<?php


/**
 * Whether or not we can edit this network from this page.
 *
 * By default editing of network is restricted to the Network Admin for that `$network_id`.
 * This function allows for this to be overridden.
 *
 * @since 3.1.0
 *
 * @param int $network_id The network ID to check.
 * @return bool True if network can be edited, otherwise false.
 */
function can_edit_network($network_id)
{
}