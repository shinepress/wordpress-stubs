<?php


/**
 * Retrieves the URL to the includes directory.
 *
 * @since 2.6.0
 *
 * @param string $path   Optional. Path relative to the includes URL. Default empty.
 * @param string $scheme Optional. Scheme to give the includes URL context. Accepts
 *                       'http', 'https', or 'relative'. Default null.
 * @return string Includes URL link with optional path appended.
 * @phpstan-param 'http'|'https'|'relative' $scheme
 */
function includes_url($path = '', $scheme = \null)
{
}