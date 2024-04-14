<?php


/**
 * Checks that the current theme has 'index.php' and 'style.css' files.
 *
 * Does not initially check the default theme, which is the fallback and should always exist.
 * But if it doesn't exist, it'll fall back to the latest core default theme that does exist.
 * Will switch theme to the fallback theme if current theme does not validate.
 *
 * You can use the {@see 'validate_current_theme'} filter to return false to disable
 * this functionality.
 *
 * @since 1.5.0
 *
 * @see WP_DEFAULT_THEME
 *
 * @return bool
 */
function validate_current_theme()
{
}