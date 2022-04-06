<?php


/**
 * Updates the 'https_migration_required' option if needed when the given URL has been updated from HTTP to HTTPS.
 *
 * If this is a fresh site, a migration will not be required, so the option will be set as `false`.
 *
 * This is hooked into the {@see 'update_option_home'} action.
 *
 * @since 5.7.0
 * @access private
 *
 * @param mixed $old_url Previous value of the URL option.
 * @param mixed $new_url New value of the URL option.
 */
function wp_update_https_migration_required($old_url, $new_url)
{
}