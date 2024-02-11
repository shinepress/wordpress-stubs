<?php


/**
 * Deletes all expired transients.
 *
 * Note that this function won't do anything if an external object cache is in use.
 *
 * The multi-table delete syntax is used to delete the transient record
 * from table a, and the corresponding transient_timeout record from table b.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @since 4.9.0
 *
 * @param bool $force_db Optional. Force cleanup to run against the database even when an external object cache is used.
 * @phpstan-return void
 */
function delete_expired_transients($force_db = \false)
{
}