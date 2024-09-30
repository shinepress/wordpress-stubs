<?php


/**
 * Core class used to implement an admin screen API.
 *
 * @since 3.3.0
 */
#[\AllowDynamicProperties]
final class WP_Screen
{
    /**
     * Any action associated with the screen.
     *
     * 'add' for *-add.php and *-new.php screens. Empty otherwise.
     *
     * @since 3.3.0
     * @var string
     */
    public $action;
    /**
     * The base type of the screen.
     *
     * This is typically the same as `$id` but with any post types and taxonomies stripped.
     * For example, for an `$id` of 'edit-post' the base is 'edit'.
     *
     * @since 3.3.0
     * @var string
     */
    public $base;
    /**
     * The unique ID of the screen.
     *
     * @since 3.3.0
     * @var string
     */
    public $id;
    /**
     * Whether the screen is in the network admin.
     *
     * Deprecated. Use in_admin() instead.
     *
     * @since 3.3.0
     * @deprecated 3.5.0
     * @var bool
     */
    public $is_network;
    /**
     * Whether the screen is in the user admin.
     *
     * Deprecated. Use in_admin() instead.
     *
     * @since 3.3.0
     * @deprecated 3.5.0
     * @var bool
     */
    public $is_user;
    /**
     * The base menu parent.
     *
     * This is derived from `$parent_file` by removing the query string and any .php extension.
     * `$parent_file` values of 'edit.php?post_type=page' and 'edit.php?post_type=post'
     * have a `$parent_base` of 'edit'.
     *
     * @since 3.3.0
     * @var string|null
     */
    public $parent_base;
    /**
     * The parent_file for the screen per the admin menu system.
     *
     * Some `$parent_file` values are 'edit.php?post_type=page', 'edit.php', and 'options-general.php'.
     *
     * @since 3.3.0
     * @var string|null
     */
    public $parent_file;
    /**
     * The post type associated with the screen, if any.
     *
     * The 'edit.php?post_type=page' screen has a post type of 'page'.
     * The 'edit-tags.php?taxonomy=$taxonomy&post_type=page' screen has a post type of 'page'.
     *
     * @since 3.3.0
     * @var string
     */
    public $post_type;
    /**
     * The taxonomy associated with the screen, if any.
     *
     * The 'edit-tags.php?taxonomy=category' screen has a taxonomy of 'category'.
     *
     * @since 3.3.0
     * @var string
     */
    public $taxonomy;
    /**
     * Whether the screen is using the block editor.
     *
     * @since 5.0.0
     * @var bool
     */
    public $is_block_editor = \false;
    /**
     * Fetches a screen object.
     *
     * @since 3.3.0
     *
     * @global string $hook_suffix
     *
     * @param string|WP_Screen $hook_name Optional. The hook name (also known as the hook suffix) used to determine the screen.
     *                                    Defaults to the current $hook_suffix global.
     * @return WP_Screen Screen object.
     */
    public static function get($hook_name = '')
    {
    }
    /**
     * Makes the screen object the current screen.
     *
     * @see set_current_screen()
     * @since 3.3.0
     *
     * @global WP_Screen $current_screen WordPress current screen object.
     * @global string    $typenow        The post type of the current screen.
     * @global string    $taxnow         The taxonomy of the current screen.
     */
    public function set_current_screen()
    {
    }
    /**
     * Indicates whether the screen is in a particular admin.
     *
     * @since 3.5.0
     *
     * @param string $admin The admin to check against (network | user | site).
     *                      If empty any of the three admins will result in true.
     * @return bool True if the screen is in the indicated admin, false otherwise.
     */
    public function in_admin($admin = \null)
    {
    }
    /**
     * Sets or returns whether the block editor is loading on the current screen.
     *
     * @since 5.0.0
     *
     * @param bool $set Optional. Sets whether the block editor is loading on the current screen or not.
     * @return bool True if the block editor is being loaded, false otherwise.
     */
    public function is_block_editor($set = \null)
    {
    }
    /**
     * Sets the old string-based contextual help for the screen for backward compatibility.
     *
     * @since 3.3.0
     *
     * @param WP_Screen $screen A screen object.
     * @param string    $help   Help text.
     */
    public static function add_old_compat_help($screen, $help)
    {
    }
    /**
     * Sets the parent information for the screen.
     *
     * This is called in admin-header.php after the menu parent for the screen has been determined.
     *
     * @since 3.3.0
     *
     * @param string $parent_file The parent file of the screen. Typically the $parent_file global.
     */
    public function set_parentage($parent_file)
    {
    }
    /**
     * Adds an option for the screen.
     *
     * Call this in template files after admin.php is loaded and before admin-header.php is loaded
     * to add screen options.
     *
     * @since 3.3.0
     *
     * @param string $option Option ID.
     * @param mixed  $args   Option-dependent arguments.
     */
    public function add_option($option, $args = array())
    {
    }
    /**
     * Removes an option from the screen.
     *
     * @since 3.8.0
     *
     * @param string $option Option ID.
     */
    public function remove_option($option)
    {
    }
    /**
     * Removes all options from the screen.
     *
     * @since 3.8.0
     */
    public function remove_options()
    {
    }
    /**
     * Gets the options registered for the screen.
     *
     * @since 3.8.0
     *
     * @return array Options with arguments.
     */
    public function get_options()
    {
    }
    /**
     * Gets the arguments for an option for the screen.
     *
     * @since 3.3.0
     *
     * @param string       $option Option name.
     * @param string|false $key    Optional. Specific array key for when the option is an array.
     *                             Default false.
     * @return string The option value if set, null otherwise.
     */
    public function get_option($option, $key = \false)
    {
    }
    /**
     * Gets the help tabs registered for the screen.
     *
     * @since 3.4.0
     * @since 4.4.0 Help tabs are ordered by their priority.
     *
     * @return array Help tabs with arguments.
     */
    public function get_help_tabs()
    {
    }
    /**
     * Gets the arguments for a help tab.
     *
     * @since 3.4.0
     *
     * @param string $id Help Tab ID.
     * @return array Help tab arguments.
     */
    public function get_help_tab($id)
    {
    }
    /**
     * Adds a help tab to the contextual help for the screen.
     *
     * Call this on the `load-$pagenow` hook for the relevant screen,
     * or fetch the `$current_screen` object, or use get_current_screen()
     * and then call the method from the object.
     *
     * You may need to filter `$current_screen` using an if or switch statement
     * to prevent new help tabs from being added to ALL admin screens.
     *
     * @since 3.3.0
     * @since 4.4.0 The `$priority` argument was added.
     *
     * @param array $args {
     *     Array of arguments used to display the help tab.
     *
     *     @type string   $title    Title for the tab. Default false.
     *     @type string   $id       Tab ID. Must be HTML-safe and should be unique for this menu.
     *                              It is NOT allowed to contain any empty spaces. Default false.
     *     @type string   $content  Optional. Help tab content in plain text or HTML. Default empty string.
     *     @type callable $callback Optional. A callback to generate the tab content. Default false.
     *     @type int      $priority Optional. The priority of the tab, used for ordering. Default 10.
     * }
     * @phpstan-param array{
     *   title?: string,
     *   id?: string,
     *   content?: string,
     *   callback?: callable,
     *   priority?: int,
     * } $args
     * @phpstan-return void
     */
    public function add_help_tab($args)
    {
    }
    /**
     * Removes a help tab from the contextual help for the screen.
     *
     * @since 3.3.0
     *
     * @param string $id The help tab ID.
     */
    public function remove_help_tab($id)
    {
    }
    /**
     * Removes all help tabs from the contextual help for the screen.
     *
     * @since 3.3.0
     */
    public function remove_help_tabs()
    {
    }
    /**
     * Gets the content from a contextual help sidebar.
     *
     * @since 3.4.0
     *
     * @return string Contents of the help sidebar.
     */
    public function get_help_sidebar()
    {
    }
    /**
     * Adds a sidebar to the contextual help for the screen.
     *
     * Call this in template files after admin.php is loaded and before admin-header.php is loaded
     * to add a sidebar to the contextual help.
     *
     * @since 3.3.0
     *
     * @param string $content Sidebar content in plain text or HTML.
     */
    public function set_help_sidebar($content)
    {
    }
    /**
     * Gets the number of layout columns the user has selected.
     *
     * The layout_columns option controls the max number and default number of
     * columns. This method returns the number of columns within that range selected
     * by the user via Screen Options. If no selection has been made, the default
     * provisioned in layout_columns is returned. If the screen does not support
     * selecting the number of layout columns, 0 is returned.
     *
     * @since 3.4.0
     *
     * @return int Number of columns to display.
     */
    public function get_columns()
    {
    }
    /**
     * Gets the accessible hidden headings and text used in the screen.
     *
     * @since 4.4.0
     *
     * @see set_screen_reader_content() For more information on the array format.
     *
     * @return string[] An associative array of screen reader text strings.
     */
    public function get_screen_reader_content()
    {
    }
    /**
     * Gets a screen reader text string.
     *
     * @since 4.4.0
     *
     * @param string $key Screen reader text array named key.
     * @return string Screen reader text string.
     */
    public function get_screen_reader_text($key)
    {
    }
    /**
     * Adds accessible hidden headings and text for the screen.
     *
     * @since 4.4.0
     *
     * @param array $content {
     *     An associative array of screen reader text strings.
     *
     *     @type string $heading_views      Screen reader text for the filter links heading.
     *                                      Default 'Filter items list'.
     *     @type string $heading_pagination Screen reader text for the pagination heading.
     *                                      Default 'Items list navigation'.
     *     @type string $heading_list       Screen reader text for the items list heading.
     *                                      Default 'Items list'.
     * }
     * @phpstan-param array{
     *   heading_views?: string,
     *   heading_pagination?: string,
     *   heading_list?: string,
     * } $content
     */
    public function set_screen_reader_content($content = array())
    {
    }
    /**
     * Removes all the accessible hidden headings and text for the screen.
     *
     * @since 4.4.0
     */
    public function remove_screen_reader_content()
    {
    }
    /**
     * Renders the screen's help section.
     *
     * This will trigger the deprecated filters for backward compatibility.
     *
     * @since 3.3.0
     *
     * @global string $screen_layout_columns
     * @phpstan-return void
     */
    public function render_screen_meta()
    {
    }
    /**
     * @global array $wp_meta_boxes Global meta box state.
     *
     * @return bool
     */
    public function show_screen_options()
    {
    }
    /**
     * Renders the screen options tab.
     *
     * @since 3.3.0
     *
     * @param array $options {
     *     Options for the tab.
     *
     *     @type bool $wrap Whether the screen-options-wrap div will be included. Defaults to true.
     * }
     * @phpstan-param array{
     *   wrap?: bool,
     * } $options
     */
    public function render_screen_options($options = array())
    {
    }
    /**
     * Renders the meta boxes preferences.
     *
     * @since 4.4.0
     *
     * @global array $wp_meta_boxes Global meta box state.
     * @phpstan-return void
     */
    public function render_meta_boxes_preferences()
    {
    }
    /**
     * Renders the list table columns preferences.
     *
     * @since 4.4.0
     * @phpstan-return void
     */
    public function render_list_table_columns_preferences()
    {
    }
    /**
     * Renders the option for number of columns on the page.
     *
     * @since 3.3.0
     * @phpstan-return void
     */
    public function render_screen_layout()
    {
    }
    /**
     * Renders the items per page option.
     *
     * @since 3.3.0
     * @phpstan-return void
     */
    public function render_per_page_options()
    {
    }
    /**
     * Renders the list table view mode preferences.
     *
     * @since 4.4.0
     *
     * @global string $mode List table view mode.
     * @phpstan-return void
     */
    public function render_view_mode()
    {
    }
    /**
     * Renders screen reader text.
     *
     * @since 4.4.0
     *
     * @param string $key The screen reader text array named key.
     * @param string $tag Optional. The HTML tag to wrap the screen reader text. Default h2.
     * @phpstan-return void
     */
    public function render_screen_reader_content($key = '', $tag = 'h2')
    {
    }
}