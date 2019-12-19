<?php


/**
 * Retrieve supported event recurrence schedules.
 *
 * The default supported recurrences are 'hourly', 'twicedaily', and 'daily'. A plugin may
 * add more by hooking into the {@see 'cron_schedules'} filter. The filter accepts an array
 * of arrays. The outer array has a key that is the name of the schedule or for
 * example 'weekly'. The value is an array with two keys, one is 'interval' and
 * the other is 'display'.
 *
 * The 'interval' is a number in seconds of when the cron job should run. So for
 * 'hourly', the time is 3600 or 60*60. For weekly, the value would be
 * 60*60*24*7 or 604800. The value of 'interval' would then be 604800.
 *
 * The 'display' is the description. For the 'weekly' key, the 'display' would
 * be `__( 'Once Weekly' )`.
 *
 * For your plugin, you will be passed an array. you can easily add your
 * schedule by doing the following.
 *
 *     // Filter parameter variable name is 'array'.
 *     $array['weekly'] = array(
 *         'interval' => 604800,
 *         'display'  => __( 'Once Weekly' )
 *     );
 *
 * @since 2.1.0
 *
 * @return array
 */
function wp_get_schedules()
{
}