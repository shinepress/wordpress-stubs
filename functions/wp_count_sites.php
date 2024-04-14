<?php


/**
 * Counts number of sites grouped by site status.
 *
 * @since 5.3.0
 *
 * @param int $network_id Optional. The network to get counts for. Default is the current network ID.
 * @return int[] {
 *     Numbers of sites grouped by site status.
 *
 *     @type int $all      The total number of sites.
 *     @type int $public   The number of public sites.
 *     @type int $archived The number of archived sites.
 *     @type int $mature   The number of mature sites.
 *     @type int $spam     The number of spam sites.
 *     @type int $deleted  The number of deleted sites.
 * }
 * @phpstan-return array{
 *   all: int,
 *   public: int,
 *   archived: int,
 *   mature: int,
 *   spam: int,
 *   deleted: int,
 * }
 */
function wp_count_sites($network_id = \null)
{
}