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
     * Sets up a new Text widget instance.
     *
     * @since 2.8.0
     * @access public
     */
    public function __construct()
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
     * Outputs the Text widget settings form.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
    {
    }
}