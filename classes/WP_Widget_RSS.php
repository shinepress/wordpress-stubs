<?php


/**
 * Widget API: WP_Widget_RSS class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Core class used to implement a RSS widget.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_RSS extends \WP_Widget
{
    /**
     * Sets up a new RSS widget instance.
     *
     * @since 2.8.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content for the current RSS widget instance.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current RSS widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current RSS widget instance.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $new_instance New settings for this instance as input by the user via
     *                            WP_Widget::form().
     * @param array $old_instance Old settings for this instance.
     * @return array Updated settings to save.
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Outputs the settings form for the RSS widget.
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