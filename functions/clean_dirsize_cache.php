<?php


/**
 * Cleans directory size cache used by recurse_dirsize().
 *
 * Removes the current directory and all parent directories from the `dirsize_cache` transient.
 *
 * @since 5.6.0
 *
 * @param string $path Full path of a directory or file.
 * @phpstan-return void
 */
function clean_dirsize_cache($path)
{
}