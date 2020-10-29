<?php


/**
 * Count number of sites grouped by site status.
 *
 * @since 5.3.0
 *
 * @param int $network_id The network to get counts for.  Default is the current network id.
 * @return array Includes a grand total 'all' and an array of counts indexed by
 *                status strings: public, archived, mature, spam, deleted.
 */
function wp_count_sites($network_id = \null)
{
}