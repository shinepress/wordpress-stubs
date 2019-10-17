<?php


/**
 * Press This class and display functionality
 *
 * @package WordPress
 * @subpackage Press_This
 * @since 4.2.0
 */
/**
 * Press This class.
 *
 * @since 4.2.0
 */
class WP_Press_This
{
    // Used to trigger the bookmarklet update notice.
    const VERSION = 8;
    public $version = 8;
    private $images = array();
    private $embeds = array();
    private $domain = '';
    /**
     * Constructor.
     *
     * @since 4.2.0
     * @access public
     */
    public function __construct()
    {
    }
    /**
     * App and site settings data, including i18n strings for the client-side.
     *
     * @since 4.2.0
     * @access public
     *
     * @return array Site settings.
     */
    public function site_settings()
    {
    }
    /**
     * Get the source's images and save them locally, for posterity, unless we can't.
     *
     * @since 4.2.0
     * @access public
     *
     * @param int    $post_id Post ID.
     * @param string $content Optional. Current expected markup for Press This. Expects slashed. Default empty.
     * @return string New markup with old image URLs replaced with the local attachment ones if swapped.
     */
    public function side_load_images($post_id, $content = '')
    {
    }
    /**
     * Ajax handler for saving the post as draft or published.
     *
     * @since 4.2.0
     * @access public
     */
    public function save_post()
    {
    }
    /**
     * Ajax handler for adding a new category.
     *
     * @since 4.2.0
     * @access public
     */
    public function add_category()
    {
    }
    /**
     * Downloads the source's HTML via server-side call for the given URL.
     *
     * @since 4.2.0
     * @access public
     *
     * @param string $url URL to scan.
     * @return string Source's HTML sanitized markup
     */
    public function fetch_source_html($url)
    {
    }
    /**
     * Utility method to limit an array to 50 values.
     *
     * @ignore
     * @since 4.2.0
     *
     * @param array $value Array to limit.
     * @return array Original array if fewer than 50 values, limited array, empty array otherwise.
     */
    private function _limit_array($value)
    {
    }
    /**
     * Utility method to limit the length of a given string to 5,000 characters.
     *
     * @ignore
     * @since 4.2.0
     *
     * @param string $value String to limit.
     * @return bool|int|string If boolean or integer, that value. If a string, the original value
     *                         if fewer than 5,000 characters, a truncated version, otherwise an
     *                         empty string.
     */
    private function _limit_string($value)
    {
    }
    /**
     * Utility method to limit a given URL to 2,048 characters.
     *
     * @ignore
     * @since 4.2.0
     *
     * @param string $url URL to check for length and validity.
     * @return string Escaped URL if of valid length (< 2048) and makeup. Empty string otherwise.
     */
    private function _limit_url($url)
    {
    }
    /**
     * Utility method to limit image source URLs.
     *
     * Excluded URLs include share-this type buttons, loaders, spinners, spacers, WordPress interface images,
     * tiny buttons or thumbs, mathtag.com or quantserve.com images, or the WordPress.com stats gif.
     *
     * @ignore
     * @since 4.2.0
     *
     * @param string $src Image source URL.
     * @return string If not matched an excluded URL type, the original URL, empty string otherwise.
     */
    private function _limit_img($src)
    {
    }
    /**
     * Limit embed source URLs to specific providers.
     *
     * Not all core oEmbed providers are supported. Supported providers include YouTube, Vimeo,
     * Vine, Daily Motion, SoundCloud, and Twitter.
     *
     * @ignore
     * @since 4.2.0
     *
     * @param string $src Embed source URL.
     * @return string If not from a supported provider, an empty string. Otherwise, a reformatted embed URL.
     */
    private function _limit_embed($src)
    {
    }
    /**
     * Process a meta data entry from the source.
     *
     * @ignore
     * @since 4.2.0
     *
     * @param string $meta_name  Meta key name.
     * @param mixed  $meta_value Meta value.
     * @param array  $data       Associative array of source data.
     * @return array Processed data array.
     */
    private function _process_meta_entry($meta_name, $meta_value, $data)
    {
    }
    /**
     * Fetches and parses _meta, _images, and _links data from the source.
     *
     * @since 4.2.0
     * @access public
     *
     * @param string $url  URL to scan.
     * @param array  $data Optional. Existing data array if you have one. Default empty array.
     * @return array New data array.
     */
    public function source_data_fetch_fallback($url, $data = array())
    {
    }
    /**
     * Handles backward-compat with the legacy version of Press This by supporting its query string params.
     *
     * @since 4.2.0
     * @access public
     *
     * @return array
     */
    public function merge_or_fetch_data()
    {
    }
    /**
     * Adds another stylesheet inside TinyMCE.
     *
     * @since 4.2.0
     * @access public
     *
     * @param string $styles URL to editor stylesheet.
     * @return string Possibly modified stylesheets list.
     */
    public function add_editor_style($styles)
    {
    }
    /**
     * Outputs the post format selection HTML.
     *
     * @since 4.2.0
     * @access public
     *
     * @param WP_Post $post Post object.
     */
    public function post_formats_html($post)
    {
    }
    /**
     * Outputs the categories HTML.
     *
     * @since 4.2.0
     * @access public
     *
     * @param WP_Post $post Post object.
     */
    public function categories_html($post)
    {
    }
    /**
     * Outputs the tags HTML.
     *
     * @since 4.2.0
     * @access public
     *
     * @param WP_Post $post Post object.
     */
    public function tags_html($post)
    {
    }
    /**
     * Get a list of embeds with no duplicates.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $data The site's data.
     * @return array Embeds selected to be available.
     */
    public function get_embeds($data)
    {
    }
    /**
     * Get a list of images with no duplicates.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $data The site's data.
     * @return array
     */
    public function get_images($data)
    {
    }
    /**
     * Gets the source page's canonical link, based on passed location and meta data.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $data The site's data.
     * @return string Discovered canonical URL, or empty
     */
    public function get_canonical_link($data)
    {
    }
    /**
     * Gets the source page's site name, based on passed meta data.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $data The site's data.
     * @return string Discovered site name, or empty
     */
    public function get_source_site_name($data)
    {
    }
    /**
     * Gets the source page's title, based on passed title and meta data.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $data The site's data.
     * @return string Discovered page title, or empty
     */
    public function get_suggested_title($data)
    {
    }
    /**
     * Gets the source page's suggested content, based on passed data (description, selection, etc).
     *
     * Features a blockquoted excerpt, as well as content attribution, if any.
     *
     * @since 4.2.0
     * @access public
     *
     * @param array $data The site's data.
     * @return string Discovered content, or empty
     */
    public function get_suggested_content($data)
    {
    }
    /**
     * Serves the app's base HTML, which in turns calls the load script.
     *
     * @since 4.2.0
     * @access public
     *
     * @global WP_Locale $wp_locale
     * @global bool      $is_IE
     */
    public function html()
    {
    }
}