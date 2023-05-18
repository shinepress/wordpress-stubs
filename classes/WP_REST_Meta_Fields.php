<?php


/**
 * REST API: WP_REST_Meta_Fields class
 *
 * @package WordPress
 * @subpackage REST_API
 * @since 4.7.0
 */
/**
 * Core class to manage meta values for an object via the REST API.
 *
 * @since 4.7.0
 */
abstract class WP_REST_Meta_Fields
{
    /**
     * Retrieves the object meta type.
     *
     * @since 4.7.0
     *
     * @return string One of 'post', 'comment', 'term', 'user', or anything
     *                else supported by `_get_meta_table()`.
     */
    abstract protected function get_meta_type();
    /**
     * Retrieves the object meta subtype.
     *
     * @since 4.9.8
     *
     * @return string Subtype for the meta type, or empty string if no specific subtype.
     */
    protected function get_meta_subtype()
    {
    }
    /**
     * Retrieves the object type for register_rest_field().
     *
     * @since 4.7.0
     *
     * @return string The REST field type, such as post type name, taxonomy name, 'comment', or `user`.
     */
    abstract protected function get_rest_field_type();
    /**
     * Registers the meta field.
     *
     * @since 4.7.0
     *
     * @see register_rest_field()
     */
    public function register_field()
    {
    }
    /**
     * Retrieves the meta field value.
     *
     * @since 4.7.0
     *
     * @param int             $object_id Object ID to fetch meta for.
     * @param WP_REST_Request $request   Full details about the request.
     * @return WP_Error|object Object containing the meta values by name, otherwise WP_Error object.
     */
    public function get_value($object_id, $request)
    {
    }
    /**
     * Prepares a meta value for a response.
     *
     * This is required because some native types cannot be stored correctly
     * in the database, such as booleans. We need to cast back to the relevant
     * type before passing back to JSON.
     *
     * @since 4.7.0
     *
     * @param mixed           $value   Meta value to prepare.
     * @param WP_REST_Request $request Current request object.
     * @param array           $args    Options for the field.
     * @return mixed Prepared value.
     */
    protected function prepare_value_for_response($value, $request, $args)
    {
    }
    /**
     * Updates meta values.
     *
     * @since 4.7.0
     *
     * @param array           $meta      Array of meta parsed from the request.
     * @param int             $object_id Object ID to fetch meta for.
     * @return WP_Error|null WP_Error if one occurs, null on success.
     */
    public function update_value($meta, $object_id)
    {
    }
    /**
     * Deletes a meta value for an object.
     *
     * @since 4.7.0
     *
     * @param int    $object_id Object ID the field belongs to.
     * @param string $meta_key  Key for the field.
     * @param string $name      Name for the field that is exposed in the REST API.
     * @return bool|WP_Error True if meta field is deleted, WP_Error otherwise.
     */
    protected function delete_meta_value($object_id, $meta_key, $name)
    {
    }
    /**
     * Updates multiple meta values for an object.
     *
     * Alters the list of values in the database to match the list of provided values.
     *
     * @since 4.7.0
     *
     * @param int    $object_id Object ID to update.
     * @param string $meta_key  Key for the custom field.
     * @param string $name      Name for the field that is exposed in the REST API.
     * @param array  $values    List of values to update to.
     * @return bool|WP_Error True if meta fields are updated, WP_Error otherwise.
     */
    protected function update_multi_meta_value($object_id, $meta_key, $name, $values)
    {
    }
    /**
     * Updates a meta value for an object.
     *
     * @since 4.7.0
     *
     * @param int    $object_id Object ID to update.
     * @param string $meta_key  Key for the custom field.
     * @param string $name      Name for the field that is exposed in the REST API.
     * @param mixed  $value     Updated value.
     * @return bool|WP_Error True if the meta field was updated, WP_Error otherwise.
     */
    protected function update_meta_value($object_id, $meta_key, $name, $value)
    {
    }
    /**
     * Retrieves all the registered meta fields.
     *
     * @since 4.7.0
     *
     * @return array Registered fields.
     */
    protected function get_registered_fields()
    {
    }
    /**
     * Retrieves the object's meta schema, conforming to JSON Schema.
     *
     * @since 4.7.0
     *
     * @return array Field schema data.
     */
    public function get_field_schema()
    {
    }
    /**
     * Prepares a meta value for output.
     *
     * Default preparation for meta fields. Override by passing the
     * `prepare_callback` in your `show_in_rest` options.
     *
     * @since 4.7.0
     *
     * @param mixed           $value   Meta value from the database.
     * @param WP_REST_Request $request Request object.
     * @param array           $args    REST-specific options for the meta key.
     * @return mixed Value prepared for output. If a non-JsonSerializable object, null.
     */
    public static function prepare_value($value, $request, $args)
    {
    }
    /**
     * Check the 'meta' value of a request is an associative array.
     *
     * @since 4.7.0
     *
     * @param  mixed           $value   The meta value submitted in the request.
     * @param  WP_REST_Request $request Full details about the request.
     * @param  string          $param   The parameter name.
     * @return WP_Error|string The meta array, if valid, otherwise an error.
     */
    public function check_meta_is_array($value, $request, $param)
    {
    }
}