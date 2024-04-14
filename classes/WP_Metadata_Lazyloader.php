<?php


/**
 * Meta API: WP_Metadata_Lazyloader class
 *
 * @package WordPress
 * @subpackage Meta
 * @since 4.5.0
 */
/**
 * Core class used for lazy-loading object metadata.
 *
 * When loading many objects of a given type, such as posts in a WP_Query loop, it often makes
 * sense to prime various metadata caches at the beginning of the loop. This means fetching all
 * relevant metadata with a single database query, a technique that has the potential to improve
 * performance dramatically in some cases.
 *
 * In cases where the given metadata may not even be used in the loop, we can improve performance
 * even more by only priming the metadata cache for affected items the first time a piece of metadata
 * is requested - ie, by lazy-loading it. So, for example, comment meta may not be loaded into the
 * cache in the comments section of a post until the first time get_comment_meta() is called in the
 * context of the comment loop.
 *
 * WP uses the WP_Metadata_Lazyloader class to queue objects for metadata cache priming. The class
 * then detects the relevant get_*_meta() function call, and queries the metadata of all queued objects.
 *
 * Do not access this class directly. Use the wp_metadata_lazyloader() function.
 *
 * @since 4.5.0
 */
#[\AllowDynamicProperties]
class WP_Metadata_Lazyloader
{
    /**
     * Pending objects queue.
     *
     * @since 4.5.0
     * @var array
     */
    protected $pending_objects;
    /**
     * Settings for supported object types.
     *
     * @since 4.5.0
     * @var array
     */
    protected $settings = array();
    /**
     * Constructor.
     *
     * @since 4.5.0
     */
    public function __construct()
    {
    }
    /**
     * Adds objects to the metadata lazy-load queue.
     *
     * @since 4.5.0
     *
     * @param string $object_type Type of object whose meta is to be lazy-loaded. Accepts 'term' or 'comment'.
     * @param array  $object_ids  Array of object IDs.
     * @return void|WP_Error WP_Error on failure.
     * @phpstan-param 'term'|'comment' $object_type
     */
    public function queue_objects($object_type, $object_ids)
    {
    }
    /**
     * Resets lazy-load queue for a given object type.
     *
     * @since 4.5.0
     *
     * @param string $object_type Object type. Accepts 'comment' or 'term'.
     * @return void|WP_Error WP_Error on failure.
     * @phpstan-param 'comment'|'term' $object_type
     */
    public function reset_queue($object_type)
    {
    }
    /**
     * Lazy-loads term meta for queued terms.
     *
     * This method is public so that it can be used as a filter callback. As a rule, there
     * is no need to invoke it directly.
     *
     * @since 4.5.0
     * @deprecated 6.3.0 Use WP_Metadata_Lazyloader::lazyload_meta_callback() instead.
     *
     * @param mixed $check The `$check` param passed from the 'get_term_metadata' hook.
     * @return mixed In order not to short-circuit `get_metadata()`. Generally, this is `null`, but it could be
     *               another value if filtered by a plugin.
     */
    public function lazyload_term_meta($check)
    {
    }
    /**
     * Lazy-loads comment meta for queued comments.
     *
     * This method is public so that it can be used as a filter callback. As a rule, there is no need to invoke it
     * directly, from either inside or outside the `WP_Query` object.
     *
     * @since 4.5.0
     * @deprecated 6.3.0 Use WP_Metadata_Lazyloader::lazyload_meta_callback() instead.
     *
     * @param mixed $check The `$check` param passed from the {@see 'get_comment_metadata'} hook.
     * @return mixed The original value of `$check`, so as not to short-circuit `get_comment_metadata()`.
     */
    public function lazyload_comment_meta($check)
    {
    }
    /**
     * Lazy-loads meta for queued objects.
     *
     * This method is public so that it can be used as a filter callback. As a rule, there
     * is no need to invoke it directly.
     *
     * @since 6.3.0
     *
     * @param mixed  $check     The `$check` param passed from the 'get_*_metadata' hook.
     * @param int    $object_id ID of the object metadata is for.
     * @param string $meta_key  Unused.
     * @param bool   $single    Unused.
     * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
     *                          or any other object type with an associated meta table.
     * @return mixed In order not to short-circuit `get_metadata()`. Generally, this is `null`, but it could be
     *               another value if filtered by a plugin.
     */
    public function lazyload_meta_callback($check, $object_id, $meta_key, $single, $meta_type)
    {
    }
}