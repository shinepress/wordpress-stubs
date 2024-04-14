<?php


/**
 * Ensures that the specified format is either 'json' or 'xml'.
 *
 * @since 4.4.0
 *
 * @param string $format The oEmbed response format. Accepts 'json' or 'xml'.
 * @return string The format, either 'xml' or 'json'. Default 'json'.
 * @phpstan-param 'json'|'xml' $format
 * @phpstan-return 'xml'|'json'
 */
function wp_oembed_ensure_format($format)
{
}