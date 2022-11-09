<?php


/**
 * Sends an email to the old network admin email address when the network admin email address changes.
 *
 * @since 4.9.0
 *
 * @param string $option_name The relevant database option name.
 * @param string $new_email   The new network admin email address.
 * @param string $old_email   The old network admin email address.
 * @param int    $network_id  ID of the network.
 */
function wp_network_admin_email_change_notification($option_name, $new_email, $old_email, $network_id)
{
}