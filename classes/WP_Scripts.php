<?php


/**
 * Dependencies API: WP_Scripts class
 *
 * @since 2.6.0
 *
 * @package WordPress
 * @subpackage Dependencies
 */
/**
 * Core class used to register scripts.
 *
 * @package WordPress
 * @uses WP_Dependencies
 * @since 2.1.0
 */
class WP_Scripts extends \WP_Dependencies
{
    /**
     * Base URL for scripts.
     *
     * Full URL with trailing slash.
     *
     * @since 2.6.0
     * @access public
     * @var string
     */
    public $base_url;
    /**
     * URL of the content directory.
     *
     * @since 2.8.0
     * @access public
     * @var string
     */
    public $content_url;
    /**
     * Default version string for stylesheets.
     *
     * @since 2.6.0
     * @access public
     * @var string
     */
    public $default_version;
    /**
     * Holds handles of scripts which are enqueued in footer.
     *
     * @since 2.8.0
     * @access public
     * @var array
     */
    public $in_footer = array();
    /**
     * Holds a list of script handles which will be concatenated.
     *
     * @since 2.8.0
     * @access public
     * @var string
     */
    public $concat = '';
    /**
     * Holds a string which contains script handles and their version.
     *
     * @since 2.8.0
     * @deprecated 3.4.0
     * @access public
     * @var string
     */
    public $concat_version = '';
    /**
     * Whether to perform concatenation.
     *
     * @since 2.8.0
     * @access public
     * @var bool
     */
    public $do_concat = \false;
    /**
     * Holds HTML markup of scripts and additional data if concatenation
     * is enabled.
     *
     * @since 2.8.0
     * @access public
     * @var string
     */
    public $print_html = '';
    /**
     * Holds inline code if concatenation is enabled.
     *
     * @since 2.8.0
     * @access public
     * @var string
     */
    public $print_code = '';
    /**
     * Holds a list of script handles which are not in the default directory
     * if concatenation is enabled.
     *
     * Unused in core.
     *
     * @since 2.8.0
     * @access public
     * @var string
     */
    public $ext_handles = '';
    /**
     * Holds a string which contains handles and versions of scripts which
     * are not in the default directory if concatenation is enabled.
     *
     * Unused in core.
     *
     * @since 2.8.0
     * @access public
     * @var string
     */
    public $ext_version = '';
    /**
     * List of default directories.
     *
     * @since 2.8.0
     * @access public
     * @var array
     */
    public $default_dirs;
    /**
     * Constructor.
     *
     * @since 2.6.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * Initialize the class.
     *
     * @since 3.4.0
     * @access public
     */
    public function init()
    {
    }
    /**
     * Prints scripts.
     *
     * Prints the scripts passed to it or the print queue. Also prints all necessary dependencies.
     *
     * @since 2.1.0
     * @since 2.8.0 Added the `$group` parameter.
     * @access public
     *
     * @param mixed $handles Optional. Scripts to be printed. (void) prints queue, (string) prints
     *                       that script, (array of strings) prints those scripts. Default false.
     * @param int   $group   Optional. If scripts were queued in groups prints this group number.
     *                       Default false.
     * @return array Scripts that have been printed.
     */
    public function print_scripts($handles = \false, $group = \false)
    {
    }
    /**
     * Prints extra scripts of a registered script.
     *
     * @since 2.1.0
     * @since 2.8.0 Added the `$echo` parameter.
     * @deprecated 3.3.0
     * @access public
     *
     * @see print_extra_script()
     *
     * @param string $handle The script's registered handle.
     * @param bool   $echo   Optional. Whether to echo the extra script instead of just returning it.
     *                       Default true.
     * @return bool|string|void Void if no data exists, extra scripts if `$echo` is true, true otherwise.
     */
    public function print_scripts_l10n($handle, $echo = \true)
    {
    }
    /**
     * Prints extra scripts of a registered script.
     *
     * @since 3.3.0
     * @access public
     *
     * @param string $handle The script's registered handle.
     * @param bool   $echo   Optional. Whether to echo the extra script instead of just returning it.
     *                       Default true.
     * @return bool|string|void Void if no data exists, extra scripts if `$echo` is true, true otherwise.
     */
    public function print_extra_script($handle, $echo = \true)
    {
    }
    /**
     * Processes a script dependency.
     *
     * @since 2.6.0
     * @since 2.8.0 Added the `$group` parameter.
     * @access public
     *
     * @see WP_Dependencies::do_item()
     *
     * @param string $handle    The script's registered handle.
     * @param int|false $group  Optional. Group level: (int) level, (false) no groups. Default false.
     * @return bool True on success, false on failure.
     */
    public function do_item($handle, $group = \false)
    {
    }
    /**
     * Adds extra code to a registered script.
     *
     * @since 4.5.0
     * @access public
     *
     * @param string $handle   Name of the script to add the inline script to. Must be lowercase.
     * @param string $data     String containing the javascript to be added.
     * @param string $position Optional. Whether to add the inline script before the handle
     *                         or after. Default 'after'.
     * @return bool True on success, false on failure.
     */
    public function add_inline_script($handle, $data, $position = 'after')
    {
    }
    /**
     * Prints inline scripts registered for a specific handle.
     *
     * @since 4.5.0
     * @access public
     *
     * @param string $handle   Name of the script to add the inline script to. Must be lowercase.
     * @param string $position Optional. Whether to add the inline script before the handle
     *                         or after. Default 'after'.
     * @param bool $echo       Optional. Whether to echo the script instead of just returning it.
     *                         Default true.
     * @return string|false Script on success, false otherwise.
     */
    public function print_inline_script($handle, $position = 'after', $echo = \true)
    {
    }
    /**
     * Localizes a script, only if the script has already been added.
     *
     * @since 2.1.0
     * @access public
     *
     * @param string $handle
     * @param string $object_name
     * @param array $l10n
     * @return bool
     */
    public function localize($handle, $object_name, $l10n)
    {
    }
    /**
     * Sets handle group.
     *
     * @since 2.8.0
     * @access public
     *
     * @see WP_Dependencies::set_group()
     *
     * @param string    $handle    Name of the item. Should be unique.
     * @param bool      $recursion Internal flag that calling function was called recursively.
     * @param int|false $group     Optional. Group level: (int) level, (false) no groups. Default false.
     * @return bool Not already in the group or a lower group
     */
    public function set_group($handle, $recursion, $group = \false)
    {
    }
    /**
     * Determines script dependencies.
     *
     * @since 2.1.0
     * @access public
     *
     * @see WP_Dependencies::all_deps()
     *
     * @param mixed     $handles   Item handle and argument (string) or item handles and arguments (array of strings).
     * @param bool      $recursion Internal flag that function is calling itself.
     * @param int|false $group     Optional. Group level: (int) level, (false) no groups. Default false.
     * @return bool True on success, false on failure.
     */
    public function all_deps($handles, $recursion = \false, $group = \false)
    {
    }
    /**
     * Processes items and dependencies for the head group.
     *
     * @since 2.8.0
     * @access public
     *
     * @see WP_Dependencies::do_items()
     *
     * @return array Handles of items that have been processed.
     */
    public function do_head_items()
    {
    }
    /**
     * Processes items and dependencies for the footer group.
     *
     * @since 2.8.0
     * @access public
     *
     * @see WP_Dependencies::do_items()
     *
     * @return array Handles of items that have been processed.
     */
    public function do_footer_items()
    {
    }
    /**
     * Whether a handle's source is in a default directory.
     *
     * @since 2.8.0
     * @access public
     *
     * @param string $src The source of the enqueued script.
     * @return bool True if found, false if not.
     */
    public function in_default_dir($src)
    {
    }
    /**
     * Resets class properties.
     *
     * @since 2.8.0
     * @access public
     */
    public function reset()
    {
    }
}