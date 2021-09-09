<?php


/**
 * Write contents to the file used for debugging.
 *
 * @since 0.71
 * @deprecated 3.4.0 Use error_log()
 * @see error_log()
 *
 * @link https://www.php.net/manual/en/function.error-log.php
 *
 * @param mixed  $fp     Unused.
 * @param string $string Message to log.
 */
function debug_fwrite($fp, $string)
{
}