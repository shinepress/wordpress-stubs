<?php


/**
 * Send a confirmation request email when a change of network admin email address is attempted.
 *
 * The new network admin address will not become active until confirmed.
 *
 * @since 4.9.0
 *
 * @param string $old_value The old network admin email address.
 * @param string $value     The proposed new network admin email address.
 */
function update_network_option_new_admin_email($old_value, $value)
{
}