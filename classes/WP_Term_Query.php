<?php


/**
 * Taxonomy API: WP_Term_Query class.
 *
 * @package WordPress
 * @subpackage Taxonomy
 * @since 4.6.0
 */
/**
 * Class used for querying terms.
 *
 * @since 4.6.0
 *
 * @see WP_Term_Query::__construct() for accepted arguments.
 */
class WP_Term_Query
{
    /**
     * SQL string used to perform database query.
     *
     * @since 4.6.0
     * @var string
     */
    public $request;
    /**
     * Metadata query container.
     *
     * @since 4.6.0
     * @var object WP_Meta_Query
     */
    public $meta_query = \false;
    /**
     * Metadata query clauses.
     *
     * @since 4.6.0
     * @var array
     */
    protected $meta_query_clauses;
    /**
     * SQL query clauses.
     *
     * @since 4.6.0
     * @var array
     */
    protected $sql_clauses = array('select' => '', 'from' => '', 'where' => array(), 'orderby' => '', 'limits' => '');
    /**
     * Query vars set by the user.
     *
     * @since 4.6.0
     * @var array
     */
    public $query_vars;
    /**
     * Default values for query vars.
     *
     * @since 4.6.0
     * @var array
     */
    public $query_var_defaults;
    /**
     * List of terms located by the query.
     *
     * @since 4.6.0
     * @var array
     */
    public $terms;
    /**
     * Constructor.
     *
     * Sets up the term query, based on the query vars passed.
     *
     * @since 4.6.0
     * @since 4.6.0 Introduced 'term_taxonomy_id' parameter.
     * @since 4.7.0 Introduced 'object_ids' parameter.
     * @since 4.9.0 Added 'slug__in' support for 'orderby'.
     *
     * @param string|array $query {
     *     Optional. Array or query string of term query parameters. Default empty.
     *
     *     @type string|array $taxonomy               Taxonomy name, or array of taxonomies, to which results should
     *                                                be limited.
     *     @type int|array    $object_ids             Optional. Object ID, or array of object IDs. Results will be
     *                                                limited to terms associated with these objects.
     *     @type string       $orderby                Field(s) to order terms by. Accepts term fields ('name',
     *                                                'slug', 'term_group', 'term_id', 'id', 'description', 'parent'),
     *                                                'count' for term taxonomy count, 'include' to match the
     *                                                'order' of the $include param, 'slug__in' to match the
     *                                                'order' of the $slug param, 'meta_value', 'meta_value_num',
     *                                                the value of `$meta_key`, the array keys of `$meta_query`, or
     *                                                'none' to omit the ORDER BY clause. Defaults to 'name'.
     *     @type string       $order                  Whether to order terms in ascending or descending order.
     *                                                Accepts 'ASC' (ascending) or 'DESC' (descending).
     *                                                Default 'ASC'.
     *     @type bool|int     $hide_empty             Whether to hide terms not assigned to any posts. Accepts
     *                                                1|true or 0|false. Default 1|true.
     *     @type array|string $include                Array or comma/space-separated string of term ids to include.
     *                                                Default empty array.
     *     @type array|string $exclude                Array or comma/space-separated string of term ids to exclude.
     *                                                If $include is non-empty, $exclude is ignored.
     *                                                Default empty array.
     *     @type array|string $exclude_tree           Array or comma/space-separated string of term ids to exclude
     *                                                along with all of their descendant terms. If $include is
     *                                                non-empty, $exclude_tree is ignored. Default empty array.
     *     @type int|string   $number                 Maximum number of terms to return. Accepts ''|0 (all) or any
     *                                                positive number. Default ''|0 (all). Note that $number may
     *                                                not return accurate results when coupled with $object_ids.
     *                                                See #41796 for details.
     *     @type int          $offset                 The number by which to offset the terms query. Default empty.
     *     @type string       $fields                 Term fields to query for. Accepts:
     *                                                - 'all' Returns an array of complete term objects (`WP_Term[]`).
     *                                                - 'all_with_object_id' Returns an array of term objects with the 'object_id'
     *                                                  param (`WP_Term[]`). Works only when the `$object_ids` parameter is populated.
     *                                                - 'ids' Returns an array of term IDs (`int[]`).
     *                                                - 'tt_ids' Returns an array of term taxonomy IDs (`int[]`).
     *                                                - 'names' Returns an array of term names (`string[]`).
     *                                                - 'slugs' Returns an array of term slugs (`string[]`).
     *                                                - 'count' Returns the number of matching terms (`int`).
     *                                                - 'id=>parent' Returns an associative array of parent term IDs, keyed by term ID (`int[]`).
     *                                                - 'id=>name' Returns an associative array of term names, keyed by term ID (`string[]`).
     *                                                - 'id=>slug' Returns an associative array of term slugs, keyed by term ID (`string[]`).
     *                                                Default 'all'.
     *     @type bool         $count                  Whether to return a term count. Will take precedence over `$fields` if true.
     *                                                Default false.
     *     @type string|array $name                   Optional. Name or array of names to return term(s) for.
     *                                                Default empty.
     *     @type string|array $slug                   Optional. Slug or array of slugs to return term(s) for.
     *                                                Default empty.
     *     @type int|array    $term_taxonomy_id       Optional. Term taxonomy ID, or array of term taxonomy IDs,
     *                                                to match when querying terms.
     *     @type bool         $hierarchical           Whether to include terms that have non-empty descendants (even
     *                                                if $hide_empty is set to true). Default true.
     *     @type string       $search                 Search criteria to match terms. Will be SQL-formatted with
     *                                                wildcards before and after. Default empty.
     *     @type string       $name__like             Retrieve terms with criteria by which a term is LIKE
     *                                                `$name__like`. Default empty.
     *     @type string       $description__like      Retrieve terms where the description is LIKE
     *                                                `$description__like`. Default empty.
     *     @type bool         $pad_counts             Whether to pad the quantity of a term's children in the
     *                                                quantity of each term's "count" object variable.
     *                                                Default false.
     *     @type string       $get                    Whether to return terms regardless of ancestry or whether the
     *                                                terms are empty. Accepts 'all' or empty (disabled).
     *                                                Default empty.
     *     @type int          $child_of               Term ID to retrieve child terms of. If multiple taxonomies
     *                                                are passed, $child_of is ignored. Default 0.
     *     @type int|string   $parent                 Parent term ID to retrieve direct-child terms of.
     *                                                Default empty.
     *     @type bool         $childless              True to limit results to terms that have no children.
     *                                                This parameter has no effect on non-hierarchical taxonomies.
     *                                                Default false.
     *     @type string       $cache_domain           Unique cache key to be produced when this query is stored in
     *                                                an object cache. Default is 'core'.
     *     @type bool         $update_term_meta_cache Whether to prime meta caches for matched terms. Default true.
     *     @type array        $meta_query             Optional. Meta query clauses to limit retrieved terms by.
     *                                                See `WP_Meta_Query`. Default empty.
     *     @type string       $meta_key               Limit terms to those matching a specific metadata key.
     *                                                Can be used in conjunction with `$meta_value`. Default empty.
     *     @type string       $meta_value             Limit terms to those matching a specific metadata value.
     *                                                Usually used in conjunction with `$meta_key`. Default empty.
     *     @type string       $meta_type              MySQL data type that the `$meta_value` will be CAST to for
     *                                                comparisons. Default empty.
     *     @type string       $meta_compare           Comparison operator to test the 'meta_value'. Default empty.
     * }
     * @phpstan-param array{
     *   taxonomy?: string|array,
     *   object_ids?: int|array,
     *   orderby?: string,
     *   order?: string,
     *   hide_empty?: bool|int,
     *   include?: array|string,
     *   exclude?: array|string,
     *   exclude_tree?: array|string,
     *   number?: int|string,
     *   offset?: int,
     *   fields?: string,
     *   count?: bool,
     *   name?: string|array,
     *   slug?: string|array,
     *   term_taxonomy_id?: int|array,
     *   hierarchical?: bool,
     *   search?: string,
     *   name__like?: string,
     *   description__like?: string,
     *   pad_counts?: bool,
     *   get?: string,
     *   child_of?: int,
     *   parent?: int|string,
     *   childless?: bool,
     *   cache_domain?: string,
     *   update_term_meta_cache?: bool,
     *   meta_query?: array,
     *   meta_key?: string,
     *   meta_value?: string,
     *   meta_type?: string,
     *   meta_compare?: string,
     * } $query
     */
    public function __construct($query = '')
    {
    }
    /**
     * Parse arguments passed to the term query with default query parameters.
     *
     * @since 4.6.0
     *
     * @param string|array $query WP_Term_Query arguments. See WP_Term_Query::__construct()
     * @phpstan-param array{
     *   taxonomy?: string|array,
     *   object_ids?: int|array,
     *   orderby?: string,
     *   order?: string,
     *   hide_empty?: bool|int,
     *   include?: array|string,
     *   exclude?: array|string,
     *   exclude_tree?: array|string,
     *   number?: int|string,
     *   offset?: int,
     *   fields?: string,
     *   count?: bool,
     *   name?: string|array,
     *   slug?: string|array,
     *   term_taxonomy_id?: int|array,
     *   hierarchical?: bool,
     *   search?: string,
     *   name__like?: string,
     *   description__like?: string,
     *   pad_counts?: bool,
     *   get?: string,
     *   child_of?: int,
     *   parent?: int|string,
     *   childless?: bool,
     *   cache_domain?: string,
     *   update_term_meta_cache?: bool,
     *   meta_query?: array,
     *   meta_key?: string,
     *   meta_value?: string,
     *   meta_type?: string,
     *   meta_compare?: string,
     * } $query See WP_Term_Query::__construct()
     */
    public function parse_query($query = '')
    {
    }
    /**
     * Sets up the query for retrieving terms.
     *
     * @since 4.6.0
     *
     * @param string|array $query Array or URL query string of parameters.
     * @return array|int List of terms, or number of terms when 'count' is passed as a query var.
     */
    public function query($query)
    {
    }
    /**
     * Get terms, based on query_vars.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @return array List of terms.
     */
    public function get_terms()
    {
    }
    /**
     * Parse and sanitize 'orderby' keys passed to the term query.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $orderby_raw Alias for the field to order by.
     * @return string|false Value to used in the ORDER clause. False otherwise.
     */
    protected function parse_orderby($orderby_raw)
    {
    }
    /**
     * Generate the ORDER BY clause for an 'orderby' param that is potentially related to a meta query.
     *
     * @since 4.6.0
     *
     * @param string $orderby_raw Raw 'orderby' value passed to WP_Term_Query.
     * @return string ORDER BY clause.
     */
    protected function parse_orderby_meta($orderby_raw)
    {
    }
    /**
     * Parse an 'order' query variable and cast it to ASC or DESC as necessary.
     *
     * @since 4.6.0
     *
     * @param string $order The 'order' query variable.
     * @return string The sanitized 'order' query variable.
     */
    protected function parse_order($order)
    {
    }
    /**
     * Used internally to generate a SQL string related to the 'search' parameter.
     *
     * @since 4.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $string
     * @return string
     */
    protected function get_search_sql($string)
    {
    }
    /**
     * Creates an array of term objects from an array of term IDs.
     *
     * Also discards invalid term objects.
     *
     * @since 4.9.8
     *
     * @param array $term_ids Term IDs.
     * @return array
     */
    protected function populate_terms($term_ids)
    {
    }
}