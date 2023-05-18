<?php


/**
 * Widget API: WP_Nav_Menu_Widget class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Core class used to implement the Navigation Menu widget.
 *
 * @since 3.0.0
 *
 * @see WP_Widget
 */
class WP_Nav_Menu_Widget extends \WP_Widget
{
    /**
     * Sets up a new Navigation Menu widget instance.
     *
     * @since 3.0.0
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content for the current Navigation Menu widget instance.
     *
     * @since 3.0.0
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Navigation Menu widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Navigation Menu widget instance.
     *
     * @since 3.0.0
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
     * Outputs the settings form for the Navigation Menu widget.
     *
     * @since 3.0.0
     *
     * @param array $instance Current settings.
     * @global WP_Customize_Manager $wp_customize
     */
    public function form($instance)
    {
    }
}