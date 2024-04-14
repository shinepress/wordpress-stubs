<?php


/**
 * WordPress environment setup class.
 *
 * @package WordPress
 * @since 2.0.0
 */
class WP
{
    /**
     * Public query variables.
     *
     * Long list of public query variables.
     *
     * @since 2.0.0
     * @var array
     */
    public $public_query_vars = array('m', 'p', 'posts', 'w', 'cat', 'withcomments', 'withoutcomments', 's', 'search', 'exact', 'sentence', 'calendar', 'page', 'paged', 'more', 'tb', 'pb', 'author', 'order', 'orderby', 'year', 'monthnum', 'day', 'hour', 'minute', 'second', 'name', 'category_name', 'tag', 'feed', 'author_name', 'pagename', 'page_id', 'error', 'attachment', 'attachment_id', 'subpost', 'subpost_id', 'preview', 'robots', 'taxonomy', 'term', 'cpage', 'post_type', 'embed');
    /**
     * Private query variables.
     *
     * Long list of private query variables.
     *
     * @since 2.0.0
     * @var array
     */
    public $private_query_vars = array('offset', 'posts_per_page', 'posts_per_archive_page', 'showposts', 'nopaging', 'post_type', 'post_status', 'category__in', 'category__not_in', 'category__and', 'tag__in', 'tag__not_in', 'tag__and', 'tag_slug__in', 'tag_slug__and', 'tag_id', 'post_mime_type', 'perm', 'comments_per_page', 'post__in', 'post__not_in', 'post_parent', 'post_parent__in', 'post_parent__not_in', 'title', 'fields');
    /**
     * Extra query variables set by the user.
     *
     * @since 2.1.0
     * @var array
     */
    public $extra_query_vars = array();
    /**
     * Query variables for setting up the WordPress Query Loop.
     *
     * @since 2.0.0
     * @var array
     */
    public $query_vars;
    /**
     * String parsed to set the query variables.
     *
     * @since 2.0.0
     * @var string
     */
    public $query_string;
    /**
     * The request path, e.g. 2015/05/06.
     *
     * @since 2.0.0
     * @var string
     */
    public $request;
    /**
     * Rewrite rule the request matched.
     *
     * @since 2.0.0
     * @var string
     */
    public $matched_rule;
    /**
     * Rewrite query the request matched.
     *
     * @since 2.0.0
     * @var string
     */
    public $matched_query;
    /**
     * Whether already did the permalink.
     *
     * @since 2.0.0
     * @var bool
     */
    public $did_permalink = \false;
    /**
     * Add name to list of public query variables.
     *
     * @since 2.1.0
     *
     * @param string $qv Query variable name.
     */
    public function add_query_var($qv)
    {
    }
    /**
     * Removes a query variable from a list of public query variables.
     *
     * @since 4.5.0
     *
     * @param string $name Query variable name.
     */
    public function remove_query_var($name)
    {
    }
    /**
     * Set the value of a query variable.
     *
     * @since 2.3.0
     *
     * @param string $key Query variable name.
     * @param mixed $value Query variable value.
     */
    public function set_query_var($key, $value)
    {
    }
    /**
     * Parse request to find correct WordPress query.
     *
     * Sets up the query variables based on the request. There are also many
     * filters and actions that can be used to further manipulate the result.
     *
     * @since 2.0.0
     *
     * @global WP_Rewrite $wp_rewrite
     *
     * @param array|string $extra_query_vars Set the extra query variables.
     * @phpstan-return void
     */
    public function parse_request($extra_query_vars = '')
    {
    }
    /**
     * Sends additional HTTP headers for caching, content type, etc.
     *
     * Sets the Content-Type header. Sets the 'error' status (if passed) and optionally exits.
     * If showing a feed, it will also send Last-Modified, ETag, and 304 status if needed.
     *
     * @since 2.0.0
     * @since 4.4.0 `X-Pingback` header is added conditionally after posts have been queried in handle_404().
     */
    public function send_headers()
    {
    }
    /**
     * Sets the query string property based off of the query variable property.
     *
     * The {@see 'query_string'} filter is deprecated, but still works. Plugins should
     * use the {@see 'request'} filter instead.
     *
     * @since 2.0.0
     */
    public function build_query_string()
    {
    }
    /**
     * Set up the WordPress Globals.
     *
     * The query_vars property will be extracted to the GLOBALS. So care should
     * be taken when naming global variables that might interfere with the
     * WordPress environment.
     *
     * @since 2.0.0
     *
     * @global WP_Query     $wp_query
     * @global string       $query_string Query string for the loop.
     * @global array        $posts The found posts.
     * @global WP_Post|null $post The current post, if available.
     * @global string       $request The SQL statement for the request.
     * @global int          $more Only set, if single page or post.
     * @global int          $single If single page or post. Only set, if single page or post.
     * @global WP_User      $authordata Only set, if author archive.
     */
    public function register_globals()
    {
    }
    /**
     * Set up the current user.
     *
     * @since 2.0.0
     */
    public function init()
    {
    }
    /**
     * Set up the Loop based on the query variables.
     *
     * @since 2.0.0
     *
     * @global WP_Query $wp_the_query
     */
    public function query_posts()
    {
    }
    /**
     * Set the Headers for 404, if nothing is found for requested URL.
     *
     * Issue a 404 if a request doesn't match any posts and doesn't match
     * any object (e.g. an existing-but-empty category, tag, author) and a 404 was not already
     * issued, and if the request was not a search or the homepage.
     *
     * Otherwise, issue a 200.
     *
     * This sets headers after posts have been queried. handle_404() really means "handle status."
     * By inspecting the result of querying posts, seemingly successful requests can be switched to
     * a 404 so that canonical redirection logic can kick in.
     *
     * @since 2.0.0
     *
     * @global WP_Query $wp_query
     * @phpstan-return void
     */
    public function handle_404()
    {
    }
    /**
     * Sets up all of the variables required by the WordPress environment.
     *
     * The action {@see 'wp'} has one parameter that references the WP object. It
     * allows for accessing the properties and methods to further manipulate the
     * object.
     *
     * @since 2.0.0
     *
     * @param string|array $query_args Passed to parse_request().
     */
    public function main($query_args = '')
    {
    }
}