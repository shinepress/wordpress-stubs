<?php


/**
 * Widget API: WP_Widget_Meta class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Core class used to implement a Meta widget.
 *
 * Displays log in/out, RSS feed links, etc.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Meta extends \WP_Widget
{
    /**
     * Sets up a new Meta widget instance.
     *
     * @since 2.8.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content for the current Meta widget instance.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Meta widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Meta widget instance.
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
     * Outputs the settings form for the Meta widget.
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