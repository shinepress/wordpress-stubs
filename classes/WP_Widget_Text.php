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
     */
    public function __construct()
    {
    }
    /**
     * Add hooks for enqueueing assets when registering all widget instances of this widget class.
     *
     * @param integer $number Optional. The unique order number of this widget instance
     *                        compared to other instances of the same class. Default -1.
     * @phpstan-return void
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
     * @phpstan-param array{
     *   text?: string,
     *   filter?: bool|string,
     *   legacy?: bool,
     * } $instance
     */
    public function is_legacy_instance($instance)
    {
    }
    /**
     * Filter gallery shortcode attributes.
     *
     * Prevents all of a site's attachments from being shown in a gallery displayed on a
     * non-singular template where a $post context is not available.
     *
     * @since 4.9.0
     *
     * @param array $attrs Attributes.
     * @return array Attributes.
     */
    public function _filter_gallery_shortcode_attrs($attrs)
    {
    }
    /**
     * Outputs the content for the current Text widget instance.
     *
     * @since 2.8.0
     *
     * @global WP_Post $post Global post object.
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Text widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Inject max-width and remove height for videos too constrained to fit inside sidebars on frontend.
     *
     * @since 4.9.0
     *
     * @see WP_Widget_Media_Video::inject_video_max_width_style()
     *
     * @param array $matches Pattern matches from preg_replace_callback.
     * @return string HTML Output.
     */
    public function inject_video_max_width_style($matches)
    {
    }
    /**
     * Handles updating settings for the current Text widget instance.
     *
     * @since 2.8.0
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
     * Enqueue preview scripts.
     *
     * These scripts normally are enqueued just-in-time when a playlist shortcode is used.
     * However, in the customizer, a playlist shortcode may be used in a text widget and
     * dynamically added via selective refresh, so it is important to unconditionally enqueue them.
     *
     * @since 4.9.3
     */
    public function enqueue_preview_scripts()
    {
    }
    /**
     * Loads the required scripts and styles for the widget control.
     *
     * @since 4.8.0
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
     *
     * @see WP_Widget_Text::render_control_template_scripts()
     * @see _WP_Editors::editor()
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
    {
    }
    /**
     * Render form template scripts.
     *
     * @since 4.8.0
     * @since 4.9.0 The method is now static.
     */
    public static function render_control_template_scripts()
    {
    }
}