<?php


/**
 * Widget API: WP_Widget_Factory class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */
/**
 * Singleton that registers and instantiates WP_Widget classes.
 *
 * @since 2.8.0
 * @since 4.4.0 Moved to its own file from wp-includes/widgets.php
 */
class WP_Widget_Factory
{
    /**
     * Widgets array.
     *
     * @since 2.8.0
     * @var array
     */
    public $widgets = array();
    /**
     * PHP5 constructor.
     *
     * @since 4.3.0
     */
    public function __construct()
    {
    }
    /**
     * PHP4 constructor.
     *
     * @since 2.8.0
     */
    public function WP_Widget_Factory()
    {
    }
    /**
     * Registers a widget subclass.
     *
     * @since 2.8.0
     * @since 4.6.0 Updated the `$widget` parameter to also accept a WP_Widget instance object
     *              instead of simply a `WP_Widget` subclass name.
     *
     * @param string|WP_Widget $widget Either the name of a `WP_Widget` subclass or an instance of a `WP_Widget` subclass.
     */
    public function register($widget)
    {
    }
    /**
     * Un-registers a widget subclass.
     *
     * @since 2.8.0
     * @since 4.6.0 Updated the `$widget` parameter to also accept a WP_Widget instance object
     *              instead of simply a `WP_Widget` subclass name.
     *
     * @param string|WP_Widget $widget Either the name of a `WP_Widget` subclass or an instance of a `WP_Widget` subclass.
     */
    public function unregister($widget)
    {
    }
    /**
     * Serves as a utility method for adding widgets to the registered widgets global.
     *
     * @since 2.8.0
     *
     * @global array $wp_registered_widgets
     */
    public function _register_widgets()
    {
    }
}