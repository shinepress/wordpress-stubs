<?php


/**
 * Handles site health checks on loopback requests via AJAX.
 *
 * @since 5.2.0
 * @deprecated 5.6.0 Use WP_REST_Site_Health_Controller::test_loopback_requests()
 * @see WP_REST_Site_Health_Controller::test_loopback_requests()
 * @phpstan-return never
 */
function wp_ajax_health_check_loopback_requests()
{
}