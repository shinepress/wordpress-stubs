<?php


/**
 * WordPress Customize Widgets classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.9.0
 */
/**
 * Customize Widgets class.
 *
 * Implements widget management in the Customizer.
 *
 * @since 3.9.0
 *
 * @see WP_Customize_Manager
 */
#[\AllowDynamicProperties]
final class WP_Customize_Widgets
{
    /**
     * WP_Customize_Manager instance.
     *
     * @since 3.9.0
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * All id_bases for widgets defined in core.
     *
     * @since 3.9.0
     * @var array
     */
    protected $core_widget_id_bases = array('archives', 'calendar', 'categories', 'custom_html', 'links', 'media_audio', 'media_image', 'media_video', 'meta', 'nav_menu', 'pages', 'recent-comments', 'recent-posts', 'rss', 'search', 'tag_cloud', 'text');
    /**
     * @since 3.9.0
     * @var array
     */
    protected $rendered_sidebars = array();
    /**
     * @since 3.9.0
     * @var array
     */
    protected $rendered_widgets = array();
    /**
     * @since 3.9.0
     * @var array
     */
    protected $old_sidebars_widgets = array();
    /**
     * Mapping of widget ID base to whether it supports selective refresh.
     *
     * @since 4.5.0
     * @var array
     */
    protected $selective_refreshable_widgets;
    /**
     * Mapping of setting type to setting ID pattern.
     *
     * @since 4.2.0
     * @var array
     */
    protected $setting_id_patterns = array('widget_instance' => '/^widget_(?P<id_base>.+?)(?:\[(?P<widget_number>\d+)\])?$/', 'sidebar_widgets' => '/^sidebars_widgets\[(?P<sidebar_id>.+?)\]$/');
    /**
     * Initial loader.
     *
     * @since 3.9.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     */
    public function __construct($manager)
    {
    }
    /**
     * List whether each registered widget can be use selective refresh.
     *
     * If the theme does not support the customize-selective-refresh-widgets feature,
     * then this will always return an empty array.
     *
     * @since 4.5.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @return array Mapping of id_base to support. If theme doesn't support
     *               selective refresh, an empty array is returned.
     */
    public function get_selective_refreshable_widgets()
    {
    }
    /**
     * Determines if a widget supports selective refresh.
     *
     * @since 4.5.0
     *
     * @param string $id_base Widget ID Base.
     * @return bool Whether the widget can be selective refreshed.
     */
    public function is_widget_selective_refreshable($id_base)
    {
    }
    /**
     * Retrieves the widget setting type given a setting ID.
     *
     * @since 4.2.0
     *
     * @param string $setting_id Setting ID.
     * @return string|void Setting type.
     */
    protected function get_setting_type($setting_id)
    {
    }
    /**
     * Inspects the incoming customized data for any widget settings, and dynamically adds
     * them up-front so widgets will be initialized properly.
     *
     * @since 4.2.0
     */
    public function register_settings()
    {
    }
    /**
     * Determines the arguments for a dynamically-created setting.
     *
     * @since 4.2.0
     *
     * @param false|array $args       The arguments to the WP_Customize_Setting constructor.
     * @param string      $setting_id ID for dynamic setting, usually coming from `$_POST['customized']`.
     * @return array|false Setting arguments, false otherwise.
     */
    public function filter_customize_dynamic_setting_args($args, $setting_id)
    {
    }
    /**
     * Retrieves an unslashed post value or return a default.
     *
     * @since 3.9.0
     *
     * @param string $name          Post value.
     * @param mixed  $default_value Default post value.
     * @return mixed Unslashed post value or default value.
     */
    protected function get_post_value($name, $default_value = \null)
    {
    }
    /**
     * Override sidebars_widgets for theme switch.
     *
     * When switching a theme via the Customizer, supply any previously-configured
     * sidebars_widgets from the target theme as the initial sidebars_widgets
     * setting. Also store the old theme's existing settings so that they can
     * be passed along for storing in the sidebars_widgets theme_mod when the
     * theme gets switched.
     *
     * @since 3.9.0
     *
     * @global array $sidebars_widgets
     * @global array $_wp_sidebars_widgets
     */
    public function override_sidebars_widgets_for_theme_switch()
    {
    }
    /**
     * Filters old_sidebars_widgets_data Customizer setting.
     *
     * When switching themes, filter the Customizer setting old_sidebars_widgets_data
     * to supply initial $sidebars_widgets before they were overridden by retrieve_widgets().
     * The value for old_sidebars_widgets_data gets set in the old theme's sidebars_widgets
     * theme_mod.
     *
     * @since 3.9.0
     *
     * @see WP_Customize_Widgets::handle_theme_switch()
     *
     * @param array $old_sidebars_widgets
     * @return array
     */
    public function filter_customize_value_old_sidebars_widgets_data($old_sidebars_widgets)
    {
    }
    /**
     * Filters sidebars_widgets option for theme switch.
     *
     * When switching themes, the retrieve_widgets() function is run when the Customizer initializes,
     * and then the new sidebars_widgets here get supplied as the default value for the sidebars_widgets
     * option.
     *
     * @since 3.9.0
     *
     * @see WP_Customize_Widgets::handle_theme_switch()
     * @global array $sidebars_widgets
     *
     * @param array $sidebars_widgets
     * @return array
     */
    public function filter_option_sidebars_widgets_for_theme_switch($sidebars_widgets)
    {
    }
    /**
     * Ensures all widgets get loaded into the Customizer.
     *
     * Note: these actions are also fired in wp_ajax_update_widget().
     *
     * @since 3.9.0
     */
    public function customize_controls_init()
    {
    }
    /**
     * Ensures widgets are available for all types of previews.
     *
     * When in preview, hook to {@see 'customize_register'} for settings after WordPress is loaded
     * so that all filters have been initialized (e.g. Widget Visibility).
     *
     * @since 3.9.0
     */
    public function schedule_customize_register()
    {
    }
    /**
     * Registers Customizer settings and controls for all sidebars and widgets.
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_widgets
     * @global array $wp_registered_widget_controls
     * @global array $wp_registered_sidebars
     */
    public function customize_register()
    {
    }
    /**
     * Determines whether the widgets panel is active, based on whether there are sidebars registered.
     *
     * @since 4.4.0
     *
     * @see WP_Customize_Panel::$active_callback
     *
     * @global array $wp_registered_sidebars
     * @return bool Active.
     */
    public function is_panel_active()
    {
    }
    /**
     * Converts a widget_id into its corresponding Customizer setting ID (option name).
     *
     * @since 3.9.0
     *
     * @param string $widget_id Widget ID.
     * @return string Maybe-parsed widget ID.
     */
    public function get_setting_id($widget_id)
    {
    }
    /**
     * Determines whether the widget is considered "wide".
     *
     * Core widgets which may have controls wider than 250, but can still be shown
     * in the narrow Customizer panel. The RSS and Text widgets in Core, for example,
     * have widths of 400 and yet they still render fine in the Customizer panel.
     *
     * This method will return all Core widgets as being not wide, but this can be
     * overridden with the {@see 'is_wide_widget_in_customizer'} filter.
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_widget_controls
     *
     * @param string $widget_id Widget ID.
     * @return bool Whether or not the widget is a "wide" widget.
     */
    public function is_wide_widget($widget_id)
    {
    }
    /**
     * Converts a widget ID into its id_base and number components.
     *
     * @since 3.9.0
     *
     * @param string $widget_id Widget ID.
     * @return array Array containing a widget's id_base and number components.
     */
    public function parse_widget_id($widget_id)
    {
    }
    /**
     * Converts a widget setting ID (option path) to its id_base and number components.
     *
     * @since 3.9.0
     *
     * @param string $setting_id Widget setting ID.
     * @return array|WP_Error Array containing a widget's id_base and number components,
     *                        or a WP_Error object.
     */
    public function parse_widget_setting_id($setting_id)
    {
    }
    /**
     * Calls admin_print_styles-widgets.php and admin_print_styles hooks to
     * allow custom styles from plugins.
     *
     * @since 3.9.0
     */
    public function print_styles()
    {
    }
    /**
     * Calls admin_print_scripts-widgets.php and admin_print_scripts hooks to
     * allow custom scripts from plugins.
     *
     * @since 3.9.0
     */
    public function print_scripts()
    {
    }
    /**
     * Enqueues scripts and styles for Customizer panel and export data to JavaScript.
     *
     * @since 3.9.0
     *
     * @global WP_Scripts $wp_scripts
     * @global array $wp_registered_sidebars
     * @global array $wp_registered_widgets
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Renders the widget form control templates into the DOM.
     *
     * @since 3.9.0
     */
    public function output_widget_control_templates()
    {
    }
    /**
     * Calls admin_print_footer_scripts and admin_print_scripts hooks to
     * allow custom scripts from plugins.
     *
     * @since 3.9.0
     */
    public function print_footer_scripts()
    {
    }
    /**
     * Retrieves common arguments to supply when constructing a Customizer setting.
     *
     * @since 3.9.0
     *
     * @param string $id        Widget setting ID.
     * @param array  $overrides Array of setting overrides.
     * @return array Possibly modified setting arguments.
     */
    public function get_setting_args($id, $overrides = array())
    {
    }
    /**
     * Ensures sidebar widget arrays only ever contain widget IDS.
     *
     * Used as the 'sanitize_callback' for each $sidebars_widgets setting.
     *
     * @since 3.9.0
     *
     * @param string[] $widget_ids Array of widget IDs.
     * @return string[] Array of sanitized widget IDs.
     */
    public function sanitize_sidebar_widgets($widget_ids)
    {
    }
    /**
     * Builds up an index of all available widgets for use in Backbone models.
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_widgets
     * @global array $wp_registered_widget_controls
     *
     * @see wp_list_widgets()
     *
     * @return array List of available widgets.
     */
    public function get_available_widgets()
    {
    }
    /**
     * Naturally orders available widgets by name.
     *
     * @since 3.9.0
     *
     * @param array $widget_a The first widget to compare.
     * @param array $widget_b The second widget to compare.
     * @return int Reorder position for the current widget comparison.
     */
    protected function _sort_name_callback($widget_a, $widget_b)
    {
    }
    /**
     * Retrieves the widget control markup.
     *
     * @since 3.9.0
     *
     * @param array $args Widget control arguments.
     * @return string Widget control form HTML markup.
     */
    public function get_widget_control($args)
    {
    }
    /**
     * Retrieves the widget control markup parts.
     *
     * @since 4.4.0
     *
     * @param array $args Widget control arguments.
     * @return array {
     *     @type string $control Markup for widget control wrapping form.
     *     @type string $content The contents of the widget form itself.
     * }
     * @phpstan-return array{
     *   control: string,
     *   content: string,
     * }
     */
    public function get_widget_control_parts($args)
    {
    }
    /**
     * Adds hooks for the Customizer preview.
     *
     * @since 3.9.0
     */
    public function customize_preview_init()
    {
    }
    /**
     * Refreshes the nonce for widget updates.
     *
     * @since 4.2.0
     *
     * @param array $nonces Array of nonces.
     * @return array Array of nonces.
     */
    public function refresh_nonces($nonces)
    {
    }
    /**
     * Tells the script loader to load the scripts and styles of custom blocks
     * if the widgets block editor is enabled.
     *
     * @since 5.8.0
     *
     * @param bool $is_block_editor_screen Current decision about loading block assets.
     * @return bool Filtered decision about loading block assets.
     */
    public function should_load_block_editor_scripts_and_styles($is_block_editor_screen)
    {
    }
    /**
     * When previewing, ensures the proper previewing widgets are used.
     *
     * Because wp_get_sidebars_widgets() gets called early at {@see 'init' } (via
     * wp_convert_widget_settings()) and can set global variable `$_wp_sidebars_widgets`
     * to the value of `get_option( 'sidebars_widgets' )` before the Customizer preview
     * filter is added, it has to be reset after the filter has been added.
     *
     * @since 3.9.0
     *
     * @param array $sidebars_widgets List of widgets for the current sidebar.
     * @return array
     */
    public function preview_sidebars_widgets($sidebars_widgets)
    {
    }
    /**
     * Enqueues scripts for the Customizer preview.
     *
     * @since 3.9.0
     */
    public function customize_preview_enqueue()
    {
    }
    /**
     * Inserts default style for highlighted widget at early point so theme
     * stylesheet can override.
     *
     * @since 3.9.0
     */
    public function print_preview_css()
    {
    }
    /**
     * Communicates the sidebars that appeared on the page at the very end of the page,
     * and at the very end of the wp_footer,
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_sidebars
     * @global array $wp_registered_widgets
     */
    public function export_preview_data()
    {
    }
    /**
     * Tracks the widgets that were rendered.
     *
     * @since 3.9.0
     *
     * @param array $widget Rendered widget to tally.
     */
    public function tally_rendered_widgets($widget)
    {
    }
    /**
     * Determine if a widget is rendered on the page.
     *
     * @since 4.0.0
     *
     * @param string $widget_id Widget ID to check.
     * @return bool Whether the widget is rendered.
     */
    public function is_widget_rendered($widget_id)
    {
    }
    /**
     * Determines if a sidebar is rendered on the page.
     *
     * @since 4.0.0
     *
     * @param string $sidebar_id Sidebar ID to check.
     * @return bool Whether the sidebar is rendered.
     */
    public function is_sidebar_rendered($sidebar_id)
    {
    }
    /**
     * Tallies the sidebars rendered via is_active_sidebar().
     *
     * Keep track of the times that is_active_sidebar() is called in the template,
     * and assume that this means that the sidebar would be rendered on the template
     * if there were widgets populating it.
     *
     * @since 3.9.0
     *
     * @param bool   $is_active  Whether the sidebar is active.
     * @param string $sidebar_id Sidebar ID.
     * @return bool Whether the sidebar is active.
     */
    public function tally_sidebars_via_is_active_sidebar_calls($is_active, $sidebar_id)
    {
    }
    /**
     * Tallies the sidebars rendered via dynamic_sidebar().
     *
     * Keep track of the times that dynamic_sidebar() is called in the template,
     * and assume this means the sidebar would be rendered on the template if
     * there were widgets populating it.
     *
     * @since 3.9.0
     *
     * @param bool   $has_widgets Whether the current sidebar has widgets.
     * @param string $sidebar_id  Sidebar ID.
     * @return bool Whether the current sidebar has widgets.
     */
    public function tally_sidebars_via_dynamic_sidebar_calls($has_widgets, $sidebar_id)
    {
    }
    /**
     * Retrieves MAC for a serialized widget instance string.
     *
     * Allows values posted back from JS to be rejected if any tampering of the
     * data has occurred.
     *
     * @since 3.9.0
     *
     * @param string $serialized_instance Widget instance.
     * @return string MAC for serialized widget instance.
     */
    protected function get_instance_hash_key($serialized_instance)
    {
    }
    /**
     * Sanitizes a widget instance.
     *
     * Unserialize the JS-instance for storing in the options. It's important that this filter
     * only get applied to an instance *once*.
     *
     * @since 3.9.0
     * @since 5.8.0 Added the `$id_base` parameter.
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @param array  $value   Widget instance to sanitize.
     * @param string $id_base Optional. Base of the ID of the widget being sanitized. Default null.
     * @return array|void Sanitized widget instance.
     */
    public function sanitize_widget_instance($value, $id_base = \null)
    {
    }
    /**
     * Converts a widget instance into JSON-representable format.
     *
     * @since 3.9.0
     * @since 5.8.0 Added the `$id_base` parameter.
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @param array  $value   Widget instance to convert to JSON.
     * @param string $id_base Optional. Base of the ID of the widget being sanitized. Default null.
     * @return array JSON-converted widget instance.
     */
    public function sanitize_widget_js_instance($value, $id_base = \null)
    {
    }
    /**
     * Strips out widget IDs for widgets which are no longer registered.
     *
     * One example where this might happen is when a plugin orphans a widget
     * in a sidebar upon deactivation.
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_widgets
     *
     * @param array $widget_ids List of widget IDs.
     * @return array Parsed list of widget IDs.
     */
    public function sanitize_sidebar_widgets_js_instance($widget_ids)
    {
    }
    /**
     * Finds and invokes the widget update and control callbacks.
     *
     * Requires that `$_POST` be populated with the instance data.
     *
     * @since 3.9.0
     *
     * @global array $wp_registered_widget_updates
     * @global array $wp_registered_widget_controls
     *
     * @param string $widget_id Widget ID.
     * @return array|WP_Error Array containing the updated widget information.
     *                        A WP_Error object, otherwise.
     */
    public function call_widget_update($widget_id)
    {
    }
    /**
     * Updates widget settings asynchronously.
     *
     * Allows the Customizer to update a widget using its form, but return the new
     * instance info via Ajax instead of saving it to the options table.
     *
     * Most code here copied from wp_ajax_save_widget().
     *
     * @since 3.9.0
     *
     * @see wp_ajax_save_widget()
     */
    public function wp_ajax_update_widget()
    {
    }
    /*
     * Selective Refresh Methods
     */
    /**
     * Filters arguments for dynamic widget partials.
     *
     * @since 4.5.0
     *
     * @param array|false $partial_args Partial arguments.
     * @param string      $partial_id   Partial ID.
     * @return array (Maybe) modified partial arguments.
     */
    public function customize_dynamic_partial_args($partial_args, $partial_id)
    {
    }
    /**
     * Adds hooks for selective refresh.
     *
     * @since 4.5.0
     */
    public function selective_refresh_init()
    {
    }
    /**
     * Inject selective refresh data attributes into widget container elements.
     *
     * @since 4.5.0
     *
     * @param array $params {
     *     Dynamic sidebar params.
     *
     *     @type array $args        Sidebar args.
     *     @type array $widget_args Widget args.
     * }
     * @see WP_Customize_Nav_Menus::filter_wp_nav_menu_args()
     *
     * @return array Params.
     * @phpstan-param array{
     *   args?: array,
     *   widget_args?: array,
     * } $params
     */
    public function filter_dynamic_sidebar_params($params)
    {
    }
    /**
     * List of the tag names seen for before_widget strings.
     *
     * This is used in the {@see 'filter_wp_kses_allowed_html'} filter to ensure that the
     * data-* attributes can be allowed.
     *
     * @since 4.5.0
     * @var array
     */
    protected $before_widget_tags_seen = array();
    /**
     * Ensures the HTML data-* attributes for selective refresh are allowed by kses.
     *
     * This is needed in case the `$before_widget` is run through wp_kses() when printed.
     *
     * @since 4.5.0
     *
     * @param array $allowed_html Allowed HTML.
     * @return array (Maybe) modified allowed HTML.
     */
    public function filter_wp_kses_allowed_data_attributes($allowed_html)
    {
    }
    /**
     * Keep track of the number of times that dynamic_sidebar() was called for a given sidebar index.
     *
     * This helps facilitate the uncommon scenario where a single sidebar is rendered multiple times on a template.
     *
     * @since 4.5.0
     * @var array
     */
    protected $sidebar_instance_count = array();
    /**
     * The current request's sidebar_instance_number context.
     *
     * @since 4.5.0
     * @var int|null
     */
    protected $context_sidebar_instance_number;
    /**
     * Current sidebar ID being rendered.
     *
     * @since 4.5.0
     * @var array
     */
    protected $current_dynamic_sidebar_id_stack = array();
    /**
     * Begins keeping track of the current sidebar being rendered.
     *
     * Insert marker before widgets are rendered in a dynamic sidebar.
     *
     * @since 4.5.0
     *
     * @param int|string $index Index, name, or ID of the dynamic sidebar.
     */
    public function start_dynamic_sidebar($index)
    {
    }
    /**
     * Finishes keeping track of the current sidebar being rendered.
     *
     * Inserts a marker after widgets are rendered in a dynamic sidebar.
     *
     * @since 4.5.0
     *
     * @param int|string $index Index, name, or ID of the dynamic sidebar.
     */
    public function end_dynamic_sidebar($index)
    {
    }
    /**
     * Current sidebar being rendered.
     *
     * @since 4.5.0
     * @var string|null
     */
    protected $rendering_widget_id;
    /**
     * Current widget being rendered.
     *
     * @since 4.5.0
     * @var string|null
     */
    protected $rendering_sidebar_id;
    /**
     * Filters sidebars_widgets to ensure the currently-rendered widget is the only widget in the current sidebar.
     *
     * @since 4.5.0
     *
     * @param array $sidebars_widgets Sidebars widgets.
     * @return array Filtered sidebars widgets.
     */
    public function filter_sidebars_widgets_for_rendering_widget($sidebars_widgets)
    {
    }
    /**
     * Renders a specific widget using the supplied sidebar arguments.
     *
     * @since 4.5.0
     *
     * @see dynamic_sidebar()
     *
     * @param WP_Customize_Partial $partial Partial.
     * @param array                $context {
     *     Sidebar args supplied as container context.
     *
     *     @type string $sidebar_id              ID for sidebar for widget to render into.
     *     @type int    $sidebar_instance_number Disambiguating instance number.
     * }
     * @return string|false
     * @phpstan-param array{
     *   sidebar_id?: string,
     *   sidebar_instance_number?: int,
     * } $context
     */
    public function render_widget_partial($partial, $context)
    {
    }
    //
    // Option Update Capturing.
    //
    /**
     * List of captured widget option updates.
     *
     * @since 3.9.0
     * @var array $_captured_options Values updated while option capture is happening.
     */
    protected $_captured_options = array();
    /**
     * Whether option capture is currently happening.
     *
     * @since 3.9.0
     * @var bool $_is_current Whether option capture is currently happening or not.
     */
    protected $_is_capturing_option_updates = \false;
    /**
     * Determines whether the captured option update should be ignored.
     *
     * @since 3.9.0
     *
     * @param string $option_name Option name.
     * @return bool Whether the option capture is ignored.
     */
    protected function is_option_capture_ignored($option_name)
    {
    }
    /**
     * Retrieves captured widget option updates.
     *
     * @since 3.9.0
     *
     * @return array Array of captured options.
     */
    protected function get_captured_options()
    {
    }
    /**
     * Retrieves the option that was captured from being saved.
     *
     * @since 4.2.0
     *
     * @param string $option_name   Option name.
     * @param mixed  $default_value Optional. Default value to return if the option does not exist. Default false.
     * @return mixed Value set for the option.
     */
    protected function get_captured_option($option_name, $default_value = \false)
    {
    }
    /**
     * Retrieves the number of captured widget option updates.
     *
     * @since 3.9.0
     *
     * @return int Number of updated options.
     */
    protected function count_captured_options()
    {
    }
    /**
     * Begins keeping track of changes to widget options, caching new values.
     *
     * @since 3.9.0
     */
    protected function start_capturing_option_updates()
    {
    }
    /**
     * Pre-filters captured option values before updating.
     *
     * @since 3.9.0
     *
     * @param mixed  $new_value   The new option value.
     * @param string $option_name Name of the option.
     * @param mixed  $old_value   The old option value.
     * @return mixed Filtered option value.
     */
    public function capture_filter_pre_update_option($new_value, $option_name, $old_value)
    {
    }
    /**
     * Pre-filters captured option values before retrieving.
     *
     * @since 3.9.0
     *
     * @param mixed $value Value to return instead of the option value.
     * @return mixed Filtered option value.
     */
    public function capture_filter_pre_get_option($value)
    {
    }
    /**
     * Undoes any changes to the options since options capture began.
     *
     * @since 3.9.0
     */
    protected function stop_capturing_option_updates()
    {
    }
    /**
     * {@internal Missing Summary}
     *
     * See the {@see 'customize_dynamic_setting_args'} filter.
     *
     * @since 3.9.0
     * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter.
     */
    public function setup_widget_addition_previews()
    {
    }
    /**
     * {@internal Missing Summary}
     *
     * See the {@see 'customize_dynamic_setting_args'} filter.
     *
     * @since 3.9.0
     * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter.
     */
    public function prepreview_added_sidebars_widgets()
    {
    }
    /**
     * {@internal Missing Summary}
     *
     * See the {@see 'customize_dynamic_setting_args'} filter.
     *
     * @since 3.9.0
     * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter.
     */
    public function prepreview_added_widget_instance()
    {
    }
    /**
     * {@internal Missing Summary}
     *
     * See the {@see 'customize_dynamic_setting_args'} filter.
     *
     * @since 3.9.0
     * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter.
     */
    public function remove_prepreview_filters()
    {
    }
}