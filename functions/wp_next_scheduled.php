<?php


/**
 * Retrieve the next timestamp for an event.
 *
 * @since 2.1.0
 *
 * @param string $hook Action hook to execute when event is run.
 * @param array $args Optional. Arguments to pass to the hook's callback function.
 * @return false|int The Unix timestamp of the next time the scheduled event will occur.
 */
function wp_next_scheduled($hook, $args = array())
{
}