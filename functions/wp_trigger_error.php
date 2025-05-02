<?php


/**
 * Generates a user-level error/warning/notice/deprecation message.
 *
 * Generates the message when `WP_DEBUG` is true.
 *
 * @since 6.4.0
 *
 * @param string $function_name The function that triggered the error.
 * @param string $message       The message explaining the error.
 *                              The message can contain allowed HTML 'a' (with href), 'code',
 *                              'br', 'em', and 'strong' tags and http or https protocols.
 *                              If it contains other HTML tags or protocols, the message should be escaped
 *                              before passing to this function to avoid being stripped {@see wp_kses()}.
 * @param int    $error_level   Optional. The designated error type for this error.
 *                              Only works with E_USER family of constants. Default E_USER_NOTICE.
 * @phpstan-param \E_USER_ERROR|\E_USER_WARNING|\E_USER_NOTICE|\E_USER_DEPRECATED $error_level
 * @phpstan-return void
 */
function wp_trigger_error($function_name, $message, $error_level = \E_USER_NOTICE)
{
}