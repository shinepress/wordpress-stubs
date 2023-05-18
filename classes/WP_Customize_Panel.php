<?php


/**
 * WordPress Customize Panel classes
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.0.0
 */
/**
 * Customize Panel class.
 *
 * A UI container for sections, managed by the WP_Customize_Manager.
 *
 * @since 4.0.0
 *
 * @see WP_Customize_Manager
 */
class WP_Customize_Panel
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
     * WP_Customize_Manager instance.
     *
     * @since 4.0.0
     * @var WP_Customize_Manager
     */
    public $manager;
    /**
     * Unique identifier.
     *
     * @since 4.0.0
     * @var string
     */
    public $id;
    /**
     * Priority of the panel, defining the display order of panels and sections.
     *
     * @since 4.0.0
     * @var int
     */
    public $priority = 160;
    /**
     * Capability required for the panel.
     *
     * @since 4.0.0
     * @var string
     */
    public $capability = 'edit_theme_options';
    /**
     * Theme features required to support the panel.
     *
     * @since 4.0.0
     * @var string|string[]
     */
    public $theme_supports = '';
    /**
     * Title of the panel to show in UI.
     *
     * @since 4.0.0
     * @var string
     */
    public $title = '';
    /**
     * Description to show in the UI.
     *
     * @since 4.0.0
     * @var string
     */
    public $description = '';
    /**
     * Auto-expand a section in a panel when the panel is expanded when the panel only has the one section.
     *
     * @since 4.7.4
     * @var bool
     */
    public $auto_expand_sole_section = \false;
    /**
     * Customizer sections for this panel.
     *
     * @since 4.0.0
     * @var array
     */
    public $sections;
    /**
     * Type of this panel.
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
     * Constructor.
     *
     * Any supplied $args override class property defaults.
     *
     * @since 4.0.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      A specific ID for the panel.
     * @param array                $args    {
     *     Optional. Array of properties for the new Panel object. Default empty array.
     *
     *     @type int             $priority        Priority of the panel, defining the display order
     *                                            of panels and sections. Default 160.
     *     @type string          $capability      Capability required for the panel.
     *                                            Default `edit_theme_options`.
     *     @type string|string[] $theme_supports  Theme features required to support the panel.
     *     @type string          $title           Title of the panel to show in UI.
     *     @type string          $description     Description to show in the UI.
     *     @type string          $type            Type of the panel.
     *     @type callable        $active_callback Active callback.
     * }
     * @phpstan-param array{
     *   priority?: int,
     *   capability?: string,
     *   theme_supports?: string|string[],
     *   title?: string,
     *   description?: string,
     *   type?: string,
     *   active_callback?: callable,
     * } $args
     */
    public function __construct($manager, $id, $args = array())
    {
    }
    /**
     * Check whether panel is active to current Customizer preview.
     *
     * @since 4.1.0
     *
     * @return bool Whether the panel is active to the current preview.
     */
    final public function active()
    {
    }
    /**
     * Default callback used when invoking WP_Customize_Panel::active().
     *
     * Subclasses can override this with their specific logic, or they may
     * provide an 'active_callback' argument to the constructor.
     *
     * @since 4.1.0
     *
     * @return bool Always true.
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
     * feature support required by the panel.
     *
     * @since 4.0.0
     * @since 5.9.0 Method was marked non-final.
     *
     * @return bool False if theme doesn't support the panel or the user doesn't have the capability.
     */
    public function check_capabilities()
    {
    }
    /**
     * Get the panel's content template for insertion into the Customizer pane.
     *
     * @since 4.1.0
     *
     * @return string Content for the panel.
     */
    final public function get_content()
    {
    }
    /**
     * Check capabilities and render the panel.
     *
     * @since 4.0.0
     */
    final public function maybe_render()
    {
    }
    /**
     * Render the panel container, and then its contents (via `this->render_content()`) in a subclass.
     *
     * Panel containers are now rendered in JS by default, see WP_Customize_Panel::print_template().
     *
     * @since 4.0.0
     */
    protected function render()
    {
    }
    /**
     * Render the panel UI in a subclass.
     *
     * Panel contents are now rendered in JS by default, see WP_Customize_Panel::print_template().
     *
     * @since 4.1.0
     */
    protected function render_content()
    {
    }
    /**
     * Render the panel's JS templates.
     *
     * This function is only run for panel types that have been registered with
     * WP_Customize_Manager::register_panel_type().
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Manager::register_panel_type()
     */
    public function print_template()
    {
    }
    /**
     * An Underscore (JS) template for rendering this panel's container.
     *
     * Class variables for this panel class are available in the `data` JS object;
     * export custom variables by overriding WP_Customize_Panel::json().
     *
     * @see WP_Customize_Panel::print_template()
     *
     * @since 4.3.0
     */
    protected function render_template()
    {
    }
    /**
     * An Underscore (JS) template for this panel's content (but not its container).
     *
     * Class variables for this panel class are available in the `data` JS object;
     * export custom variables by overriding WP_Customize_Panel::json().
     *
     * @see WP_Customize_Panel::print_template()
     *
     * @since 4.3.0
     */
    protected function content_template()
    {
    }
}