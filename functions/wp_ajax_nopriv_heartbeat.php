<?php


/**
 * Administration API: Core Ajax handlers
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.1.0
 */
//
// No-privilege Ajax handlers.
//
/**
 * Ajax handler for the Heartbeat API in
 * the no-privilege context.
 *
 * Runs when the user is not logged in.
 *
 * @since 3.6.0
 */
function wp_ajax_nopriv_heartbeat()
{
}