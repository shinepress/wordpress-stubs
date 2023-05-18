<?php


/**
 * Widget API: WP_Widget_Tag_Cloud class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Core class used to implement a Tag cloud widget.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Tag_Cloud extends \WP_Widget
{
    /**
     * Sets up a new Tag Cloud widget instance.
     *
     * @since 2.8.0
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content for the current Tag Cloud widget instance.
     *
     * @since 2.8.0
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Tag Cloud widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Tag Cloud widget instance.
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
     * Outputs the Tag Cloud widget settings form.
     *
     * @since 2.8.0
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
    {
    }
    /**
     * Retrieves the taxonomy for the current Tag cloud widget instance.
     *
     * @since 4.4.0
     *
     * @param array $instance Current settings.
     * @return string Name of the current taxonomy if set, otherwise 'post_tag'.
     */
    public function _get_current_taxonomy($instance)
    {
    }
}