<?php


/**
 * Customize Themes Panel Class
 *
 * @since 4.9.0
 *
 * @see WP_Customize_Panel
 */
class WP_Customize_Themes_Panel extends \WP_Customize_Panel
{
    /**
     * Panel type.
     *
     * @since 4.9.0
     * @var string
     */
    public $type = 'themes';
    /**
     * An Underscore (JS) template for rendering this panel's container.
     *
     * The themes panel renders a custom panel heading with the active theme and a switch themes button.
     *
     * @see WP_Customize_Panel::print_template()
     *
     * @since 4.9.0
     */
    protected function render_template()
    {
    }
    /**
     * An Underscore (JS) template for this panel's content (but not its container).
     *
     * Class variables for this panel class are available in the `data` JS object;
     * export custom variables by overriding WP_Customize_Panel::json().
     *
     * @since 4.9.0
     *
     * @see WP_Customize_Panel::print_template()
     */
    protected function content_template()
    {
    }
}