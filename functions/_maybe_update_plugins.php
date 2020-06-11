<?php


/**
 * Check the last time plugins were run before checking plugin versions.
 *
 * This might have been backported to WordPress 2.6.1 for performance reasons.
 * This is used for the wp-admin to check only so often instead of every page
 * load.
 *
 * @since 2.7.0
 * @access private
 */
function _maybe_update_plugins()
{
}