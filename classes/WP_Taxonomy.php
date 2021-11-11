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
     * An array of labels for this taxonomy.
     *
     * @since 4.7.0
     * @var object
     */
    public $labels = array();
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
     * An array of object types this taxonomy is registered for.
     *
     * @since 4.7.0
     * @var array
     */
    public $object_type = \null;
    /**
     * Capabilities for this taxonomy.
     *
     * @since 4.7.0
     * @var array
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
     * The controller for this taxonomy's REST API endpoints.
     *
     * Custom controllers must extend WP_REST_Controller.
     *
     * @since 4.7.4
     * @var string|bool $rest_controller_class
     */
    public $rest_controller_class;
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
     * @since 4.7.0
     *
     * @global WP $wp WP instance.
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
     * @since 4.7.0
     *
     * @param array|string $object_type Name of the object type for the taxonomy object.
     * @param array|string $args        Array or query string of arguments for registering a taxonomy.
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
}