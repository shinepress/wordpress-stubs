<?php


/**
 * Run scheduled callbacks or spawn cron for all scheduled events.
 *
 * Warning: This function may return Boolean FALSE, but may also return a non-Boolean
 * value which evaluates to FALSE. For information about casting to booleans see the
 * {@link https://www.php.net/manual/en/language.types.boolean.php PHP documentation}. Use
 * the `===` operator for testing the return value of this function.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value added to indicate success or failure.
 *
 * @return bool|int On success an integer indicating number of events spawned (0 indicates no
 *                  events needed to be spawned), false if spawning fails for one or more events.
 */
function wp_cron()
{
}