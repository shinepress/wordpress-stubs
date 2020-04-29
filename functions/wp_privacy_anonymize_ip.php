<?php


/**
 * Return an anonymized IPv4 or IPv6 address.
 *
 * @since 4.9.6 Abstracted from `WP_Community_Events::get_unsafe_client_ip()`.
 *
 * @param  string $ip_addr        The IPv4 or IPv6 address to be anonymized.
 * @param  bool   $ipv6_fallback  Optional. Whether to return the original IPv6 address if the needed functions
 *                                to anonymize it are not present. Default false, return `::` (unspecified address).
 * @return string  The anonymized IP address.
 */
function wp_privacy_anonymize_ip($ip_addr, $ipv6_fallback = \false)
{
}