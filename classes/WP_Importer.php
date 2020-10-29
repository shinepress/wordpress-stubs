<?php


/**
 * WP_Importer base class
 */
class WP_Importer
{
    /**
     * Class Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Returns array with imported permalinks from WordPress database
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $importer_name
     * @param string $bid
     * @return array
     */
    public function get_imported_posts($importer_name, $bid)
    {
    }
    /**
     * Return count of imported permalinks from WordPress database
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $importer_name
     * @param string $bid
     * @return int
     */
    public function count_imported_posts($importer_name, $bid)
    {
    }
    /**
     * Set array with imported comments from WordPress database
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $bid
     * @return array
     */
    public function get_imported_comments($bid)
    {
    }
    /**
     *
     * @param int $blog_id
     * @return int|void
     */
    public function set_blog($blog_id)
    {
    }
    /**
     *
     * @param int $user_id
     * @return int|void
     */
    public function set_user($user_id)
    {
    }
    /**
     * Sort by strlen, longest string first
     *
     * @param string $a
     * @param string $b
     * @return int
     */
    public function cmpr_strlen($a, $b)
    {
    }
    /**
     * GET URL
     *
     * @param string $url
     * @param string $username
     * @param string $password
     * @param bool   $head
     * @return array
     */
    public function get_page($url, $username = '', $password = '', $head = \false)
    {
    }
    /**
     * Bump up the request timeout for http requests
     *
     * @param int $val
     * @return int
     */
    public function bump_request_timeout($val)
    {
    }
    /**
     * Check if user has exceeded disk quota
     *
     * @return bool
     */
    public function is_user_over_quota()
    {
    }
    /**
     * Replace newlines, tabs, and multiple spaces with a single space
     *
     * @param string $string
     * @return string
     */
    public function min_whitespace($string)
    {
    }
    /**
     * Reset global variables that grow out of control during imports
     *
     * @global wpdb  $wpdb
     * @global array $wp_actions
     */
    public function stop_the_insanity()
    {
    }
}