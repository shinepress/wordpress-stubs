<?php


/**
 * Query API: WP_Query class
 *
 * @package WordPress
 * @subpackage Query
 * @since 4.7.0
 */
/**
 * The WordPress Query class.
 *
 * @link https://developer.wordpress.org/reference/classes/wp_query/
 *
 * @since 1.5.0
 * @since 4.5.0 Removed the `$comments_popup` property.
 */
#[\AllowDynamicProperties]
class WP_Query
{
    /**
     * Query vars set by the user.
     *
     * @since 1.5.0
     * @var array
     */
    public $query;
    /**
     * Query vars, after parsing.
     *
     * @since 1.5.0
     * @var array
     */
    public $query_vars = array();
    /**
     * Taxonomy query, as passed to get_tax_sql().
     *
     * @since 3.1.0
     * @var WP_Tax_Query A taxonomy query instance.
     */
    public $tax_query;
    /**
     * Metadata query container.
     *
     * @since 3.2.0
     * @var WP_Meta_Query A meta query instance.
     */
    public $meta_query = \false;
    /**
     * Date query container.
     *
     * @since 3.7.0
     * @var WP_Date_Query A date query instance.
     */
    public $date_query = \false;
    /**
     * Holds the data for a single object that is queried.
     *
     * Holds the contents of a post, page, category, attachment.
     *
     * @since 1.5.0
     * @var WP_Term|WP_Post_Type|WP_Post|WP_User|null
     */
    public $queried_object;
    /**
     * The ID of the queried object.
     *
     * @since 1.5.0
     * @var int
     */
    public $queried_object_id;
    /**
     * SQL for the database query.
     *
     * @since 2.0.1
     * @var string
     */
    public $request;
    /**
     * Array of post objects or post IDs.
     *
     * @since 1.5.0
     * @var WP_Post[]|int[]
     */
    public $posts;
    /**
     * The number of posts for the current query.
     *
     * @since 1.5.0
     * @var int
     */
    public $post_count = 0;
    /**
     * Index of the current item in the loop.
     *
     * @since 1.5.0
     * @var int
     */
    public $current_post = -1;
    /**
     * Whether the loop has started and the caller is in the loop.
     *
     * @since 2.0.0
     * @var bool
     */
    public $in_the_loop = \false;
    /**
     * The current post.
     *
     * This property does not get populated when the `fields` argument is set to
     * `ids` or `id=>parent`.
     *
     * @since 1.5.0
     * @var WP_Post|null
     */
    public $post;
    /**
     * The list of comments for current post.
     *
     * @since 2.2.0
     * @var WP_Comment[]
     */
    public $comments;
    /**
     * The number of comments for the posts.
     *
     * @since 2.2.0
     * @var int
     */
    public $comment_count = 0;
    /**
     * The index of the comment in the comment loop.
     *
     * @since 2.2.0
     * @var int
     */
    public $current_comment = -1;
    /**
     * Current comment object.
     *
     * @since 2.2.0
     * @var WP_Comment
     */
    public $comment;
    /**
     * The number of found posts for the current query.
     *
     * If limit clause was not used, equals $post_count.
     *
     * @since 2.1.0
     * @var int
     */
    public $found_posts = 0;
    /**
     * The number of pages.
     *
     * @since 2.1.0
     * @var int
     */
    public $max_num_pages = 0;
    /**
     * The number of comment pages.
     *
     * @since 2.7.0
     * @var int
     */
    public $max_num_comment_pages = 0;
    /**
     * Signifies whether the current query is for a single post.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_single = \false;
    /**
     * Signifies whether the current query is for a preview.
     *
     * @since 2.0.0
     * @var bool
     */
    public $is_preview = \false;
    /**
     * Signifies whether the current query is for a page.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_page = \false;
    /**
     * Signifies whether the current query is for an archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_archive = \false;
    /**
     * Signifies whether the current query is for a date archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_date = \false;
    /**
     * Signifies whether the current query is for a year archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_year = \false;
    /**
     * Signifies whether the current query is for a month archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_month = \false;
    /**
     * Signifies whether the current query is for a day archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_day = \false;
    /**
     * Signifies whether the current query is for a specific time.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_time = \false;
    /**
     * Signifies whether the current query is for an author archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_author = \false;
    /**
     * Signifies whether the current query is for a category archive.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_category = \false;
    /**
     * Signifies whether the current query is for a tag archive.
     *
     * @since 2.3.0
     * @var bool
     */
    public $is_tag = \false;
    /**
     * Signifies whether the current query is for a taxonomy archive.
     *
     * @since 2.5.0
     * @var bool
     */
    public $is_tax = \false;
    /**
     * Signifies whether the current query is for a search.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_search = \false;
    /**
     * Signifies whether the current query is for a feed.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_feed = \false;
    /**
     * Signifies whether the current query is for a comment feed.
     *
     * @since 2.2.0
     * @var bool
     */
    public $is_comment_feed = \false;
    /**
     * Signifies whether the current query is for trackback endpoint call.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_trackback = \false;
    /**
     * Signifies whether the current query is for the site homepage.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_home = \false;
    /**
     * Signifies whether the current query is for the Privacy Policy page.
     *
     * @since 5.2.0
     * @var bool
     */
    public $is_privacy_policy = \false;
    /**
     * Signifies whether the current query couldn't find anything.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_404 = \false;
    /**
     * Signifies whether the current query is for an embed.
     *
     * @since 4.4.0
     * @var bool
     */
    public $is_embed = \false;
    /**
     * Signifies whether the current query is for a paged result and not for the first page.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_paged = \false;
    /**
     * Signifies whether the current query is for an administrative interface page.
     *
     * @since 1.5.0
     * @var bool
     */
    public $is_admin = \false;
    /**
     * Signifies whether the current query is for an attachment page.
     *
     * @since 2.0.0
     * @var bool
     */
    public $is_attachment = \false;
    /**
     * Signifies whether the current query is for an existing single post of any post type
     * (post, attachment, page, custom post types).
     *
     * @since 2.1.0
     * @var bool
     */
    public $is_singular = \false;
    /**
     * Signifies whether the current query is for the robots.txt file.
     *
     * @since 2.1.0
     * @var bool
     */
    public $is_robots = \false;
    /**
     * Signifies whether the current query is for the favicon.ico file.
     *
     * @since 5.4.0
     * @var bool
     */
    public $is_favicon = \false;
    /**
     * Signifies whether the current query is for the page_for_posts page.
     *
     * Basically, the homepage if the option isn't set for the static homepage.
     *
     * @since 2.1.0
     * @var bool
     */
    public $is_posts_page = \false;
    /**
     * Signifies whether the current query is for a post type archive.
     *
     * @since 3.1.0
     * @var bool
     */
    public $is_post_type_archive = \false;
    /**
     * Set if post thumbnails are cached
     *
     * @since 3.2.0
     * @var bool
     */
    public $thumbnails_cached = \false;
    /**
     * Controls whether an attachment query should include filenames or not.
     *
     * @since 6.0.3
     * @var bool
     */
    protected $allow_query_attachment_by_filename = \false;
    /**
     * Initiates object properties and sets default values.
     *
     * @since 1.5.0
     */
    public function init()
    {
    }
    /**
     * Reparse the query vars.
     *
     * @since 1.5.0
     */
    public function parse_query_vars()
    {
    }
    /**
     * Fills in the query variables, which do not exist within the parameter.
     *
     * @since 2.1.0
     * @since 4.5.0 Removed the `comments_popup` public query variable.
     *
     * @param array $query_vars Defined query variables.
     * @return array Complete query variables with undefined ones filled in empty.
     */
    public function fill_query_vars($query_vars)
    {
    }
    /**
     * Parse a query string and set query type booleans.
     *
     * @since 1.5.0
     * @since 4.2.0 Introduced the ability to order by specific clauses of a `$meta_query`, by passing the clause's
     *              array key to `$orderby`.
     * @since 4.4.0 Introduced `$post_name__in` and `$title` parameters. `$s` was updated to support excluded
     *              search terms, by prepending a hyphen.
     * @since 4.5.0 Removed the `$comments_popup` parameter.
     *              Introduced the `$comment_status` and `$ping_status` parameters.
     *              Introduced `RAND(x)` syntax for `$orderby`, which allows an integer seed value to random sorts.
     * @since 4.6.0 Added 'post_name__in' support for `$orderby`. Introduced the `$lazy_load_term_meta` argument.
     * @since 4.9.0 Introduced the `$comment_count` parameter.
     * @since 5.1.0 Introduced the `$meta_compare_key` parameter.
     * @since 5.3.0 Introduced the `$meta_type_key` parameter.
     * @since 6.1.0 Introduced the `$update_menu_item_cache` parameter.
     *
     * @param string|array $query {
     *     Optional. Array or string of Query parameters.
     *
     *     @type int             $attachment_id           Attachment post ID. Used for 'attachment' post_type.
     *     @type int|string      $author                  Author ID, or comma-separated list of IDs.
     *     @type string          $author_name             User 'user_nicename'.
     *     @type int[]           $author__in              An array of author IDs to query from.
     *     @type int[]           $author__not_in          An array of author IDs not to query from.
     *     @type bool            $cache_results           Whether to cache post information. Default true.
     *     @type int|string      $cat                     Category ID or comma-separated list of IDs (this or any children).
     *     @type int[]           $category__and           An array of category IDs (AND in).
     *     @type int[]           $category__in            An array of category IDs (OR in, no children).
     *     @type int[]           $category__not_in        An array of category IDs (NOT in).
     *     @type string          $category_name           Use category slug (not name, this or any children).
     *     @type array|int       $comment_count           Filter results by comment count. Provide an integer to match
     *                                                    comment count exactly. Provide an array with integer 'value'
     *                                                    and 'compare' operator ('=', '!=', '>', '>=', '<', '<=' ) to
     *                                                    compare against comment_count in a specific way.
     *     @type string          $comment_status          Comment status.
     *     @type int             $comments_per_page       The number of comments to return per page.
     *                                                    Default 'comments_per_page' option.
     *     @type array           $date_query              An associative array of WP_Date_Query arguments.
     *                                                    See WP_Date_Query::__construct().
     *     @type int             $day                     Day of the month. Default empty. Accepts numbers 1-31.
     *     @type bool            $exact                   Whether to search by exact keyword. Default false.
     *     @type string          $fields                  Post fields to query for. Accepts:
     *                                                    - '' Returns an array of complete post objects (`WP_Post[]`).
     *                                                    - 'ids' Returns an array of post IDs (`int[]`).
     *                                                    - 'id=>parent' Returns an associative array of parent post IDs,
     *                                                      keyed by post ID (`int[]`).
     *                                                    Default ''.
     *     @type int             $hour                    Hour of the day. Default empty. Accepts numbers 0-23.
     *     @type int|bool        $ignore_sticky_posts     Whether to ignore sticky posts or not. Setting this to false
     *                                                    excludes stickies from 'post__in'. Accepts 1|true, 0|false.
     *                                                    Default false.
     *     @type int             $m                       Combination YearMonth. Accepts any four-digit year and month
     *                                                    numbers 01-12. Default empty.
     *     @type string|string[] $meta_key                Meta key or keys to filter by.
     *     @type string|string[] $meta_value              Meta value or values to filter by.
     *     @type string          $meta_compare            MySQL operator used for comparing the meta value.
     *                                                    See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type string          $meta_compare_key        MySQL operator used for comparing the meta key.
     *                                                    See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type string          $meta_type               MySQL data type that the meta_value column will be CAST to for comparisons.
     *                                                    See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type string          $meta_type_key           MySQL data type that the meta_key column will be CAST to for comparisons.
     *                                                    See WP_Meta_Query::__construct() for accepted values and default value.
     *     @type array           $meta_query              An associative array of WP_Meta_Query arguments.
     *                                                    See WP_Meta_Query::__construct() for accepted values.
     *     @type int             $menu_order              The menu order of the posts.
     *     @type int             $minute                  Minute of the hour. Default empty. Accepts numbers 0-59.
     *     @type int             $monthnum                The two-digit month. Default empty. Accepts numbers 1-12.
     *     @type string          $name                    Post slug.
     *     @type bool            $nopaging                Show all posts (true) or paginate (false). Default false.
     *     @type bool            $no_found_rows           Whether to skip counting the total rows found. Enabling can improve
     *                                                    performance. Default false.
     *     @type int             $offset                  The number of posts to offset before retrieval.
     *     @type string          $order                   Designates ascending or descending order of posts. Default 'DESC'.
     *                                                    Accepts 'ASC', 'DESC'.
     *     @type string|array    $orderby                 Sort retrieved posts by parameter. One or more options may be passed.
     *                                                    To use 'meta_value', or 'meta_value_num', 'meta_key=keyname' must be
     *                                                    also be defined. To sort by a specific `$meta_query` clause, use that
     *                                                    clause's array key. Accepts:
     *                                                    - 'none'
     *                                                    - 'name'
     *                                                    - 'author'
     *                                                    - 'date'
     *                                                    - 'title'
     *                                                    - 'modified'
     *                                                    - 'menu_order'
     *                                                    - 'parent'
     *                                                    - 'ID'
     *                                                    - 'rand'
     *                                                    - 'relevance'
     *                                                    - 'RAND(x)' (where 'x' is an integer seed value)
     *                                                    - 'comment_count'
     *                                                    - 'meta_value'
     *                                                    - 'meta_value_num'
     *                                                    - 'post__in'
     *                                                    - 'post_name__in'
     *                                                    - 'post_parent__in'
     *                                                    - The array keys of `$meta_query`.
     *                                                    Default is 'date', except when a search is being performed, when
     *                                                    the default is 'relevance'.
     *     @type int             $p                       Post ID.
     *     @type int             $page                    Show the number of posts that would show up on page X of a
     *                                                    static front page.
     *     @type int             $paged                   The number of the current page.
     *     @type int             $page_id                 Page ID.
     *     @type string          $pagename                Page slug.
     *     @type string          $perm                    Show posts if user has the appropriate capability.
     *     @type string          $ping_status             Ping status.
     *     @type int[]           $post__in                An array of post IDs to retrieve, sticky posts will be included.
     *     @type int[]           $post__not_in            An array of post IDs not to retrieve. Note: a string of comma-
     *                                                    separated IDs will NOT work.
     *     @type string          $post_mime_type          The mime type of the post. Used for 'attachment' post_type.
     *     @type string[]        $post_name__in           An array of post slugs that results must match.
     *     @type int             $post_parent             Page ID to retrieve child pages for. Use 0 to only retrieve
     *                                                    top-level pages.
     *     @type int[]           $post_parent__in         An array containing parent page IDs to query child pages from.
     *     @type int[]           $post_parent__not_in     An array containing parent page IDs not to query child pages from.
     *     @type string|string[] $post_type               A post type slug (string) or array of post type slugs.
     *                                                    Default 'any' if using 'tax_query'.
     *     @type string|string[] $post_status             A post status (string) or array of post statuses.
     *     @type int             $posts_per_page          The number of posts to query for. Use -1 to request all posts.
     *     @type int             $posts_per_archive_page  The number of posts to query for by archive page. Overrides
     *                                                    'posts_per_page' when is_archive(), or is_search() are true.
     *     @type string          $s                       Search keyword(s). Prepending a term with a hyphen will
     *                                                    exclude posts matching that term. Eg, 'pillow -sofa' will
     *                                                    return posts containing 'pillow' but not 'sofa'. The
     *                                                    character used for exclusion can be modified using the
     *                                                    the 'wp_query_search_exclusion_prefix' filter.
     *     @type int             $second                  Second of the minute. Default empty. Accepts numbers 0-59.
     *     @type bool            $sentence                Whether to search by phrase. Default false.
     *     @type bool            $suppress_filters        Whether to suppress filters. Default false.
     *     @type string          $tag                     Tag slug. Comma-separated (either), Plus-separated (all).
     *     @type int[]           $tag__and                An array of tag IDs (AND in).
     *     @type int[]           $tag__in                 An array of tag IDs (OR in).
     *     @type int[]           $tag__not_in             An array of tag IDs (NOT in).
     *     @type int             $tag_id                  Tag id or comma-separated list of IDs.
     *     @type string[]        $tag_slug__and           An array of tag slugs (AND in).
     *     @type string[]        $tag_slug__in            An array of tag slugs (OR in). unless 'ignore_sticky_posts' is
     *                                                    true. Note: a string of comma-separated IDs will NOT work.
     *     @type array           $tax_query               An associative array of WP_Tax_Query arguments.
     *                                                    See WP_Tax_Query::__construct().
     *     @type string          $title                   Post title.
     *     @type bool            $update_post_meta_cache  Whether to update the post meta cache. Default true.
     *     @type bool            $update_post_term_cache  Whether to update the post term cache. Default true.
     *     @type bool            $update_menu_item_cache  Whether to update the menu item cache. Default false.
     *     @type bool            $lazy_load_term_meta     Whether to lazy-load term meta. Setting to false will
     *                                                    disable cache priming for term meta, so that each
     *                                                    get_term_meta() call will hit the database.
     *                                                    Defaults to the value of `$update_post_term_cache`.
     *     @type int             $w                       The week number of the year. Default empty. Accepts numbers 0-53.
     *     @type int             $year                    The four-digit year. Default empty. Accepts any four-digit year.
     * }
     * @phpstan-param array{
     *   attachment_id?: int,
     *   author?: int|string,
     *   author_name?: string,
     *   author__in?: int[],
     *   author__not_in?: int[],
     *   cache_results?: bool,
     *   cat?: int|string,
     *   category__and?: int[],
     *   category__in?: int[],
     *   category__not_in?: int[],
     *   category_name?: string,
     *   comment_count?: array|int,
     *   comment_status?: string,
     *   comments_per_page?: int,
     *   date_query?: array,
     *   day?: int,
     *   exact?: bool,
     *   fields?: string,
     *   hour?: int,
     *   ignore_sticky_posts?: int|bool,
     *   m?: int,
     *   meta_key?: string|string[],
     *   meta_value?: string|string[],
     *   meta_compare?: string,
     *   meta_compare_key?: string,
     *   meta_type?: string,
     *   meta_type_key?: string,
     *   meta_query?: array,
     *   menu_order?: int,
     *   minute?: int,
     *   monthnum?: int,
     *   name?: string,
     *   nopaging?: bool,
     *   no_found_rows?: bool,
     *   offset?: int,
     *   order?: string,
     *   orderby?: string|array,
     *   p?: int,
     *   page?: int,
     *   paged?: int,
     *   page_id?: int,
     *   pagename?: string,
     *   perm?: string,
     *   ping_status?: string,
     *   post__in?: int[],
     *   post__not_in?: int[],
     *   post_mime_type?: string,
     *   post_name__in?: string[],
     *   post_parent?: int,
     *   post_parent__in?: int[],
     *   post_parent__not_in?: int[],
     *   post_type?: string|string[],
     *   post_status?: string|string[],
     *   posts_per_page?: int,
     *   posts_per_archive_page?: int,
     *   s?: string,
     *   second?: int,
     *   sentence?: bool,
     *   suppress_filters?: bool,
     *   tag?: string,
     *   tag__and?: int[],
     *   tag__in?: int[],
     *   tag__not_in?: int[],
     *   tag_id?: int,
     *   tag_slug__and?: string[],
     *   tag_slug__in?: string[],
     *   tax_query?: array,
     *   title?: string,
     *   update_post_meta_cache?: bool,
     *   update_post_term_cache?: bool,
     *   update_menu_item_cache?: bool,
     *   lazy_load_term_meta?: bool,
     *   w?: int,
     *   year?: int,
     * } $query
     */
    public function parse_query($query = '')
    {
    }
    /**
     * Parses various taxonomy related query vars.
     *
     * For BC, this method is not marked as protected. See [28987].
     *
     * @since 3.1.0
     *
     * @param array $q The query variables. Passed by reference.
     */
    public function parse_tax_query(&$q)
    {
    }
    /**
     * Generates SQL for the WHERE clause based on passed search terms.
     *
     * @since 3.7.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $q Query variables.
     * @return string WHERE clause.
     */
    protected function parse_search(&$q)
    {
    }
    /**
     * Check if the terms are suitable for searching.
     *
     * Uses an array of stopwords (terms) that are excluded from the separate
     * term matching when searching for posts. The list of English stopwords is
     * the approximate search engines list, and is translatable.
     *
     * @since 3.7.0
     *
     * @param string[] $terms Array of terms to check.
     * @return string[] Terms that are not stopwords.
     */
    protected function parse_search_terms($terms)
    {
    }
    /**
     * Retrieve stopwords used when parsing search terms.
     *
     * @since 3.7.0
     *
     * @return string[] Stopwords.
     */
    protected function get_search_stopwords()
    {
    }
    /**
     * Generates SQL for the ORDER BY condition based on passed search terms.
     *
     * @since 3.7.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $q Query variables.
     * @return string ORDER BY clause.
     */
    protected function parse_search_order(&$q)
    {
    }
    /**
     * Converts the given orderby alias (if allowed) to a properly-prefixed value.
     *
     * @since 4.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $orderby Alias for the field to order by.
     * @return string|false Table-prefixed value to used in the ORDER clause. False otherwise.
     */
    protected function parse_orderby($orderby)
    {
    }
    /**
     * Parse an 'order' query variable and cast it to ASC or DESC as necessary.
     *
     * @since 4.0.0
     *
     * @param string $order The 'order' query variable.
     * @return string The sanitized 'order' query variable.
     */
    protected function parse_order($order)
    {
    }
    /**
     * Sets the 404 property and saves whether query is feed.
     *
     * @since 2.0.0
     */
    public function set_404()
    {
    }
    /**
     * Retrieves the value of a query variable.
     *
     * @since 1.5.0
     * @since 3.9.0 The `$default_value` argument was introduced.
     *
     * @param string $query_var     Query variable key.
     * @param mixed  $default_value Optional. Value to return if the query variable is not set. Default empty string.
     * @return mixed Contents of the query variable.
     */
    public function get($query_var, $default_value = '')
    {
    }
    /**
     * Sets the value of a query variable.
     *
     * @since 1.5.0
     *
     * @param string $query_var Query variable key.
     * @param mixed  $value     Query variable value.
     */
    public function set($query_var, $value)
    {
    }
    /**
     * Retrieves an array of posts based on query variables.
     *
     * There are a few filters and actions that can be used to modify the post
     * database query.
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return WP_Post[]|int[] Array of post objects or post IDs.
     */
    public function get_posts()
    {
    }
    /**
     * Set up the next post and iterate current post index.
     *
     * @since 1.5.0
     *
     * @return WP_Post Next post.
     */
    public function next_post()
    {
    }
    /**
     * Sets up the current post.
     *
     * Retrieves the next post, sets up the post, sets the 'in the loop'
     * property to true.
     *
     * @since 1.5.0
     *
     * @global WP_Post $post Global post object.
     */
    public function the_post()
    {
    }
    /**
     * Determines whether there are more posts available in the loop.
     *
     * Calls the {@see 'loop_end'} action when the loop is complete.
     *
     * @since 1.5.0
     *
     * @return bool True if posts are available, false if end of the loop.
     */
    public function have_posts()
    {
    }
    /**
     * Rewind the posts and reset post index.
     *
     * @since 1.5.0
     */
    public function rewind_posts()
    {
    }
    /**
     * Iterate current comment index and return WP_Comment object.
     *
     * @since 2.2.0
     *
     * @return WP_Comment Comment object.
     */
    public function next_comment()
    {
    }
    /**
     * Sets up the current comment.
     *
     * @since 2.2.0
     *
     * @global WP_Comment $comment Global comment object.
     */
    public function the_comment()
    {
    }
    /**
     * Whether there are more comments available.
     *
     * Automatically rewinds comments when finished.
     *
     * @since 2.2.0
     *
     * @return bool True if comments are available, false if no more comments.
     */
    public function have_comments()
    {
    }
    /**
     * Rewind the comments, resets the comment index and comment to first.
     *
     * @since 2.2.0
     */
    public function rewind_comments()
    {
    }
    /**
     * Sets up the WordPress query by parsing query string.
     *
     * @since 1.5.0
     *
     * @see WP_Query::parse_query() for all available arguments.
     *
     * @param string|array $query URL query string or array of query arguments.
     * @return WP_Post[]|int[] Array of post objects or post IDs.
     */
    public function query($query)
    {
    }
    /**
     * Retrieves the currently queried object.
     *
     * If queried object is not set, then the queried object will be set from
     * the category, tag, taxonomy, posts page, single post, page, or author
     * query variable. After it is set up, it will be returned.
     *
     * @since 1.5.0
     *
     * @return WP_Term|WP_Post_Type|WP_Post|WP_User|null The queried object.
     */
    public function get_queried_object()
    {
    }
    /**
     * Retrieves the ID of the currently queried object.
     *
     * @since 1.5.0
     *
     * @return int
     */
    public function get_queried_object_id()
    {
    }
    /**
     * Constructor.
     *
     * Sets up the WordPress query, if parameter is not empty.
     *
     * @since 1.5.0
     *
     * @see WP_Query::parse_query() for all available arguments.
     *
     * @param string|array $query URL query string or array of vars.
     */
    public function __construct($query = '')
    {
    }
    /**
     * Make private properties readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to get.
     * @return mixed Property.
     */
    public function __get($name)
    {
    }
    /**
     * Make private properties checkable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to check if set.
     * @return bool Whether the property is set.
     */
    public function __isset($name)
    {
    }
    /**
     * Make private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name      Method to call.
     * @param array  $arguments Arguments to pass when calling.
     * @return mixed|false Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Is the query for an existing archive page?
     *
     * Archive pages include category, tag, author, date, custom post type,
     * and custom taxonomy based archives.
     *
     * @since 3.1.0
     *
     * @see WP_Query::is_category()
     * @see WP_Query::is_tag()
     * @see WP_Query::is_author()
     * @see WP_Query::is_date()
     * @see WP_Query::is_post_type_archive()
     * @see WP_Query::is_tax()
     *
     * @return bool Whether the query is for an existing archive page.
     */
    public function is_archive()
    {
    }
    /**
     * Is the query for an existing post type archive page?
     *
     * @since 3.1.0
     *
     * @param string|string[] $post_types Optional. Post type or array of posts types
     *                                    to check against. Default empty.
     * @return bool Whether the query is for an existing post type archive page.
     */
    public function is_post_type_archive($post_types = '')
    {
    }
    /**
     * Is the query for an existing attachment page?
     *
     * @since 3.1.0
     *
     * @param int|string|int[]|string[] $attachment Optional. Attachment ID, title, slug, or array of such
     *                                              to check against. Default empty.
     * @return bool Whether the query is for an existing attachment page.
     */
    public function is_attachment($attachment = '')
    {
    }
    /**
     * Is the query for an existing author archive page?
     *
     * If the $author parameter is specified, this function will additionally
     * check if the query is for one of the authors specified.
     *
     * @since 3.1.0
     *
     * @param int|string|int[]|string[] $author Optional. User ID, nickname, nicename, or array of such
     *                                          to check against. Default empty.
     * @return bool Whether the query is for an existing author archive page.
     */
    public function is_author($author = '')
    {
    }
    /**
     * Is the query for an existing category archive page?
     *
     * If the $category parameter is specified, this function will additionally
     * check if the query is for one of the categories specified.
     *
     * @since 3.1.0
     *
     * @param int|string|int[]|string[] $category Optional. Category ID, name, slug, or array of such
     *                                            to check against. Default empty.
     * @return bool Whether the query is for an existing category archive page.
     */
    public function is_category($category = '')
    {
    }
    /**
     * Is the query for an existing tag archive page?
     *
     * If the $tag parameter is specified, this function will additionally
     * check if the query is for one of the tags specified.
     *
     * @since 3.1.0
     *
     * @param int|string|int[]|string[] $tag Optional. Tag ID, name, slug, or array of such
     *                                       to check against. Default empty.
     * @return bool Whether the query is for an existing tag archive page.
     */
    public function is_tag($tag = '')
    {
    }
    /**
     * Is the query for an existing custom taxonomy archive page?
     *
     * If the $taxonomy parameter is specified, this function will additionally
     * check if the query is for that specific $taxonomy.
     *
     * If the $term parameter is specified in addition to the $taxonomy parameter,
     * this function will additionally check if the query is for one of the terms
     * specified.
     *
     * @since 3.1.0
     *
     * @global WP_Taxonomy[] $wp_taxonomies Registered taxonomies.
     *
     * @param string|string[]           $taxonomy Optional. Taxonomy slug or slugs to check against.
     *                                            Default empty.
     * @param int|string|int[]|string[] $term     Optional. Term ID, name, slug, or array of such
     *                                            to check against. Default empty.
     * @return bool Whether the query is for an existing custom taxonomy archive page.
     *              True for custom taxonomy archive pages, false for built-in taxonomies
     *              (category and tag archives).
     */
    public function is_tax($taxonomy = '', $term = '')
    {
    }
    /**
     * Whether the current URL is within the comments popup window.
     *
     * @since 3.1.0
     * @deprecated 4.5.0
     *
     * @return false Always returns false.
     */
    public function is_comments_popup()
    {
    }
    /**
     * Is the query for an existing date archive?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for an existing date archive.
     */
    public function is_date()
    {
    }
    /**
     * Is the query for an existing day archive?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for an existing day archive.
     */
    public function is_day()
    {
    }
    /**
     * Is the query for a feed?
     *
     * @since 3.1.0
     *
     * @param string|string[] $feeds Optional. Feed type or array of feed types
     *                                         to check against. Default empty.
     * @return bool Whether the query is for a feed.
     */
    public function is_feed($feeds = '')
    {
    }
    /**
     * Is the query for a comments feed?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for a comments feed.
     */
    public function is_comment_feed()
    {
    }
    /**
     * Is the query for the front page of the site?
     *
     * This is for what is displayed at your site's main URL.
     *
     * Depends on the site's "Front page displays" Reading Settings 'show_on_front' and 'page_on_front'.
     *
     * If you set a static page for the front page of your site, this function will return
     * true when viewing that page.
     *
     * Otherwise the same as @see WP_Query::is_home()
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for the front page of the site.
     */
    public function is_front_page()
    {
    }
    /**
     * Is the query for the blog homepage?
     *
     * This is the page which shows the time based blog content of your site.
     *
     * Depends on the site's "Front page displays" Reading Settings 'show_on_front' and 'page_for_posts'.
     *
     * If you set a static page for the front page of your site, this function will return
     * true only on the page you set as the "Posts page".
     *
     * @since 3.1.0
     *
     * @see WP_Query::is_front_page()
     *
     * @return bool Whether the query is for the blog homepage.
     */
    public function is_home()
    {
    }
    /**
     * Is the query for the Privacy Policy page?
     *
     * This is the page which shows the Privacy Policy content of your site.
     *
     * Depends on the site's "Change your Privacy Policy page" Privacy Settings 'wp_page_for_privacy_policy'.
     *
     * This function will return true only on the page you set as the "Privacy Policy page".
     *
     * @since 5.2.0
     *
     * @return bool Whether the query is for the Privacy Policy page.
     */
    public function is_privacy_policy()
    {
    }
    /**
     * Is the query for an existing month archive?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for an existing month archive.
     */
    public function is_month()
    {
    }
    /**
     * Is the query for an existing single page?
     *
     * If the $page parameter is specified, this function will additionally
     * check if the query is for one of the pages specified.
     *
     * @since 3.1.0
     *
     * @see WP_Query::is_single()
     * @see WP_Query::is_singular()
     *
     * @param int|string|int[]|string[] $page Optional. Page ID, title, slug, path, or array of such
     *                                        to check against. Default empty.
     * @return bool Whether the query is for an existing single page.
     */
    public function is_page($page = '')
    {
    }
    /**
     * Is the query for a paged result and not for the first page?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for a paged result.
     */
    public function is_paged()
    {
    }
    /**
     * Is the query for a post or page preview?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for a post or page preview.
     */
    public function is_preview()
    {
    }
    /**
     * Is the query for the robots.txt file?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for the robots.txt file.
     */
    public function is_robots()
    {
    }
    /**
     * Is the query for the favicon.ico file?
     *
     * @since 5.4.0
     *
     * @return bool Whether the query is for the favicon.ico file.
     */
    public function is_favicon()
    {
    }
    /**
     * Is the query for a search?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for a search.
     */
    public function is_search()
    {
    }
    /**
     * Is the query for an existing single post?
     *
     * Works for any post type excluding pages.
     *
     * If the $post parameter is specified, this function will additionally
     * check if the query is for one of the Posts specified.
     *
     * @since 3.1.0
     *
     * @see WP_Query::is_page()
     * @see WP_Query::is_singular()
     *
     * @param int|string|int[]|string[] $post Optional. Post ID, title, slug, path, or array of such
     *                                        to check against. Default empty.
     * @return bool Whether the query is for an existing single post.
     */
    public function is_single($post = '')
    {
    }
    /**
     * Is the query for an existing single post of any post type (post, attachment, page,
     * custom post types)?
     *
     * If the $post_types parameter is specified, this function will additionally
     * check if the query is for one of the Posts Types specified.
     *
     * @since 3.1.0
     *
     * @see WP_Query::is_page()
     * @see WP_Query::is_single()
     *
     * @param string|string[] $post_types Optional. Post type or array of post types
     *                                    to check against. Default empty.
     * @return bool Whether the query is for an existing single post
     *              or any of the given post types.
     */
    public function is_singular($post_types = '')
    {
    }
    /**
     * Is the query for a specific time?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for a specific time.
     */
    public function is_time()
    {
    }
    /**
     * Is the query for a trackback endpoint call?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for a trackback endpoint call.
     */
    public function is_trackback()
    {
    }
    /**
     * Is the query for an existing year archive?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is for an existing year archive.
     */
    public function is_year()
    {
    }
    /**
     * Is the query a 404 (returns no results)?
     *
     * @since 3.1.0
     *
     * @return bool Whether the query is a 404 error.
     */
    public function is_404()
    {
    }
    /**
     * Is the query for an embedded post?
     *
     * @since 4.4.0
     *
     * @return bool Whether the query is for an embedded post.
     */
    public function is_embed()
    {
    }
    /**
     * Is the query the main query?
     *
     * @since 3.3.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @return bool Whether the query is the main query.
     */
    public function is_main_query()
    {
    }
    /**
     * Set up global post data.
     *
     * @since 4.1.0
     * @since 4.4.0 Added the ability to pass a post ID to `$post`.
     *
     * @global int     $id
     * @global WP_User $authordata
     * @global string  $currentday
     * @global string  $currentmonth
     * @global int     $page
     * @global array   $pages
     * @global int     $multipage
     * @global int     $more
     * @global int     $numpages
     *
     * @param WP_Post|object|int $post WP_Post instance or Post ID/object.
     * @return true True when finished.
     */
    public function setup_postdata($post)
    {
    }
    /**
     * Generate post data.
     *
     * @since 5.2.0
     *
     * @param WP_Post|object|int $post WP_Post instance or Post ID/object.
     * @return array|false Elements of post or false on failure.
     */
    public function generate_postdata($post)
    {
    }
    /**
     * Generate cache key.
     *
     * @since 6.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array  $args Query arguments.
     * @param string $sql  SQL statement.
     *
     * @return string Cache key.
     */
    protected function generate_cache_key(array $args, $sql)
    {
    }
    /**
     * After looping through a nested query, this function
     * restores the $post global to the current post in this query.
     *
     * @since 3.7.0
     *
     * @global WP_Post $post Global post object.
     */
    public function reset_postdata()
    {
    }
    /**
     * Lazyload term meta for posts in the loop.
     *
     * @since 4.4.0
     * @deprecated 4.5.0 See wp_queue_posts_for_term_meta_lazyload().
     *
     * @param mixed $check
     * @param int   $term_id
     * @return mixed
     */
    public function lazyload_term_meta($check, $term_id)
    {
    }
    /**
     * Lazyload comment meta for comments in the loop.
     *
     * @since 4.4.0
     * @deprecated 4.5.0 See wp_queue_comments_for_comment_meta_lazyload().
     *
     * @param mixed $check
     * @param int   $comment_id
     * @return mixed
     */
    public function lazyload_comment_meta($check, $comment_id)
    {
    }
}