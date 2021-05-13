<?php


/**
 * WordPress Customize Section classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 3.4.0
 */
/**
 * Customize Section class.
 *
 * A UI container for controls, managed by the WP_Customize_Manager class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Manager
 */
class WP_Customize_Section
{
    /**
     * Incremented with each new class instantiation, then stored in $instance_number.
     *
     * Used when sorting two instances whose priorities are equal.
     *
     * @since 4.1.0
     *
     * @static
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
     * WP_Customize_Manager instance.
     *
     * @since 3.4.0
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * Unique identifier.
     *
     * @since 3.4.0
     * @var string
     */
    public $id;
    /**
     * Priority of the section which informs load order of sections.
     *
     * @since 3.4.0
     * @var integer
     */
    public $priority = 160;
    /**
     * Panel in which to show the section, making it a sub-section.
     *
     * @since 4.0.0
     * @var string
     */
    public $panel = '';
    /**
     * Capability required for the section.
     *
     * @since 3.4.0
     * @var string
     */
    public $capability = 'edit_theme_options';
    /**
     * Theme feature support for the section.
     *
     * @since 3.4.0
     * @var string|array
     */
    public $theme_supports = '';
    /**
     * Title of the section to show in UI.
     *
     * @since 3.4.0
     * @var string
     */
    public $title = '';
    /**
     * Description to show in the UI.
     *
     * @since 3.4.0
     * @var string
     */
    public $description = '';
    /**
     * Customizer controls for this section.
     *
     * @since 3.4.0
     * @var array
     */
    public $controls;
    /**
     * Type of this section.
     *
     * @since 4.1.0
     * @var string
     */
    public $type = 'default';
    /**
     * Active callback.
     *
     * @since 4.1.0
     *
     * @see WP_Customize_Section::active()
     *
     * @var callable Callback is called with one argument, the instance of
     *               WP_Customize_Section, and returns bool to indicate whether
     *               the section is active (such as it relates to the URL currently
     *               being previewed).
     */
    public $active_callback = '';
    /**
     * Show the description or hide it behind the help icon.
     *
     * @since 4.7.0
     *
     * @var bool Indicates whether the Section's description should be
     *           hidden behind a help icon ("?") in the Section header,
     *           similar to how help icons are displayed on Panels.
     */
    public $description_hidden = \false;
    /**
     * Constructor.
     *
     * Any supplied $args override class property defaults.
     *
     * @since 3.4.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      An specific ID of the section.
     * @param array                $args    Section arguments.
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Check whether section is active to current Customizer preview.
     *
     * @since 4.1.0
     *
     * @return bool Whether the section is active to the current preview.
     */
    final public function active()
    {
    }
    /**
     * Default callback used when invoking WP_Customize_Section::active().
     *
     * Subclasses can override this with their specific logic, or they may provide
     * an 'active_callback' argument to the constructor.
     *
     * @since 4.1.0
     *
     * @return true Always true.
     */
    public function active_callback()
    {
    }
    /**
     * Gather the parameters passed to client JavaScript via JSON.
     *
     * @since 4.1.0
     *
     * @return array The array to be exported to the client as JSON.
     */
    public function json()
    {
    }
    /**
     * Checks required user capabilities and whether the theme has the
     * feature support required by the section.
     *
     * @since 3.4.0
     *
     * @return bool False if theme doesn't support the section or user doesn't have the capability.
     */
    final public function check_capabilities()
    {
    }
    /**
     * Get the section's content for insertion into the Customizer pane.
     *
     * @since 4.1.0
     *
     * @return string Contents of the section.
     */
    final public function get_content()
    {
    }
    /**
     * Check capabilities and render the section.
     *
     * @since 3.4.0
     */
    final public function maybe_render()
    {
    }
    /**
     * Render the section UI in a subclass.
     *
     * Sections are now rendered in JS by default, see WP_Customize_Section::print_template().
     *
     * @since 3.4.0
     */
    protected function render()
    {
    }
    /**
     * Render the section's JS template.
     *
     * This function is only run for section types that have been registered with
     * WP_Customize_Manager::register_section_type().
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Manager::render_template()
     */
    public function print_template()
    {
    }
    /**
     * An Underscore (JS) template for rendering this section.
     *
     * Class variables for this section class are available in the `data` JS object;
     * export custom variables by overriding WP_Customize_Section::json().
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Section::print_template()
     */
    protected function render_template()
    {
    }
}