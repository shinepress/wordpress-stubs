<?php


/**
 * Checks that a JSONP callback is a valid JavaScript callback.
 *
 * Only allows alphanumeric characters and the dot character in callback
 * function names. This helps to mitigate XSS attacks caused by directly
 * outputting user input.
 *
 * @since 4.6.0
 *
 * @param string $callback Supplied JSONP callback function.
 * @return bool True if valid callback, otherwise false.
 */
function wp_check_jsonp_callback($callback)
{
}