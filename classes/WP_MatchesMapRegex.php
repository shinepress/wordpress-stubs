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
#[\AllowDynamicProperties]
class WP_MatchesMapRegex
{
    /**
     * store for matches
     *
     * @var array
     */
    private $_matches;
    /**
     * store for mapping result
     *
     * @var string
     */
    public $output;
    /**
     * subject to perform mapping on (query string containing $matches[] references
     *
     * @var string
     */
    private $_subject;
    /**
     * regexp pattern to match $matches[] references
     *
     * @var string
     */
    public $_pattern = '(\$matches\[[1-9]+[0-9]*\])';
    // Magic number.
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
     * do the actual mapping
     *
     * @return string
     */
    private function _map()
    {
    }
    /**
     * preg_replace_callback hook
     *
     * @param array $matches preg_replace regexp matches
     * @return string
     */
    public function callback($matches)
    {
    }
}