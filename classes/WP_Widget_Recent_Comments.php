<?php


/**
 * Widget API: WP_Widget_Recent_Comments class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Core class used to implement a Recent Comments widget.
 *
 * @since 2.8.0
 *
 * @see WP_Widget
 */
class WP_Widget_Recent_Comments extends \WP_Widget
{
    /**
     * Sets up a new Recent Comments widget instance.
     *
     * @since 2.8.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Outputs the default styles for the Recent Comments widget.
     *
     * @since 2.8.0
     * @access public
     */
    public function recent_comments_style()
    {
    }
    /**
     * Outputs the content for the current Recent Comments widget instance.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Recent Comments widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Recent Comments widget instance.
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
     * Outputs the settings form for the Recent Comments widget.
     *
     * @since 2.8.0
     * @access public
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
    {
    }
    /**
     * Flushes the Recent Comments widget cache.
     *
     * @since 2.8.0
     * @access public
     *
     * @deprecated 4.4.0 Fragment caching was removed in favor of split queries.
     */
    public function flush_widget_cache()
    {
    }
}