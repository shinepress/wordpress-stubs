<?php


/**
 * List Table API: WP_Application_Passwords_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 5.6.0
 */
/**
 * Class for displaying the list of application password items.
 *
 * @since 5.6.0
 *
 * @see WP_List_Table
 */
class WP_Application_Passwords_List_Table extends \WP_List_Table
{
    /**
     * Gets the list of columns.
     *
     * @since 5.6.0
     *
     * @return string[] Array of column titles keyed by their column name.
     */
    public function get_columns()
    {
    }
    /**
     * Prepares the list of items for displaying.
     *
     * @since 5.6.0
     *
     * @global int $user_id User ID.
     */
    public function prepare_items()
    {
    }
    /**
     * Handles the name column output.
     *
     * @since 5.6.0
     *
     * @param array $item The current application password item.
     */
    public function column_name($item)
    {
    }
    /**
     * Handles the created column output.
     *
     * @since 5.6.0
     *
     * @param array $item The current application password item.
     */
    public function column_created($item)
    {
    }
    /**
     * Handles the last used column output.
     *
     * @since 5.6.0
     *
     * @param array $item The current application password item.
     */
    public function column_last_used($item)
    {
    }
    /**
     * Handles the last ip column output.
     *
     * @since 5.6.0
     *
     * @param array $item The current application password item.
     */
    public function column_last_ip($item)
    {
    }
    /**
     * Handles the revoke column output.
     *
     * @since 5.6.0
     *
     * @param array $item The current application password item.
     */
    public function column_revoke($item)
    {
    }
    /**
     * Generates content for a single row of the table
     *
     * @since 5.6.0
     *
     * @param array  $item        The current item.
     * @param string $column_name The current column name.
     */
    protected function column_default($item, $column_name)
    {
    }
    /**
     * Generates custom table navigation to prevent conflicting nonces.
     *
     * @since 5.6.0
     *
     * @param string $which The location of the bulk actions: Either 'top' or 'bottom'.
     * @phpstan-param 'top'|'bottom' $which
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * Generates content for a single row of the table.
     *
     * @since 5.6.0
     *
     * @param array $item The current item.
     */
    public function single_row($item)
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 5.6.0
     *
     * @return string Name of the default primary column, in this case, 'name'.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Prints the JavaScript template for the new row item.
     *
     * @since 5.6.0
     */
    public function print_js_template_row()
    {
    }
}