<?php


/**
 * WordPress Customize Control classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.4.0
 */
/**
 * Customize Control class.
 *
 * @since 3.4.0
 */
class WP_Customize_Control
{
    /**
     * Incremented with each new class instantiation, then stored in $instance_number.
     *
     * Used when sorting two instances whose priorities are equal.
     *
     * @since 4.1.0
     * @var int
     */
    protected static $instance_count = 0;
    /**
     * Order in which this instance was created in relation to other instances.
     *
     * @since 4.1.0
     * @var int
     */
    public $instance_number;
    /**
     * Customizer manager.
     *
     * @since 3.4.0
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * Control ID.
     *
     * @since 3.4.0
     * @var string
     */
    public $id;
    /**
     * All settings tied to the control.
     *
     * @since 3.4.0
     * @var array
     */
    public $settings;
    /**
     * The primary setting for the control (if there is one).
     *
     * @since 3.4.0
     * @var string|WP_Customize_Setting|null
     */
    public $setting = 'default';
    /**
     * Capability required to use this control.
     *
     * Normally this is empty and the capability is derived from the capabilities
     * of the associated `$settings`.
     *
     * @since 4.5.0
     * @var string
     */
    public $capability;
    /**
     * Order priority to load the control in Customizer.
     *
     * @since 3.4.0
     * @var int
     */
    public $priority = 10;
    /**
     * Section the control belongs to.
     *
     * @since 3.4.0
     * @var string
     */
    public $section = '';
    /**
     * Label for the control.
     *
     * @since 3.4.0
     * @var string
     */
    public $label = '';
    /**
     * Description for the control.
     *
     * @since 4.0.0
     * @var string
     */
    public $description = '';
    /**
     * List of choices for 'radio' or 'select' type controls, where values are the keys, and labels are the values.
     *
     * @since 3.4.0
     * @var array
     */
    public $choices = array();
    /**
     * List of custom input attributes for control output, where attribute names are the keys and values are the values.
     *
     * Not used for 'checkbox', 'radio', 'select', 'textarea', or 'dropdown-pages' control types.
     *
     * @since 4.0.0
     * @var array
     */
    public $input_attrs = array();
    /**
     * Show UI for adding new content, currently only used for the dropdown-pages control.
     *
     * @since 4.7.0
     * @var bool
     */
    public $allow_addition = \false;
    /**
     * @deprecated It is better to just call the json() method
     * @since 3.4.0
     * @var array
     */
    public $json = array();
    /**
     * Control's Type.
     *
     * @since 3.4.0
     * @var string
     */
    public $type = 'text';
    /**
     * Callback.
     *
     * @since 4.0.0
     *
     * @see WP_Customize_Control::active()
     *
     * @var callable Callback is called with one argument, the instance of
     *               WP_Customize_Control, and returns bool to indicate whether
     *               the control is active (such as it relates to the URL
     *               currently being previewed).
     */
    public $active_callback = '';
    /**
     * Constructor.
     *
     * Supplied `$args` override class property defaults.
     *
     * If `$args['settings']` is not defined, use the $id as the setting ID.
     *
     * @since 3.4.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      Control ID.
     * @param array                $args    {
     *     Optional. Array of properties for the new Control object. Default empty array.
     *
     *     @type int                  $instance_number Order in which this instance was created in relation
     *                                                 to other instances.
     *     @type WP_Customize_Manager $manager         Customizer bootstrap instance.
     *     @type string               $id              Control ID.
     *     @type array                $settings        All settings tied to the control. If undefined, `$id` will
     *                                                 be used.
     *     @type string               $setting         The primary setting for the control (if there is one).
     *                                                 Default 'default'.
     *     @type string               $capability      Capability required to use this control. Normally this is empty
     *                                                 and the capability is derived from `$settings`.
     *     @type int                  $priority        Order priority to load the control. Default 10.
     *     @type string               $section         Section the control belongs to. Default empty.
     *     @type string               $label           Label for the control. Default empty.
     *     @type string               $description     Description for the control. Default empty.
     *     @type array                $choices         List of choices for 'radio' or 'select' type controls, where
     *                                                 values are the keys, and labels are the values.
     *                                                 Default empty array.
     *     @type array                $input_attrs     List of custom input attributes for control output, where
     *                                                 attribute names are the keys and values are the values. Not
     *                                                 used for 'checkbox', 'radio', 'select', 'textarea', or
     *                                                 'dropdown-pages' control types. Default empty array.
     *     @type bool                 $allow_addition  Show UI for adding new content, currently only used for the
     *                                                 dropdown-pages control. Default false.
     *     @type array                $json            Deprecated. Use WP_Customize_Control::json() instead.
     *     @type string               $type            Control type. Core controls include 'text', 'checkbox',
     *                                                 'textarea', 'radio', 'select', and 'dropdown-pages'. Additional
     *                                                 input types such as 'email', 'url', 'number', 'hidden', and
     *                                                 'date' are supported implicitly. Default 'text'.
     *     @type callable             $active_callback Active callback.
     * }
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
     * } $args
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Enqueue control related scripts/styles.
     *
     * @since 3.4.0
     */
    public function enqueue()
    {
    }
    /**
     * Check whether control is active to current Customizer preview.
     *
     * @since 4.0.0
     *
     * @return bool Whether the control is active to the current preview.
     */
    final public function active()
    {
    }
    /**
     * Default callback used when invoking WP_Customize_Control::active().
     *
     * Subclasses can override this with their specific logic, or they may
     * provide an 'active_callback' argument to the constructor.
     *
     * @since 4.0.0
     *
     * @return true Always true.
     */
    public function active_callback()
    {
    }
    /**
     * Fetch a setting's value.
     * Grabs the main setting by default.
     *
     * @since 3.4.0
     *
     * @param string $setting_key
     * @return mixed The requested setting's value, if the setting exists.
     */
    final public function value($setting_key = 'default')
    {
    }
    /**
     * Refresh the parameters passed to the JavaScript via JSON.
     *
     * @since 3.4.0
     */
    public function to_json()
    {
    }
    /**
     * Get the data to export to the client via JSON.
     *
     * @since 4.1.0
     *
     * @return array Array of parameters passed to the JavaScript.
     */
    public function json()
    {
    }
    /**
     * Checks if the user can use this control.
     *
     * Returns false if the user cannot manipulate one of the associated settings,
     * or if one of the associated settings does not exist. Also returns false if
     * the associated section does not exist or if its capability check returns
     * false.
     *
     * @since 3.4.0
     *
     * @return bool False if theme doesn't support the control or user doesn't have the required permissions, otherwise true.
     */
    final public function check_capabilities()
    {
    }
    /**
     * Get the control's content for insertion into the Customizer pane.
     *
     * @since 4.1.0
     *
     * @return string Contents of the control.
     */
    final public function get_content()
    {
    }
    /**
     * Check capabilities and render the control.
     *
     * @since 3.4.0
     * @uses WP_Customize_Control::render()
     * @phpstan-return void
     */
    final public function maybe_render()
    {
    }
    /**
     * Renders the control wrapper and calls $this->render_content() for the internals.
     *
     * @since 3.4.0
     */
    protected function render()
    {
    }
    /**
     * Get the data link attribute for a setting.
     *
     * @since 3.4.0
     * @since 4.9.0 Return a `data-customize-setting-key-link` attribute if a setting is not registered for the supplied setting key.
     *
     * @param string $setting_key
     * @return string Data link parameter, a `data-customize-setting-link` attribute if the `$setting_key` refers to a pre-registered setting,
     *                and a `data-customize-setting-key-link` attribute if the setting is not yet registered.
     */
    public function get_link($setting_key = 'default')
    {
    }
    /**
     * Render the data link attribute for the control's input element.
     *
     * @since 3.4.0
     * @uses WP_Customize_Control::get_link()
     *
     * @param string $setting_key
     */
    public function link($setting_key = 'default')
    {
    }
    /**
     * Render the custom attributes for the control's input element.
     *
     * @since 4.0.0
     */
    public function input_attrs()
    {
    }
    /**
     * Render the control's content.
     *
     * Allows the content to be overridden without having to rewrite the wrapper in `$this::render()`.
     *
     * Supports basic input types `text`, `checkbox`, `textarea`, `radio`, `select` and `dropdown-pages`.
     * Additional input types such as `email`, `url`, `number`, `hidden` and `date` are supported implicitly.
     *
     * Control content can alternately be rendered in JS. See WP_Customize_Control::print_template().
     *
     * @since 3.4.0
     * @phpstan-return void
     */
    protected function render_content()
    {
    }
    /**
     * Render the control's JS template.
     *
     * This function is only run for control types that have been registered with
     * WP_Customize_Manager::register_control_type().
     *
     * In the future, this will also print the template for the control's container
     * element and be override-able.
     *
     * @since 4.1.0
     */
    final public function print_template()
    {
    }
    /**
     * An Underscore (JS) template for this control's content (but not its container).
     *
     * Class variables for this control class are available in the `data` JS object;
     * export custom variables by overriding WP_Customize_Control::to_json().
     *
     * @see WP_Customize_Control::print_template()
     *
     * @since 4.1.0
     */
    protected function content_template()
    {
    }
}