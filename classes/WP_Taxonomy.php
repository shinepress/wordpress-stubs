<?php


/**
 * Taxonomy API: WP_Taxonomy class
 *
 * @package WordPress
 * @subpackage Taxonomy
 * @since 4.7.0
 */
/**
 * Core class used for interacting with taxonomies.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
final class WP_Taxonomy
{
    /**
     * Taxonomy key.
     *
     * @since 4.7.0
     * @var string
     */
    public $name;
    /**
     * Name of the taxonomy shown in the menu. Usually plural.
     *
     * @since 4.7.0
     * @var string
     */
    public $label;
    /**
     * Labels object for this taxonomy.
     *
     * If not set, tag labels are inherited for non-hierarchical types
     * and category labels for hierarchical ones.
     *
     * @see get_taxonomy_labels()
     *
     * @since 4.7.0
     * @var stdClass
     */
    public $labels;
    /**
     * A short descriptive summary of what the taxonomy is for.
     *
     * @since 4.7.0
     * @var string
     */
    public $description = '';
    /**
     * Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users.
     *
     * @since 4.7.0
     * @var bool
     */
    public $public = \true;
    /**
     * Whether the taxonomy is publicly queryable.
     *
     * @since 4.7.0
     * @var bool
     */
    public $publicly_queryable = \true;
    /**
     * Whether the taxonomy is hierarchical.
     *
     * @since 4.7.0
     * @var bool
     */
    public $hierarchical = \false;
    /**
     * Whether to generate and allow a UI for managing terms in this taxonomy in the admin.
     *
     * @since 4.7.0
     * @var bool
     */
    public $show_ui = \true;
    /**
     * Whether to show the taxonomy in the admin menu.
     *
     * If true, the taxonomy is shown as a submenu of the object type menu. If false, no menu is shown.
     *
     * @since 4.7.0
     * @var bool
     */
    public $show_in_menu = \true;
    /**
     * Whether the taxonomy is available for selection in navigation menus.
     *
     * @since 4.7.0
     * @var bool
     */
    public $show_in_nav_menus = \true;
    /**
     * Whether to list the taxonomy in the tag cloud widget controls.
     *
     * @since 4.7.0
     * @var bool
     */
    public $show_tagcloud = \true;
    /**
     * Whether to show the taxonomy in the quick/bulk edit panel.
     *
     * @since 4.7.0
     * @var bool
     */
    public $show_in_quick_edit = \true;
    /**
     * Whether to display a column for the taxonomy on its post type listing screens.
     *
     * @since 4.7.0
     * @var bool
     */
    public $show_admin_column = \false;
    /**
     * The callback function for the meta box display.
     *
     * @since 4.7.0
     * @var bool|callable
     */
    public $meta_box_cb = \null;
    /**
     * The callback function for sanitizing taxonomy data saved from a meta box.
     *
     * @since 5.1.0
     * @var callable
     */
    public $meta_box_sanitize_cb = \null;
    /**
     * An array of object types this taxonomy is registered for.
     *
     * @since 4.7.0
     * @var string[]
     */
    public $object_type = \null;
    /**
     * Capabilities for this taxonomy.
     *
     * @since 4.7.0
     * @var stdClass
     */
    public $cap;
    /**
     * Rewrites information for this taxonomy.
     *
     * @since 4.7.0
     * @var array|false
     */
    public $rewrite;
    /**
     * Query var string for this taxonomy.
     *
     * @since 4.7.0
     * @var string|false
     */
    public $query_var;
    /**
     * Function that will be called when the count is updated.
     *
     * @since 4.7.0
     * @var callable
     */
    public $update_count_callback;
    /**
     * Whether this taxonomy should appear in the REST API.
     *
     * Default false. If true, standard endpoints will be registered with
     * respect to $rest_base and $rest_controller_class.
     *
     * @since 4.7.4
     * @var bool $show_in_rest
     */
    public $show_in_rest;
    /**
     * The base path for this taxonomy's REST API endpoints.
     *
     * @since 4.7.4
     * @var string|bool $rest_base
     */
    public $rest_base;
    /**
     * The namespace for this taxonomy's REST API endpoints.
     *
     * @since 5.9.0
     * @var string|bool $rest_namespace
     */
    public $rest_namespace;
    /**
     * The controller for this taxonomy's REST API endpoints.
     *
     * Custom controllers must extend WP_REST_Controller.
     *
     * @since 4.7.4
     * @var string|bool $rest_controller_class
     */
    public $rest_controller_class;
    /**
     * The controller instance for this taxonomy's REST API endpoints.
     *
     * Lazily computed. Should be accessed using {@see WP_Taxonomy::get_rest_controller()}.
     *
     * @since 5.5.0
     * @var WP_REST_Controller $rest_controller
     */
    public $rest_controller;
    /**
     * The default term name for this taxonomy. If you pass an array you have
     * to set 'name' and optionally 'slug' and 'description'.
     *
     * @since 5.5.0
     * @var array|string
     */
    public $default_term;
    /**
     * Whether terms in this taxonomy should be sorted in the order they are provided to `wp_set_object_terms()`.
     *
     * Use this in combination with `'orderby' => 'term_order'` when fetching terms.
     *
     * @since 2.5.0
     * @var bool|null
     */
    public $sort = \null;
    /**
     * Array of arguments to automatically use inside `wp_get_object_terms()` for this taxonomy.
     *
     * @since 2.6.0
     * @var array|null
     */
    public $args = \null;
    /**
     * Whether it is a built-in taxonomy.
     *
     * @since 4.7.0
     * @var bool
     */
    public $_builtin;
    /**
     * Constructor.
     *
     * See the register_taxonomy() function for accepted arguments for `$args`.
     *
     * @since 4.7.0
     *
     * @param string       $taxonomy    Taxonomy key, must not exceed 32 characters.
     * @param array|string $object_type Name of the object type for the taxonomy object.
     * @param array|string $args        Optional. Array or query string of arguments for registering a taxonomy.
     *                                  Default empty array.
     */
    public function __construct($taxonomy, $object_type, $args = array())
    {
    }
    /**
     * Sets taxonomy properties.
     *
     * See the register_taxonomy() function for accepted arguments for `$args`.
     *
     * @since 4.7.0
     *
     * @param string|string[] $object_type Name or array of names of the object types for the taxonomy.
     * @param array|string    $args        Array or query string of arguments for registering a taxonomy.
     */
    public function set_props($object_type, $args)
    {
    }
    /**
     * Adds the necessary rewrite rules for the taxonomy.
     *
     * @since 4.7.0
     *
     * @global WP $wp Current WordPress environment instance.
     */
    public function add_rewrite_rules()
    {
    }
    /**
     * Removes any rewrite rules, permastructs, and rules for the taxonomy.
     *
     * @since 4.7.0
     *
     * @global WP $wp Current WordPress environment instance.
     */
    public function remove_rewrite_rules()
    {
    }
    /**
     * Registers the ajax callback for the meta box.
     *
     * @since 4.7.0
     */
    public function add_hooks()
    {
    }
    /**
     * Removes the ajax callback for the meta box.
     *
     * @since 4.7.0
     */
    public function remove_hooks()
    {
    }
    /**
     * Gets the REST API controller for this taxonomy.
     *
     * Will only instantiate the controller class once per request.
     *
     * @since 5.5.0
     *
     * @return WP_REST_Controller|null The controller instance, or null if the taxonomy
     *                                 is set not to show in rest.
     */
    public function get_rest_controller()
    {
    }
    /**
     * Returns the default labels for taxonomies.
     *
     * @since 6.0.0
     *
     * @return (string|null)[][] The default labels for taxonomies.
     */
    public static function get_default_labels()
    {
    }
    /**
     * Resets the cache for the default labels.
     *
     * @since 6.0.0
     */
    public static function reset_default_labels()
    {
    }
}