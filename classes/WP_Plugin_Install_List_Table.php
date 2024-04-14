<?php


/**
 * List Table API: WP_Plugin_Install_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */
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
     * Return the list of known plugins.
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
     * @return array
     */
    public function get_columns()
    {
    }
    public function display_rows()
    {
    }
}