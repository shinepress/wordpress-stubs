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
#[\AllowDynamicProperties]
final class WP_Customize_Manager
{
    /**
     * Methods and properties dealing with managing widgets in the Customizer.
     *
     * @since 3.9.0
     * @var WP_Customize_Widgets
     */
    public $widgets;
    /**
     * Methods and properties dealing with managing nav menus in the Customizer.
     *
     * @since 4.3.0
     * @var WP_Customize_Nav_Menus
     */
    public $nav_menus;
    /**
     * Methods and properties dealing with selective refresh in the Customizer preview.
     *
     * @since 4.5.0
     * @var WP_Customize_Selective_Refresh
     */
    public $selective_refresh;
    /**
     * Constructor.
     *
     * @since 3.4.0
     * @since 4.7.0 Added `$args` parameter.
     *
     * @param array $args {
     *     Args.
     *
     *     @type null|string|false $changeset_uuid     Changeset UUID, the `post_name` for the customize_changeset post containing the customized state.
     *                                                 Defaults to `null` resulting in a UUID to be immediately generated. If `false` is provided, then
     *                                                 then the changeset UUID will be determined during `after_setup_theme`: when the
     *                                                 `customize_changeset_branching` filter returns false, then the default UUID will be that
     *                                                 of the most recent `customize_changeset` post that has a status other than 'auto-draft',
     *                                                 'publish', or 'trash'. Otherwise, if changeset branching is enabled, then a random UUID will be used.
     *     @type string            $theme              Theme to be previewed (for theme switch). Defaults to customize_theme or theme query params.
     *     @type string            $messenger_channel  Messenger channel. Defaults to customize_messenger_channel query param.
     *     @type bool              $settings_previewed If settings should be previewed. Defaults to true.
     *     @type bool              $branching          If changeset branching is allowed; otherwise, changesets are linear. Defaults to true.
     *     @type bool              $autosaved          If data from a changeset's autosaved revision should be loaded if it exists. Defaults to false.
     * }
     * @phpstan-param array{
     *   changeset_uuid?: null|string|false,
     *   theme?: string,
     *   messenger_channel?: string,
     *   settings_previewed?: bool,
     *   branching?: bool,
     *   autosaved?: bool,
     * } $args
     */
    public function __construct($args = array())
    {
    }
    /**
     * Returns true if it's an Ajax request.
     *
     * @since 3.4.0
     * @since 4.2.0 Added `$action` param.
     *
     * @param string|null $action Whether the supplied Ajax action is being run.
     * @return bool True if it's an Ajax request, false otherwise.
     */
    public function doing_ajax($action = \null)
    {
    }
    /**
     * Returns the Ajax wp_die() handler if it's a customized request.
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
     * Starts preview and customize theme.
     *
     * Check if customize query variable exist. Init filters to filter the active theme.
     *
     * @since 3.4.0
     *
     * @global string $pagenow The filename of the current screen.
     */
    public function setup_theme()
    {
    }
    /**
     * Establishes the loaded changeset.
     *
     * This method runs right at after_setup_theme and applies the 'customize_changeset_branching' filter to determine
     * whether concurrent changesets are allowed. Then if the Customizer is not initialized with a `changeset_uuid` param,
     * this method will determine which UUID should be used. If changeset branching is disabled, then the most saved
     * changeset will be loaded by default. Otherwise, if there are no existing saved changesets or if changeset branching is
     * enabled, then a new UUID will be generated.
     *
     * @since 4.9.0
     *
     * @global string $pagenow The filename of the current screen.
     */
    public function establish_loaded_changeset()
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
     * Stops previewing the selected theme.
     *
     * Removes filters to change the active theme.
     *
     * @since 3.4.0
     */
    public function stop_previewing_theme()
    {
    }
    /**
     * Gets whether settings are or will be previewed.
     *
     * @since 4.9.0
     *
     * @see WP_Customize_Setting::preview()
     *
     * @return bool
     */
    public function settings_previewed()
    {
    }
    /**
     * Gets whether data from a changeset's autosaved revision should be loaded if it exists.
     *
     * @since 4.9.0
     *
     * @see WP_Customize_Manager::changeset_data()
     *
     * @return bool Is using autosaved changeset revision.
     */
    public function autosaved()
    {
    }
    /**
     * Whether the changeset branching is allowed.
     *
     * @since 4.9.0
     *
     * @see WP_Customize_Manager::establish_loaded_changeset()
     *
     * @return bool Is changeset branching.
     */
    public function branching()
    {
    }
    /**
     * Gets the changeset UUID.
     *
     * @since 4.7.0
     *
     * @see WP_Customize_Manager::establish_loaded_changeset()
     *
     * @return string UUID.
     */
    public function changeset_uuid()
    {
    }
    /**
     * Gets the theme being customized.
     *
     * @since 3.4.0
     *
     * @return WP_Theme
     */
    public function theme()
    {
    }
    /**
     * Gets the registered settings.
     *
     * @since 3.4.0
     *
     * @return array
     */
    public function settings()
    {
    }
    /**
     * Gets the registered controls.
     *
     * @since 3.4.0
     *
     * @return array
     */
    public function controls()
    {
    }
    /**
     * Gets the registered containers.
     *
     * @since 4.0.0
     *
     * @return array
     */
    public function containers()
    {
    }
    /**
     * Gets the registered sections.
     *
     * @since 3.4.0
     *
     * @return array
     */
    public function sections()
    {
    }
    /**
     * Gets the registered panels.
     *
     * @since 4.0.0
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
     * Registers styles/scripts and initialize the preview of each setting
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
     * Finds the changeset post ID for a given changeset UUID.
     *
     * @since 4.7.0
     *
     * @param string $uuid Changeset UUID.
     * @return int|null Returns post ID on success and null on failure.
     */
    public function find_changeset_post_id($uuid)
    {
    }
    /**
     * Gets the changeset post ID for the loaded changeset.
     *
     * @since 4.7.0
     *
     * @return int|null Post ID on success or null if there is no post yet saved.
     */
    public function changeset_post_id()
    {
    }
    /**
     * Gets changeset data.
     *
     * @since 4.7.0
     * @since 4.9.0 This will return the changeset's data with a user's autosave revision merged on top, if one exists and $autosaved is true.
     *
     * @return array Changeset data.
     */
    public function changeset_data()
    {
    }
    /**
     * Imports theme starter content into the customized state.
     *
     * @since 4.7.0
     *
     * @param array $starter_content Starter content. Defaults to `get_theme_starter_content()`.
     */
    public function import_theme_starter_content($starter_content = array())
    {
    }
    /**
     * Saves starter content changeset.
     *
     * @since 4.7.0
     */
    public function _save_starter_content_changeset()
    {
    }
    /**
     * Gets dirty pre-sanitized setting values in the current customized state.
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
     * @since 4.7.0 Added `$args` parameter and merging with changeset values and stashed theme mods.
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
     * @since 4.1.1 Introduced the `$default_value` parameter.
     * @since 4.6.0 `$default_value` is now returned early when the setting post value is invalid.
     *
     * @see WP_REST_Server::dispatch()
     * @see WP_REST_Request::sanitize_params()
     * @see WP_REST_Request::has_valid_params()
     *
     * @param WP_Customize_Setting $setting       A WP_Customize_Setting derived object.
     * @param mixed                $default_value Value returned if `$setting` has no post value (added in 4.2.0)
     *                                            or the post value is invalid (added in 4.6.0).
     * @return string|mixed Sanitized value or the `$default_value` provided.
     */
    public function post_value($setting, $default_value = \null)
    {
    }
    /**
     * Overrides a setting's value in the current customized state.
     *
     * The name "post_value" is a carry-over from when the customized state was
     * exclusively sourced from `$_POST['customized']`.
     *
     * @since 4.2.0
     *
     * @param string $setting_id ID for the WP_Customize_Setting instance.
     * @param mixed  $value      Post value.
     */
    public function set_post_value($setting_id, $value)
    {
    }
    /**
     * Prints JavaScript settings.
     *
     * @since 3.4.0
     */
    public function customize_preview_init()
    {
    }
    /**
     * Filters the X-Frame-Options and Content-Security-Policy headers to ensure frontend can load in customizer.
     *
     * @since 4.7.0
     *
     * @param array $headers Headers.
     * @return array Headers.
     */
    public function filter_iframe_security_headers($headers)
    {
    }
    /**
     * Adds customize state query params to a given URL if preview is allowed.
     *
     * @since 4.7.0
     *
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
     * Prevents sending a 404 status when returning the response for the customize
     * preview, since it causes the jQuery Ajax to fail. Send 200 instead.
     *
     * @since 4.0.0
     * @deprecated 4.7.0
     */
    public function customize_preview_override_404_status()
    {
    }
    /**
     * Prints base element for preview frame.
     *
     * @since 3.4.0
     * @deprecated 4.7.0
     */
    public function customize_preview_base()
    {
    }
    /**
     * Prints a workaround to handle HTML5 tags in IE < 9.
     *
     * @since 3.4.0
     * @deprecated 4.7.0 Customizer no longer supports IE8, so all supported browsers recognize HTML5.
     */
    public function customize_preview_html5()
    {
    }
    /**
     * Prints CSS for loading indicators for the Customizer preview.
     *
     * @since 4.2.0
     */
    public function customize_preview_loading_style()
    {
    }
    /**
     * Removes customize_messenger_channel query parameter from the preview window when it is not in an iframe.
     *
     * This ensures that the admin bar will be shown. It also ensures that link navigation will
     * work as expected since the parent frame is not being sent the URL to navigate to.
     *
     * @since 4.7.0
     */
    public function remove_frameless_preview_messenger_channel()
    {
    }
    /**
     * Prints JavaScript settings for preview frame.
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
     * @param callable|null $callback Optional. Value passed through for {@see 'wp_die_handler'} filter.
     *                                Default null.
     * @return callable|null Value passed through for {@see 'wp_die_handler'} filter.
     */
    public function remove_preview_signature($callback = \null)
    {
    }
    /**
     * Determines whether it is a theme preview or not.
     *
     * @since 3.4.0
     *
     * @return bool True if it's a preview, false if not.
     */
    public function is_preview()
    {
    }
    /**
     * Retrieves the template name of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Template name.
     */
    public function get_template()
    {
    }
    /**
     * Retrieves the stylesheet name of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Stylesheet name.
     */
    public function get_stylesheet()
    {
    }
    /**
     * Retrieves the template root of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Theme root.
     */
    public function get_template_root()
    {
    }
    /**
     * Retrieves the stylesheet root of the previewed theme.
     *
     * @since 3.4.0
     *
     * @return string Theme root.
     */
    public function get_stylesheet_root()
    {
    }
    /**
     * Filters the active theme and return the name of the previewed theme.
     *
     * @since 3.4.0
     *
     * @param mixed $current_theme {@internal Parameter is not used}
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
     * Handles customize_save WP Ajax request to save/update a changeset.
     *
     * @since 3.4.0
     * @since 4.7.0 The semantics of this method have changed to update a changeset, optionally to also change the status and other attributes.
     */
    public function save()
    {
    }
    /**
     * Saves the post for the loaded changeset.
     *
     * @since 4.7.0
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
     *     @type bool   $autosave        Whether this is a request to create an autosave revision.
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
     *   autosave?: bool,
     * } $args
     */
    public function save_changeset_post($args = array())
    {
    }
    /**
     * Preserves the initial JSON post_content passed to save into the post.
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
     * Trashes or deletes a changeset post.
     *
     * The following re-formulates the logic from `wp_trash_post()` as done in
     * `wp_publish_post()`. The reason for bypassing `wp_trash_post()` is that it
     * will mutate the the `post_content` and the `post_name` when they should be
     * untouched.
     *
     * @since 4.9.0
     *
     * @see wp_trash_post()
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int|WP_Post $post The changeset post.
     * @return mixed A WP_Post object for the trashed post or an empty value on failure.
     */
    public function trash_changeset_post($post)
    {
    }
    /**
     * Handles request to trash a changeset.
     *
     * @since 4.9.0
     */
    public function handle_changeset_trash_request()
    {
    }
    /**
     * Re-maps 'edit_post' meta cap for a customize_changeset post to be the same as 'customize' maps.
     *
     * There is essentially a "meta meta" cap in play here, where 'edit_post' meta cap maps to
     * the 'customize' meta cap which then maps to 'edit_theme_options'. This is currently
     * required in core for `wp_create_post_autosave()` because it will call
     * `_wp_translate_postdata()` which in turn will check if a user can 'edit_post', but the
     * the caps for the customize_changeset post type are all mapping to the meta capability.
     * This should be able to be removed once #40922 is addressed in core.
     *
     * @since 4.9.0
     *
     * @link https://core.trac.wordpress.org/ticket/40922
     * @see WP_Customize_Manager::save_changeset_post()
     * @see _wp_translate_postdata()
     *
     * @param string[] $caps    Array of the user's capabilities.
     * @param string   $cap     Capability name.
     * @param int      $user_id The user ID.
     * @param array    $args    Adds the context to the cap. Typically the object ID.
     * @return array Capabilities.
     */
    public function grant_edit_post_capability_for_changeset($caps, $cap, $user_id, $args)
    {
    }
    /**
     * Marks the changeset post as being currently edited by the current user.
     *
     * @since 4.9.0
     *
     * @param int  $changeset_post_id Changeset post ID.
     * @param bool $take_over Whether to take over the changeset. Default false.
     */
    public function set_changeset_lock($changeset_post_id, $take_over = \false)
    {
    }
    /**
     * Refreshes changeset lock with the current time if current user edited the changeset before.
     *
     * @since 4.9.0
     *
     * @param int $changeset_post_id Changeset post ID.
     */
    public function refresh_changeset_lock($changeset_post_id)
    {
    }
    /**
     * Filters heartbeat settings for the Customizer.
     *
     * @since 4.9.0
     *
     * @global string $pagenow The filename of the current screen.
     *
     * @param array $settings Current settings to filter.
     * @return array Heartbeat settings.
     */
    public function add_customize_screen_to_heartbeat_settings($settings)
    {
    }
    /**
     * Checks locked changeset with heartbeat API.
     *
     * @since 4.9.0
     *
     * @param array  $response  The Heartbeat response.
     * @param array  $data      The $_POST data sent.
     * @param string $screen_id The screen id.
     * @return array The Heartbeat response.
     */
    public function check_changeset_lock_with_heartbeat($response, $data, $screen_id)
    {
    }
    /**
     * Removes changeset lock when take over request is sent via Ajax.
     *
     * @since 4.9.0
     */
    public function handle_override_changeset_lock_request()
    {
    }
    /**
     * Filters whether a changeset has changed to create a new revision.
     *
     * Note that this will not be called while a changeset post remains in auto-draft status.
     *
     * @since 4.7.0
     *
     * @param bool    $post_has_changed Whether the post has changed.
     * @param WP_Post $latest_revision  The latest revision post object.
     * @param WP_Post $post             The post object.
     * @return bool Whether a revision should be made.
     */
    public function _filter_revision_post_has_changed($post_has_changed, $latest_revision, $post)
    {
    }
    /**
     * Publishes the values of a changeset.
     *
     * This will publish the values contained in a changeset, even changesets that do not
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
     *
     * @see _wp_customize_publish_changeset()
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $changeset_post_id ID for customize_changeset post. Defaults to the changeset for the current manager instance.
     * @return true|WP_Error True or error info.
     */
    public function _publish_changeset_values($changeset_post_id)
    {
    }
    /**
     * Refreshes nonces for the current preview.
     *
     * @since 4.2.0
     */
    public function refresh_nonces()
    {
    }
    /**
     * Deletes a given auto-draft changeset or the autosave revision for a given changeset or delete changeset lock.
     *
     * @since 4.9.0
     */
    public function handle_dismiss_autosave_or_lock_request()
    {
    }
    /**
     * Adds a customize setting.
     *
     * @since 3.4.0
     * @since 4.5.0 Return added WP_Customize_Setting instance.
     *
     * @see WP_Customize_Setting::__construct()
     * @link https://developer.wordpress.org/themes/customize-api
     *
     * @param WP_Customize_Setting|string $id   Customize Setting object, or ID.
     * @param array                       $args Optional. Array of properties for the new Setting object.
     *                                          See WP_Customize_Setting::__construct() for information
     *                                          on accepted arguments. Default empty array.
     * @return WP_Customize_Setting The instance of the setting that was added.
     * @phpstan-param array{
     *   type?: string,
     *   capability?: string,
     *   theme_supports?: string|string[],
     *   default?: string,
     *   transport?: string,
     *   validate_callback?: callable,
     *   sanitize_callback?: callable,
     *   sanitize_js_callback?: callable,
     *   dirty?: bool,
     * } $args See WP_Customize_Setting::__construct()
     */
    public function add_setting($id, $args = array())
    {
    }
    /**
     * Registers any dynamically-created settings, such as those from $_POST['customized']
     * that have no corresponding setting created.
     *
     * This is a mechanism to "wake up" settings that have been dynamically created
     * on the front end and have been sent to WordPress in `$_POST['customized']`. When WP
     * loads, the dynamically-created settings then will get created and previewed
     * even though they are not directly created statically with code.
     *
     * @since 4.2.0
     *
     * @param array $setting_ids The setting IDs to add.
     * @return array The WP_Customize_Setting objects added.
     */
    public function add_dynamic_settings($setting_ids)
    {
    }
    /**
     * Retrieves a customize setting.
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
     * Removes a customize setting.
     *
     * Note that removing the setting doesn't destroy the WP_Customize_Setting instance or remove its filters.
     *
     * @since 3.4.0
     *
     * @param string $id Customize Setting ID.
     */
    public function remove_setting($id)
    {
    }
    /**
     * Adds a customize panel.
     *
     * @since 4.0.0
     * @since 4.5.0 Return added WP_Customize_Panel instance.
     *
     * @see WP_Customize_Panel::__construct()
     *
     * @param WP_Customize_Panel|string $id   Customize Panel object, or ID.
     * @param array                     $args Optional. Array of properties for the new Panel object.
     *                                        See WP_Customize_Panel::__construct() for information
     *                                        on accepted arguments. Default empty array.
     * @return WP_Customize_Panel The instance of the panel that was added.
     * @phpstan-param array{
     *   priority?: int,
     *   capability?: string,
     *   theme_supports?: mixed[],
     *   title?: string,
     *   description?: string,
     *   type?: string,
     *   active_callback?: callable,
     * } $args See WP_Customize_Panel::__construct()
     */
    public function add_panel($id, $args = array())
    {
    }
    /**
     * Retrieves a customize panel.
     *
     * @since 4.0.0
     *
     * @param string $id Panel ID to get.
     * @return WP_Customize_Panel|void Requested panel instance, if set.
     */
    public function get_panel($id)
    {
    }
    /**
     * Removes a customize panel.
     *
     * Note that removing the panel doesn't destroy the WP_Customize_Panel instance or remove its filters.
     *
     * @since 4.0.0
     *
     * @param string $id Panel ID to remove.
     */
    public function remove_panel($id)
    {
    }
    /**
     * Registers a customize panel type.
     *
     * Registered types are eligible to be rendered via JS and created dynamically.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Panel
     *
     * @param string $panel Name of a custom panel which is a subclass of WP_Customize_Panel.
     */
    public function register_panel_type($panel)
    {
    }
    /**
     * Renders JS templates for all registered panel types.
     *
     * @since 4.3.0
     */
    public function render_panel_templates()
    {
    }
    /**
     * Adds a customize section.
     *
     * @since 3.4.0
     * @since 4.5.0 Return added WP_Customize_Section instance.
     *
     * @see WP_Customize_Section::__construct()
     *
     * @param WP_Customize_Section|string $id   Customize Section object, or ID.
     * @param array                       $args Optional. Array of properties for the new Section object.
     *                                          See WP_Customize_Section::__construct() for information
     *                                          on accepted arguments. Default empty array.
     * @return WP_Customize_Section The instance of the section that was added.
     * @phpstan-param array{
     *   priority?: int,
     *   panel?: string,
     *   capability?: string,
     *   theme_supports?: string|string[],
     *   title?: string,
     *   description?: string,
     *   type?: string,
     *   active_callback?: callable,
     *   description_hidden?: bool,
     * } $args See WP_Customize_Section::__construct()
     */
    public function add_section($id, $args = array())
    {
    }
    /**
     * Retrieves a customize section.
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
     * Removes a customize section.
     *
     * Note that removing the section doesn't destroy the WP_Customize_Section instance or remove its filters.
     *
     * @since 3.4.0
     *
     * @param string $id Section ID.
     */
    public function remove_section($id)
    {
    }
    /**
     * Registers a customize section type.
     *
     * Registered types are eligible to be rendered via JS and created dynamically.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Section
     *
     * @param string $section Name of a custom section which is a subclass of WP_Customize_Section.
     */
    public function register_section_type($section)
    {
    }
    /**
     * Renders JS templates for all registered section types.
     *
     * @since 4.3.0
     */
    public function render_section_templates()
    {
    }
    /**
     * Adds a customize control.
     *
     * @since 3.4.0
     * @since 4.5.0 Return added WP_Customize_Control instance.
     *
     * @see WP_Customize_Control::__construct()
     *
     * @param WP_Customize_Control|string $id   Customize Control object, or ID.
     * @param array                       $args Optional. Array of properties for the new Control object.
     *                                          See WP_Customize_Control::__construct() for information
     *                                          on accepted arguments. Default empty array.
     * @return WP_Customize_Control The instance of the control that was added.
     * @phpstan-param array{
     *   instance_number?: int,
     *   manager?: WP_Customize_Manager,
     *   id?: string,
     *   settings?: array,
     *   setting?: string,
     *   capability?: string,
     *   priority?: int,
     *   section?: string,
     *   label?: string,
     *   description?: string,
     *   choices?: array,
     *   input_attrs?: array,
     *   allow_addition?: bool,
     *   json?: array,
     *   type?: string,
     *   active_callback?: callable,
     * } $args See WP_Customize_Control::__construct()
     */
    public function add_control($id, $args = array())
    {
    }
    /**
     * Retrieves a customize control.
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
     * Removes a customize control.
     *
     * Note that removing the control doesn't destroy the WP_Customize_Control instance or remove its filters.
     *
     * @since 3.4.0
     *
     * @param string $id ID of the control.
     */
    public function remove_control($id)
    {
    }
    /**
     * Registers a customize control type.
     *
     * Registered types are eligible to be rendered via JS and created dynamically.
     *
     * @since 4.1.0
     *
     * @param string $control Name of a custom control which is a subclass of
     *                        WP_Customize_Control.
     */
    public function register_control_type($control)
    {
    }
    /**
     * Renders JS templates for all registered control types.
     *
     * @since 4.1.0
     */
    public function render_control_templates()
    {
    }
    /**
     * Prepares panels, sections, and controls.
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
     * Enqueues scripts for customize controls.
     *
     * @since 3.4.0
     */
    public function enqueue_control_scripts()
    {
    }
    /**
     * Determines whether the user agent is iOS.
     *
     * @since 4.4.0
     *
     * @return bool Whether the user agent is iOS.
     */
    public function is_ios()
    {
    }
    /**
     * Gets the template string for the Customizer pane document title.
     *
     * @since 4.4.0
     *
     * @return string The template string for the document title.
     */
    public function get_document_title_template()
    {
    }
    /**
     * Sets the initial URL to be previewed.
     *
     * URL is validated.
     *
     * @since 4.4.0
     *
     * @param string $preview_url URL to be previewed.
     */
    public function set_preview_url($preview_url)
    {
    }
    /**
     * Gets the initial URL to be previewed.
     *
     * @since 4.4.0
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
     *
     * @return bool Whether cross-domain.
     */
    public function is_cross_domain()
    {
    }
    /**
     * Gets URLs allowed to be previewed.
     *
     * If the front end and the admin are served from the same domain, load the
     * preview over ssl if the Customizer is being loaded over ssl. This avoids
     * insecure content warnings. This is not attempted if the admin and front end
     * are on different domains to avoid the case where the front end doesn't have
     * ssl certs. Domain mapping plugins can allow other urls in these conditions
     * using the customize_allowed_urls filter.
     *
     * @since 4.7.0
     *
     * @return array Allowed URLs.
     */
    public function get_allowed_urls()
    {
    }
    /**
     * Gets messenger channel.
     *
     * @since 4.7.0
     *
     * @return string Messenger channel.
     */
    public function get_messenger_channel()
    {
    }
    /**
     * Sets URL to link the user to when closing the Customizer.
     *
     * URL is validated.
     *
     * @since 4.4.0
     *
     * @param string $return_url URL for return link.
     */
    public function set_return_url($return_url)
    {
    }
    /**
     * Gets URL to link the user to when closing the Customizer.
     *
     * @since 4.4.0
     *
     * @global array $_registered_pages
     *
     * @return string URL for link to close Customizer.
     */
    public function get_return_url()
    {
    }
    /**
     * Sets the autofocused constructs.
     *
     * @since 4.4.0
     *
     * @param array $autofocus {
     *     Mapping of 'panel', 'section', 'control' to the ID which should be autofocused.
     *
     *     @type string $control ID for control to be autofocused.
     *     @type string $section ID for section to be autofocused.
     *     @type string $panel   ID for panel to be autofocused.
     * }
     * @phpstan-param array{
     *   control?: string,
     *   section?: string,
     *   panel?: string,
     * } $autofocus
     */
    public function set_autofocus($autofocus)
    {
    }
    /**
     * Gets the autofocused constructs.
     *
     * @since 4.4.0
     *
     * @return string[] {
     *     Mapping of 'panel', 'section', 'control' to the ID which should be autofocused.
     *
     *     @type string $control ID for control to be autofocused.
     *     @type string $section ID for section to be autofocused.
     *     @type string $panel   ID for panel to be autofocused.
     * }
     * @phpstan-return array{
     *   control: string,
     *   section: string,
     *   panel: string,
     * }
     */
    public function get_autofocus()
    {
    }
    /**
     * Gets nonces for the Customizer.
     *
     * @since 4.5.0
     *
     * @return array Nonces.
     */
    public function get_nonces()
    {
    }
    /**
     * Prints JavaScript settings for parent window.
     *
     * @since 4.4.0
     */
    public function customize_pane_settings()
    {
    }
    /**
     * Returns a list of devices to allow previewing.
     *
     * @since 4.5.0
     *
     * @return array List of devices with labels and default setting.
     */
    public function get_previewable_devices()
    {
    }
    /**
     * Registers some default controls.
     *
     * @since 3.4.0
     */
    public function register_controls()
    {
    }
    /**
     * Returns whether there are published pages.
     *
     * Used as active callback for static front page section and controls.
     *
     * @since 4.7.0
     *
     * @return bool Whether there are published (or to be published) pages.
     */
    public function has_published_pages()
    {
    }
    /**
     * Adds settings from the POST data that were not added with code, e.g. dynamically-created settings for Widgets
     *
     * @since 4.2.0
     *
     * @see add_dynamic_settings()
     */
    public function register_dynamic_settings()
    {
    }
    /**
     * Loads themes into the theme browsing/installation UI.
     *
     * @since 4.9.0
     */
    public function handle_load_themes_request()
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
     *
     * @param string               $value   Repeat value.
     * @param WP_Customize_Setting $setting Setting.
     * @return string|WP_Error Background value or validation error.
     */
    public function _sanitize_background_setting($value, $setting)
    {
    }
    /**
     * Exports header video settings to facilitate selective refresh.
     *
     * @since 4.7.0
     *
     * @param array                          $response          Response.
     * @param WP_Customize_Selective_Refresh $selective_refresh Selective refresh component.
     * @param array                          $partials          Array of partials.
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
     * @param mixed    $value
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
     * @param mixed    $value
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
     *
     * @return string Custom logo.
     */
    public function _render_custom_logo_partial()
    {
    }
}