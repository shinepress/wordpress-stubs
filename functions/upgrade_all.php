<?php


/**
 * Functions to be called in installation and upgrade scripts.
 *
 * Contains conditional checks to determine which upgrade scripts to run,
 * based on database version and WP version being updated-to.
 *
 * @ignore
 * @since 1.0.1
 *
 * @global int $wp_current_db_version The old (current) database version.
 * @global int $wp_db_version         The new database version.
 * @phpstan-return void
 */
function upgrade_all()
{
}