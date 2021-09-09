<?php


/**
 * Adds a new option.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * You can create options without values and then update the values later.
 * Existing options will not be updated and checks are performed to ensure that you
 * aren't adding a protected WordPress option. Care should be taken to not name
 * options the same as the ones which are protected.
 *
 * @since 1.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string      $option     Name of the option to add. Expected to not be SQL-escaped.
 * @param mixed       $value      Optional. Option value. Must be serializable if non-scalar.
 *                                Expected to not be SQL-escaped.
 * @param string      $deprecated Optional. Description. Not used anymore.
 * @param string|bool $autoload   Optional. Whether to load the option when WordPress starts up.
 *                                Default is enabled. Accepts 'no' to disable for legacy reasons.
 * @return bool True if the option was added, false otherwise.
 */
function add_option($option, $value = '', $deprecated = '', $autoload = 'yes')
{
}