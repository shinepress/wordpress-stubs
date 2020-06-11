<?php


/**
 * Tries to resume a single plugin.
 *
 * If a redirect was provided, we first ensure the plugin does not throw fatal
 * errors anymore.
 *
 * The way it works is by setting the redirection to the error before trying to
 * include the plugin file. If the plugin fails, then the redirection will not
 * be overwritten with the success message and the plugin will not be resumed.
 *
 * @since 5.2.0
 *
 * @param string $plugin       Single plugin to resume.
 * @param string $redirect     Optional. URL to redirect to. Default empty string.
 * @return bool|WP_Error True on success, false if `$plugin` was not paused,
 *                       `WP_Error` on failure.
 */
function resume_plugin($plugin, $redirect = '')
{
}