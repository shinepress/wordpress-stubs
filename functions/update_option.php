<?php


/**
 * Updates the value of an option that was already added.
 *
 * You do not need to serialize values. If the value needs to be serialized,
 * then it will be serialized before it is inserted into the database.
 * Remember, resources cannot be serialized or added as an option.
 *
 * If the option does not exist, it will be created.
 * This function is designed to work with or without a logged-in user. In terms of security,
 * plugin developers should check the current user's capabilities before updating any options.
 *
 * @since 1.0.0
 * @since 4.2.0 The `$autoload` parameter was added.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string      $option   Name of the option to update. Expected to not be SQL-escaped.
 * @param mixed       $value    Option value. Must be serializable if non-scalar. Expected to not be SQL-escaped.
 * @param string|bool $autoload Optional. Whether to load the option when WordPress starts up. For existing options,
 *                              `$autoload` can only be updated using `update_option()` if `$value` is also changed.
 *                              Accepts 'yes'|true to enable or 'no'|false to disable.
 *                              Autoloading too many options can lead to performance problems, especially if the
 *                              options are not frequently used. For options which are accessed across several places
 *                              in the frontend, it is recommended to autoload them, by using 'yes'|true.
 *                              For options which are accessed only on few specific URLs, it is recommended
 *                              to not autoload them, by using 'no'|false. For non-existent options, the default value
 *                              is 'yes'. Default null.
 * @return bool True if the value was updated, false otherwise.
 */
function update_option($option, $value, $autoload = \null)
{
}