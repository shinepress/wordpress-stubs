<?php


/**
 * Updates the IIS web.config file with the current rules if it is writable.
 * If the permalinks do not require rewrite rules then the rules are deleted from the web.config file.
 *
 * @since 2.8.0
 *
 * @global WP_Rewrite $wp_rewrite
 *
 * @return bool|null True on write success, false on failure. Null in multisite.
 */
function iis7_save_url_rewrite_rules()
{
}