<?php


/**
 * Core class used to implement a Custom HTML widget.
 *
 * Note that this class is only located in this file in the 4.8 branch
 * for the sake of automatic updates. In 4.9 and above, it is located at
 * `wp-includes/widgets/class-wp-widget-custom-html.php`.
 *
 * @since 4.8.1
 *
 * @see WP_Widget
 */
class WP_Widget_Custom_HTML extends \WP_Widget
{
    /**
     * Default instance.
     *
     * @since 4.8.1
     * @var array
     */
    protected $default_instance = array('title' => '', 'content' => '');
    /**
     * Sets up a new Custom HTML widget instance.
     *
     * @since 4.8.1
     */
    public function __construct()
    {
    }
    /**
     * Outputs the content for the current Custom HTML widget instance.
     *
     * @since 4.8.1
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance Settings for the current Custom HTML widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Handles updating settings for the current Custom HTML widget instance.
     *
     * @since 4.8.1
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
     * Outputs the Custom HTML widget settings form.
     *
     * @since 4.8.1
     *
     * @param array $instance Current instance.
     * @returns void
     */
    public function form($instance)
    {
    }
}