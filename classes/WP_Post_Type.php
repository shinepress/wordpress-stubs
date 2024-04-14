<?php


/**
 * Post API: WP_Post_Type class
 *
 * @package WordPress
 * @subpackage Post
 * @since 4.6.0
 */
/**
 * Core class used for interacting with post types.
 *
 * @since 4.6.0
 *
 * @see register_post_type()
 */
final class WP_Post_Type
{
    /**
     * Post type key.
     *
     * @since 4.6.0
     * @var string $name
     */
    public $name;
    /**
     * Name of the post type shown in the menu. Usually plural.
     *
     * @since 4.6.0
     * @var string $label
     */
    public $label;
    /**
     * Labels object for this post type.
     *
     * If not set, post labels are inherited for non-hierarchical types
     * and page labels for hierarchical ones.
     *
     * @see get_post_type_labels()
     *
     * @since 4.6.0
     * @var object $labels
     */
    public $labels;
    /**
     * A short descriptive summary of what the post type is.
     *
     * Default empty.
     *
     * @since 4.6.0
     * @var string $description
     */
    public $description = '';
    /**
     * Whether a post type is intended for use publicly either via the admin interface or by front-end users.
     *
     * While the default settings of $exclude_from_search, $publicly_queryable, $show_ui, and $show_in_nav_menus
     * are inherited from public, each does not rely on this relationship and controls a very specific intention.
     *
     * Default false.
     *
     * @since 4.6.0
     * @var bool $public
     */
    public $public = \false;
    /**
     * Whether the post type is hierarchical (e.g. page).
     *
     * Default false.
     *
     * @since 4.6.0
     * @var bool $hierarchical
     */
    public $hierarchical = \false;
    /**
     * Whether to exclude posts with this post type from front end search
     * results.
     *
     * Default is the opposite value of $public.
     *
     * @since 4.6.0
     * @var bool $exclude_from_search
     */
    public $exclude_from_search = \null;
    /**
     * Whether queries can be performed on the front end for the post type as part of `parse_request()`.
     *
     * Endpoints would include:
     * - `?post_type={post_type_key}`
     * - `?{post_type_key}={single_post_slug}`
     * - `?{post_type_query_var}={single_post_slug}`
     *
     * Default is the value of $public.
     *
     * @since 4.6.0
     * @var bool $publicly_queryable
     */
    public $publicly_queryable = \null;
    /**
     * Whether to generate and allow a UI for managing this post type in the admin.
     *
     * Default is the value of $public.
     *
     * @since 4.6.0
     * @var bool $show_ui
     */
    public $show_ui = \null;
    /**
     * Where to show the post type in the admin menu.
     *
     * To work, $show_ui must be true. If true, the post type is shown in its own top level menu. If false, no menu is
     * shown. If a string of an existing top level menu (eg. 'tools.php' or 'edit.php?post_type=page'), the post type
     * will be placed as a sub-menu of that.
     *
     * Default is the value of $show_ui.
     *
     * @since 4.6.0
     * @var bool $show_in_menu
     */
    public $show_in_menu = \null;
    /**
     * Makes this post type available for selection in navigation menus.
     *
     * Default is the value $public.
     *
     * @since 4.6.0
     * @var bool $show_in_nav_menus
     */
    public $show_in_nav_menus = \null;
    /**
     * Makes this post type available via the admin bar.
     *
     * Default is the value of $show_in_menu.
     *
     * @since 4.6.0
     * @var bool $show_in_admin_bar
     */
    public $show_in_admin_bar = \null;
    /**
     * The position in the menu order the post type should appear.
     *
     * To work, $show_in_menu must be true. Default null (at the bottom).
     *
     * @since 4.6.0
     * @var int $menu_position
     */
    public $menu_position = \null;
    /**
     * The URL to the icon to be used for this menu.
     *
     * Pass a base64-encoded SVG using a data URI, which will be colored to match the color scheme.
     * This should begin with 'data:image/svg+xml;base64,'. Pass the name of a Dashicons helper class
     * to use a font icon, e.g. 'dashicons-chart-pie'. Pass 'none' to leave div.wp-menu-image empty
     * so an icon can be added via CSS.
     *
     * Defaults to use the posts icon.
     *
     * @since 4.6.0
     * @var string $menu_icon
     */
    public $menu_icon = \null;
    /**
     * The string to use to build the read, edit, and delete capabilities.
     *
     * May be passed as an array to allow for alternative plurals when using
     * this argument as a base to construct the capabilities, e.g.
     * array( 'story', 'stories' ). Default 'post'.
     *
     * @since 4.6.0
     * @var string $capability_type
     */
    public $capability_type = 'post';
    /**
     * Whether to use the internal default meta capability handling.
     *
     * Default false.
     *
     * @since 4.6.0
     * @var bool $map_meta_cap
     */
    public $map_meta_cap = \false;
    /**
     * Provide a callback function that sets up the meta boxes for the edit form.
     *
     * Do `remove_meta_box()` and `add_meta_box()` calls in the callback. Default null.
     *
     * @since 4.6.0
     * @var callable $register_meta_box_cb
     */
    public $register_meta_box_cb = \null;
    /**
     * An array of taxonomy identifiers that will be registered for the post type.
     *
     * Taxonomies can be registered later with `register_taxonomy()` or `register_taxonomy_for_object_type()`.
     *
     * Default empty array.
     *
     * @since 4.6.0
     * @var array $taxonomies
     */
    public $taxonomies = array();
    /**
     * Whether there should be post type archives, or if a string, the archive slug to use.
     *
     * Will generate the proper rewrite rules if $rewrite is enabled. Default false.
     *
     * @since 4.6.0
     * @var bool|string $has_archive
     */
    public $has_archive = \false;
    /**
     * Sets the query_var key for this post type.
     *
     * Defaults to $post_type key. If false, a post type cannot be loaded at `?{query_var}={post_slug}`.
     * If specified as a string, the query `?{query_var_string}={post_slug}` will be valid.
     *
     * @since 4.6.0
     * @var string|bool $query_var
     */
    public $query_var;
    /**
     * Whether to allow this post type to be exported.
     *
     * Default true.
     *
     * @since 4.6.0
     * @var bool $can_export
     */
    public $can_export = \true;
    /**
     * Whether to delete posts of this type when deleting a user.
     *
     * If true, posts of this type belonging to the user will be moved to Trash when then user is deleted.
     * If false, posts of this type belonging to the user will *not* be trashed or deleted.
     * If not set (the default), posts are trashed if post_type_supports( 'author' ).
     * Otherwise posts are not trashed or deleted. Default null.
     *
     * @since 4.6.0
     * @var bool $delete_with_user
     */
    public $delete_with_user = \null;
    /**
     * Whether this post type is a native or "built-in" post_type.
     *
     * Default false.
     *
     * @since 4.6.0
     * @var bool $_builtin
     */
    public $_builtin = \false;
    /**
     * URL segment to use for edit link of this post type.
     *
     * Default 'post.php?post=%d'.
     *
     * @since 4.6.0
     * @var string $_edit_link
     */
    public $_edit_link = 'post.php?post=%d';
    /**
     * Post type capabilities.
     *
     * @since 4.6.0
     * @var object $cap
     */
    public $cap;
    /**
     * Triggers the handling of rewrites for this post type.
     *
     * Defaults to true, using $post_type as slug.
     *
     * @since 4.6.0
     * @var array|false $rewrite
     */
    public $rewrite;
    /**
     * The features supported by the post type.
     *
     * @since 4.6.0
     * @var array|bool $supports
     */
    public $supports;
    /**
     * Whether this post type should appear in the REST API.
     *
     * Default false. If true, standard endpoints will be registered with
     * respect to $rest_base and $rest_controller_class.
     *
     * @since 4.7.4
     * @var bool $show_in_rest
     */
    public $show_in_rest;
    /**
     * The base path for this post type's REST API endpoints.
     *
     * @since 4.7.4
     * @var string|bool $rest_base
     */
    public $rest_base;
    /**
     * The controller for this post type's REST API endpoints.
     *
     * Custom controllers must extend WP_REST_Controller.
     *
     * @since 4.7.4
     * @var string|bool $rest_controller_class
     */
    public $rest_controller_class;
    /**
     * The controller instance for this post type's REST API endpoints.
     *
     * Lazily computed. Should be accessed using {@see WP_Post_Type::get_rest_controller()}.
     *
     * @since 5.3.0
     * @var WP_REST_Controller $rest_controller
     */
    public $rest_controller;
    /**
     * Constructor.
     *
     * Will populate object properties from the provided arguments and assign other
     * default properties based on that information.
     *
     * @since 4.6.0
     *
     * @see register_post_type()
     *
     * @param string       $post_type Post type key.
     * @param array|string $args      Optional. Array or string of arguments for registering a post type.
     *                                Default empty array.
     */
    public function __construct($post_type, $args = array())
    {
    }
    /**
     * Sets post type properties.
     *
     * @since 4.6.0
     *
     * @param array|string $args Array or string of arguments for registering a post type.
     */
    public function set_props($args)
    {
    }
    /**
     * Sets the features support for the post type.
     *
     * @since 4.6.0
     */
    public function add_supports()
    {
    }
    /**
     * Adds the necessary rewrite rules for the post type.
     *
     * @since 4.6.0
     *
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     * @global WP         $wp         Current WordPress environment instance.
     */
    public function add_rewrite_rules()
    {
    }
    /**
     * Registers the post type meta box if a custom callback was specified.
     *
     * @since 4.6.0
     */
    public function register_meta_boxes()
    {
    }
    /**
     * Adds the future post hook action for the post type.
     *
     * @since 4.6.0
     */
    public function add_hooks()
    {
    }
    /**
     * Registers the taxonomies for the post type.
     *
     * @since 4.6.0
     */
    public function register_taxonomies()
    {
    }
    /**
     * Removes the features support for the post type.
     *
     * @since 4.6.0
     *
     * @global array $_wp_post_type_features Post type features.
     */
    public function remove_supports()
    {
    }
    /**
     * Removes any rewrite rules, permastructs, and rules for the post type.
     *
     * @since 4.6.0
     *
     * @global WP_Rewrite $wp_rewrite          WordPress rewrite component.
     * @global WP         $wp                  Current WordPress environment instance.
     * @global array      $post_type_meta_caps Used to remove meta capabilities.
     */
    public function remove_rewrite_rules()
    {
    }
    /**
     * Unregisters the post type meta box if a custom callback was specified.
     *
     * @since 4.6.0
     */
    public function unregister_meta_boxes()
    {
    }
    /**
     * Removes the post type from all taxonomies.
     *
     * @since 4.6.0
     */
    public function unregister_taxonomies()
    {
    }
    /**
     * Removes the future post hook action for the post type.
     *
     * @since 4.6.0
     */
    public function remove_hooks()
    {
    }
    /**
     * Gets the REST API controller for this post type.
     *
     * Will only instantiate the controller class once per request.
     *
     * @since 5.3.0
     *
     * @return WP_REST_Controller|null The controller instance, or null if the post type
     *                                 is set not to show in rest.
     */
    public function get_rest_controller()
    {
    }
}