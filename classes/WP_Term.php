<?php


/**
 * Taxonomy API: WP_Term class
 *
 * @package WordPress
 * @subpackage Taxonomy
 * @since 4.4.0
 */
/**
 * Core class used to implement the WP_Term object.
 *
 * @since 4.4.0
 *
 * @property-read object $data Sanitized term data.
 */
final class WP_Term
{
    /**
     * Term ID.
     *
     * @since 4.4.0
     * @var int
     */
    public $term_id;
    /**
     * The term's name.
     *
     * @since 4.4.0
     * @var string
     */
    public $name = '';
    /**
     * The term's slug.
     *
     * @since 4.4.0
     * @var string
     */
    public $slug = '';
    /**
     * The term's term_group.
     *
     * @since 4.4.0
     * @var string
     */
    public $term_group = '';
    /**
     * Term Taxonomy ID.
     *
     * @since 4.4.0
     * @var int
     */
    public $term_taxonomy_id = 0;
    /**
     * The term's taxonomy name.
     *
     * @since 4.4.0
     * @var string
     */
    public $taxonomy = '';
    /**
     * The term's description.
     *
     * @since 4.4.0
     * @var string
     */
    public $description = '';
    /**
     * ID of a term's parent term.
     *
     * @since 4.4.0
     * @var int
     */
    public $parent = 0;
    /**
     * Cached object count for this term.
     *
     * @since 4.4.0
     * @var int
     */
    public $count = 0;
    /**
     * Stores the term object's sanitization level.
     *
     * Does not correspond to a database field.
     *
     * @since 4.4.0
     * @var string
     */
    public $filter = 'raw';
    /**
     * Retrieve WP_Term instance.
     *
     * @since 4.4.0
     * @static
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int    $term_id  Term ID.
     * @param string $taxonomy Optional. Limit matched terms to those matching `$taxonomy`. Only used for
     *                         disambiguating potentially shared terms.
     * @return WP_Term|WP_Error|false Term object, if found. WP_Error if `$term_id` is shared between taxonomies and
     *                                there's insufficient data to distinguish which term is intended.
     *                                False for other failures.
     */
    public static function get_instance($term_id, $taxonomy = \null)
    {
    }
    /**
     * Constructor.
     *
     * @since 4.4.0
     *
     * @param WP_Term|object $term Term object.
     */
    public function __construct($term)
    {
    }
    /**
     * Sanitizes term fields, according to the filter type provided.
     *
     * @since 4.4.0
     *
     * @param string $filter Filter context. Accepts 'edit', 'db', 'display', 'attribute', 'js', 'raw'.
     */
    public function filter($filter)
    {
    }
    /**
     * Converts an object to array.
     *
     * @since 4.4.0
     *
     * @return array Object as array.
     */
    public function to_array()
    {
    }
    /**
     * Getter.
     *
     * @since 4.4.0
     *
     * @param string $key Property to get.
     * @return mixed Property value.
     */
    public function __get($key)
    {
    }
}