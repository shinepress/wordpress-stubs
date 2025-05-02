<?php


/**
 * Class for prefixing URL patterns.
 *
 * This class is intended primarily for use as part of the speculative loading feature.
 *
 * @since 6.8.0
 * @access private
 */
class WP_URL_Pattern_Prefixer
{
    /**
     * Constructor.
     *
     * @since 6.8.0
     *
     * @param array<string, string> $contexts Optional. Map of `$context_string => $base_path` pairs. Default is the
     *                                        contexts returned by the
     *                                        {@see WP_URL_Pattern_Prefixer::get_default_contexts()} method.
     */
    public function __construct(array $contexts = array())
    {
    }
    /**
     * Prefixes the given URL path pattern with the base path for the given context.
     *
     * This ensures that these path patterns work correctly on WordPress subdirectory sites, for example in a multisite
     * network, or when WordPress itself is installed in a subdirectory of the hostname.
     *
     * The given URL path pattern is only prefixed if it does not already include the expected prefix.
     *
     * @since 6.8.0
     *
     * @param string $path_pattern URL pattern starting with the path segment.
     * @param string $context      Optional. Context to use for prefixing the path pattern. Default 'home'.
     * @return string URL pattern, prefixed as necessary.
     */
    public function prefix_path_pattern(string $path_pattern, string $context = 'home'): string
    {
    }
    /**
     * Returns the default contexts used by the class.
     *
     * @since 6.8.0
     *
     * @return array<string, string> Map of `$context_string => $base_path` pairs.
     */
    public static function get_default_contexts(): array
    {
    }
}