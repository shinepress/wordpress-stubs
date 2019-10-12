<?php


/**
 * Widget API: WP_Media_Widget class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.8.0
 */
/**
 * Core class that implements a media widget.
 *
 * @since 4.8.0
 *
 * @see WP_Widget
 */
abstract class WP_Widget_Media extends \WP_Widget
{
    /**
     * Translation labels.
     *
     * @since 4.8.0
     * @var array
     */
    public $l10n = array('add_to_widget' => '', 'replace_media' => '', 'edit_media' => '', 'media_library_state_multi' => '', 'media_library_state_single' => '', 'missing_attachment' => '', 'no_media_selected' => '', 'add_media' => '');
    /**
     * Whether or not the widget has been registered yet.
     *
     * @since 4.8.1
     * @var bool
     */
    protected $registered = \false;
    /**
     * Constructor.
     *
     * @since 4.8.0
     *
     * @param string $id_base         Base ID for the widget, lowercase and unique.
     * @param string $name            Name for the widget displayed on the configuration page.
     * @param array  $widget_options  Optional. Widget options. See wp_register_sidebar_widget() for
     *                                information on accepted arguments. Default empty array.
     * @param array  $control_options Optional. Widget control options. See wp_register_widget_control()
     *                                for information on accepted arguments. Default empty array.
     */
    public function __construct($id_base, $name, $widget_options = array(), $control_options = array())
    {
    }
    /**
     * Add hooks while registering all widget instances of this widget class.
     *
     * @since 4.8.0
     *
     * @param integer $number Optional. The unique order number of this widget instance
     *                        compared to other instances of the same class. Default -1.
     */
    public function _register_one($number = -1)
    {
    }
    /**
     * Get schema for properties of a widget instance (item).
     *
     * @since 4.8.0
     *
     * @see WP_REST_Controller::get_item_schema()
     * @see WP_REST_Controller::get_additional_fields()
     * @link https://core.trac.wordpress.org/ticket/35574
     * @return array Schema for properties.
     */
    public function get_instance_schema()
    {
    }
    /**
     * Determine if the supplied attachment is for a valid attachment post with the specified MIME type.
     *
     * @since 4.8.0
     *
     * @param int|WP_Post $attachment Attachment post ID or object.
     * @param string      $mime_type  MIME type.
     * @return bool Is matching MIME type.
     */
    public function is_attachment_with_mime_type($attachment, $mime_type)
    {
    }
    /**
     * Sanitize a token list string, such as used in HTML rel and class attributes.
     *
     * @since 4.8.0
     *
     * @link http://w3c.github.io/html/infrastructure.html#space-separated-tokens
     * @link https://developer.mozilla.org/en-US/docs/Web/API/DOMTokenList
     * @param string|array $tokens List of tokens separated by spaces, or an array of tokens.
     * @return string Sanitized token string list.
     */
    public function sanitize_token_list($tokens)
    {
    }
    /**
     * Displays the widget on the front-end.
     *
     * @since 4.8.0
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Display arguments including before_title, after_title, before_widget, and after_widget.
     * @param array $instance Saved setting from the database.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Sanitizes the widget form values as they are saved.
     *
     * @since 4.8.0
     *
     * @see WP_Widget::update()
     * @see WP_REST_Request::has_valid_params()
     * @see WP_REST_Request::sanitize_params()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $instance     Previously saved values from database.
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $instance)
    {
    }
    /**
     * Render the media on the frontend.
     *
     * @since 4.8.0
     *
     * @param array $instance Widget instance props.
     * @return string
     */
    abstract public function render_media($instance);
    /**
     * Outputs the settings update form.
     *
     * Note that the widget UI itself is rendered with JavaScript via `MediaWidgetControl#render()`.
     *
     * @since 4.8.0
     *
     * @see \WP_Widget_Media::render_control_template_scripts() Where the JS template is located.
     * @param array $instance Current settings.
     * @return void
     */
    final public function form($instance)
    {
    }
    /**
     * Filters the default media display states for items in the Media list table.
     *
     * @since 4.8.0
     *
     * @param array   $states An array of media states.
     * @param WP_Post $post   The current attachment object.
     * @return array
     */
    public function display_media_state($states, $post = \null)
    {
    }
    /**
     * Enqueue preview scripts.
     *
     * These scripts normally are enqueued just-in-time when a widget is rendered.
     * In the customizer, however, widgets can be dynamically added and rendered via
     * selective refresh, and so it is important to unconditionally enqueue them in
     * case a widget does get added.
     *
     * @since 4.8.0
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
     * Render form template scripts.
     *
     * @since 4.8.0
     */
    public function render_control_template_scripts()
    {
    }
    /**
     * Whether the widget has content to show.
     *
     * @since 4.8.0
     *
     * @param array $instance Widget instance props.
     * @return bool Whether widget has content.
     */
    protected function has_content($instance)
    {
    }
}