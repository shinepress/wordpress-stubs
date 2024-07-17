<?php


/**
 * Tries to resume a single theme.
 *
 * If a redirect was provided and a functions.php file was found, we first ensure that
 * functions.php file does not throw fatal errors anymore.
 *
 * The way it works is by setting the redirection to the error before trying to
 * include the file. If the theme fails, then the redirection will not be overwritten
 * with the success message and the theme will not be resumed.
 *
 * @since 5.2.0
 *
 * @param string $theme    Single theme to resume.
 * @param string $redirect Optional. URL to redirect to. Default empty string.
 * @return bool|WP_Error True on success, false if `$theme` was not paused,
 *                       `WP_Error` on failure.
 */
function resume_theme($theme, $redirect = '')
{
}