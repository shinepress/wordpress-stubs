<?php


/**
 * The number of active users in your installation.
 *
 * The count is cached and updated twice daily. This is not a live count.
 *
 * @since MU 2.7
 * @since 4.8.0 The $network_id parameter has been added.
 *
 * @param int|null $network_id ID of the network. Default is the current network.
 * @return int Number of active users on the network.
 */
function get_user_count($network_id = \null)
{
}