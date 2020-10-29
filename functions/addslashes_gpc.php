<?php


/**
 * Adds slashes to escape strings.
 *
 * Slashes will first be removed if magic_quotes_gpc is set, see {@link
 * https://www.php.net/magic_quotes} for more details.
 *
 * @since 0.71
 *
 * @param string $gpc The string returned from HTTP request data.
 * @return string Returns a string escaped with slashes.
 */
function addslashes_gpc($gpc)
{
}