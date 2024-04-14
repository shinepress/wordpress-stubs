<?php


/**
 * Customize API: WP_Customize_Selective_Refresh class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.5.0
 */
/**
 * Core Customizer class for implementing selective refresh.
 *
 * @since 4.5.0
 */
final class WP_Customize_Selective_Refresh
{
    /**
     * Query var used in requests to render partials.
     *
     * @since 4.5.0
     */
    const RENDER_QUERY_VAR = 'wp_customize_render_partials';
    /**
     * Customize manager.
     *
     * @since 4.5.0
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * Plugin bootstrap for Partial Refresh functionality.
     *
     * @since 4.5.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     */
    public function __construct(\WP_Customize_Manager $manager)
    {
    }
    /**
     * Retrieves the registered partials.
     *
     * @since 4.5.0
     *
     * @return array Partials.
     */
    public function partials()
    {
    }
    /**
     * Adds a partial.
     *
     * @since 4.5.0
     *
     * @see WP_Customize_Partial::__construct()
     *
     * @param WP_Customize_Partial|string $id   Customize Partial object, or Partial ID.
     * @param array                       $args Optional. Array of properties for the new Partials object.
     *                                          See WP_Customize_Partial::__construct() for information
     *                                          on accepted arguments. Default empty array.
     * @return WP_Customize_Partial The instance of the partial that was added.
     * @phpstan-param array{
     *   type?: string,
     *   selector?: string,
     *   settings?: string[],
     *   primary_setting?: string,
     *   capability?: string,
     *   render_callback?: callable,
     *   container_inclusive?: bool,
     *   fallback_refresh?: bool,
     * } $args See WP_Customize_Partial::__construct()
     */
    public function add_partial($id, $args = array())
    {
    }
    /**
     * Retrieves a partial.
     *
     * @since 4.5.0
     *
     * @param string $id Customize Partial ID.
     * @return WP_Customize_Partial|null The partial, if set. Otherwise null.
     */
    public function get_partial($id)
    {
    }
    /**
     * Removes a partial.
     *
     * @since 4.5.0
     *
     * @param string $id Customize Partial ID.
     */
    public function remove_partial($id)
    {
    }
    /**
     * Initializes the Customizer preview.
     *
     * @since 4.5.0
     */
    public function init_preview()
    {
    }
    /**
     * Enqueues preview scripts.
     *
     * @since 4.5.0
     */
    public function enqueue_preview_scripts()
    {
    }
    /**
     * Exports data in preview after it has finished rendering so that partials can be added at runtime.
     *
     * @since 4.5.0
     */
    public function export_preview_data()
    {
    }
    /**
     * Registers dynamically-created partials.
     *
     * @since 4.5.0
     *
     * @see WP_Customize_Manager::add_dynamic_settings()
     *
     * @param string[] $partial_ids Array of the partial IDs to add.
     * @return WP_Customize_Partial[] Array of added WP_Customize_Partial instances.
     */
    public function add_dynamic_partials($partial_ids)
    {
    }
    /**
     * Checks whether the request is for rendering partials.
     *
     * Note that this will not consider whether the request is authorized or valid,
     * just that essentially the route is a match.
     *
     * @since 4.5.0
     *
     * @return bool Whether the request is for rendering partials.
     */
    public function is_render_partials_request()
    {
    }
    /**
     * Handles PHP errors triggered during rendering the partials.
     *
     * These errors will be relayed back to the client in the Ajax response.
     *
     * @since 4.5.0
     *
     * @param int    $errno   Error number.
     * @param string $errstr  Error string.
     * @param string $errfile Error file.
     * @param string $errline Error line.
     * @return true Always true.
     */
    public function handle_error($errno, $errstr, $errfile = \null, $errline = \null)
    {
    }
    /**
     * Handles the Ajax request to return the rendered partials for the requested placements.
     *
     * @since 4.5.0
     * @phpstan-return void
     */
    public function handle_render_partials_request()
    {
    }
}