<?php


/**
 * Populate network settings.
 *
 * @since 3.0.0
 *
 * @global wpdb       $wpdb         WordPress database abstraction object.
 * @global object     $current_site
 * @global WP_Rewrite $wp_rewrite   WordPress rewrite component.
 *
 * @param int    $network_id        ID of network to populate.
 * @param string $domain            The domain name for the network (eg. "example.com").
 * @param string $email             Email address for the network administrator.
 * @param string $site_name         The name of the network.
 * @param string $path              Optional. The path to append to the network's domain name. Default '/'.
 * @param bool   $subdomain_install Optional. Whether the network is a subdomain installation or a subdirectory installation.
 *                                  Default false, meaning the network is a subdirectory installation.
 * @return bool|WP_Error True on success, or WP_Error on warning (with the installation otherwise successful,
 *                       so the error code must be checked) or failure.
 */
function populate_network($network_id = 1, $domain = '', $email = '', $site_name = '', $path = '/', $subdomain_install = \false)
{
}