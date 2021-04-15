<?php


/**
 * Get the size of a directory recursively.
 *
 * Used by get_dirsize() to get a directory size when it contains other directories.
 *
 * @since MU (3.0.0)
 * @since 4.3.0 The `$exclude` parameter was added.
 * @since 5.2.0 The `$max_execution_time` parameter was added.
 * @since 5.6.0 The `$directory_cache` parameter was added.
 *
 * @param string       $directory          Full path of a directory.
 * @param string|array $exclude            Optional. Full path of a subdirectory to exclude from the total,
 *                                         or array of paths. Expected without trailing slash(es).
 * @param int          $max_execution_time Maximum time to run before giving up. In seconds. The timeout is global
 *                                         and is measured from the moment WordPress started to load.
 * @param array        $directory_cache    Optional. Array of cached directory paths.
 *
 * @return int|false|null Size in bytes if a valid directory. False if not. Null if timeout.
 */
function recurse_dirsize($directory, $exclude = \null, $max_execution_time = \null, &$directory_cache = \null)
{
}