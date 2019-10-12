<?php


/**
 * Administration API: WP_List_Table class
 *
 * @package WordPress
 * @subpackage List_Table
 * @since 3.1.0
 */
/**
 * Base class for displaying a list of items in an ajaxified HTML table.
 *
 * @since 3.1.0
 * @access private
 */
class WP_List_Table
{
    /**
     * The current list of items.
     *
     * @since 3.1.0
     * @var array
     */
    public $items;
    /**
     * Various information about the current table.
     *
     * @since 3.1.0
     * @var array
     */
    protected $_args;
    /**
     * Various information needed for displaying the pagination.
     *
     * @since 3.1.0
     * @var array
     */
    protected $_pagination_args = array();
    /**
     * The current screen.
     *
     * @since 3.1.0
     * @var object
     */
    protected $screen;
    /**
     * Cached bulk actions.
     *
     * @since 3.1.0
     * @var array
     */
    private $_actions;
    /**
     * Cached pagination output.
     *
     * @since 3.1.0
     * @var string
     */
    private $_pagination;
    /**
     * The view switcher modes.
     *
     * @since 4.1.0
     * @var array
     */
    protected $modes = array();
    /**
     * Stores the value returned by ->get_column_info().
     *
     * @since 4.1.0
     * @var array
     */
    protected $_column_headers;
    /**
     * {@internal Missing Summary}
     *
     * @var array
     */
    protected $compat_fields = array('_args', '_pagination_args', 'screen', '_actions', '_pagination');
    /**
     * {@internal Missing Summary}
     *
     * @var array
     */
    protected $compat_methods = array('set_pagination_args', 'get_views', 'get_bulk_actions', 'bulk_actions', 'row_actions', 'months_dropdown', 'view_switcher', 'comments_bubble', 'get_items_per_page', 'pagination', 'get_sortable_columns', 'get_column_info', 'get_table_classes', 'display_tablenav', 'extra_tablenav', 'single_row_columns');
    /**
     * Constructor.
     *
     * The child class should call this constructor from its own constructor to override
     * the default $args.
     *
     * @since 3.1.0
     *
     * @param array|string $args {
     *     Array or string of arguments.
     *
     *     @type string $plural   Plural value used for labels and the objects being listed.
     *                            This affects things such as CSS class-names and nonces used
     *                            in the list table, e.g. 'posts'. Default empty.
     *     @type string $singular Singular label for an object being listed, e.g. 'post'.
     *                            Default empty
     *     @type bool   $ajax     Whether the list table supports Ajax. This includes loading
     *                            and sorting data, for example. If true, the class will call
     *                            the _js_vars() method in the footer to provide variables
     *                            to any scripts handling Ajax events. Default false.
     *     @type string $screen   String containing the hook name used to determine the current
     *                            screen. If left null, the current screen will be automatically set.
     *                            Default null.
     * }
     */
    public function __construct($args = array())
    {
    }
    /**
     * Make private properties readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to get.
     * @return mixed Property.
     */
    public function __get($name)
    {
    }
    /**
     * Make private properties settable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name  Property to check if set.
     * @param mixed  $value Property value.
     * @return mixed Newly-set property.
     */
    public function __set($name, $value)
    {
    }
    /**
     * Make private properties checkable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to check if set.
     * @return bool Whether the property is set.
     */
    public function __isset($name)
    {
    }
    /**
     * Make private properties un-settable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string $name Property to unset.
     */
    public function __unset($name)
    {
    }
    /**
     * Make private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string   $name      Method to call.
     * @param array    $arguments Arguments to pass when calling.
     * @return mixed|bool Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Checks the current user's permissions
     *
     * @since 3.1.0
     * @abstract
     */
    public function ajax_user_can()
    {
    }
    /**
     * Prepares the list of items for displaying.
     *
     * @uses WP_List_Table::set_pagination_args()
     *
     * @since 3.1.0
     * @abstract
     */
    public function prepare_items()
    {
    }
    /**
     * An internal method that sets all the necessary pagination arguments
     *
     * @since 3.1.0
     *
     * @param array|string $args Array or string of arguments with information about the pagination.
     */
    protected function set_pagination_args($args)
    {
    }
    /**
     * Access the pagination args.
     *
     * @since 3.1.0
     *
     * @param string $key Pagination argument to retrieve. Common values include 'total_items',
     *                    'total_pages', 'per_page', or 'infinite_scroll'.
     * @return int Number of items that correspond to the given pagination argument.
     */
    public function get_pagination_arg($key)
    {
    }
    /**
     * Whether the table has items to display or not
     *
     * @since 3.1.0
     *
     * @return bool
     */
    public function has_items()
    {
    }
    /**
     * Message to be displayed when there are no items
     *
     * @since 3.1.0
     */
    public function no_items()
    {
    }
    /**
     * Displays the search box.
     *
     * @since 3.1.0
     *
     * @param string $text     The 'submit' button label.
     * @param string $input_id ID attribute value for the search input field.
     */
    public function search_box($text, $input_id)
    {
    }
    /**
     * Get an associative array ( id => link ) with the list
     * of views available on this table.
     *
     * @since 3.1.0
     *
     * @return array
     */
    protected function get_views()
    {
    }
    /**
     * Display the list of views available on this table.
     *
     * @since 3.1.0
     */
    public function views()
    {
    }
    /**
     * Get an associative array ( option_name => option_title ) with the list
     * of bulk actions available on this table.
     *
     * @since 3.1.0
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Display the bulk actions dropdown.
     *
     * @since 3.1.0
     *
     * @param string $which The location of the bulk actions: 'top' or 'bottom'.
     *                      This is designated as optional for backward compatibility.
     */
    protected function bulk_actions($which = '')
    {
    }
    /**
     * Get the current action selected from the bulk actions dropdown.
     *
     * @since 3.1.0
     *
     * @return string|false The action name or False if no action was selected
     */
    public function current_action()
    {
    }
    /**
     * Generate row actions div
     *
     * @since 3.1.0
     *
     * @param string[] $actions        An array of action links.
     * @param bool     $always_visible Whether the actions should be always visible.
     * @return string
     */
    protected function row_actions($actions, $always_visible = \false)
    {
    }
    /**
     * Display a monthly dropdown for filtering items
     *
     * @since 3.1.0
     *
     * @global wpdb      $wpdb
     * @global WP_Locale $wp_locale
     *
     * @param string $post_type
     */
    protected function months_dropdown($post_type)
    {
    }
    /**
     * Display a view switcher
     *
     * @since 3.1.0
     *
     * @param string $current_mode
     */
    protected function view_switcher($current_mode)
    {
    }
    /**
     * Display a comment count bubble
     *
     * @since 3.1.0
     *
     * @param int $post_id          The post ID.
     * @param int $pending_comments Number of pending comments.
     */
    protected function comments_bubble($post_id, $pending_comments)
    {
    }
    /**
     * Get the current page number
     *
     * @since 3.1.0
     *
     * @return int
     */
    public function get_pagenum()
    {
    }
    /**
     * Get number of items to display on a single page
     *
     * @since 3.1.0
     *
     * @param string $option
     * @param int    $default
     * @return int
     */
    protected function get_items_per_page($option, $default = 20)
    {
    }
    /**
     * Display the pagination.
     *
     * @since 3.1.0
     *
     * @param string $which
     */
    protected function pagination($which)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     *
     * @since 3.1.0
     * @abstract
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * Get a list of sortable columns. The format is:
     * 'internal-name' => 'orderby'
     * or
     * 'internal-name' => array( 'orderby', true )
     *
     * The second format will make the initial sorting order be descending
     *
     * @since 3.1.0
     *
     * @return array
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * Gets the name of the default primary column.
     *
     * @since 4.3.0
     *
     * @return string Name of the default primary column, in this case, an empty string.
     */
    protected function get_default_primary_column_name()
    {
    }
    /**
     * Public wrapper for WP_List_Table::get_default_primary_column_name().
     *
     * @since 4.4.0
     *
     * @return string Name of the default primary column.
     */
    public function get_primary_column()
    {
    }
    /**
     * Gets the name of the primary column.
     *
     * @since 4.3.0
     *
     * @return string The name of the primary column.
     */
    protected function get_primary_column_name()
    {
    }
    /**
     * Get a list of all, hidden and sortable columns, with filter applied
     *
     * @since 3.1.0
     *
     * @return array
     */
    protected function get_column_info()
    {
    }
    /**
     * Return number of visible columns
     *
     * @since 3.1.0
     *
     * @return int
     */
    public function get_column_count()
    {
    }
    /**
     * Print column headers, accounting for hidden and sortable columns.
     *
     * @since 3.1.0
     *
     * @staticvar int $cb_counter
     *
     * @param bool $with_id Whether to set the id attribute or not
     */
    public function print_column_headers($with_id = \true)
    {
    }
    /**
     * Display the table
     *
     * @since 3.1.0
     */
    public function display()
    {
    }
    /**
     * Get a list of CSS classes for the WP_List_Table table tag.
     *
     * @since 3.1.0
     *
     * @return array List of CSS classes for the table tag.
     */
    protected function get_table_classes()
    {
    }
    /**
     * Generate the table navigation above or below the table
     *
     * @since 3.1.0
     * @param string $which
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * Extra controls to be displayed between bulk actions and pagination
     *
     * @since 3.1.0
     *
     * @param string $which
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * Generate the tbody element for the list table.
     *
     * @since 3.1.0
     */
    public function display_rows_or_placeholder()
    {
    }
    /**
     * Generate the table rows
     *
     * @since 3.1.0
     */
    public function display_rows()
    {
    }
    /**
     * Generates content for a single row of the table
     *
     * @since 3.1.0
     *
     * @param object $item The current item
     */
    public function single_row($item)
    {
    }
    /**
     * @param object $item
     * @param string $column_name
     */
    protected function column_default($item, $column_name)
    {
    }
    /**
     * @param object $item
     */
    protected function column_cb($item)
    {
    }
    /**
     * Generates the columns for a single row of the table
     *
     * @since 3.1.0
     *
     * @param object $item The current item
     */
    protected function single_row_columns($item)
    {
    }
    /**
     * Generates and display row actions links for the list table.
     *
     * @since 4.3.0
     *
     * @param object $item        The item being acted upon.
     * @param string $column_name Current column name.
     * @param string $primary     Primary column name.
     * @return string The row actions HTML, or an empty string if the current column is the primary column.
     */
    protected function handle_row_actions($item, $column_name, $primary)
    {
    }
    /**
     * Handle an incoming ajax request (called from admin-ajax.php)
     *
     * @since 3.1.0
     */
    public function ajax_response()
    {
    }
    /**
     * Send required variables to JavaScript land
     */
    public function _js_vars()
    {
    }
}