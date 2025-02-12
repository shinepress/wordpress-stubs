<?php


/**
 * Customize Menu Section Class
 *
 * Custom section only needed in JS.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Section
 */
class WP_Customize_Nav_Menu_Section extends \WP_Customize_Section
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = 'nav_menu';
    /**
     * Get section parameters for JS.
     *
     * @since 4.3.0
     * @return array Exported parameters.
     */
    public function json()
    {
    }
}