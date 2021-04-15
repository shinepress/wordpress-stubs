<?php


/**
 * Disables the Link Manager on upgrade if, at the time of upgrade, no links exist in the DB.
 *
 * @since 3.5.0
 *
 * @global int  $wp_current_db_version
 * @global wpdb $wpdb WordPress database abstraction object.
 */
function maybe_disable_link_manager()
{
}