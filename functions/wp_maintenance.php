<?php


/**
 * Die with a maintenance message when conditions are met.
 *
 * Checks for a file in the WordPress root directory named ".maintenance".
 * This file will contain the variable $upgrading, set to the time the file
 * was created. If the file was created less than 10 minutes ago, WordPress
 * enters maintenance mode and displays a message.
 *
 * The default message can be replaced by using a drop-in (maintenance.php in
 * the wp-content directory).
 *
 * @since 3.0.0
 * @access private
 *
 * @global int $upgrading the unix timestamp marking when upgrading WordPress began.
 */
function wp_maintenance()
{
}