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
 * A UI container for theme controls, which are displayed within sections.
 *
 * @since 4.2.0
 *
 * @see WP_Customize_Section
 */
class WP_Customize_Themes_Section extends \WP_Customize_Section
{
    /**
     * Section type.
     *
     * @since 4.2.0
     * @var string
     */
    public $type = 'themes';
    /**
     * Theme section action.
     *
     * Defines the type of themes to load (installed, wporg, etc.).
     *
     * @since 4.9.0
     * @var string
     */
    public $action = '';
    /**
     * Theme section filter type.
     *
     * Determines whether filters are applied to loaded (local) themes or by initiating a new remote query (remote).
     * When filtering is local, the initial themes query is not paginated by default.
     *
     * @since 4.9.0
     * @var string
     */
    public $filter_type = 'local';
    /**
     * Gets section parameters for JS.
     *
     * @since 4.9.0
     * @return array Exported parameters.
     */
    public function json()
    {
    }
    /**
     * Renders a themes section as a JS template.
     *
     * The template is only rendered by PHP once, so all actions are prepared at once on the server side.
     *
     * @since 4.9.0
     */
    protected function render_template()
    {
    }
    /**
     * Renders the filter bar portion of a themes section as a JS template.
     *
     * The template is only rendered by PHP once, so all actions are prepared at once on the server side.
     * The filter bar container is rendered by {@see render_template()}.
     *
     * @since 4.9.0
     */
    protected function filter_bar_content_template()
    {
    }
    /**
     * Renders the filter drawer portion of a themes section as a JS template.
     *
     * The filter bar container is rendered by {@see render_template()}.
     *
     * @since 4.9.0
     */
    protected function filter_drawer_content_template()
    {
    }
}