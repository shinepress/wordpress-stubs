<?php


/**
 * Send an email to the old site admin email address when the site admin email address changes.
 *
 * @since 4.9.0
 *
 * @param string $old_email   The old site admin email address.
 * @param string $new_email   The new site admin email address.
 * @param string $option_name The relevant database option name.
 */
function wp_site_admin_email_change_notification($old_email, $new_email, $option_name)
{
}