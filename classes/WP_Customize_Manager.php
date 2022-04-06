<?php


/**
 * WordPress Customize Manager classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.4.0
 */
/**
 * Customize Manager class.
 *
 * Bootstraps the Customize experience on the server-side.
 *
 * Sets up the theme-switching process if a theme other than the active one is
 * being previewed and customized.
 *
 * Serves as a factory for Customize Controls and Settings, and
 * instantiates default Customize Controls and Settings.
 *
 * @since 3.4.0
 */
final class WP_Customize_Manager
{
    /**
     * An instance of the theme being previewed.
     *
     * @since 3.4.0
     * @access protected
     * @var WP_Theme
     */
    protected $theme;
    /**
     * The directory name of the previously active theme (within the theme_root).
     *
     * @since 3.4.0
     * @access protected
     * @var string
     */
    protected $original_stylesheet;
    /**
     * Whether this is a Customizer pageload.
     *
     * @since 3.4.0
     * @access protected
     * @var bool
     */
    protected $previewing = \false;
    /**
     * Methods and properties dealing with managing widgets in the Customizer.
     *
     * @since 3.9.0
     * @access public
     * @var WP_Customize_Widgets
     */
    public $widgets;
    /**
     * Methods and properties dealing with managing nav menus in the Customizer.
     *
     * @since 4.3.0
     * @access public
     * @var WP_Customize_Nav_Menus
     */
    public $nav_menus;
    /**
     * Methods and properties dealing with selective refresh in the Customizer preview.
     *
     * @since 4.5.0
     * @access public
     * @var WP_Customize_Selective_Refresh
     */
    public $selective_refresh;
    /**
     * Registered instances of WP_Customize_Setting.
     *
     * @since 3.4.0
     * @access protected
     * @var array
     */
    protected $settings = array();
    /**
     * Sorted top-level instances of WP_Customize_Panel and WP_Customize_Section.
     *
     * @since 4.0.0
     * @access protected
     * @var array
     */
    protected $containers = array();
    /**
     * Registered instances of WP_Customize_Panel.
     *
     * @since 4.0.0
     * @access protected
     * @var array
     */
    protected $panels = array();
    /**
     * List of core components.
     *
     * @since 4.5.0
     * @access protected
     * @var array
     */
    protected $components = array('widgets', 'nav_menus');
    /**
     * Registered instances of WP_Customize_Section.
     *
     * @since 3.4.0
     * @access protected
     * @var array
     */
    protected $sections = array();
    /**
     * Registered instances of WP_Customize_Control.
     *
     * @since 3.4.0
     * @access protected
     * @var array
     */
    protected $controls = array();
    /**
     * Panel types that may be rendered from JS templates.
     *
     * @since 4.3.0
     * @access protected
     * @var array
     */
    protected $registered_panel_types = array();
    /**
     * Section types that may be rendered from JS templates.
     *
     * @since 4.3.0
     * @access protected
     * @var array
     */
    protected $registered_section_types = array();
    /**
     * Control types that may be rendered from JS templates.
     *
     * @since 4.1.0
     * @access protected
     * @var array
     */
    protected $registered_control_types = array();
    /**
     * Initial URL being previewed.
     *
     * @since 4.4.0
     * @access protected
     * @var string
     */
    protected $preview_url;
    /**
     * URL to link the user to when closing the Customizer.
     *
     * @since 4.4.0
     * @access protected
     * @var string
     */
    protected $return_url;
    /**
     * Mapping of 'panel', 'section', 'control' to the ID which should be autofocused.
     *
     * @since 4.4.0
     * @access protected
     * @var array
     */
    protected $autofocus = array();
    /**
     * Messenger channel.
     *
     * @since 4.7.0
     * @access protected
     * @var string
     */
    protected $messenger_channel;
    /**
     * Unsanitized values for Customize Settings parsed from $_POST['customized'].
     *
     * @var array
     */
    private $_post_values;
    /**
     * Changeset UUID.
     *
     * @since 4.7.0
     * @access private
     * @var string
     */
    private $_changeset_uuid;
    /**
     * Changeset post ID.
     *
     * @since 4.7.0
     * @access private
     * @var int|false
     */
    private $_changeset_post_id;
    /**
     * Changeset data loaded from a customize_changeset post.
     *
     * @since 4.7.0
     * @access private
     * @var array
     */
    private $_changeset_data;
    /**
     * Constructor.
     *
     * @since 3.4.0
     * @since 4.7.0 Added $args param.
     *
     * @param array $args {
     *     Args.
     *
     *     @type string $changeset_uuid    Changeset UUID, the post_name for the customize_changeset post containing the customized state. Defaults to new UUID.
     *     @type string $theme             Theme to be previewed (for theme switch). Defaults to customize_theme or theme query params.
     *     @type string $messenger_channel Messenger channel. Defaults to customize_messenger_channel query param.
     * }
     * @phpstan-param array{
     *   changeset_uuid?: string,
     *   theme?: string,
     *   messenger_channel?: string,
     * } $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * Return true if it's an Ajax request.
     *
     * @since 3.4.0
     * @since 4.2.0 Added `$action` param.
     * @access public
     *
     * @param string|null $action Whether the supplied Ajax action is being run.
     * @return bool True if it's an Ajax request, false otherwise.
     */
    public function doing_ajax($action = \null)
    {
    }
    /**
     * Custom wp_die wrapper. Returns either the standard message for UI
     * or the Ajax message.
     *
     * @since 3.4.0
     *
     * @param mixed $ajax_message Ajax return
     * @param mixed $message UI message
     */
    protected function wp_die($ajax_message, $message = \null)
    {
    }
    /**
     * Return the Ajax wp_die() handler if it's a customized request.
     *
     * @since 3.4.0
     * @deprecated 4.7.0
     *
     * @return callable Die handler.
     */
    public function wp_die_handler()
    {
    }
    /**
     * Start preview and customize theme.
     *
     * Check if customize query variable exist. Init filters to filter the current theme.
     *
     * @since 3.4.0
     */
    public function setup_theme()
    {
    }
    /**
     * Callback to validate a theme once it is loaded
     *
     * @since 3.4.0
     */
    public function after_setup_theme()
    {
    }
    /**
     * If the theme to be previewed isn't the active theme, add filter callbacks
     * to swap it out at runtime.
     *
     * @since 3.4.0
     */
    public function start_previewing_theme()
    {
    }
    /**
     * Stop previewing the selected theme.
     *
     * Removes filters to change the current theme.
     *
     * @since 3.4.0
     */
    public function stop_previewing_theme()
    {
    }
    /**
     * Get the changeset UUID.
     *
     * @since 4.7.0
     * @access public
     *
     * @return string UUID.
     */
    public function changeset_uuid()
    {
    }
    /**
     * Get the theme being customized.
     *
     * @since 3.4.0
     *
     * @return WP_Theme
     */
    public function theme()
    {
    }
    /**
     * Get the registered settings.
     *
     * @since 3.4.0
     *
     * @return array
     */
    public function settings()
    {
    }
    /**
     * Get the registered controls.
     *
     * @since 3.4.0
     *
     * @return array
     */
    public function controls()
    {
    }
    /**
     * Get the registered containers.
     *
     * @since 4.0.0
     *
     * @return array
     */
    public function containers()
    {
    }
    /**
     * Get the registered sections.
     *
     * @since 3.4.0
     *
     * @return array
     */
    public function sections()
    {
    }
    /**
     * Get the registered panels.
     *
     * @since 4.0.0
     * @access public
     *
     * @return array Panels.
     */
    public function panels()
    {
    }
    /**
     * Checks if the current theme is active.
     *
     * @since 3.4.0
     *
     * @return bool
     */
    public function is_theme_active()
    {
    }
    /**
     * Register styles/scripts and initialize the preview of each setting
     *
     * @since 3.4.0
     */
    public function wp_loaded()
    {
    }
    /**
     * Prevents Ajax requests from following redirects when previewing a theme
     * by issuing a 200 response instead of a 30x.
     *
     * Instead, the JS will sniff out the location header.
     *
     * @since 3.4.0
     * @deprecated 4.7.0
     *
     * @param int $status Status.
     * @return int
     */
    public function wp_redirect_status($status)
    {
    }
    /**
     * Find the changeset post ID for a given changeset UUID.
     *
     * @since 4.7.0
     * @access public
     *
     * @param string $uuid Changeset UUID.
     * @return int|null Returns post ID on success and null on failure.
     */
    public function find_changeset_post_id($uuid)
    {
    }
    /**
     * Get the changeset post id for the loaded changeset.
     *
     * @since 4.7.0
     * @access public
     *
     * @return int|null Post ID on success or null if there is no post yet saved.
     */
    public function changeset_post_id()
    {
    }
    /**
     * Get the data stored in a changeset post.
     *
     * @since 4.7.0
     * @access protected
     *
     * @param int $post_id Changeset post ID.
     * @return array|WP_Error Changeset data or WP_Error on error.
     */
    protected function get_changeset_post_data($post_id)
    {
    }
    /**
     * Get changeset data.
     *
     * @since 4.7.0
     * @access public
     *
     * @return array Changeset data.
     */
    public function changeset_data()
    {
    }
    /**
     * Starter content setting IDs.
     *
     * @since 4.7.0
     * @access private
     * @var array
     */
    protected $pending_starter_content_settings_ids = array();
    /**
     * Import theme starter content into the customized state.
     *
     * @since 4.7.0
     * @access public
     *
     * @param array $starter_content Starter content. Defaults to `get_theme_starter_content()`.
     */
    function import_theme_starter_content($starter_content = array())
    {
    }
    /**
     * Prepare starter content attachments.
     *
     * Ensure that the attachments are valid and that they have slugs and file name/path.
     *
     * @since 4.7.0
     * @access private
     *
     * @param array $attachments Attachments.
     * @return array Prepared attachments.
     */
    protected function prepare_starter_content_attachments($attachments)
    {
    }
    /**
     * Save starter content changeset.
     *
     * @since 4.7.0
     * @access private
     */
    public function _save_starter_content_changeset()
    {
    }
    /**
     * Get dirty pre-sanitized setting values in the current customized state.
     *
     * The returned array consists of a merge of three sources:
     * 1. If the theme is not currently active, then the base array is any stashed
     *    theme mods that were modified previously but never published.
     * 2. The values from the current changeset, if it exists.
     * 3. If the user can customize, the values parsed from the incoming
     *    `$_POST['customized']` JSON data.
     * 4. Any programmatically-set post values via `WP_Customize_Manager::set_post_value()`.
     *
     * The name "unsanitized_post_values" is a carry-over from when the customized
     * state was exclusively sourced from `$_POST['customized']`. Nevertheless,
     * the value returned will come from the current changeset post and from the
     * incoming post data.
     *
     * @since 4.1.1
     * @since 4.7.0 Added $args param and merging with changeset values and stashed theme mods.
     *
     * @param array $args {
     *     Args.
     *
     *     @type bool $exclude_changeset Whether the changeset values should also be excluded. Defaults to false.
     *     @type bool $exclude_post_data Whether the post input values should also be excluded. Defaults to false when lacking the customize capability.
     * }
     * @return array
     * @phpstan-param array{
     *   exclude_changeset?: bool,
     *   exclude_post_data?: bool,
     * } $args
     */
    public function unsanitized_post_values($args = array())
    {
    }
    /**
     * Returns the sanitized value for a given setting from the current customized state.
     *
     * The name "post_value" is a carry-over from when the customized state was exclusively
     * sourced from `$_POST['customized']`. Nevertheless, the value returned will come
     * from the current changeset post and from the incoming post data.
     *
     * @since 3.4.0
     * @since 4.1.1 Introduced the `$default` parameter.
     * @since 4.6.0 `$default` is now returned early when the setting post value is invalid.
     * @access public
     *
     * @see WP_REST_Server::dispatch()
     * @see WP_Rest_Request::sanitize_params()
     * @see WP_Rest_Request::has_valid_params()
     *
     * @param WP_Customize_Setting $setting A WP_Customize_Setting derived object.
     * @param mixed                $default Value returned $setting has no post value (added in 4.2.0)
     *                                      or the post value is invalid (added in 4.6.0).
     * @return string|mixed $post_value Sanitized value or the $default provided.
     */
    public function post_value($setting, $default = \null)
    {
    }
    /**
     * Override a setting's value in the current customized state.
     *
     * The name "post_value" is a carry-over from when the customized state was
     * exclusively sourced from `$_POST['customized']`.
     *
     * @since 4.2.0
     * @access public
     *
     * @param string $setting_id ID for the WP_Customize_Setting instance.
     * @param mixed  $value      Post value.
     */
    public function set_post_value($setting_id, $value)
    {
    }
    /**
     * Print JavaScript settings.
     *
     * @since 3.4.0
     */
    public function customize_preview_init()
    {
    }
    /**
     * Filter the X-Frame-Options and Content-Security-Policy headers to ensure frontend can load in customizer.
     *
     * @since 4.7.0
     * @access public
     *
     * @param array $headers Headers.
     * @return array Headers.
     */
    public function filter_iframe_security_headers($headers)
    {
    }
    /**
     * Add customize state query params to a given URL if preview is allowed.
     *
     * @since 4.7.0
     * @access public
     * @see wp_redirect()
     * @see WP_Customize_Manager::get_allowed_url()
     *
     * @param string $url URL.
     * @return string URL.
     */
    public function add_state_query_params($url)
    {
    }
    /**
     * Prevent sending a 404 status when returning the response for the customize
     * preview, since it causes the jQuery Ajax to fail. Send 200 instead.
     *
     * @since 4.0.0
     * @deprecated 4.7.0
     * @access public
     */
    public function customize_preview_override_404_status()
    {
    }
    /**
     * Print base element for preview frame.
     *
     * @since 3.4.0
     * @deprecated 4.7.0
     */
    public function customize_preview_base()
    {
    }
    /**
     * Print a workaround to handle HTML5 tags in IE < 9.
     *
     * @since 3.4.0
     * @deprecated 4.7.0 Customizer no longer supports IE8, so all supported browsers recognize HTML5.
     */
    public function customize_preview_html5()
    {
    }
    /**
     * Print CSS for loading indicators for the Customizer preview.
     *
     * @since 4.2.0
     * @access public
     */
    public function customize_preview_loading_style()
    {
    }
    /**
     * Remove customize_messenger_channel query parameter from the preview window when it is not in an iframe.
     *
     * This ensures that the admin bar will be shown. It also ensures that link navigation will
     * work as expected since the parent frame is not being sent the URL to navigate to.
     *
     * @since 4.7.0
     * @access public
     */
    public function remove_frameless_preview_messenger_channel()
    {
    }
    /**
     * Print JavaScript settings for preview frame.
     *
     * @since 3.4.0
     */
    public function customize_preview_settings()
    {
    }
    /**
     * Prints a signature so we can ensure the Customizer was properly executed.
     *
     * @since 3.4.0
     * @deprecated 4.7.0
     */
    public function customize_preview_signature()
    {
    }
    /**
     * Removes the signature in case we experience a case where the Customizer was not properly executed.
     *
     * @since 3.4.0
     * @deprecated 4.7.0
     *
     * @param mixed $return Value passed through for {@see 'wp_die_handler'} filter.
     * @return mixed Value passed through for {@see 'wp_die_handler'} filter.
     */
    public function remove_preview_signature($return = \null)
    {
    }
    /**
     * Is it a theme preview?
     *
     * @since 3.4.0
     *
     * @return bool True if it's a preview, false if not.
     */
    public function is_preview()
    {
    }
    /**
     * Retrieve the template name of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Template name.
     */
    public function get_template()
    {
    }
    /**
     * Retrieve the stylesheet name of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Stylesheet name.
     */
    public function get_stylesheet()
    {
    }
    /**
     * Retrieve the template root of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Theme root.
     */
    public function get_template_root()
    {
    }
    /**
     * Retrieve the stylesheet root of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Theme root.
     */
    public function get_stylesheet_root()
    {
    }
    /**
     * Filters the current theme and return the name of the previewed theme.
     *
     * @since 3.4.0
     *
     * @param $current_theme {@internal Parameter is not used}
     * @return string Theme name.
     */
    public function current_theme($current_theme)
    {
    }
    /**
     * Validates setting values.
     *
     * Validation is skipped for unregistered settings or for values that are
     * already null since they will be skipped anyway. Sanitization is applied
     * to values that pass validation, and values that become null or `WP_Error`
     * after sanitizing are marked invalid.
     *
     * @since 4.6.0
     * @access public
     *
     * @see WP_REST_Request::has_valid_params()
     * @see WP_Customize_Setting::validate()
     *
     * @param array $setting_values Mapping of setting IDs to values to validate and sanitize.
     * @param array $options {
     *     Options.
     *
     *     @type bool $validate_existence  Whether a setting's existence will be checked.
     *     @type bool $validate_capability Whether the setting capability will be checked.
     * }
     * @return array Mapping of setting IDs to return value of validate method calls, either `true` or `WP_Error`.
     * @phpstan-param array{
     *   validate_existence?: bool,
     *   validate_capability?: bool,
     * } $options
     */
    public function validate_setting_values($setting_values, $options = array())
    {
    }
    /**
     * Prepares setting validity for exporting to the client (JS).
     *
     * Converts `WP_Error` instance into array suitable for passing into the
     * `wp.customize.Notification` JS model.
     *
     * @since 4.6.0
     * @access public
     *
     * @param true|WP_Error $validity Setting validity.
     * @return true|array If `$validity` was a WP_Error, the error codes will be array-mapped
     *                    to their respective `message` and `data` to pass into the
     *                    `wp.customize.Notification` JS model.
     */
    public function prepare_setting_validity_for_js($validity)
    {
    }
    /**
     * Handle customize_save WP Ajax request to save/update a changeset.
     *
     * @since 3.4.0
     * @since 4.7.0 The semantics of this method have changed to update a changeset, optionally to also change the status and other attributes.
     */
    public function save()
    {
    }
    /**
     * Save the post for the loaded changeset.
     *
     * @since 4.7.0
     * @access public
     *
     * @param array $args {
     *     Args for changeset post.
     *
     *     @type array  $data            Optional additional changeset data. Values will be merged on top of any existing post values.
     *     @type string $status          Post status. Optional. If supplied, the save will be transactional and a post revision will be allowed.
     *     @type string $title           Post title. Optional.
     *     @type string $date_gmt        Date in GMT. Optional.
     *     @type int    $user_id         ID for user who is saving the changeset. Optional, defaults to the current user ID.
     *     @type bool   $starter_content Whether the data is starter content. If false (default), then $starter_content will be cleared for any $data being saved.
     * }
     *
     * @return array|WP_Error Returns array on success and WP_Error with array data on error.
     * @phpstan-param array{
     *   data?: array,
     *   status?: string,
     *   title?: string,
     *   date_gmt?: string,
     *   user_id?: int,
     *   starter_content?: bool,
     * } $args
     */
    function save_changeset_post($args = array())
    {
    }
    /**
     * Preserve the initial JSON post_content passed to save into the post.
     *
     * This is needed to prevent KSES and other {@see 'content_save_pre'} filters
     * from corrupting JSON data.
     *
     * Note that WP_Customize_Manager::validate_setting_values() have already
     * run on the setting values being serialized as JSON into the post content
     * so it is pre-sanitized.
     *
     * Also, the sanitization logic is re-run through the respective
     * WP_Customize_Setting::sanitize() method when being read out of the
     * changeset, via WP_Customize_Manager::post_value(), and this sanitized
     * value will also be sent into WP_Customize_Setting::update() for
     * persisting to the DB.
     *
     * Multiple users can collaborate on a single changeset, where one user may
     * have the unfiltered_html capability but another may not. A user with
     * unfiltered_html may add a script tag to some field which needs to be kept
     * intact even when another user updates the changeset to modify another field
     * when they do not have unfiltered_html.
     *
     * @since 5.4.1
     *
     * @param array $data                An array of slashed and processed post data.
     * @param array $postarr             An array of sanitized (and slashed) but otherwise unmodified post data.
     * @param array $unsanitized_postarr An array of slashed yet *unsanitized* and unprocessed post data as originally passed to wp_insert_post().
     * @return array Filtered post data.
     */
    public function preserve_insert_changeset_post_content($data, $postarr, $unsanitized_postarr)
    {
    }
    /**
     * Whether a changeset revision should be made.
     *
     * @since 4.7.0
     * @access private
     * @var bool
     */
    protected $store_changeset_revision;
    /**
     * Filters whether a changeset has changed to create a new revision.
     *
     * Note that this will not be called while a changeset post remains in auto-draft status.
     *
     * @since 4.7.0
     * @access private
     *
     * @param bool    $post_has_changed Whether the post has changed.
     * @param WP_Post $last_revision    The last revision post object.
     * @param WP_Post $post             The post object.
     *
     * @return bool Whether a revision should be made.
     */
    public function _filter_revision_post_has_changed($post_has_changed, $last_revision, $post)
    {
    }
    /**
     * Publish changeset values.
     *
     * This will the values contained in a changeset, even changesets that do not
     * correspond to current manager instance. This is called by
     * `_wp_customize_publish_changeset()` when a customize_changeset post is
     * transitioned to the `publish` status. As such, this method should not be
     * called directly and instead `wp_publish_post()` should be used.
     *
     * Please note that if the settings in the changeset are for a non-activated
     * theme, the theme must first be switched to (via `switch_theme()`) before
     * invoking this method.
     *
     * @since 4.7.0
     * @access private
     * @see _wp_customize_publish_changeset()
     *
     * @param int $changeset_post_id ID for customize_changeset post. Defaults to the changeset for the current manager instance.
     * @return true|WP_Error True or error info.
     */
    public function _publish_changeset_values($changeset_post_id)
    {
    }
    /**
     * Update stashed theme mod settings.
     *
     * @since 4.7.0
     * @access private
     *
     * @param array $inactive_theme_mod_settings Mapping of stylesheet to arrays of theme mod settings.
     * @return array|false Returns array of updated stashed theme mods or false if the update failed or there were no changes.
     */
    protected function update_stashed_theme_mod_settings($inactive_theme_mod_settings)
    {
    }
    /**
     * Refresh nonces for the current preview.
     *
     * @since 4.2.0
     */
    public function refresh_nonces()
    {
    }
    /**
     * Add a customize setting.
     *
     * @since 3.4.0
     * @since 4.5.0 Return added WP_Customize_Setting instance.
     * @access public
     *
     * @param WP_Customize_Setting|string $id   Customize Setting object, or ID.
     * @param array                       $args Setting arguments; passed to WP_Customize_Setting
     *                                          constructor.
     * @return WP_Customize_Setting             The instance of the setting that was added.
     */
    public function add_setting($id, $args = array())
    {
    }
    /**
     * Register any dynamically-created settings, such as those from $_POST['customized']
     * that have no corresponding setting created.
     *
     * This is a mechanism to "wake up" settings that have been dynamically created
     * on the front end and have been sent to WordPress in `$_POST['customized']`. When WP
     * loads, the dynamically-created settings then will get created and previewed
     * even though they are not directly created statically with code.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $setting_ids The setting IDs to add.
     * @return array The WP_Customize_Setting objects added.
     */
    public function add_dynamic_settings($setting_ids)
    {
    }
    /**
     * Retrieve a customize setting.
     *
     * @since 3.4.0
     *
     * @param string $id Customize Setting ID.
     * @return WP_Customize_Setting|void The setting, if set.
     */
    public function get_setting($id)
    {
    }
    /**
     * Remove a customize setting.
     *
     * @since 3.4.0
     *
     * @param string $id Customize Setting ID.
     */
    public function remove_setting($id)
    {
    }
    /**
     * Add a customize panel.
     *
     * @since 4.0.0
     * @since 4.5.0 Return added WP_Customize_Panel instance.
     * @access public
     *
     * @param WP_Customize_Panel|string $id   Customize Panel object, or Panel ID.
     * @param array                     $args Optional. Panel arguments. Default empty array.
     *
     * @return WP_Customize_Panel             The instance of the panel that was added.
     */
    public function add_panel($id, $args = array())
    {
    }
    /**
     * Retrieve a customize panel.
     *
     * @since 4.0.0
     * @access public
     *
     * @param string $id Panel ID to get.
     * @return WP_Customize_Panel|void Requested panel instance, if set.
     */
    public function get_panel($id)
    {
    }
    /**
     * Remove a customize panel.
     *
     * @since 4.0.0
     * @access public
     *
     * @param string $id Panel ID to remove.
     */
    public function remove_panel($id)
    {
    }
    /**
     * Register a customize panel type.
     *
     * Registered types are eligible to be rendered via JS and created dynamically.
     *
     * @since 4.3.0
     * @access public
     *
     * @see WP_Customize_Panel
     *
     * @param string $panel Name of a custom panel which is a subclass of WP_Customize_Panel.
     */
    public function register_panel_type($panel)
    {
    }
    /**
     * Render JS templates for all registered panel types.
     *
     * @since 4.3.0
     * @access public
     */
    public function render_panel_templates()
    {
    }
    /**
     * Add a customize section.
     *
     * @since 3.4.0
     * @since 4.5.0 Return added WP_Customize_Section instance.
     * @access public
     *
     * @param WP_Customize_Section|string $id   Customize Section object, or Section ID.
     * @param array                       $args Section arguments.
     *
     * @return WP_Customize_Section             The instance of the section that was added.
     */
    public function add_section($id, $args = array())
    {
    }
    /**
     * Retrieve a customize section.
     *
     * @since 3.4.0
     *
     * @param string $id Section ID.
     * @return WP_Customize_Section|void The section, if set.
     */
    public function get_section($id)
    {
    }
    /**
     * Remove a customize section.
     *
     * @since 3.4.0
     *
     * @param string $id Section ID.
     */
    public function remove_section($id)
    {
    }
    /**
     * Register a customize section type.
     *
     * Registered types are eligible to be rendered via JS and created dynamically.
     *
     * @since 4.3.0
     * @access public
     *
     * @see WP_Customize_Section
     *
     * @param string $section Name of a custom section which is a subclass of WP_Customize_Section.
     */
    public function register_section_type($section)
    {
    }
    /**
     * Render JS templates for all registered section types.
     *
     * @since 4.3.0
     * @access public
     */
    public function render_section_templates()
    {
    }
    /**
     * Add a customize control.
     *
     * @since 3.4.0
     * @since 4.5.0 Return added WP_Customize_Control instance.
     * @access public
     *
     * @param WP_Customize_Control|string $id   Customize Control object, or ID.
     * @param array                       $args Control arguments; passed to WP_Customize_Control
     *                                          constructor.
     * @return WP_Customize_Control             The instance of the control that was added.
     */
    public function add_control($id, $args = array())
    {
    }
    /**
     * Retrieve a customize control.
     *
     * @since 3.4.0
     *
     * @param string $id ID of the control.
     * @return WP_Customize_Control|void The control object, if set.
     */
    public function get_control($id)
    {
    }
    /**
     * Remove a customize control.
     *
     * @since 3.4.0
     *
     * @param string $id ID of the control.
     */
    public function remove_control($id)
    {
    }
    /**
     * Register a customize control type.
     *
     * Registered types are eligible to be rendered via JS and created dynamically.
     *
     * @since 4.1.0
     * @access public
     *
     * @param string $control Name of a custom control which is a subclass of
     *                        WP_Customize_Control.
     */
    public function register_control_type($control)
    {
    }
    /**
     * Render JS templates for all registered control types.
     *
     * @since 4.1.0
     * @access public
     */
    public function render_control_templates()
    {
    }
    /**
     * Helper function to compare two objects by priority, ensuring sort stability via instance_number.
     *
     * @since 3.4.0
     * @deprecated 4.7.0 Use wp_list_sort()
     *
     * @param WP_Customize_Panel|WP_Customize_Section|WP_Customize_Control $a Object A.
     * @param WP_Customize_Panel|WP_Customize_Section|WP_Customize_Control $b Object B.
     * @return int
     */
    protected function _cmp_priority($a, $b)
    {
    }
    /**
     * Prepare panels, sections, and controls.
     *
     * For each, check if required related components exist,
     * whether the user has the necessary capabilities,
     * and sort by priority.
     *
     * @since 3.4.0
     */
    public function prepare_controls()
    {
    }
    /**
     * Enqueue scripts for customize controls.
     *
     * @since 3.4.0
     */
    public function enqueue_control_scripts()
    {
    }
    /**
     * Determine whether the user agent is iOS.
     *
     * @since 4.4.0
     * @access public
     *
     * @return bool Whether the user agent is iOS.
     */
    public function is_ios()
    {
    }
    /**
     * Get the template string for the Customizer pane document title.
     *
     * @since 4.4.0
     * @access public
     *
     * @return string The template string for the document title.
     */
    public function get_document_title_template()
    {
    }
    /**
     * Set the initial URL to be previewed.
     *
     * URL is validated.
     *
     * @since 4.4.0
     * @access public
     *
     * @param string $preview_url URL to be previewed.
     */
    public function set_preview_url($preview_url)
    {
    }
    /**
     * Get the initial URL to be previewed.
     *
     * @since 4.4.0
     * @access public
     *
     * @return string URL being previewed.
     */
    public function get_preview_url()
    {
    }
    /**
     * Determines whether the admin and the frontend are on different domains.
     *
     * @since 4.7.0
     * @access public
     *
     * @return bool Whether cross-domain.
     */
    public function is_cross_domain()
    {
    }
    /**
     * Get URLs allowed to be previewed.
     *
     * If the front end and the admin are served from the same domain, load the
     * preview over ssl if the Customizer is being loaded over ssl. This avoids
     * insecure content warnings. This is not attempted if the admin and front end
     * are on different domains to avoid the case where the front end doesn't have
     * ssl certs. Domain mapping plugins can allow other urls in these conditions
     * using the customize_allowed_urls filter.
     *
     * @since 4.7.0
     * @access public
     *
     * @returns array Allowed URLs.
     */
    public function get_allowed_urls()
    {
    }
    /**
     * Get messenger channel.
     *
     * @since 4.7.0
     * @access public
     *
     * @return string Messenger channel.
     */
    public function get_messenger_channel()
    {
    }
    /**
     * Set URL to link the user to when closing the Customizer.
     *
     * URL is validated.
     *
     * @since 4.4.0
     * @access public
     *
     * @param string $return_url URL for return link.
     */
    public function set_return_url($return_url)
    {
    }
    /**
     * Get URL to link the user to when closing the Customizer.
     *
     * @since 4.4.0
     * @access public
     *
     * @return string URL for link to close Customizer.
     */
    public function get_return_url()
    {
    }
    /**
     * Set the autofocused constructs.
     *
     * @since 4.4.0
     * @access public
     *
     * @param array $autofocus {
     *     Mapping of 'panel', 'section', 'control' to the ID which should be autofocused.
     *
     *     @type string [$control]  ID for control to be autofocused.
     *     @type string [$section]  ID for section to be autofocused.
     *     @type string [$panel]    ID for panel to be autofocused.
     * }
     */
    public function set_autofocus($autofocus)
    {
    }
    /**
     * Get the autofocused constructs.
     *
     * @since 4.4.0
     * @access public
     *
     * @return array {
     *     Mapping of 'panel', 'section', 'control' to the ID which should be autofocused.
     *
     *     @type string [$control]  ID for control to be autofocused.
     *     @type string [$section]  ID for section to be autofocused.
     *     @type string [$panel]    ID for panel to be autofocused.
     * }
     */
    public function get_autofocus()
    {
    }
    /**
     * Get nonces for the Customizer.
     *
     * @since 4.5.0
     * @return array Nonces.
     */
    public function get_nonces()
    {
    }
    /**
     * Print JavaScript settings for parent window.
     *
     * @since 4.4.0
     */
    public function customize_pane_settings()
    {
    }
    /**
     * Returns a list of devices to allow previewing.
     *
     * @access public
     * @since 4.5.0
     *
     * @return array List of devices with labels and default setting.
     */
    public function get_previewable_devices()
    {
    }
    /**
     * Register some default controls.
     *
     * @since 3.4.0
     */
    public function register_controls()
    {
    }
    /**
     * Return whether there are published pages.
     *
     * Used as active callback for static front page section and controls.
     *
     * @access private
     * @since 4.7.0
     *
     * @returns bool Whether there are published (or to be published) pages.
     */
    public function has_published_pages()
    {
    }
    /**
     * Add settings from the POST data that were not added with code, e.g. dynamically-created settings for Widgets
     *
     * @since 4.2.0
     * @access public
     *
     * @see add_dynamic_settings()
     */
    public function register_dynamic_settings()
    {
    }
    /**
     * Callback for validating the header_textcolor value.
     *
     * Accepts 'blank', and otherwise uses sanitize_hex_color_no_hash().
     * Returns default text color if hex color is empty.
     *
     * @since 3.4.0
     *
     * @param string $color
     * @return mixed
     */
    public function _sanitize_header_textcolor($color)
    {
    }
    /**
     * Callback for validating a background setting value.
     *
     * @since 4.7.0
     * @access private
     *
     * @param string $value Repeat value.
     * @param WP_Customize_Setting $setting Setting.
     * @return string|WP_Error Background value or validation error.
     */
    public function _sanitize_background_setting($value, $setting)
    {
    }
    /**
     * Export header video settings to facilitate selective refresh.
     *
     * @since 4.7.0
     *
     * @param array $response Response.
     * @param WP_Customize_Selective_Refresh $selective_refresh Selective refresh component.
     * @param array $partials Array of partials.
     * @return array
     */
    public function export_header_video_settings($response, $selective_refresh, $partials)
    {
    }
    /**
     * Callback for validating the header_video value.
     *
     * Ensures that the selected video is less than 8MB and provides an error message.
     *
     * @since 4.7.0
     *
     * @param WP_Error $validity
     * @param mixed $value
     * @return mixed
     */
    public function _validate_header_video($validity, $value)
    {
    }
    /**
     * Callback for validating the external_header_video value.
     *
     * Ensures that the provided URL is supported.
     *
     * @since 4.7.0
     *
     * @param WP_Error $validity
     * @param mixed $value
     * @return mixed
     */
    public function _validate_external_header_video($validity, $value)
    {
    }
    /**
     * Callback for sanitizing the external_header_video value.
     *
     * @since 4.7.1
     *
     * @param string $value URL.
     * @return string Sanitized URL.
     */
    public function _sanitize_external_header_video($value)
    {
    }
    /**
     * Callback for rendering the custom logo, used in the custom_logo partial.
     *
     * This method exists because the partial object and context data are passed
     * into a partial's render_callback so we cannot use get_custom_logo() as
     * the render_callback directly since it expects a blog ID as the first
     * argument. When WP no longer supports PHP 5.3, this method can be removed
     * in favor of an anonymous function.
     *
     * @see WP_Customize_Manager::register_controls()
     *
     * @since 4.5.0
     * @access private
     *
     * @return string Custom logo.
     */
    public function _render_custom_logo_partial()
    {
    }
}