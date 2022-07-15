<?php


/**
 * Adds slashes to a string or recursively adds slashes to strings within an array.
 *
 * Slashes will first be removed if magic_quotes_gpc is set, see {@link
 * https://www.php.net/magic_quotes} for more details.
 *
 * @since 0.71
 *
 * @param string|array $gpc String or array of data to slash.
 * @return string|array Slashed `$gpc`.
 * @phpstan-template T
 * @phpstan-param T $gpc
 * @phpstan-return T
 */
function addslashes_gpc($gpc)
{
}