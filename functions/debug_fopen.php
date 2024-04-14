<?php


/**
 * Open the file handle for debugging.
 *
 * @since 0.71
 * @deprecated 3.4.0 Use error_log()
 * @see error_log()
 *
 * @link https://www.php.net/manual/en/function.error-log.php
 *
 * @param string $filename File name.
 * @param string $mode     Type of access you required to the stream.
 * @return false Always false.
 */
function debug_fopen($filename, $mode)
{
}