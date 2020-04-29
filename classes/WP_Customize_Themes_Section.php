<?php


/**
 * Customize API: WP_Customize_Themes_Section class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Themes Section class.
 *
 * A UI container for theme controls, which behaves like a backwards Panel.
 *
 * @since 4.2.0
 *
 * @see WP_Customize_Section
 */
class WP_Customize_Themes_Section extends \WP_Customize_Section
{
    /**
     * Customize section type.
     *
     * @since 4.2.0
     * @access public
     * @var string
     */
    public $type = 'themes';
    /**
     * Render the themes section, which behaves like a panel.
     *
     * @since 4.2.0
     * @access protected
     */
    protected function render()
    {
    }
}