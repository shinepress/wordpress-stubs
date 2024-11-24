<?php


/**
 * Handles site health check to get directories and database sizes via AJAX.
 *
 * @since 5.2.0
 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::get_directory_sizes()
 * @see WP_REST_Site_Health_Controller::get_directory_sizes()
 * @phpstan-return never
 */
function wp_ajax_health_check_get_sizes()
{
}