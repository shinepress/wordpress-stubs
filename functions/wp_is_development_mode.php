<?php


/**
 * Checks whether the site is in the given development mode.
 *
 * @since 6.3.0
 *
 * @param string $mode Development mode to check for. Either 'core', 'plugin', 'theme', or 'all'.
 * @return bool True if the given mode is covered by the current development mode, false otherwise.
 * @phpstan-param 'core'|'plugin'|'theme'|'all' $mode
 */
function wp_is_development_mode($mode)
{
}