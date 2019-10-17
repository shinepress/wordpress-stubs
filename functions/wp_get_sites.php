<?php


/**
 * Return an array of sites for a network or networks.
 *
 * @since 3.7.0
 * @deprecated 4.6.0 Use get_sites()
 * @see get_sites()
 *
 * @param array $args {
 *     Array of default arguments. Optional.
 *
 *     @type int|array $network_id A network ID or array of network IDs. Set to null to retrieve sites
 *                                 from all networks. Defaults to current network ID.
 *     @type int       $public     Retrieve public or non-public sites. Default null, for any.
 *     @type int       $archived   Retrieve archived or non-archived sites. Default null, for any.
 *     @type int       $mature     Retrieve mature or non-mature sites. Default null, for any.
 *     @type int       $spam       Retrieve spam or non-spam sites. Default null, for any.
 *     @type int       $deleted    Retrieve deleted or non-deleted sites. Default null, for any.
 *     @type int       $limit      Number of sites to limit the query to. Default 100.
 *     @type int       $offset     Exclude the first x sites. Used in combination with the $limit parameter. Default 0.
 * }
 * @return array An empty array if the installation is considered "large" via wp_is_large_network(). Otherwise,
 *               an associative array of site data arrays, each containing the site (network) ID, blog ID,
 *               site domain and path, dates registered and modified, and the language ID. Also, boolean
 *               values for whether the site is public, archived, mature, spam, and/or deleted.
 */
function wp_get_sites($args = array())
{
}