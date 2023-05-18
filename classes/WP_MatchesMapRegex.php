<?php


/**
 * WP_MatchesMapRegex helper class
 *
 * @package WordPress
 * @since 4.7.0
 */
/**
 * Helper class to remove the need to use eval to replace $matches[] in query strings.
 *
 * @since 2.9.0
 */
class WP_MatchesMapRegex
{
    /**
     * store for mapping result
     *
     * @var string
     */
    public $output;
    /**
     * regexp pattern to match $matches[] references
     *
     * @var string
     */
    public $_pattern = '(\$matches\[[1-9]+[0-9]*\])';
    // magic number
    /**
     * constructor
     *
     * @param string $subject subject if regex
     * @param array  $matches data to use in map
     */
    public function __construct($subject, $matches)
    {
    }
    /**
     * Substitute substring matches in subject.
     *
     * static helper function to ease use
     *
     * @param string $subject subject
     * @param array  $matches data used for substitution
     * @return string
     */
    public static function apply($subject, $matches)
    {
    }
    /**
     * preg_replace_callback hook
     *
     * @param  array $matches preg_replace regexp matches
     * @return string
     */
    public function callback($matches)
    {
    }
}