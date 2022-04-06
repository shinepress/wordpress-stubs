<?php


/**
 * Dependencies API: WP_Dependencies base class
 *
 * @since 2.6.0
 *
 * @package WordPress
 * @subpackage Dependencies
 */
/**
 * Core base class extended to register items.
 *
 * @since 2.6.0
 *
 * @see _WP_Dependency
 */
class WP_Dependencies
{
    /**
     * An array of all registered dependencies keyed by handle.
     *
     * @since 2.6.8
     *
     * @var _WP_Dependency[]
     */
    public $registered = array();
    /**
     * An array of handles of queued dependencies.
     *
     * @since 2.6.8
     *
     * @var string[]
     */
    public $queue = array();
    /**
     * An array of handles of dependencies to queue.
     *
     * @since 2.6.0
     *
     * @var string[]
     */
    public $to_do = array();
    /**
     * An array of handles of dependencies already queued.
     *
     * @since 2.6.0
     *
     * @var string[]
     */
    public $done = array();
    /**
     * An array of additional arguments passed when a handle is registered.
     *
     * Arguments are appended to the item query string.
     *
     * @since 2.6.0
     *
     * @var array
     */
    public $args = array();
    /**
     * An array of dependency groups to enqueue.
     *
     * Each entry is keyed by handle and represents the integer group level or boolean
     * false if the handle has no group.
     *
     * @since 2.8.0
     *
     * @var (int|false)[]
     */
    public $groups = array();
    /**
     * A handle group to enqueue.
     *
     * @since 2.8.0
     *
     * @deprecated 4.5.0
     * @var int
     */
    public $group = 0;
    /**
     * Cached lookup array of flattened queued items and dependencies.
     *
     * @since 5.4.0
     *
     * @var array
     */
    private $all_queued_deps;
    /**
     * List of assets enqueued before details were registered.
     *
     * @since 5.9.0
     *
     * @var array
     */
    private $queued_before_register = array();
    /**
     * Processes the items and dependencies.
     *
     * Processes the items passed to it or the queue, and their dependencies.
     *
     * @since 2.6.0
     * @since 2.8.0 Added the `$group` parameter.
     *
     * @param string|string[]|false $handles Optional. Items to be processed: queue (false),
     *                                       single item (string), or multiple items (array of strings).
     *                                       Default false.
     * @param int|false             $group   Optional. Group level: level (int), no group (false).
     * @return string[] Array of handles of items that have been processed.
     */
    public function do_items($handles = \false, $group = \false)
    {
    }
    /**
     * Processes a dependency.
     *
     * @since 2.6.0
     * @since 5.5.0 Added the `$group` parameter.
     *
     * @param string    $handle Name of the item. Should be unique.
     * @param int|false $group  Optional. Group level: level (int), no group (false).
     *                          Default false.
     * @return bool True on success, false if not set.
     */
    public function do_item($handle, $group = \false)
    {
    }
    /**
     * Determines dependencies.
     *
     * Recursively builds an array of items to process taking
     * dependencies into account. Does NOT catch infinite loops.
     *
     * @since 2.1.0
     * @since 2.6.0 Moved from `WP_Scripts`.
     * @since 2.8.0 Added the `$group` parameter.
     *
     * @param string|string[] $handles   Item handle (string) or item handles (array of strings).
     * @param bool            $recursion Optional. Internal flag that function is calling itself.
     *                                   Default false.
     * @param int|false       $group     Optional. Group level: level (int), no group (false).
     *                                   Default false.
     * @return bool True on success, false on failure.
     */
    public function all_deps($handles, $recursion = \false, $group = \false)
    {
    }
    /**
     * Register an item.
     *
     * Registers the item if no item of that name already exists.
     *
     * @since 2.1.0
     * @since 2.6.0 Moved from `WP_Scripts`.
     *
     * @param string           $handle Name of the item. Should be unique.
     * @param string|bool      $src    Full URL of the item, or path of the item relative
     *                                 to the WordPress root directory. If source is set to false,
     *                                 item is an alias of other items it depends on.
     * @param string[]         $deps   Optional. An array of registered item handles this item depends on.
     *                                 Default empty array.
     * @param string|bool|null $ver    Optional. String specifying item version number, if it has one,
     *                                 which is added to the URL as a query string for cache busting purposes.
     *                                 If version is set to false, a version number is automatically added
     *                                 equal to current installed WordPress version.
     *                                 If set to null, no version is added.
     * @param mixed            $args   Optional. Custom property of the item. NOT the class property $args.
     *                                 Examples: $media, $in_footer.
     * @return bool Whether the item has been registered. True on success, false on failure.
     */
    public function add($handle, $src, $deps = array(), $ver = \false, $args = \null)
    {
    }
    /**
     * Add extra item data.
     *
     * Adds data to a registered item.
     *
     * @since 2.6.0
     *
     * @param string $handle Name of the item. Should be unique.
     * @param string $key    The data key.
     * @param mixed  $value  The data value.
     * @return bool True on success, false on failure.
     */
    public function add_data($handle, $key, $value)
    {
    }
    /**
     * Get extra item data.
     *
     * Gets data associated with a registered item.
     *
     * @since 3.3.0
     *
     * @param string $handle Name of the item. Should be unique.
     * @param string $key    The data key.
     * @return mixed Extra item data (string), false otherwise.
     */
    public function get_data($handle, $key)
    {
    }
    /**
     * Un-register an item or items.
     *
     * @since 2.1.0
     * @since 2.6.0 Moved from `WP_Scripts`.
     *
     * @param string|string[] $handles Item handle (string) or item handles (array of strings).
     */
    public function remove($handles)
    {
    }
    /**
     * Queue an item or items.
     *
     * Decodes handles and arguments, then queues handles and stores
     * arguments in the class property $args. For example in extending
     * classes, $args is appended to the item url as a query string.
     * Note $args is NOT the $args property of items in the $registered array.
     *
     * @since 2.1.0
     * @since 2.6.0 Moved from `WP_Scripts`.
     *
     * @param string|string[] $handles Item handle (string) or item handles (array of strings).
     */
    public function enqueue($handles)
    {
    }
    /**
     * Dequeue an item or items.
     *
     * Decodes handles and arguments, then dequeues handles
     * and removes arguments from the class property $args.
     *
     * @since 2.1.0
     * @since 2.6.0 Moved from `WP_Scripts`.
     *
     * @param string|string[] $handles Item handle (string) or item handles (array of strings).
     */
    public function dequeue($handles)
    {
    }
    /**
     * Recursively search the passed dependency tree for a handle.
     *
     * @since 4.0.0
     *
     * @param string[] $queue  An array of queued _WP_Dependency handles.
     * @param string   $handle Name of the item. Should be unique.
     * @return bool Whether the handle is found after recursively searching the dependency tree.
     */
    protected function recurse_deps($queue, $handle)
    {
    }
    /**
     * Query list for an item.
     *
     * @since 2.1.0
     * @since 2.6.0 Moved from `WP_Scripts`.
     *
     * @param string $handle Name of the item. Should be unique.
     * @param string $list   Optional. Property name of list array. Default 'registered'.
     * @return bool|_WP_Dependency Found, or object Item data.
     */
    public function query($handle, $list = 'registered')
    {
    }
    /**
     * Set item group, unless already in a lower group.
     *
     * @since 2.8.0
     *
     * @param string    $handle    Name of the item. Should be unique.
     * @param bool      $recursion Internal flag that calling function was called recursively.
     * @param int|false $group     Group level: level (int), no group (false).
     * @return bool Not already in the group or a lower group.
     */
    public function set_group($handle, $recursion, $group)
    {
    }
}