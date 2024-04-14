<?php


/**
 * Check whether a CSS stylesheet has been added to the queue.
 *
 * @since 2.8.0
 *
 * @param string $handle Name of the stylesheet.
 * @param string $list   Optional. Status of the stylesheet to check. Default 'enqueued'.
 *                       Accepts 'enqueued', 'registered', 'queue', 'to_do', and 'done'.
 * @return bool Whether style is queued.
 * @phpstan-param 'enqueued'|'registered'|'queue'|'to_do'|'done' $list
 */
function wp_style_is($handle, $list = 'enqueued')
{
}