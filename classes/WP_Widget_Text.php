<?php


/**
 * Widget API: WP_Widget_Text class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Core class used to implement a Text widget.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Text extends \WP_Widget
{
    /**
     * Whether or not the widget has been registered yet.
     *
     * @since 4.8.1
     * @var bool
     */
    protected $registered = \false;
    /**
     * Sets up a new Text widget instance.
     *
     * @since 2.8.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Add hooks for enqueueing assets when registering all widget instances of this widget class.
     *
     * @param integer $number Optional. The unique order number of this widget instance
     *                        compared to other instances of the same class. Default -1.
     */
    public function _register_one($number = -1)
    {
    }
    /**
     * Determines whether a given instance is legacy and should bypass using TinyMCE.
     *
     * @since 4.8.1
     *
     * @param array $instance {
     *     Instance data.
     *
     *     @type string      $text   Content.
     *     @type bool|string $filter Whether autop or content filters should apply.
     *     @type bool        $legacy Whether widget is in legacy mode.
     * }
     * @return bool Whether Text widget instance contains legacy data.
     */
    public function is_legacy_instance($instance)
    {
    }
    /**
     * Outputs the content for the current Text widget instance.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Text widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Text widget instance.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $new_instance New settings for this instance as input by the user via
     *                            WP_Widget::form().
     * @param array $old_instance Old settings for this instance.
     * @return array Settings to save or bool false to cancel saving.
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Loads the required scripts and styles for the widget control.
     *
     * @since 4.8.0
     * @access public
     */
    public function enqueue_admin_scripts()
    {
    }
    /**
     * Outputs the Text widget settings form.
     *
     * @since 2.8.0
     * @since 4.8.0 Form only contains hidden inputs which are synced with JS template.
     * @since 4.8.1 Restored original form to be displayed when in legacy mode.
     * @access public
     * @see WP_Widget_Visual_Text::render_control_template_scripts()
     * @see _WP_Editors::editor()
     *
     * @param array $instance Current settings.
     * @return void
     */
    public function form($instance)
    {
    }
    /**
     * Render form template scripts.
     *
     * @since 4.8.0
     * @access public
     */
    public function render_control_template_scripts()
    {
    }
}