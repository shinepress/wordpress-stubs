<?php


/**
 * Plugin API: WP_Hook class
 *
 * @package WordPress
 * @subpackage Plugin
 * @since 4.7.0
 */
/**
 * Core class used to implement action and filter hook functionality.
 *
 * @since 4.7.0
 *
 * @see Iterator
 * @see ArrayAccess
 */
final class WP_Hook implements \Iterator, \ArrayAccess
{
    /**
     * Hook callbacks.
     *
     * @since 4.7.0
     * @var array
     */
    public $callbacks = array();
    /**
     * The priority keys of actively running iterations of a hook.
     *
     * @since 4.7.0
     * @var array
     */
    private $iterations = array();
    /**
     * The current priority of actively running iterations of a hook.
     *
     * @since 4.7.0
     * @var array
     */
    private $current_priority = array();
    /**
     * Number of levels this hook can be recursively called.
     *
     * @since 4.7.0
     * @var int
     */
    private $nesting_level = 0;
    /**
     * Flag for if we're current doing an action, rather than a filter.
     *
     * @since 4.7.0
     * @var bool
     */
    private $doing_action = \false;
    /**
     * Hooks a function or method to a specific filter action.
     *
     * @since 4.7.0
     *
     * @param string   $tag             The name of the filter to hook the $function_to_add callback to.
     * @param callable $function_to_add The callback to be run when the filter is applied.
     * @param int      $priority        The order in which the functions associated with a particular action
     *                                  are executed. Lower numbers correspond with earlier execution,
     *                                  and functions with the same priority are executed in the order
     *                                  in which they were added to the action.
     * @param int      $accepted_args   The number of arguments the function accepts.
     */
    public function add_filter($tag, $function_to_add, $priority, $accepted_args)
    {
    }
    /**
     * Handles resetting callback priority keys mid-iteration.
     *
     * @since 4.7.0
     *
     * @param bool|int $new_priority     Optional. The priority of the new filter being added. Default false,
     *                                   for no priority being added.
     * @param bool     $priority_existed Optional. Flag for whether the priority already existed before the new
     *                                   filter was added. Default false.
     */
    private function resort_active_iterations($new_priority = \false, $priority_existed = \false)
    {
    }
    /**
     * Unhooks a function or method from a specific filter action.
     *
     * @since 4.7.0
     *
     * @param string   $tag                The filter hook to which the function to be removed is hooked.
     * @param callable $function_to_remove The callback to be removed from running when the filter is applied.
     * @param int      $priority           The exact priority used when adding the original filter callback.
     * @return bool Whether the callback existed before it was removed.
     */
    public function remove_filter($tag, $function_to_remove, $priority)
    {
    }
    /**
     * Checks if a specific action has been registered for this hook.
     *
     * @since 4.7.0
     *
     * @param string        $tag               Optional. The name of the filter hook. Default empty.
     * @param callable|bool $function_to_check Optional. The callback to check for. Default false.
     * @return bool|int The priority of that hook is returned, or false if the function is not attached.
     */
    public function has_filter($tag = '', $function_to_check = \false)
    {
    }
    /**
     * Checks if any callbacks have been registered for this hook.
     *
     * @since 4.7.0
     *
     * @return bool True if callbacks have been registered for the current hook, otherwise false.
     */
    public function has_filters()
    {
    }
    /**
     * Removes all callbacks from the current filter.
     *
     * @since 4.7.0
     *
     * @param int|bool $priority Optional. The priority number to remove. Default false.
     */
    public function remove_all_filters($priority = \false)
    {
    }
    /**
     * Calls the callback functions that have been added to a filter hook.
     *
     * @since 4.7.0
     *
     * @param mixed $value The value to filter.
     * @param array $args  Additional parameters to pass to the callback functions.
     *                     This array is expected to include $value at index 0.
     * @return mixed The filtered value after all hooked functions are applied to it.
     */
    public function apply_filters($value, $args)
    {
    }
    /**
     * Calls the callback functions that have been added to an action hook.
     *
     * @since 4.7.0
     *
     * @param array $args Parameters to pass to the callback functions.
     */
    public function do_action($args)
    {
    }
    /**
     * Processes the functions hooked into the 'all' hook.
     *
     * @since 4.7.0
     *
     * @param array $args Arguments to pass to the hook callbacks. Passed by reference.
     */
    public function do_all_hook(&$args)
    {
    }
    /**
     * Return the current priority level of the currently running iteration of the hook.
     *
     * @since 4.7.0
     *
     * @return int|false If the hook is running, return the current priority level. If it isn't running, return false.
     */
    public function current_priority()
    {
    }
    /**
     * Normalizes filters set up before WordPress has initialized to WP_Hook objects.
     *
     * @since 4.7.0
     *
     * @param array $filters Filters to normalize.
     * @return WP_Hook[] Array of normalized filters.
     */
    public static function build_preinitialized_hooks($filters)
    {
    }
    /**
     * Determines whether an offset value exists.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset An offset to check for.
     * @return bool True if the offset exists, false otherwise.
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Retrieves a value at a specified offset.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset The offset to retrieve.
     * @return mixed If set, the value at the specified offset, null otherwise.
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Sets a value at a specified offset.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value The value to set.
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Unsets a specified offset.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset The offset to unset.
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * Returns the current element.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/iterator.current.php
     *
     * @return array Of callbacks at current priority.
     */
    public function current()
    {
    }
    /**
     * Moves forward to the next element.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/iterator.next.php
     *
     * @return array Of callbacks at next priority.
     */
    public function next()
    {
    }
    /**
     * Returns the key of the current element.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/iterator.key.php
     *
     * @return mixed Returns current priority on success, or NULL on failure
     */
    public function key()
    {
    }
    /**
     * Checks if current position is valid.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/iterator.valid.php
     *
     * @return boolean
     */
    public function valid()
    {
    }
    /**
     * Rewinds the Iterator to the first element.
     *
     * @since 4.7.0
     *
     * @link https://www.php.net/manual/en/iterator.rewind.php
     */
    public function rewind()
    {
    }
}