<?php


/**
 * REST API: WP_REST_Edit_Site_Export_Controller class
 *
 * @package    WordPress
 * @subpackage REST_API
 */
/**
 * Controller which provides REST endpoint for exporting current templates
 * and template parts.
 *
 * @since 5.9.0
 *
 * @see WP_REST_Controller
 */
class WP_REST_Edit_Site_Export_Controller extends \WP_REST_Controller
{
    /**
     * Constructor.
     *
     * @since 5.9.0
     */
    public function __construct()
    {
    }
    /**
     * Registers the site export route.
     *
     * @since 5.9.0
     */
    public function register_routes()
    {
    }
    /**
     * Checks whether a given request has permission to export.
     *
     * @since 5.9.0
     *
     * @return WP_Error|true True if the request has access, or WP_Error object.
     */
    public function permissions_check()
    {
    }
    /**
     * Output a ZIP file with an export of the current templates
     * and template parts from the site editor, and close the connection.
     *
     * @since 5.9.0
     *
     * @return WP_Error|void
     */
    public function export()
    {
    }
}