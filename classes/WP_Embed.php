<?php


/**
 * API for easily embedding rich media such as videos and images into content.
 *
 * @package WordPress
 * @subpackage Embed
 * @since 2.9.0
 */
class WP_Embed
{
    public $handlers = array();
    public $post_ID;
    public $usecache = \true;
    public $linkifunknown = \true;
    public $last_attr = array();
    public $last_url = '';
    /**
     * When a URL cannot be embedded, return false instead of returning a link
     * or the URL.
     *
     * Bypasses the {@see 'embed_maybe_make_link'} filter.
     *
     * @var bool
     */
    public $return_false_on_fail = \false;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Processes the [embed] shortcode.
     *
     * Since the [embed] shortcode needs to be run earlier than other shortcodes,
     * this function removes all existing shortcodes, registers the [embed] shortcode,
     * calls do_shortcode(), and then re-registers the old shortcodes.
     *
     * @global array $shortcode_tags
     *
     * @param string $content Content to parse.
     * @return string Content with shortcode parsed.
     */
    public function run_shortcode($content)
    {
    }
    /**
     * If a post/page was saved, then output JavaScript to make
     * an Ajax request that will call WP_Embed::cache_oembed().
     * @phpstan-return void
     */
    public function maybe_run_ajax_cache()
    {
    }
    /**
     * Registers an embed handler.
     *
     * Do not use this function directly, use wp_embed_register_handler() instead.
     *
     * This function should probably also only be used for sites that do not support oEmbed.
     *
     * @param string   $id       An internal ID/name for the handler. Needs to be unique.
     * @param string   $regex    The regex that will be used to see if this handler should be used for a URL.
     * @param callable $callback The callback function that will be called if the regex is matched.
     * @param int      $priority Optional. Used to specify the order in which the registered handlers will be tested.
     *                           Lower numbers correspond with earlier testing, and handlers with the same priority are
     *                           tested in the order in which they were added to the action. Default 10.
     */
    public function register_handler($id, $regex, $callback, $priority = 10)
    {
    }
    /**
     * Unregisters a previously-registered embed handler.
     *
     * Do not use this function directly, use wp_embed_unregister_handler() instead.
     *
     * @param string $id       The handler ID that should be removed.
     * @param int    $priority Optional. The priority of the handler to be removed (default: 10).
     */
    public function unregister_handler($id, $priority = 10)
    {
    }
    /**
     * Returns embed HTML for a given URL from embed handlers.
     *
     * Attempts to convert a URL into embed HTML by checking the URL
     * against the regex of the registered embed handlers.
     *
     * @since 5.5.0
     *
     * @param array  $attr {
     *     Shortcode attributes. Optional.
     *
     *     @type int $width  Width of the embed in pixels.
     *     @type int $height Height of the embed in pixels.
     * }
     * @param string $url The URL attempting to be embedded.
     * @return string|false The embed HTML on success, false otherwise.
     * @phpstan-param array{
     *   width?: int,
     *   height?: int,
     * } $attr
     */
    public function get_embed_handler_html($attr, $url)
    {
    }
    /**
     * The do_shortcode() callback function.
     *
     * Attempts to convert a URL into embed HTML. Starts by checking the URL against the regex of
     * the registered embed handlers. If none of the regex matches and it's enabled, then the URL
     * will be given to the WP_oEmbed class.
     *
     * @param array  $attr {
     *     Shortcode attributes. Optional.
     *
     *     @type int $width  Width of the embed in pixels.
     *     @type int $height Height of the embed in pixels.
     * }
     * @param string $url The URL attempting to be embedded.
     * @return string|false The embed HTML on success, otherwise the original URL.
     *                      `->maybe_make_link()` can return false on failure.
     * @phpstan-param array{
     *   width?: int,
     *   height?: int,
     * } $attr
     */
    public function shortcode($attr, $url = '')
    {
    }
    /**
     * Deletes all oEmbed caches. Unused by core as of 4.0.0.
     *
     * @param int $post_ID Post ID to delete the caches for.
     * @phpstan-return void
     */
    public function delete_oembed_caches($post_ID)
    {
    }
    /**
     * Triggers a caching of all oEmbed results.
     *
     * @param int $post_ID Post ID to do the caching for.
     * @phpstan-return void
     */
    public function cache_oembed($post_ID)
    {
    }
    /**
     * Passes any unlinked URLs that are on their own line to WP_Embed::shortcode() for potential embedding.
     *
     * @see WP_Embed::autoembed_callback()
     *
     * @param string $content The content to be searched.
     * @return string Potentially modified $content.
     */
    public function autoembed($content)
    {
    }
    /**
     * Callback function for WP_Embed::autoembed().
     *
     * @param array $matches A regex match array.
     * @return string The embed HTML on success, otherwise the original URL.
     */
    public function autoembed_callback($matches)
    {
    }
    /**
     * Conditionally makes a hyperlink based on an internal class variable.
     *
     * @param string $url URL to potentially be linked.
     * @return string|false Linked URL or the original URL. False if 'return_false_on_fail' is true.
     */
    public function maybe_make_link($url)
    {
    }
    /**
     * Finds the oEmbed cache post ID for a given cache key.
     *
     * @since 4.9.0
     *
     * @param string $cache_key oEmbed cache key.
     * @return int|null Post ID on success, null on failure.
     */
    public function find_oembed_post_id($cache_key)
    {
    }
}