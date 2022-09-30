<?php


/**
 * REST API: WP_REST_Controller class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core base controller for managing and interacting with REST API items.
 *
 * @since 4.7.0
 */
abstract class WP_REST_Controller
{
    /**
     * The namespace of this controller's route.
     *
     * @since 4.7.0
     * @var string
     */
    protected $namespace;
    /**
     * The base of this controller's route.
     *
     * @since 4.7.0
     * @var string
     */
    protected $rest_base;
    /**
     * Cached results of get_item_schema.
     *
     * @since 5.3.0
     * @var array
     */
    protected $schema;
    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes()
    {
    }
    /**
     * Checks if a given request has access to get items.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Retrieves a collection of items.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if a given request has access to get a specific item.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise.
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Retrieves one item from the collection.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function get_item($request)
    {
    }
    /**
     * Checks if a given request has access to create items.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise.
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Creates one item from the collection.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function create_item($request)
    {
    }
    /**
     * Checks if a given request has access to update a specific item.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise.
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates one item from the collection.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function update_item($request)
    {
    }
    /**
     * Checks if a given request has access to delete a specific item.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise.
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Deletes one item from the collection.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepares one item for create or update operation.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Request $request Request object.
     * @return object|WP_Error The prepared item, or WP_Error object on failure.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Prepares the item for the REST response.
     *
     * @since 4.7.0
     *
     * @param mixed           $item    WordPress representation of the item.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepares a response for insertion into a collection.
     *
     * @since 4.7.0
     *
     * @param WP_REST_Response $response Response object.
     * @return array|mixed Response data, ready for insertion into collection data.
     */
    public function prepare_response_for_collection($response)
    {
    }
    /**
     * Filters a response based on the context defined in the schema.
     *
     * @since 4.7.0
     *
     * @param array  $data    Response data to fiter.
     * @param string $context Context defined in the schema.
     * @return array Filtered response.
     */
    public function filter_response_by_context($data, $context)
    {
    }
    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array Item schema data.
     */
    public function get_item_schema()
    {
    }
    /**
     * Retrieves the item's schema for display / public consumption purposes.
     *
     * @since 4.7.0
     *
     * @return array Public item schema data.
     */
    public function get_public_item_schema()
    {
    }
    /**
     * Retrieves the query params for the collections.
     *
     * @since 4.7.0
     *
     * @return array Query parameters for the collection.
     */
    public function get_collection_params()
    {
    }
    /**
     * Retrieves the magical context param.
     *
     * Ensures consistent descriptions between endpoints, and populates enum from schema.
     *
     * @since 4.7.0
     *
     * @param array $args Optional. Additional arguments for context parameter. Default empty array.
     * @return array Context parameter details.
     */
    public function get_context_param($args = array())
    {
    }
    /**
     * Adds the values from additional fields to a data object.
     *
     * @since 4.7.0
     *
     * @param array           $prepared Prepared response array.
     * @param WP_REST_Request $request  Full details about the request.
     * @return array Modified data object with additional fields.
     */
    protected function add_additional_fields_to_object($prepared, $request)
    {
    }
    /**
     * Updates the values of additional fields added to a data object.
     *
     * @since 4.7.0
     *
     * @param object          $object  Data model like WP_Term or WP_Post.
     * @param WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error True on success, WP_Error object if a field cannot be updated.
     */
    protected function update_additional_fields_for_object($object, $request)
    {
    }
    /**
     * Adds the schema from additional fields to a schema array.
     *
     * The type of object is inferred from the passed schema.
     *
     * @since 4.7.0
     *
     * @param array $schema Schema array.
     * @return array Modified Schema array.
     */
    protected function add_additional_fields_schema($schema)
    {
    }
    /**
     * Retrieves all of the registered additional fields for a given object-type.
     *
     * @since 4.7.0
     *
     * @param string $object_type Optional. The object type.
     * @return array Registered additional fields (if any), empty array if none or if the object type could
     *               not be inferred.
     */
    protected function get_additional_fields($object_type = \null)
    {
    }
    /**
     * Retrieves the object type this controller is responsible for managing.
     *
     * @since 4.7.0
     *
     * @return string Object type for the controller.
     */
    protected function get_object_type()
    {
    }
    /**
     * Gets an array of fields to be included on the response.
     *
     * Included fields are based on item schema and `_fields=` request argument.
     *
     * @since 4.9.6
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array Fields to be included in the response.
     */
    public function get_fields_for_response($request)
    {
    }
    /**
     * Retrieves an array of endpoint arguments from the item schema for the controller.
     *
     * @since 4.7.0
     *
     * @param string $method Optional. HTTP method of the request. The arguments for `CREATABLE` requests are
     *                       checked for required values and may fall-back to a given default, this is not done
     *                       on `EDITABLE` requests. Default WP_REST_Server::CREATABLE.
     * @return array Endpoint arguments.
     */
    public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
    {
    }
    /**
     * Sanitizes the slug value.
     *
     * @since 4.7.0
     *
     * @internal We can't use sanitize_title() directly, as the second
     * parameter is the fallback title, which would end up being set to the
     * request object.
     *
     * @see https://github.com/WP-API/WP-API/issues/1585
     *
     * @todo Remove this in favour of https://core.trac.wordpress.org/ticket/34659
     *
     * @param string $slug Slug value passed in request.
     * @return string Sanitized value for the slug.
     */
    public function sanitize_slug($slug)
    {
    }
}