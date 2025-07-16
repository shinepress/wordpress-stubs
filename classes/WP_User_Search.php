<?php


/**
 * WordPress User Search class.
 *
 * @since 2.1.0
 * @deprecated 3.1.0 Use WP_User_Query
 */
class WP_User_Search
{
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var mixed
     */
    var $results;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var string
     */
    var $search_term;
    /**
     * Page number.
     *
     * @since 2.1.0
     * @access private
     * @var int
     */
    var $page;
    /**
     * Role name that users have.
     *
     * @since 2.5.0
     * @access private
     * @var string
     */
    var $role;
    /**
     * Raw page number.
     *
     * @since 2.1.0
     * @access private
     * @var int|bool
     */
    var $raw_page;
    /**
     * Amount of users to display per page.
     *
     * @since 2.1.0
     * @access public
     * @var int
     */
    var $users_per_page = 50;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var int
     */
    var $first_user;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var int
     */
    var $last_user;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var string
     */
    var $query_limit;
    /**
     * {@internal Missing Description}}
     *
     * @since 3.0.0
     * @access private
     * @var string
     */
    var $query_orderby;
    /**
     * {@internal Missing Description}}
     *
     * @since 3.0.0
     * @access private
     * @var string
     */
    var $query_from;
    /**
     * {@internal Missing Description}}
     *
     * @since 3.0.0
     * @access private
     * @var string
     */
    var $query_where;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var int
     */
    var $total_users_for_query = 0;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var bool
     */
    var $too_many_total_users = \false;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.1.0
     * @access private
     * @var WP_Error
     */
    var $search_errors;
    /**
     * {@internal Missing Description}}
     *
     * @since 2.7.0
     * @access private
     * @var string
     */
    var $paging_text;
    /**
     * PHP5 Constructor - Sets up the object properties.
     *
     * @since 2.1.0
     *
     * @param string $search_term Search terms string.
     * @param int $page Optional. Page ID.
     * @param string $role Role name.
     * @return WP_User_Search
     */
    function __construct($search_term = '', $page = '', $role = '')
    {
    }
    /**
     * PHP4 Constructor - Sets up the object properties.
     *
     * @since 2.1.0
     *
     * @param string $search_term Search terms string.
     * @param int $page Optional. Page ID.
     * @param string $role Role name.
     * @return WP_User_Search
     */
    public function WP_User_Search($search_term = '', $page = '', $role = '')
    {
    }
    /**
     * Prepares the user search query (legacy).
     *
     * @since 2.1.0
     * @access public
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    public function prepare_query()
    {
    }
    /**
     * Executes the user search query.
     *
     * @since 2.1.0
     * @access public
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    public function query()
    {
    }
    /**
     * Prepares variables for use in templates.
     *
     * @since 2.1.0
     * @access public
     */
    function prepare_vars_for_template_usage()
    {
    }
    /**
     * Handles paging for the user search query.
     *
     * @since 2.1.0
     * @access public
     */
    public function do_paging()
    {
    }
    /**
     * Retrieves the user search query results.
     *
     * @since 2.1.0
     * @access public
     *
     * @return array
     */
    public function get_results()
    {
    }
    /**
     * Displaying paging text.
     *
     * @see do_paging() Builds paging text.
     *
     * @since 2.1.0
     * @access public
     */
    function page_links()
    {
    }
    /**
     * Whether paging is enabled.
     *
     * @see do_paging() Builds paging text.
     *
     * @since 2.1.0
     * @access public
     *
     * @return bool
     */
    function results_are_paged()
    {
    }
    /**
     * Whether there are search terms.
     *
     * @since 2.1.0
     * @access public
     *
     * @return bool
     */
    function is_search()
    {
    }
}