<?php


/**
 * REST API: WP_REST_Site_Health_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 5.6.0
 */
/**
 * Core class for interacting with Site Health tests.
 *
 * @since 5.6.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Site_Health_Controller extends \WP_REST_Controller
{
    /**
     * An instance of the site health class.
     *
     * @since 5.6.0
     *
     * @var WP_Site_Health
     */
    private $site_health;
    /**
     * Site Health controller constructor.
     *
     * @since 5.6.0
     *
     * @param WP_Site_Health $site_health An instance of the site health class.
     */
    public function __construct($site_health)
    {
    }
    /**
     * Registers API routes.
     *
     * @since 5.6.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Validates if the current user can request this REST endpoint.
     *
     * @since 5.6.0
     *
     * @param string $check The endpoint check being ran.
     * @return bool
     */
    protected function validate_request_permission($check)
    {
    }
    /**
     * Checks if background updates work as expected.
     *
     * @since 5.6.0
     *
     * @return array
     */
    public function test_background_updates()
    {
    }
    /**
     * Checks that the site can reach the WordPress.org API.
     *
     * @since 5.6.0
     *
     * @return array
     */
    public function test_dotorg_communication()
    {
    }
    /**
     * Checks that loopbacks can be performed.
     *
     * @since 5.6.0
     *
     * @return array
     */
    public function test_loopback_requests()
    {
    }
    /**
     * Checks that the site's frontend can be accessed over HTTPS.
     *
     * @since 5.7.0
     *
     * @return array
     */
    public function test_https_status()
    {
    }
    /**
     * Checks that the authorization header is valid.
     *
     * @since 5.6.0
     *
     * @return array
     */
    public function test_authorization_header()
    {
    }
    /**
     * Gets the current directory sizes for this install.
     *
     * @since 5.6.0
     *
     * @return array|WP_Error
     */
    public function get_directory_sizes()
    {
    }
    /**
     * Loads the admin textdomain for Site Health tests.
     *
     * The {@see WP_Site_Health} class is defined in WP-Admin, while the REST API operates in a front-end context.
     * This means that the translations for Site Health won't be loaded by default in {@see load_default_textdomain()}.
     *
     * @since 5.6.0
     */
    protected function load_admin_textdomain()
    {
    }
    /**
     * Gets the schema for each site health test.
     *
     * @since 5.6.0
     *
     * @return array The test schema.
     */
    public function get_item_schema()
    {
    }
}