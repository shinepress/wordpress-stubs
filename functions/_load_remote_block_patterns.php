<?php


/**
 * Register Core's official patterns from wordpress.org/patterns.
 *
 * @since 5.8.0
 * @since 5.9.0 The $current_screen argument was removed.
 * @since 6.2.0 Normalize the pattern from the API (snake_case) to the
 *              format expected by `register_block_pattern` (camelCase).
 *
 * @param WP_Screen $deprecated Unused. Formerly the screen that the current request was triggered from.
 * @phpstan-return void
 */
function _load_remote_block_patterns($deprecated = \null)
{
}