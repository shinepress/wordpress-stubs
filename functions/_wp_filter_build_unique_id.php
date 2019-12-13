<?php


/**
 * Build Unique ID for storage and retrieval.
 *
 * The old way to serialize the callback caused issues and this function is the
 * solution. It works by checking for objects and creating a new property in
 * the class to keep track of the object and new objects of the same class that
 * need to be added.
 *
 * It also allows for the removal of actions and filters for objects after they
 * change class properties. It is possible to include the property $wp_filter_id
 * in your class and set it to "null" or a number to bypass the workaround.
 * However this will prevent you from adding new classes and any new classes
 * will overwrite the previous hook by the same class.
 *
 * Functions and static method callbacks are just returned as strings and
 * shouldn't have any speed penalty.
 *
 * @link https://core.trac.wordpress.org/ticket/3875
 *
 * @since 2.2.3
 * @access private
 *
 * @global array $wp_filter Storage for all of the filters and actions.
 * @staticvar int $filter_id_count
 *
 * @param string   $tag      Used in counting how many hooks were applied
 * @param callable $function Used for creating unique id
 * @param int|bool $priority Used in counting how many hooks were applied. If === false
 *                           and $function is an object reference, we return the unique
 *                           id only if it already has one, false otherwise.
 * @return string|false Unique ID for usage as array key or false if $priority === false
 *                      and $function is an object reference, and it does not already have
 *                      a unique id.
 */
function _wp_filter_build_unique_id($tag, $function, $priority)
{
}