<?php


/**
 * REST API: WP_REST_Attachments_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core controller used to access attachments via the REST API.
 *
 * @since 4.7.0
 *
 * @see WP_REST_Posts_Controller
 */
class WP_REST_Attachments_Controller extends \WP_REST_Posts_Controller
{
    /**
     * Whether the controller supports batching.
     *
     * @since 5.9.0
     * @var false
     */
    protected $allow_batch = \false;
    /**
     * Registers the routes for attachments.
     *
     * @since 5.3.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Determines the allowed query_vars for a get_items() response and
     * prepares for WP_Query.
     *
     * @since 4.7.0
     *
     * @param array           $prepared_args Optional. Array of prepared arguments. Default empty array.
     * @param WP_REST_Request $request       Optional. Request to prepare items for.
     * @return array Array of query arguments.
     */
    protected function prepare_items_query($prepared_args = array(), $request = \null)
    {
    }
    /**
     * Checks if a given request has access to create an attachment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error Boolean true if the attachment may be created, or a WP_Error if not.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates a single attachment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Inserts the attachment post in the database. Does not update the attachment meta.
     *
     * @since 5.3.0
     *
     * @param WP_REST_Request $request
     * @return array|WP_Error
     */
    protected function insert_attachment($request)
    {
    }
    /**
     * Updates a single attachment.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Performs post processing on an attachment.
     *
     * @since 5.3.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure.
     */
    public function post_process_item($request)
    {
    }
    /**
     * Checks if a given request can perform post processing on an attachment.
     *
     * @since 5.3.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
     */
    public function post_process_item_permissions_check($request)
    {
    }
    /**
     * Checks if a given request has access to editing media.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function edit_media_item_permissions_check($request)
    {
    }
    /**
     * Applies edits to a media item and creates a new attachment record.
     *
     * @since 5.5.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure.
     */
    public function edit_media_item($request)
    {
    }
    /**
     * Prepares a single attachment for create or update.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Request object.
     * @return stdClass|WP_Error Post object.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepares a single attachment output for response.
     *
     * @since 4.7.0
     * @since 5.9.0 Renamed `$post` to `$item` to match parent class for PHP 8 named parameter support.
     *
     * @param WP_Post         $item    Attachment object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response Response object.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Retrieves the attachment's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array Item schema as an array.
     */
    public function get_item_schema()
    {
    }
    /**
     * Handles an upload via raw POST data.
     *
     * @since 4.7.0
     *
     * @param string $data    Supplied file data.
     * @param array  $headers HTTP headers from the request.
     * @return array|WP_Error Data from wp_handle_sideload().
     */
    protected function upload_from_data($data, $headers)
    {
    }
    /**
     * Parses filename from a Content-Disposition header value.
     *
     * As per RFC6266:
     *
     *     content-disposition = "Content-Disposition" ":"
     *                            disposition-type *( ";" disposition-parm )
     *
     *     disposition-type    = "inline" | "attachment" | disp-ext-type
     *                         ; case-insensitive
     *     disp-ext-type       = token
     *
     *     disposition-parm    = filename-parm | disp-ext-parm
     *
     *     filename-parm       = "filename" "=" value
     *                         | "filename*" "=" ext-value
     *
     *     disp-ext-parm       = token "=" value
     *                         | ext-token "=" ext-value
     *     ext-token           = <the characters in token, followed by "*">
     *
     * @since 4.7.0
     *
     * @link https://tools.ietf.org/html/rfc2388
     * @link https://tools.ietf.org/html/rfc6266
     *
     * @param string[] $disposition_header List of Content-Disposition header values.
     * @return string|null Filename if available, or null if not found.
     */
    public static function get_filename_from_disposition($disposition_header)
    {
    }
    /**
     * Retrieves the query params for collections of attachments.
     *
     * @since 4.7.0
     *
     * @return array Query parameters for the attachment collection as an array.
     */
    public function get_collection_params()
    {
    }
    /**
     * Handles an upload via multipart/form-data ($_FILES).
     *
     * @since 4.7.0
     *
     * @param array $files   Data from the `$_FILES` superglobal.
     * @param array $headers HTTP headers from the request.
     * @return array|WP_Error Data from wp_handle_upload().
     */
    protected function upload_from_file($files, $headers)
    {
    }
    /**
     * Retrieves the supported media types.
     *
     * Media types are considered the MIME type category.
     *
     * @since 4.7.0
     *
     * @return array Array of supported media types.
     */
    protected function get_media_types()
    {
    }
    /**
     * Determine if uploaded file exceeds space quota on multisite.
     *
     * Replicates check_upload_size().
     *
     * @since 4.9.8
     *
     * @param array $file $_FILES array for a given file.
     * @return true|WP_Error True if can upload, error for errors.
     */
    protected function check_upload_size($file)
    {
    }
    /**
     * Gets the request args for the edit item route.
     *
     * @since 5.5.0
     *
     * @return array
     */
    protected function get_edit_media_item_args()
    {
    }
}