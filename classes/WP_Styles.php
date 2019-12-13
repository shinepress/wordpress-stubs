<?php


/**
 * Dependencies API: WP_Styles class
 *
 * @since 2.6.0
 *
 * @package WordPress
 * @subpackage Dependencies
 */
/**
 * Core class used to register styles.
 *
 * @since 2.6.0
 *
 * @see WP_Dependencies
 */
class WP_Styles extends \WP_Dependencies
{
    /**
     * Base URL for styles.
     *
     * Full URL with trailing slash.
     *
     * @since 2.6.0
     * @var string
     */
    public $base_url;
    /**
     * URL of the content directory.
     *
     * @since 2.8.0
     * @var string
     */
    public $content_url;
    /**
     * Default version string for stylesheets.
     *
     * @since 2.6.0
     * @var string
     */
    public $default_version;
    /**
     * The current text direction.
     *
     * @since 2.6.0
     * @var string
     */
    public $text_direction = 'ltr';
    /**
     * Holds a list of style handles which will be concatenated.
     *
     * @since 2.8.0
     * @var string
     */
    public $concat = '';
    /**
     * Holds a string which contains style handles and their version.
     *
     * @since 2.8.0
     * @deprecated 3.4.0
     * @var string
     */
    public $concat_version = '';
    /**
     * Whether to perform concatenation.
     *
     * @since 2.8.0
     * @var bool
     */
    public $do_concat = \false;
    /**
     * Holds HTML markup of styles and additional data if concatenation
     * is enabled.
     *
     * @since 2.8.0
     * @var string
     */
    public $print_html = '';
    /**
     * Holds inline styles if concatenation is enabled.
     *
     * @since 3.3.0
     * @var string
     */
    public $print_code = '';
    /**
     * List of default directories.
     *
     * @since 2.8.0
     * @var array
     */
    public $default_dirs;
    /**
     * Holds a string which contains the type attribute for style tag.
     *
     * If the current theme does not declare HTML5 support for 'style',
     * then it initializes as `type='text/css'`.
     *
     * @since 5.3.0
     * @var string
     */
    private $type_attr = '';
    /**
     * Constructor.
     *
     * @since 2.6.0
     */
    public function __construct()
    {
    }
    /**
     * Processes a style dependency.
     *
     * @since 2.6.0
     *
     * @see WP_Dependencies::do_item()
     *
     * @param string $handle The style's registered handle.
     * @return bool True on success, false on failure.
     */
    public function do_item($handle)
    {
    }
    /**
     * Adds extra CSS styles to a registered stylesheet.
     *
     * @since 3.3.0
     *
     * @param string $handle The style's registered handle.
     * @param string $code   String containing the CSS styles to be added.
     * @return bool True on success, false on failure.
     */
    public function add_inline_style($handle, $code)
    {
    }
    /**
     * Prints extra CSS styles of a registered stylesheet.
     *
     * @since 3.3.0
     *
     * @param string $handle The style's registered handle.
     * @param bool   $echo   Optional. Whether to echo the inline style instead of just returning it.
     *                       Default true.
     * @return string|bool False if no data exists, inline styles if `$echo` is true, true otherwise.
     */
    public function print_inline_style($handle, $echo = \true)
    {
    }
    /**
     * Determines style dependencies.
     *
     * @since 2.6.0
     *
     * @see WP_Dependencies::all_deps()
     *
     * @param mixed     $handles   Item handle and argument (string) or item handles and arguments (array of strings).
     * @param bool      $recursion Internal flag that function is calling itself.
     * @param int|false $group     Group level: (int) level, (false) no groups.
     * @return bool True on success, false on failure.
     */
    public function all_deps($handles, $recursion = \false, $group = \false)
    {
    }
    /**
     * Generates an enqueued style's fully-qualified URL.
     *
     * @since 2.6.0
     *
     * @param string $src The source of the enqueued style.
     * @param string $ver The version of the enqueued style.
     * @param string $handle The style's registered handle.
     * @return string Style's fully-qualified URL.
     */
    public function _css_href($src, $ver, $handle)
    {
    }
    /**
     * Whether a handle's source is in a default directory.
     *
     * @since 2.8.0
     *
     * @param string $src The source of the enqueued style.
     * @return bool True if found, false if not.
     */
    public function in_default_dir($src)
    {
    }
    /**
     * Processes items and dependencies for the footer group.
     *
     * HTML 5 allows styles in the body, grab late enqueued items and output them in the footer.
     *
     * @since 3.3.0
     *
     * @see WP_Dependencies::do_items()
     *
     * @return array Handles of items that have been processed.
     */
    public function do_footer_items()
    {
    }
    /**
     * Resets class properties.
     *
     * @since 3.3.0
     */
    public function reset()
    {
    }
}