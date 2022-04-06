<?php


/**
 * WordPress Customize Setting classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.4.0
 */
/**
 * Customize Setting class.
 *
 * Handles saving and sanitizing of settings.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Manager
 */
class WP_Customize_Setting
{
    /**
     * @access public
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * Unique string identifier for the setting.
     *
     * @access public
     * @var string
     */
    public $id;
    /**
     * @access public
     * @var string
     */
    public $type = 'theme_mod';
    /**
     * Capability required to edit this setting.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';
    /**
     * Feature a theme is required to support to enable this setting.
     *
     * @access public
     * @var string
     */
    public $theme_supports = '';
    public $default = '';
    public $transport = 'refresh';
    /**
     * Server-side sanitization callback for the setting's value.
     *
     * @var callback
     */
    public $validate_callback = '';
    public $sanitize_callback = '';
    public $sanitize_js_callback = '';
    /**
     * Whether or not the setting is initially dirty when created.
     *
     * This is used to ensure that a setting will be sent from the pane to the
     * preview when loading the Customizer. Normally a setting only is synced to
     * the preview if it has been changed. This allows the setting to be sent
     * from the start.
     *
     * @since 4.2.0
     * @access public
     * @var bool
     */
    public $dirty = \false;
    /**
     * @var array
     */
    protected $id_data = array();
    /**
     * Whether or not preview() was called.
     *
     * @since 4.4.0
     * @access protected
     * @var bool
     */
    protected $is_previewed = \false;
    /**
     * Cache of multidimensional values to improve performance.
     *
     * @since 4.4.0
     * @access protected
     * @var array
     * @static
     */
    protected static $aggregated_multidimensionals = array();
    /**
     * Whether the multidimensional setting is aggregated.
     *
     * @since 4.4.0
     * @access protected
     * @var bool
     */
    protected $is_multidimensional_aggregated = \false;
    /**
     * Constructor.
     *
     * Any supplied $args override class property defaults.
     *
     * @since 3.4.0
     *
     * @param WP_Customize_Manager $manager
     * @param string               $id      An specific ID of the setting. Can be a
     *                                      theme mod or option name.
     * @param array                $args    Setting arguments.
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Get parsed ID data for multidimensional setting.
     *
     * @since 4.4.0
     * @access public
     *
     * @return array {
     *     ID data for multidimensional setting.
     *
     *     @type string $base ID base
     *     @type array  $keys Keys for multidimensional array.
     * }
     * @phpstan-return array{
     *   base: string,
     *   keys: array,
     * }
     */
    final public function id_data()
    {
    }
    /**
     * Set up the setting for aggregated multidimensional values.
     *
     * When a multidimensional setting gets aggregated, all of its preview and update
     * calls get combined into one call, greatly improving performance.
     *
     * @since 4.4.0
     * @access protected
     */
    protected function aggregate_multidimensional()
    {
    }
    /**
     * Reset `$aggregated_multidimensionals` static variable.
     *
     * This is intended only for use by unit tests.
     *
     * @since 4.5.0
     * @access public
     * @ignore
     */
    public static function reset_aggregated_multidimensionals()
    {
    }
    /**
     * The ID for the current site when the preview() method was called.
     *
     * @since 4.2.0
     * @access protected
     * @var int
     */
    protected $_previewed_blog_id;
    /**
     * Return true if the current site is not the same as the previewed site.
     *
     * @since 4.2.0
     * @access public
     *
     * @return bool If preview() has been called.
     */
    public function is_current_blog_previewed()
    {
    }
    /**
     * Original non-previewed value stored by the preview method.
     *
     * @see WP_Customize_Setting::preview()
     * @since 4.1.1
     * @var mixed
     */
    protected $_original_value;
    /**
     * Add filters to supply the setting's value when accessed.
     *
     * If the setting already has a pre-existing value and there is no incoming
     * post value for the setting, then this method will short-circuit since
     * there is no change to preview.
     *
     * @since 3.4.0
     * @since 4.4.0 Added boolean return value.
     * @access public
     *
     * @return bool False when preview short-circuits due no change needing to be previewed.
     */
    public function preview()
    {
    }
    /**
     * Clear out the previewed-applied flag for a multidimensional-aggregated value whenever its post value is updated.
     *
     * This ensures that the new value will get sanitized and used the next time
     * that `WP_Customize_Setting::_multidimensional_preview_filter()`
     * is called for this setting.
     *
     * @since 4.4.0
     * @access private
     * @see WP_Customize_Manager::set_post_value()
     * @see WP_Customize_Setting::_multidimensional_preview_filter()
     */
    final public function _clear_aggregated_multidimensional_preview_applied_flag()
    {
    }
    /**
     * Callback function to filter non-multidimensional theme mods and options.
     *
     * If switch_to_blog() was called after the preview() method, and the current
     * site is now not the same site, then this method does a no-op and returns
     * the original value.
     *
     * @since 3.4.0
     *
     * @param mixed $original Old value.
     * @return mixed New or old value.
     */
    public function _preview_filter($original)
    {
    }
    /**
     * Callback function to filter multidimensional theme mods and options.
     *
     * For all multidimensional settings of a given type, the preview filter for
     * the first setting previewed will be used to apply the values for the others.
     *
     * @since 4.4.0
     * @access private
     *
     * @see WP_Customize_Setting::$aggregated_multidimensionals
     * @param mixed $original Original root value.
     * @return mixed New or old value.
     */
    final public function _multidimensional_preview_filter($original)
    {
    }
    /**
     * Checks user capabilities and theme supports, and then saves
     * the value of the setting.
     *
     * @since 3.4.0
     *
     * @access public
     *
     * @return false|void False if cap check fails or value isn't set or is invalid.
     */
    final public function save()
    {
    }
    /**
     * Fetch and sanitize the $_POST value for the setting.
     *
     * During a save request prior to save, post_value() provides the new value while value() does not.
     *
     * @since 3.4.0
     *
     * @param mixed $default A default value which is used as a fallback. Default is null.
     * @return mixed The default value on failure, otherwise the sanitized and validated value.
     */
    final public function post_value($default = \null)
    {
    }
    /**
     * Sanitize an input.
     *
     * @since 3.4.0
     *
     * @param string|array $value    The value to sanitize.
     * @return string|array|null|WP_Error Sanitized value, or `null`/`WP_Error` if invalid.
     */
    public function sanitize($value)
    {
    }
    /**
     * Validates an input.
     *
     * @since 4.6.0
     * @access public
     *
     * @see WP_REST_Request::has_valid_params()
     *
     * @param mixed $value Value to validate.
     * @return true|WP_Error True if the input was validated, otherwise WP_Error.
     */
    public function validate($value)
    {
    }
    /**
     * Get the root value for a setting, especially for multidimensional ones.
     *
     * @since 4.4.0
     * @access protected
     *
     * @param mixed $default Value to return if root does not exist.
     * @return mixed
     */
    protected function get_root_value($default = \null)
    {
    }
    /**
     * Set the root value for a setting, especially for multidimensional ones.
     *
     * @since 4.4.0
     * @access protected
     *
     * @param mixed $value Value to set as root of multidimensional setting.
     * @return bool Whether the multidimensional root was updated successfully.
     */
    protected function set_root_value($value)
    {
    }
    /**
     * Save the value of the setting, using the related API.
     *
     * @since 3.4.0
     *
     * @param mixed $value The value to update.
     * @return bool The result of saving the value.
     */
    protected function update($value)
    {
    }
    /**
     * Deprecated method.
     *
     * @since 3.4.0
     * @deprecated 4.4.0 Deprecated in favor of update() method.
     */
    protected function _update_theme_mod()
    {
    }
    /**
     * Deprecated method.
     *
     * @since 3.4.0
     * @deprecated 4.4.0 Deprecated in favor of update() method.
     */
    protected function _update_option()
    {
    }
    /**
     * Fetch the value of the setting.
     *
     * @since 3.4.0
     *
     * @return mixed The value.
     */
    public function value()
    {
    }
    /**
     * Sanitize the setting's value for use in JavaScript.
     *
     * @since 3.4.0
     *
     * @return mixed The requested escaped value.
     */
    public function js_value()
    {
    }
    /**
     * Retrieves the data to export to the client via JSON.
     *
     * @since 4.6.0
     * @access public
     *
     * @return array Array of parameters passed to JavaScript.
     */
    public function json()
    {
    }
    /**
     * Validate user capabilities whether the theme supports the setting.
     *
     * @since 3.4.0
     *
     * @return bool False if theme doesn't support the setting or user can't change setting, otherwise true.
     */
    final public function check_capabilities()
    {
    }
    /**
     * Multidimensional helper function.
     *
     * @since 3.4.0
     *
     * @param $root
     * @param $keys
     * @param bool $create Default is false.
     * @return array|void Keys are 'root', 'node', and 'key'.
     */
    final protected function multidimensional(&$root, $keys, $create = \false)
    {
    }
    /**
     * Will attempt to replace a specific value in a multidimensional array.
     *
     * @since 3.4.0
     *
     * @param $root
     * @param $keys
     * @param mixed $value The value to update.
     * @return mixed
     */
    final protected function multidimensional_replace($root, $keys, $value)
    {
    }
    /**
     * Will attempt to fetch a specific value from a multidimensional array.
     *
     * @since 3.4.0
     *
     * @param $root
     * @param $keys
     * @param mixed $default A default value which is used as a fallback. Default is null.
     * @return mixed The requested value or the default value.
     */
    final protected function multidimensional_get($root, $keys, $default = \null)
    {
    }
    /**
     * Will attempt to check if a specific value in a multidimensional array is set.
     *
     * @since 3.4.0
     *
     * @param $root
     * @param $keys
     * @return bool True if value is set, false if not.
     */
    final protected function multidimensional_isset($root, $keys)
    {
    }
}