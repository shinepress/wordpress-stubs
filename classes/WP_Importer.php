<?php


/**
 * WP_Importer base class
 */
#[\AllowDynamicProperties]
class WP_Importer
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns array with imported permalinks from WordPress database.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $importer_name
     * @param string $blog_id
     * @return array
     */
    public function get_imported_posts($importer_name, $blog_id)
    {
    }
    /**
     * Returns count of imported permalinks from WordPress database.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $importer_name
     * @param string $blog_id
     * @return int
     */
    public function count_imported_posts($importer_name, $blog_id)
    {
    }
    /**
     * Sets array with imported comments from WordPress database.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $blog_id
     * @return array
     */
    public function get_imported_comments($blog_id)
    {
    }
    /**
     * @param int $blog_id
     * @return int|void
     */
    public function set_blog($blog_id)
    {
    }
    /**
     * @param int $user_id
     * @return int|void
     */
    public function set_user($user_id)
    {
    }
    /**
     * Sorts by strlen, longest string first.
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
     * Bumps up the request timeout for http requests.
     *
     * @param int $val
     * @return int
     */
    public function bump_request_timeout($val)
    {
    }
    /**
     * Checks if user has exceeded disk quota.
     *
     * @return bool
     */
    public function is_user_over_quota()
    {
    }
    /**
     * Replaces newlines, tabs, and multiple spaces with a single space.
     *
     * @param string $text
     * @return string
     */
    public function min_whitespace($text)
    {
    }
    /**
     * Resets global variables that grow out of control during imports.
     *
     * @since 3.0.0
     *
     * @global wpdb  $wpdb       WordPress database abstraction object.
     * @global int[] $wp_actions
     */
    public function stop_the_insanity()
    {
    }
}