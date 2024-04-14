<?php


/**
 * Customize API: WP_Customize_Nav_Menus_Panel class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
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
    /**
     * Checks required user capabilities and whether the theme has the
     * feature support required by the panel.
     *
     * @since 5.9.0
     *
     * @return bool False if theme doesn't support the panel or the user doesn't have the capability.
     */
    public function check_capabilities()
    {
    }
}