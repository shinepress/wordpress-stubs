<?php


/**
 * Customize Menu Section Class
 *
 * @since 4.3.0
 * @deprecated 4.9.0 This class is no longer used as of the menu creation UX introduced in #40104.
 *
 * @see WP_Customize_Section
 */
class WP_Customize_New_Menu_Section extends \WP_Customize_Section
{
    /**
     * Control type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = 'new_menu';
    /**
     * Constructor.
     *
     * Any supplied $args override class property defaults.
     *
     * @since 4.9.0
     * @deprecated 4.9.0
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      A specific ID of the section.
     * @param array                $args    Section arguments.
     */
    public function __construct(\WP_Customize_Manager $manager, $id, array $args = array())
    {
    }
    /**
     * Render the section, and the controls that have been added to it.
     *
     * @since 4.3.0
     * @deprecated 4.9.0
     */
    protected function render()
    {
    }
}