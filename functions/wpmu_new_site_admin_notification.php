<?php


/**
 * Notifies the Multisite network administrator that a new site was created.
 *
 * Filter {@see 'send_new_site_email'} to disable or bypass.
 *
 * Filter {@see 'new_site_email'} to filter the contents.
 *
 * @since 5.6.0
 *
 * @param int $site_id Site ID of the new site.
 * @param int $user_id User ID of the administrator of the new site.
 * @return bool Whether the email notification was sent.
 */
function wpmu_new_site_admin_notification($site_id, $user_id)
{
}