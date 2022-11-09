<?php


/**
 * WordPress Customize Nav Menus classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.3.0
 */
/**
 * Customize Nav Menus class.
 *
 * Implements menu management in the Customizer.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Manager
 */
#[\AllowDynamicProperties]
final class WP_Customize_Nav_Menus
{
    /**
     * WP_Customize_Manager instance.
     *
     * @since 4.3.0
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * Original nav menu locations before the theme was switched.
     *
     * @since 4.9.0
     * @var array
     */
    protected $original_nav_menu_locations;
    /**
     * Constructor.
     *
     * @since 4.3.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     */
    public function __construct($manager)
    {
    }
    /**
     * Adds a nonce for customizing menus.
     *
     * @since 4.5.0
     *
     * @param string[] $nonces Array of nonces.
     * @return string[] Modified array of nonces.
     */
    public function filter_nonces($nonces)
    {
    }
    /**
     * Ajax handler for loading available menu items.
     *
     * @since 4.3.0
     */
    public function ajax_load_available_items()
    {
    }
    /**
     * Performs the post_type and taxonomy queries for loading available menu items.
     *
     * @since 4.3.0
     *
     * @param string $object_type Optional. Accepts any custom object type and has built-in support for
     *                            'post_type' and 'taxonomy'. Default is 'post_type'.
     * @param string $object_name Optional. Accepts any registered taxonomy or post type name. Default is 'page'.
     * @param int    $page        Optional. The page number used to generate the query offset. Default is '0'.
     * @return array|WP_Error An array of menu items on success, a WP_Error object on failure.
     */
    public function load_available_items_query($object_type = 'post_type', $object_name = 'page', $page = 0)
    {
    }
    /**
     * Ajax handler for searching available menu items.
     *
     * @since 4.3.0
     */
    public function ajax_search_available_items()
    {
    }
    /**
     * Performs post queries for available-item searching.
     *
     * Based on WP_Editor::wp_link_query().
     *
     * @since 4.3.0
     *
     * @param array $args Optional. Accepts 'pagenum' and 's' (search) arguments.
     * @return array Menu items.
     */
    public function search_available_items_query($args = array())
    {
    }
    /**
     * Enqueues scripts and styles for Customizer pane.
     *
     * @since 4.3.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Filters a dynamic setting's constructor args.
     *
     * For a dynamic setting to be registered, this filter must be employed
     * to override the default false value with an array of args to pass to
     * the WP_Customize_Setting constructor.
     *
     * @since 4.3.0
     *
     * @param false|array $setting_args The arguments to the WP_Customize_Setting constructor.
     * @param string      $setting_id   ID for dynamic setting, usually coming from `$_POST['customized']`.
     * @return array|false
     */
    public function filter_dynamic_setting_args($setting_args, $setting_id)
    {
    }
    /**
     * Allows non-statically created settings to be constructed with custom WP_Customize_Setting subclass.
     *
     * @since 4.3.0
     *
     * @param string $setting_class WP_Customize_Setting or a subclass.
     * @param string $setting_id    ID for dynamic setting, usually coming from `$_POST['customized']`.
     * @param array  $setting_args  WP_Customize_Setting or a subclass.
     * @return string
     */
    public function filter_dynamic_setting_class($setting_class, $setting_id, $setting_args)
    {
    }
    /**
     * Adds the customizer settings and controls.
     *
     * @since 4.3.0
     */
    public function customize_register()
    {
    }
    /**
     * Gets the base10 intval.
     *
     * This is used as a setting's sanitize_callback; we can't use just plain
     * intval because the second argument is not what intval() expects.
     *
     * @since 4.3.0
     *
     * @param mixed $value Number to convert.
     * @return int Integer.
     */
    public function intval_base10($value)
    {
    }
    /**
     * Returns an array of all the available item types.
     *
     * @since 4.3.0
     * @since 4.7.0  Each array item now includes a `$type_label` in addition to `$title`, `$type`, and `$object`.
     *
     * @return array The available menu item types.
     */
    public function available_item_types()
    {
    }
    /**
     * Adds a new `auto-draft` post.
     *
     * @since 4.7.0
     *
     * @param array $postarr {
     *     Post array. Note that post_status is overridden to be `auto-draft`.
     *
     * @var string $post_title   Post title. Required.
     * @var string $post_type    Post type. Required.
     * @var string $post_name    Post name.
     * @var string $post_content Post content.
     * }
     * @return WP_Post|WP_Error Inserted auto-draft post object or error.
     */
    public function insert_auto_draft_post($postarr)
    {
    }
    /**
     * Ajax handler for adding a new auto-draft post.
     *
     * @since 4.7.0
     */
    public function ajax_insert_auto_draft_post()
    {
    }
    /**
     * Prints the JavaScript templates used to render Menu Customizer components.
     *
     * Templates are imported into the JS use wp.template.
     *
     * @since 4.3.0
     */
    public function print_templates()
    {
    }
    /**
     * Prints the HTML template used to render the add-menu-item frame.
     *
     * @since 4.3.0
     */
    public function available_items_template()
    {
    }
    /**
     * Prints the markup for new menu items.
     *
     * To be used in the template #available-menu-items.
     *
     * @since 4.7.0
     *
     * @param array $available_item_type Menu item data to output, including title, type, and label.
     */
    protected function print_post_type_container($available_item_type)
    {
    }
    /**
     * Prints the markup for available menu item custom links.
     *
     * @since 4.7.0
     */
    protected function print_custom_links_available_menu_item()
    {
    }
    //
    // Start functionality specific to partial-refresh of menu changes in Customizer preview.
    //
    /**
     * Nav menu args used for each instance, keyed by the args HMAC.
     *
     * @since 4.3.0
     * @var array
     */
    public $preview_nav_menu_instance_args = array();
    /**
     * Filters arguments for dynamic nav_menu selective refresh partials.
     *
     * @since 4.5.0
     *
     * @param array|false $partial_args Partial args.
     * @param string      $partial_id   Partial ID.
     * @return array Partial args.
     */
    public function customize_dynamic_partial_args($partial_args, $partial_id)
    {
    }
    /**
     * Adds hooks for the Customizer preview.
     *
     * @since 4.3.0
     */
    public function customize_preview_init()
    {
    }
    /**
     * Makes the auto-draft status protected so that it can be queried.
     *
     * @since 4.7.0
     *
     * @global stdClass[] $wp_post_statuses List of post statuses.
     */
    public function make_auto_draft_status_previewable()
    {
    }
    /**
     * Sanitizes post IDs for posts created for nav menu items to be published.
     *
     * @since 4.7.0
     *
     * @param array $value Post IDs.
     * @return array Post IDs.
     */
    public function sanitize_nav_menus_created_posts($value)
    {
    }
    /**
     * Publishes the auto-draft posts that were created for nav menu items.
     *
     * The post IDs will have been sanitized by already by
     * `WP_Customize_Nav_Menu_Items::sanitize_nav_menus_created_posts()` to
     * remove any post IDs for which the user cannot publish or for which the
     * post is not an auto-draft.
     *
     * @since 4.7.0
     *
     * @param WP_Customize_Setting $setting Customizer setting object.
     */
    public function save_nav_menus_created_posts($setting)
    {
    }
    /**
     * Keeps track of the arguments that are being passed to wp_nav_menu().
     *
     * @since 4.3.0
     *
     * @see wp_nav_menu()
     * @see WP_Customize_Widgets::filter_dynamic_sidebar_params()
     *
     * @param array $args An array containing wp_nav_menu() arguments.
     * @return array Arguments.
     */
    public function filter_wp_nav_menu_args($args)
    {
    }
    /**
     * Prepares wp_nav_menu() calls for partial refresh.
     *
     * Injects attributes into container element.
     *
     * @since 4.3.0
     *
     * @see wp_nav_menu()
     *
     * @param string $nav_menu_content The HTML content for the navigation menu.
     * @param object $args             An object containing wp_nav_menu() arguments.
     * @return string Nav menu HTML with selective refresh attributes added if partial can be refreshed.
     */
    public function filter_wp_nav_menu($nav_menu_content, $args)
    {
    }
    /**
     * Hashes (hmac) the nav menu arguments to ensure they are not tampered with when
     * submitted in the Ajax request.
     *
     * Note that the array is expected to be pre-sorted.
     *
     * @since 4.3.0
     *
     * @param array $args The arguments to hash.
     * @return string Hashed nav menu arguments.
     */
    public function hash_nav_menu_args($args)
    {
    }
    /**
     * Enqueues scripts for the Customizer preview.
     *
     * @since 4.3.0
     */
    public function customize_preview_enqueue_deps()
    {
    }
    /**
     * Exports data from PHP to JS.
     *
     * @since 4.3.0
     */
    public function export_preview_data()
    {
    }
    /**
     * Exports any wp_nav_menu() calls during the rendering of any partials.
     *
     * @since 4.5.0
     *
     * @param array $response Response.
     * @return array Response.
     */
    public function export_partial_rendered_nav_menu_instances($response)
    {
    }
    /**
     * Renders a specific menu via wp_nav_menu() using the supplied arguments.
     *
     * @since 4.3.0
     *
     * @see wp_nav_menu()
     *
     * @param WP_Customize_Partial $partial       Partial.
     * @param array                $nav_menu_args Nav menu args supplied as container context.
     * @return string|false
     */
    public function render_nav_menu_partial($partial, $nav_menu_args)
    {
    }
}