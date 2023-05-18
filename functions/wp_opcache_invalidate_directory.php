<?php


/**
 * Attempts to clear the opcode cache for a directory of files.
 *
 * @since 6.2.0
 *
 * @see wp_opcache_invalidate()
 * @link https://www.php.net/manual/en/function.opcache-invalidate.php
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string $dir The path to the directory for which the opcode cache is to be cleared.
 */
function wp_opcache_invalidate_directory($dir)
{
}