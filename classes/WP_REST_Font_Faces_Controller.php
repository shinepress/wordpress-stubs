<?php


/**
 * Class to access font faces through the REST API.
 */
class WP_REST_Font_Faces_Controller extends \WP_REST_Posts_Controller
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
     * Registers the routes for posts.
     *
     * @since 6.5.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to font faces.
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
     * Checks if a given request has access to a font face.
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
     * Validates settings when creating a font face.
     *
     * @since 6.5.0
     *
     * @param string          $value   Encoded JSON string of font face settings.
     * @param WP_REST_Request $request Request object.
     * @return true|WP_Error True if the settings are valid, otherwise a WP_Error object.
     */
    public function validate_create_font_face_settings($value, $request)
    {
    }
    /**
     * Sanitizes the font face settings when creating a font face.
     *
     * @since 6.5.0
     *
     * @param string $value Encoded JSON string of font face settings.
     * @return array Decoded and sanitized array of font face settings.
     */
    public function sanitize_font_face_settings($value)
    {
    }
    /**
     * Retrieves a collection of font faces within the parent font family.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Retrieves a single font face within the parent font family.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Creates a font face for the parent font family.
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
     * Deletes a single font face.
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
     * Prepares a single font face output for response.
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
     * Retrieves the query params for the font face collection.
     *
     * @since 6.5.0
     *
     * @return array Collection parameters.
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the params used when creating a new font face.
     *
     * @since 6.5.0
     *
     * @return array Font face create arguments.
     */
    public function get_create_params()
    {
    }
    /**
     * Get the parent font family, if the ID is valid.
     *
     * @since 6.5.0
     *
     * @param int $font_family_id Supplied ID.
     * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise.
     */
    protected function get_parent_font_family_post($font_family_id)
    {
    }
    /**
     * Prepares links for the request.
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
     * Prepares a single font face post for creation.
     *
     * @since 6.5.0
     *
     * @param WP_REST_Request $request Request object.
     * @return stdClass Post object.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Sanitizes a single src value for a font face.
     *
     * @since 6.5.0
     *
     * @param string $value Font face src that is a URL or the key for a $_FILES array item.
     * @return string Sanitized value.
     */
    protected function sanitize_src($value)
    {
    }
    /**
     * Handles the upload of a font file using wp_handle_upload().
     *
     * @since 6.5.0
     *
     * @param array $file Single file item from $_FILES.
     * @return array|WP_Error Array containing uploaded file attributes on success, or WP_Error object on failure.
     */
    protected function handle_font_file_upload($file)
    {
    }
    /**
     * Handles file upload error.
     *
     * @since 6.5.0
     *
     * @param array  $file    File upload data.
     * @param string $message Error message from wp_handle_upload().
     * @return WP_Error WP_Error object.
     */
    public function handle_font_file_upload_error($file, $message)
    {
    }
    /**
     * Returns relative path to an uploaded font file.
     *
     * The path is relative to the current fonts directory.
     *
     * @since 6.5.0
     * @access private
     *
     * @param string $path Full path to the file.
     * @return string Relative path on success, unchanged path on failure.
     */
    protected function relative_fonts_path($path)
    {
    }
    /**
     * Gets the font face's settings from the post.
     *
     * @since 6.5.0
     *
     * @param WP_Post $post Font face post object.
     * @return array Font face settings array.
     */
    protected function get_settings_from_post($post)
    {
    }
}