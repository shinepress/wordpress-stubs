<?php


/**
 * Widget API: WP_Widget_Block class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 5.8.0
 */
/**
 * Core class used to implement a Block widget.
 *
 * @since 5.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Block extends \WP_Widget
{
    /**
     * Default instance.
     *
     * @since 5.8.0
     * @var array
     */
    protected $default_instance = array('content' => '');
    /**
     * Sets up a new Block widget instance.
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content for the current Block widget instance.
     *
     * @since 5.8.0
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Block widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Block widget instance.
     *
     * @since 5.8.0
     * @param array $new_instance New settings for this instance as input by the user via
     *                            WP_Widget::form().
     * @param array $old_instance Old settings for this instance.
     * @return array Settings to save or bool false to cancel saving.
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Outputs the Block widget settings form.
     *
     * @since 5.8.0
     *
     * @see WP_Widget_Custom_HTML::render_control_template_scripts()
     *
     * @param array $instance Current instance.
     */
    public function form($instance)
    {
    }
    /**
     * Makes sure no block widget is considered to be wide.
     *
     * @since 5.8.0
     *
     * @param bool   $is_wide   Whether the widget is considered wide.
     * @param string $widget_id Widget ID.
     * @return bool Updated `is_wide` value.
     */
    public function set_is_wide_widget_in_customizer($is_wide, $widget_id)
    {
    }
}