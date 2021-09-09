<?php


/**
 * Updates the htaccess file with the current rules if it is writable.
 *
 * Always writes to the file if it exists and is writable to ensure that we
 * blank out old rules.
 *
 * @since 1.5.0
 *
 * @global WP_Rewrite $wp_rewrite
 *
 * @return bool|null True on write success, false on failure. Null in multisite.
 */
function save_mod_rewrite_rules()
{
}