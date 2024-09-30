<?php


/**
 * Core class used to implement displaying plugins to install in a list table.
 *
 * @since 3.1.0
 *
 * @see WP_List_Table
 */
class WP_Plugin_Install_List_Table extends \WP_List_Table
{
    public $order = 'ASC';
    public $orderby = \null;
    public $groups = array();
    /**
     * @return bool
     */
    public function ajax_user_can()
    {
    }
    /**
     * Returns the list of known plugins.
     *
     * Uses the transient data from the updates API to determine the known
     * installed plugins.
     *
     * @since 4.9.0
     * @access protected
     *
     * @return array
     */
    protected function get_installed_plugins()
    {
    }
    /**
     * Returns a list of slugs of installed plugins, if known.
     *
     * Uses the transient data from the updates API to determine the slugs of
     * known installed plugins. This might be better elsewhere, perhaps even
     * within get_plugins().
     *
     * @since 4.0.0
     *
     * @return array
     */
    protected function get_installed_plugin_slugs()
    {
    }
    /**
     * @global array  $tabs
     * @global string $tab
     * @global int    $paged
     * @global string $type
     * @global string $term
     * @phpstan-return void
     */
    public function prepare_items()
    {
    }
    /**
     */
    public function no_items()
    {
    }
    /**
     * @global array $tabs
     * @global string $tab
     *
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * Overrides parent views so we can use the filter bar display.
     */
    public function views()
    {
    }
    /**
     * Displays the plugin install table.
     *
     * Overrides the parent display() method to provide a different container.
     *
     * @since 4.0.0
     */
    public function display()
    {
    }
    /**
     * @global string $tab
     *
     * @param string $which
     * @phpstan-return void
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * @return array
     */
    protected function get_table_classes()
    {
    }
    /**
     * @return string[] Array of column titles keyed by their column name.
     */
    public function get_columns()
    {
    }
    public function display_rows()
    {
    }
    /**
     * Returns a notice containing a list of dependencies required by the plugin.
     *
     * @since 6.5.0
     *
     * @param array  $plugin_data An array of plugin data. See {@see plugins_api()}
     *                            for the list of possible values.
     * @return string A notice containing a list of dependencies required by the plugin,
     *                or an empty string if none is required.
     * @phpstan-param object|array{
     *   slug?: string,
     *   per_page?: int,
     *   page?: int,
     *   number?: int,
     *   search?: string,
     *   tag?: string,
     *   author?: string,
     *   user?: string,
     *   browse?: string,
     *   locale?: string,
     *   installed_plugins?: string,
     *   is_ssl?: bool,
     *   fields?: array{
     *     short_description?: bool,
     *     description?: bool,
     *     sections?: bool,
     *     tested?: bool,
     *     requires?: bool,
     *     requires_php?: bool,
     *     rating?: bool,
     *     ratings?: bool,
     *     downloaded?: bool,
     *     downloadlink?: bool,
     *     last_updated?: bool,
     *     added?: bool,
     *     tags?: bool,
     *     compatibility?: bool,
     *     homepage?: bool,
     *     versions?: bool,
     *     donate_link?: bool,
     *     reviews?: bool,
     *     banners?: bool,
     *     icons?: bool,
     *     active_installs?: bool,
     *     group?: bool,
     *     contributors?: bool,
     *   },
     * } $plugin_data See plugins_api()
     */
    protected function get_dependencies_notice($plugin_data)
    {
    }
    /**
     * Creates a 'More details' link for the plugin.
     *
     * @since 6.5.0
     *
     * @param string $name The plugin's name.
     * @param string $slug The plugin's slug.
     * @return string The 'More details' link for the plugin.
     */
    protected function get_more_details_link($name, $slug)
    {
    }
}