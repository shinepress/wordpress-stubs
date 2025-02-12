<?php


/**
 * Font Families Controller class.
 *
 * @since 6.5.0
 */
class WP_REST_Font_Families_Controller extends \WP_REST_Posts_Controller
{
    /**
     * The latest version of theme.json schema supported by the controller.
     *
     * @since 6.5.0
     * @var int
     */
    const LATEST_THEME_JSON_VERSION_SUPPORTED = 3;
    /**
     * Whether the controller supports batching.
     *
     * @since 6.5.0
     * @var false
     */
    protected $allow_batch = \false;
    /**
     * Checks if a given request has access to font families.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Checks if a given request has access to a font family.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Validates settings when creating or updating a font family.
     *
     * @since 6.5.0
     *
     * @param string          $value   Encoded JSON string of font family settings.
     * @param WP_REST_Request $request Request object.
     * @return true|WP_Error True if the settings are valid, otherwise a WP_Error object.
     */
    public function validate_font_family_settings($value, $request)
    {
    }
    /**
     * Sanitizes the font family settings when creating or updating a font family.
     *
     * @since 6.5.0
     *
     * @param string $value Encoded JSON string of font family settings.
     * @return array Decoded array of font family settings.
     */
    public function sanitize_font_family_settings($value)
    {
    }
    /**
     * Creates a single font family.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Deletes a single font family.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepares a single font family output for response.
     *
     * @since 6.5.0
     *
     * @param WP_Post         $item    Post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the post's schema, conforming to JSON Schema.
     *
     * @since 6.5.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the item's schema for display / public consumption purposes.
     *
     * @since 6.5.0
     *
     * @return array Public item schema data.
     */
    public function get_public_item_schema()
    {
    }
    /**
     * Retrieves the query params for the font family collection.
     *
     * @since 6.5.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the arguments used when creating or updating a font family.
     *
     * @since 6.5.0
     *
     * @return array Font family create/edit arguments.
     */
    public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
    {
    }
    /**
     * Get the child font face post IDs.
     *
     * @since 6.5.0
     *
     * @param int $font_family_id Font family post ID.
     * @return int[] Array of child font face post IDs.
     */
    protected function get_font_face_ids($font_family_id)
    {
    }
    /**
     * Prepares font family links for the request.
     *
     * @since 6.5.0
     *
     * @param WP_Post $post Post object.
     * @return array Links for the given post.
     */
    protected function prepare_links($post)
    {
    }
    /**
     * Prepares child font face links for the request.
     *
     * @param int $font_family_id Font family post ID.
     * @return array Links for the child font face posts.
     */
    protected function prepare_font_face_links($font_family_id)
    {
    }
    /**
     * Prepares a single font family post for create or update.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Request object.
     * @return stdClass|WP_Error Post object or WP_Error.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Gets the font family's settings from the post.
     *
     * @since 6.5.0
     *
     * @param WP_Post $post Font family post object.
     * @return array Font family settings array.
     */
    protected function get_settings_from_post($post)
    {
    }
}