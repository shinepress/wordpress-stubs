<?php


/**
 * WP_Theme Class
 *
 * @package WordPress
 * @subpackage Theme
 * @since 3.4.0
 */
final class WP_Theme implements \ArrayAccess
{
    /**
     * Whether the theme has been marked as updateable.
     *
     * @since 4.4.0
     * @var bool
     *
     * @see WP_MS_Themes_List_Table
     */
    public $update = \false;
    /**
     * Headers for style.css files.
     *
     * @static
     * @var array
     */
    private static $file_headers = array('Name' => 'Theme Name', 'ThemeURI' => 'Theme URI', 'Description' => 'Description', 'Author' => 'Author', 'AuthorURI' => 'Author URI', 'Version' => 'Version', 'Template' => 'Template', 'Status' => 'Status', 'Tags' => 'Tags', 'TextDomain' => 'Text Domain', 'DomainPath' => 'Domain Path');
    /**
     * Default themes.
     *
     * @static
     * @var array
     */
    private static $default_themes = array('classic' => 'WordPress Classic', 'default' => 'WordPress Default', 'twentyten' => 'Twenty Ten', 'twentyeleven' => 'Twenty Eleven', 'twentytwelve' => 'Twenty Twelve', 'twentythirteen' => 'Twenty Thirteen', 'twentyfourteen' => 'Twenty Fourteen', 'twentyfifteen' => 'Twenty Fifteen', 'twentysixteen' => 'Twenty Sixteen', 'twentyseventeen' => 'Twenty Seventeen', 'twentynineteen' => 'Twenty Nineteen');
    /**
     * Renamed theme tags.
     *
     * @static
     * @var array
     */
    private static $tag_map = array('fixed-width' => 'fixed-layout', 'flexible-width' => 'fluid-layout');
    /**
     * Absolute path to the theme root, usually wp-content/themes
     *
     * @var string
     */
    private $theme_root;
    /**
     * Header data from the theme's style.css file.
     *
     * @var array
     */
    private $headers = array();
    /**
     * Header data from the theme's style.css file after being sanitized.
     *
     * @var array
     */
    private $headers_sanitized;
    /**
     * Header name from the theme's style.css after being translated.
     *
     * Cached due to sorting functions running over the translated name.
     *
     * @var string
     */
    private $name_translated;
    /**
     * Errors encountered when initializing the theme.
     *
     * @var WP_Error
     */
    private $errors;
    /**
     * The directory name of the theme's files, inside the theme root.
     *
     * In the case of a child theme, this is directory name of the child theme.
     * Otherwise, 'stylesheet' is the same as 'template'.
     *
     * @var string
     */
    private $stylesheet;
    /**
     * The directory name of the theme's files, inside the theme root.
     *
     * In the case of a child theme, this is the directory name of the parent theme.
     * Otherwise, 'template' is the same as 'stylesheet'.
     *
     * @var string
     */
    private $template;
    /**
     * A reference to the parent theme, in the case of a child theme.
     *
     * @var WP_Theme
     */
    private $parent;
    /**
     * URL to the theme root, usually an absolute URL to wp-content/themes
     *
     * @var string
     */
    private $theme_root_uri;
    /**
     * Flag for whether the theme's textdomain is loaded.
     *
     * @var bool
     */
    private $textdomain_loaded;
    /**
     * Stores an md5 hash of the theme root, to function as the cache key.
     *
     * @var string
     */
    private $cache_hash;
    /**
     * Flag for whether the themes cache bucket should be persistently cached.
     *
     * Default is false. Can be set with the {@see 'wp_cache_themes_persistently'} filter.
     *
     * @static
     * @var bool
     */
    private static $persistently_cache;
    /**
     * Expiration time for the themes cache bucket.
     *
     * By default the bucket is not cached, so this value is useless.
     *
     * @static
     * @var bool
     */
    private static $cache_expiration = 1800;
    /**
     * Constructor for WP_Theme.
     *
     * @since  3.4.0
     *
     * @global array $wp_theme_directories
     *
     * @param string $theme_dir Directory of the theme within the theme_root.
     * @param string $theme_root Theme root.
     * @param WP_Error|void $_child If this theme is a parent theme, the child may be passed for validation purposes.
     */
    public function __construct($theme_dir, $theme_root, $_child = \null)
    {
    }
    /**
     * When converting the object to a string, the theme name is returned.
     *
     * @since  3.4.0
     *
     * @return string Theme name, ready for display (translated)
     */
    public function __toString()
    {
    }
    /**
     * __isset() magic method for properties formerly returned by current_theme_info()
     *
     * @staticvar array $properties
     *
     * @since  3.4.0
     *
     * @param string $offset Property to check if set.
     * @return bool Whether the given property is set.
     */
    public function __isset($offset)
    {
    }
    /**
     * __get() magic method for properties formerly returned by current_theme_info()
     *
     * @since  3.4.0
     *
     * @param string $offset Property to get.
     * @return mixed Property value.
     */
    public function __get($offset)
    {
    }
    /**
     * Method to implement ArrayAccess for keys formerly returned by get_themes()
     *
     * @since  3.4.0
     *
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Method to implement ArrayAccess for keys formerly returned by get_themes()
     *
     * @since  3.4.0
     *
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }
    /**
     * Method to implement ArrayAccess for keys formerly returned by get_themes()
     *
     * @staticvar array $keys
     *
     * @since  3.4.0
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
    }
    /**
     * Method to implement ArrayAccess for keys formerly returned by get_themes().
     *
     * Author, Author Name, Author URI, and Description did not previously return
     * translated data. We are doing so now as it is safe to do. However, as
     * Name and Title could have been used as the key for get_themes(), both remain
     * untranslated for back compatibility. This means that ['Name'] is not ideal,
     * and care should be taken to use `$theme::display( 'Name' )` to get a properly
     * translated header.
     *
     * @since  3.4.0
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
    }
    /**
     * Returns errors property.
     *
     * @since 3.4.0
     *
     * @return WP_Error|false WP_Error if there are errors, or false.
     */
    public function errors()
    {
    }
    /**
     * Whether the theme exists.
     *
     * A theme with errors exists. A theme with the error of 'theme_not_found',
     * meaning that the theme's directory was not found, does not exist.
     *
     * @since 3.4.0
     *
     * @return bool Whether the theme exists.
     */
    public function exists()
    {
    }
    /**
     * Returns reference to the parent theme.
     *
     * @since 3.4.0
     *
     * @return WP_Theme|false Parent theme, or false if the current theme is not a child theme.
     */
    public function parent()
    {
    }
    /**
     * Adds theme data to cache.
     *
     * Cache entries keyed by the theme and the type of data.
     *
     * @since 3.4.0
     *
     * @param string $key Type of data to store (theme, screenshot, headers, post_templates)
     * @param string $data Data to store
     * @return bool Return value from wp_cache_add()
     */
    private function cache_add($key, $data)
    {
    }
    /**
     * Gets theme data from cache.
     *
     * Cache entries are keyed by the theme and the type of data.
     *
     * @since 3.4.0
     *
     * @param string $key Type of data to retrieve (theme, screenshot, headers, post_templates)
     * @return mixed Retrieved data
     */
    private function cache_get($key)
    {
    }
    /**
     * Clears the cache for the theme.
     *
     * @since 3.4.0
     */
    public function cache_delete()
    {
    }
    /**
     * Get a raw, unformatted theme header.
     *
     * The header is sanitized, but is not translated, and is not marked up for display.
     * To get a theme header for display, use the display() method.
     *
     * Use the get_template() method, not the 'Template' header, for finding the template.
     * The 'Template' header is only good for what was written in the style.css, while
     * get_template() takes into account where WordPress actually located the theme and
     * whether it is actually valid.
     *
     * @since 3.4.0
     *
     * @param string $header Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags.
     * @return string|false String on success, false on failure.
     */
    public function get($header)
    {
    }
    /**
     * Gets a theme header, formatted and translated for display.
     *
     * @since 3.4.0
     *
     * @param string $header Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags.
     * @param bool $markup Optional. Whether to mark up the header. Defaults to true.
     * @param bool $translate Optional. Whether to translate the header. Defaults to true.
     * @return string|false Processed header, false on failure.
     */
    public function display($header, $markup = \true, $translate = \true)
    {
    }
    /**
     * Sanitize a theme header.
     *
     * @since 3.4.0
     *
     * @staticvar array $header_tags
     * @staticvar array $header_tags_with_a
     *
     * @param string $header Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags.
     * @param string $value Value to sanitize.
     * @return mixed
     */
    private function sanitize_header($header, $value)
    {
    }
    /**
     * Mark up a theme header.
     *
     * @since 3.4.0
     *
     * @staticvar string $comma
     *
     * @param string $header Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags.
     * @param string $value Value to mark up.
     * @param string $translate Whether the header has been translated.
     * @return string Value, marked up.
     */
    private function markup_header($header, $value, $translate)
    {
    }
    /**
     * Translate a theme header.
     *
     * @since 3.4.0
     *
     * @staticvar array $tags_list
     *
     * @param string $header Theme header. Name, Description, Author, Version, ThemeURI, AuthorURI, Status, Tags.
     * @param string $value Value to translate.
     * @return string Translated value.
     */
    private function translate_header($header, $value)
    {
    }
    /**
     * The directory name of the theme's "stylesheet" files, inside the theme root.
     *
     * In the case of a child theme, this is directory name of the child theme.
     * Otherwise, get_stylesheet() is the same as get_template().
     *
     * @since 3.4.0
     *
     * @return string Stylesheet
     */
    public function get_stylesheet()
    {
    }
    /**
     * The directory name of the theme's "template" files, inside the theme root.
     *
     * In the case of a child theme, this is the directory name of the parent theme.
     * Otherwise, the get_template() is the same as get_stylesheet().
     *
     * @since 3.4.0
     *
     * @return string Template
     */
    public function get_template()
    {
    }
    /**
     * Returns the absolute path to the directory of a theme's "stylesheet" files.
     *
     * In the case of a child theme, this is the absolute path to the directory
     * of the child theme's files.
     *
     * @since 3.4.0
     *
     * @return string Absolute path of the stylesheet directory.
     */
    public function get_stylesheet_directory()
    {
    }
    /**
     * Returns the absolute path to the directory of a theme's "template" files.
     *
     * In the case of a child theme, this is the absolute path to the directory
     * of the parent theme's files.
     *
     * @since 3.4.0
     *
     * @return string Absolute path of the template directory.
     */
    public function get_template_directory()
    {
    }
    /**
     * Returns the URL to the directory of a theme's "stylesheet" files.
     *
     * In the case of a child theme, this is the URL to the directory of the
     * child theme's files.
     *
     * @since 3.4.0
     *
     * @return string URL to the stylesheet directory.
     */
    public function get_stylesheet_directory_uri()
    {
    }
    /**
     * Returns the URL to the directory of a theme's "template" files.
     *
     * In the case of a child theme, this is the URL to the directory of the
     * parent theme's files.
     *
     * @since 3.4.0
     *
     * @return string URL to the template directory.
     */
    public function get_template_directory_uri()
    {
    }
    /**
     * The absolute path to the directory of the theme root.
     *
     * This is typically the absolute path to wp-content/themes.
     *
     * @since 3.4.0
     *
     * @return string Theme root.
     */
    public function get_theme_root()
    {
    }
    /**
     * Returns the URL to the directory of the theme root.
     *
     * This is typically the absolute URL to wp-content/themes. This forms the basis
     * for all other URLs returned by WP_Theme, so we pass it to the public function
     * get_theme_root_uri() and allow it to run the {@see 'theme_root_uri'} filter.
     *
     * @since 3.4.0
     *
     * @return string Theme root URI.
     */
    public function get_theme_root_uri()
    {
    }
    /**
     * Returns the main screenshot file for the theme.
     *
     * The main screenshot is called screenshot.png. gif and jpg extensions are also allowed.
     *
     * Screenshots for a theme must be in the stylesheet directory. (In the case of child
     * themes, parent theme screenshots are not inherited.)
     *
     * @since 3.4.0
     *
     * @param string $uri Type of URL to return, either 'relative' or an absolute URI. Defaults to absolute URI.
     * @return string|false Screenshot file. False if the theme does not have a screenshot.
     */
    public function get_screenshot($uri = 'uri')
    {
    }
    /**
     * Return files in the theme's directory.
     *
     * @since 3.4.0
     *
     * @param mixed $type Optional. Array of extensions to return. Defaults to all files (null).
     * @param int $depth Optional. How deep to search for files. Defaults to a flat scan (0 depth). -1 depth is infinite.
     * @param bool $search_parent Optional. Whether to return parent files. Defaults to false.
     * @return array Array of files, keyed by the path to the file relative to the theme's directory, with the values
     *               being absolute paths.
     */
    public function get_files($type = \null, $depth = 0, $search_parent = \false)
    {
    }
    /**
     * Returns the theme's post templates.
     *
     * @since 4.7.0
     *
     * @return array Array of page templates, keyed by filename and post type,
     *               with the value of the translated header name.
     */
    public function get_post_templates()
    {
    }
    /**
     * Returns the theme's post templates for a given post type.
     *
     * @since 3.4.0
     * @since 4.7.0 Added the `$post_type` parameter.
     *
     * @param WP_Post|null $post      Optional. The post being edited, provided for context.
     * @param string       $post_type Optional. Post type to get the templates for. Default 'page'.
     *                                If a post is provided, its post type is used.
     * @return array Array of page templates, keyed by filename, with the value of the translated header name.
     */
    public function get_page_templates($post = \null, $post_type = 'page')
    {
    }
    /**
     * Scans a directory for files of a certain extension.
     *
     * @since 3.4.0
     *
     * @static
     *
     * @param string            $path          Absolute path to search.
     * @param array|string|null $extensions    Optional. Array of extensions to find, string of a single extension,
     *                                         or null for all extensions. Default null.
     * @param int               $depth         Optional. How many levels deep to search for files. Accepts 0, 1+, or
     *                                         -1 (infinite depth). Default 0.
     * @param string            $relative_path Optional. The basename of the absolute path. Used to control the
     *                                         returned path for the found files, particularly when this function
     *                                         recurses to lower depths. Default empty.
     * @return array|false Array of files, keyed by the path to the file relative to the `$path` directory prepended
     *                     with `$relative_path`, with the values being absolute paths. False otherwise.
     */
    private static function scandir($path, $extensions = \null, $depth = 0, $relative_path = '')
    {
    }
    /**
     * Loads the theme's textdomain.
     *
     * Translation files are not inherited from the parent theme. Todo: if this fails for the
     * child theme, it should probably try to load the parent theme's translations.
     *
     * @since 3.4.0
     *
     * @return bool True if the textdomain was successfully loaded or has already been loaded.
     * 	False if no textdomain was specified in the file headers, or if the domain could not be loaded.
     */
    public function load_textdomain()
    {
    }
    /**
     * Whether the theme is allowed (multisite only).
     *
     * @since 3.4.0
     *
     * @param string $check Optional. Whether to check only the 'network'-wide settings, the 'site'
     * 	settings, or 'both'. Defaults to 'both'.
     * @param int $blog_id Optional. Ignored if only network-wide settings are checked. Defaults to current site.
     * @return bool Whether the theme is allowed for the network. Returns true in single-site.
     */
    public function is_allowed($check = 'both', $blog_id = \null)
    {
    }
    /**
     * Determines the latest WordPress default theme that is installed.
     *
     * This hits the filesystem.
     *
     * @since  4.4.0
     *
     * @return WP_Theme|false Object, or false if no theme is installed, which would be bad.
     */
    public static function get_core_default_theme()
    {
    }
    /**
     * Returns array of stylesheet names of themes allowed on the site or network.
     *
     * @since 3.4.0
     *
     * @static
     *
     * @param int $blog_id Optional. ID of the site. Defaults to the current site.
     * @return array Array of stylesheet names.
     */
    public static function get_allowed($blog_id = \null)
    {
    }
    /**
     * Returns array of stylesheet names of themes allowed on the network.
     *
     * @since 3.4.0
     *
     * @static
     *
     * @staticvar array $allowed_themes
     *
     * @return array Array of stylesheet names.
     */
    public static function get_allowed_on_network()
    {
    }
    /**
     * Returns array of stylesheet names of themes allowed on the site.
     *
     * @since 3.4.0
     *
     * @static
     *
     * @staticvar array $allowed_themes
     *
     * @param int $blog_id Optional. ID of the site. Defaults to the current site.
     * @return array Array of stylesheet names.
     */
    public static function get_allowed_on_site($blog_id = \null)
    {
    }
    /**
     * Enables a theme for all sites on the current network.
     *
     * @since 4.6.0
     * @static
     *
     * @param string|array $stylesheets Stylesheet name or array of stylesheet names.
     */
    public static function network_enable_theme($stylesheets)
    {
    }
    /**
     * Disables a theme for all sites on the current network.
     *
     * @since 4.6.0
     * @static
     *
     * @param string|array $stylesheets Stylesheet name or array of stylesheet names.
     */
    public static function network_disable_theme($stylesheets)
    {
    }
    /**
     * Sorts themes by name.
     *
     * @since 3.4.0
     *
     * @static
     *
     * @param array $themes Array of themes to sort (passed by reference).
     */
    public static function sort_by_name(&$themes)
    {
    }
    /**
     * Callback function for usort() to naturally sort themes by name.
     *
     * Accesses the Name header directly from the class for maximum speed.
     * Would choke on HTML but we don't care enough to slow it down with strip_tags().
     *
     * @since 3.4.0
     *
     * @static
     *
     * @param string $a First name.
     * @param string $b Second name.
     * @return int Negative if `$a` falls lower in the natural order than `$b`. Zero if they fall equally.
     *             Greater than 0 if `$a` falls higher in the natural order than `$b`. Used with usort().
     */
    private static function _name_sort($a, $b)
    {
    }
    /**
     * Name sort (with translation).
     *
     * @since 3.4.0
     *
     * @static
     *
     * @param string $a First name.
     * @param string $b Second name.
     * @return int Negative if `$a` falls lower in the natural order than `$b`. Zero if they fall equally.
     *             Greater than 0 if `$a` falls higher in the natural order than `$b`. Used with usort().
     */
    private static function _name_sort_i18n($a, $b)
    {
    }
}