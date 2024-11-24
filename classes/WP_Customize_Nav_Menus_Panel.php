<?php


/**
 * Customize Nav Menus Panel Class
 *
 * Needed to add screen options.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Panel
 */
class WP_Customize_Nav_Menus_Panel extends \WP_Customize_Panel
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = 'nav_menus';
    /**
     * Render screen options for Menus.
     *
     * @since 4.3.0
     */
    public function render_screen_options()
    {
    }
    /**
     * Returns the advanced options for the nav menus page.
     *
     * Link title attribute added as it's a relatively advanced concept for new users.
     *
     * @since 4.3.0
     * @deprecated 4.5.0 Deprecated in favor of wp_nav_menu_manage_columns().
     */
    public function wp_nav_menu_manage_columns()
    {
    }
    /**
     * An Underscore (JS) template for this panel's content (but not its container).
     *
     * Class variables for this panel class are available in the `data` JS object;
     * export custom variables by overriding WP_Customize_Panel::json().
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Panel::print_template()
     */
    protected function content_template()
    {
    }
}