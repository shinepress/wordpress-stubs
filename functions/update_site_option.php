<?php


/**
 * Update the value of an option that was already added for the current network.
 *
 * @since 2.8.0
 * @since 4.4.0 Modified into wrapper for update_network_option()
 *
 * @see update_network_option()
 *
 * @param string $option Name of option. Expected to not be SQL-escaped.
 * @param mixed  $value  Option value. Expected to not be SQL-escaped.
 * @return bool False if value was not updated. True if value was updated.
 */
function update_site_option($option, $value)
{
}