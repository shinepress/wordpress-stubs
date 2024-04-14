<?php


/**
 * SimplePie
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie
{
    /**
     * @var array Raw data
     * @access private
     */
    public $data = array();
    /**
     * @var mixed Error string
     * @access private
     */
    public $error;
    /**
     * @var int HTTP status code
     * @see SimplePie::status_code()
     * @access private
     */
    public $status_code;
    /**
     * @var object Instance of SimplePie_Sanitize (or other class)
     * @see SimplePie::set_sanitize_class()
     * @access private
     */
    public $sanitize;
    /**
     * @var string SimplePie Useragent
     * @see SimplePie::set_useragent()
     * @access private
     */
    public $useragent = \SIMPLEPIE_USERAGENT;
    /**
     * @var string Feed URL
     * @see SimplePie::set_feed_url()
     * @access private
     */
    public $feed_url;
    /**
     * @var string Original feed URL, or new feed URL iff HTTP 301 Moved Permanently
     * @see SimplePie::subscribe_url()
     * @access private
     */
    public $permanent_url = \null;
    /**
     * @var object Instance of SimplePie_File to use as a feed
     * @see SimplePie::set_file()
     * @access private
     */
    public $file;
    /**
     * @var string Raw feed data
     * @see SimplePie::set_raw_data()
     * @access private
     */
    public $raw_data;
    /**
     * @var int Timeout for fetching remote files
     * @see SimplePie::set_timeout()
     * @access private
     */
    public $timeout = 10;
    /**
     * @var array Custom curl options
     * @see SimplePie::set_curl_options()
     * @access private
     */
    public $curl_options = array();
    /**
     * @var bool Forces fsockopen() to be used for remote files instead
     * of cURL, even if a new enough version is installed
     * @see SimplePie::force_fsockopen()
     * @access private
     */
    public $force_fsockopen = \false;
    /**
     * @var bool Force the given data/URL to be treated as a feed no matter what
     * it appears like
     * @see SimplePie::force_feed()
     * @access private
     */
    public $force_feed = \false;
    /**
     * @var bool Enable/Disable Caching
     * @see SimplePie::enable_cache()
     * @access private
     */
    public $cache = \true;
    /**
     * @var bool Force SimplePie to fallback to expired cache, if enabled,
     * when feed is unavailable.
     * @see SimplePie::force_cache_fallback()
     * @access private
     */
    public $force_cache_fallback = \false;
    /**
     * @var int Cache duration (in seconds)
     * @see SimplePie::set_cache_duration()
     * @access private
     */
    public $cache_duration = 3600;
    /**
     * @var int Auto-discovery cache duration (in seconds)
     * @see SimplePie::set_autodiscovery_cache_duration()
     * @access private
     */
    public $autodiscovery_cache_duration = 604800;
    // 7 Days.
    /**
     * @var string Cache location (relative to executing script)
     * @see SimplePie::set_cache_location()
     * @access private
     */
    public $cache_location = './cache';
    /**
     * @var string Function that creates the cache filename
     * @see SimplePie::set_cache_name_function()
     * @access private
     */
    public $cache_name_function = 'md5';
    /**
     * @var bool Reorder feed by date descending
     * @see SimplePie::enable_order_by_date()
     * @access private
     */
    public $order_by_date = \true;
    /**
     * @var mixed Force input encoding to be set to the follow value
     * (false, or anything type-cast to false, disables this feature)
     * @see SimplePie::set_input_encoding()
     * @access private
     */
    public $input_encoding = \false;
    /**
     * @var int Feed Autodiscovery Level
     * @see SimplePie::set_autodiscovery_level()
     * @access private
     */
    public $autodiscovery = \SIMPLEPIE_LOCATOR_ALL;
    /**
     * Class registry object
     *
     * @var SimplePie_Registry
     */
    public $registry;
    /**
     * @var int Maximum number of feeds to check with autodiscovery
     * @see SimplePie::set_max_checked_feeds()
     * @access private
     */
    public $max_checked_feeds = 10;
    /**
     * @var array All the feeds found during the autodiscovery process
     * @see SimplePie::get_all_discovered_feeds()
     * @access private
     */
    public $all_discovered_feeds = array();
    /**
     * @var string Web-accessible path to the handler_image.php file.
     * @see SimplePie::set_image_handler()
     * @access private
     */
    public $image_handler = '';
    /**
     * @var array Stores the URLs when multiple feeds are being initialized.
     * @see SimplePie::set_feed_url()
     * @access private
     */
    public $multifeed_url = array();
    /**
     * @var array Stores SimplePie objects when multiple feeds initialized.
     * @access private
     */
    public $multifeed_objects = array();
    /**
     * @var array Stores the get_object_vars() array for use with multifeeds.
     * @see SimplePie::set_feed_url()
     * @access private
     */
    public $config_settings = \null;
    /**
     * @var integer Stores the number of items to return per-feed with multifeeds.
     * @see SimplePie::set_item_limit()
     * @access private
     */
    public $item_limit = 0;
    /**
     * @var bool Stores if last-modified and/or etag headers were sent with the
     * request when checking a feed.
     */
    public $check_modified = \false;
    /**
     * @var array Stores the default attributes to be stripped by strip_attributes().
     * @see SimplePie::strip_attributes()
     * @access private
     */
    public $strip_attributes = array('bgsound', 'class', 'expr', 'id', 'style', 'onclick', 'onerror', 'onfinish', 'onmouseover', 'onmouseout', 'onfocus', 'onblur', 'lowsrc', 'dynsrc');
    /**
     * @var array Stores the default attributes to add to different tags by add_attributes().
     * @see SimplePie::add_attributes()
     * @access private
     */
    public $add_attributes = array('audio' => array('preload' => 'none'), 'iframe' => array('sandbox' => 'allow-scripts allow-same-origin'), 'video' => array('preload' => 'none'));
    /**
     * @var array Stores the default tags to be stripped by strip_htmltags().
     * @see SimplePie::strip_htmltags()
     * @access private
     */
    public $strip_htmltags = array('base', 'blink', 'body', 'doctype', 'embed', 'font', 'form', 'frame', 'frameset', 'html', 'iframe', 'input', 'marquee', 'meta', 'noscript', 'object', 'param', 'script', 'style');
    /**
     * @var bool Should we throw exceptions, or use the old-style error property?
     * @access private
     */
    public $enable_exceptions = \false;
    /**
     * The SimplePie class contains feed level data and options
     *
     * To use SimplePie, create the SimplePie object with no parameters. You can
     * then set configuration options using the provided methods. After setting
     * them, you must initialise the feed using $feed->init(). At that point the
     * object's methods and properties will be available to you.
     *
     * Previously, it was possible to pass in the feed URL along with cache
     * options directly into the constructor. This has been removed as of 1.3 as
     * it caused a lot of confusion.
     *
     * @since 1.0 Preview Release
     */
    public function __construct()
    {
    }
    /**
     * Used for converting object to a string
     */
    public function __toString()
    {
    }
    /**
     * Remove items that link back to this before destroying this object
     */
    public function __destruct()
    {
    }
    /**
     * Force the given data/URL to be treated as a feed
     *
     * This tells SimplePie to ignore the content-type provided by the server.
     * Be careful when using this option, as it will also disable autodiscovery.
     *
     * @since 1.1
     * @param bool $enable Force the given data/URL to be treated as a feed
     */
    public function force_feed($enable = \false)
    {
    }
    /**
     * Set the URL of the feed you want to parse
     *
     * This allows you to enter the URL of the feed you want to parse, or the
     * website you want to try to use auto-discovery on. This takes priority
     * over any set raw data.
     *
     * You can set multiple feeds to mash together by passing an array instead
     * of a string for the $url. Remember that with each additional feed comes
     * additional processing and resources.
     *
     * @since 1.0 Preview Release
     * @see set_raw_data()
     * @param string|array $url This is the URL (or array of URLs) that you want to parse.
     */
    public function set_feed_url($url)
    {
    }
    /**
     * Set an instance of {@see SimplePie_File} to use as a feed
     *
     * @param SimplePie_File &$file
     * @return bool True on success, false on failure
     */
    public function set_file(&$file)
    {
    }
    /**
     * Set the raw XML data to parse
     *
     * Allows you to use a string of RSS/Atom data instead of a remote feed.
     *
     * If you have a feed available as a string in PHP, you can tell SimplePie
     * to parse that data string instead of a remote feed. Any set feed URL
     * takes precedence.
     *
     * @since 1.0 Beta 3
     * @param string $data RSS or Atom data as a string.
     * @see set_feed_url()
     */
    public function set_raw_data($data)
    {
    }
    /**
     * Set the default timeout for fetching remote feeds
     *
     * This allows you to change the maximum time the feed's server to respond
     * and send the feed back.
     *
     * @since 1.0 Beta 3
     * @param int $timeout The maximum number of seconds to spend waiting to retrieve a feed.
     */
    public function set_timeout($timeout = 10)
    {
    }
    /**
     * Set custom curl options
     *
     * This allows you to change default curl options
     *
     * @since 1.0 Beta 3
     * @param array $curl_options Curl options to add to default settings
     */
    public function set_curl_options(array $curl_options = array())
    {
    }
    /**
     * Force SimplePie to use fsockopen() instead of cURL
     *
     * @since 1.0 Beta 3
     * @param bool $enable Force fsockopen() to be used
     */
    public function force_fsockopen($enable = \false)
    {
    }
    /**
     * Enable/disable caching in SimplePie.
     *
     * This option allows you to disable caching all-together in SimplePie.
     * However, disabling the cache can lead to longer load times.
     *
     * @since 1.0 Preview Release
     * @param bool $enable Enable caching
     */
    public function enable_cache($enable = \true)
    {
    }
    /**
     * SimplePie to continue to fall back to expired cache, if enabled, when
     * feed is unavailable.
     *
     * This tells SimplePie to ignore any file errors and fall back to cache
     * instead. This only works if caching is enabled and cached content
     * still exists.
     * @param bool $enable Force use of cache on fail.
     */
    public function force_cache_fallback($enable = \false)
    {
    }
    /**
     * Set the length of time (in seconds) that the contents of a feed will be
     * cached
     *
     * @param int $seconds The feed content cache duration
     */
    public function set_cache_duration($seconds = 3600)
    {
    }
    /**
     * Set the length of time (in seconds) that the autodiscovered feed URL will
     * be cached
     *
     * @param int $seconds The autodiscovered feed URL cache duration.
     */
    public function set_autodiscovery_cache_duration($seconds = 604800)
    {
    }
    /**
     * Set the file system location where the cached files should be stored
     *
     * @param string $location The file system location.
     */
    public function set_cache_location($location = './cache')
    {
    }
    /**
     * Return the filename (i.e. hash, without path and without extension) of the file to cache a given URL.
     * @param string $url The URL of the feed to be cached.
     * @return string A filename (i.e. hash, without path and without extension).
     */
    public function get_cache_filename($url)
    {
    }
    /**
     * Set whether feed items should be sorted into reverse chronological order
     *
     * @param bool $enable Sort as reverse chronological order.
     */
    public function enable_order_by_date($enable = \true)
    {
    }
    /**
     * Set the character encoding used to parse the feed
     *
     * This overrides the encoding reported by the feed, however it will fall
     * back to the normal encoding detection if the override fails
     *
     * @param string $encoding Character encoding
     */
    public function set_input_encoding($encoding = \false)
    {
    }
    /**
     * Set how much feed autodiscovery to do
     *
     * @see SIMPLEPIE_LOCATOR_NONE
     * @see SIMPLEPIE_LOCATOR_AUTODISCOVERY
     * @see SIMPLEPIE_LOCATOR_LOCAL_EXTENSION
     * @see SIMPLEPIE_LOCATOR_LOCAL_BODY
     * @see SIMPLEPIE_LOCATOR_REMOTE_EXTENSION
     * @see SIMPLEPIE_LOCATOR_REMOTE_BODY
     * @see SIMPLEPIE_LOCATOR_ALL
     * @param int $level Feed Autodiscovery Level (level can be a combination of the above constants, see bitwise OR operator)
     */
    public function set_autodiscovery_level($level = \SIMPLEPIE_LOCATOR_ALL)
    {
    }
    /**
     * Get the class registry
     *
     * Use this to override SimplePie's default classes
     * @see SimplePie_Registry
     * @return SimplePie_Registry
     */
    public function &get_registry()
    {
    }
    /**#@+
     * Useful when you are overloading or extending SimplePie's default classes.
     *
     * @deprecated Use {@see get_registry()} instead
     * @link http://php.net/manual/en/language.oop5.basic.php#language.oop5.basic.extends PHP5 extends documentation
     * @param string $class Name of custom class
     * @return boolean True on success, false otherwise
     */
    /**
     * Set which class SimplePie uses for caching
     */
    public function set_cache_class($class = 'SimplePie_Cache')
    {
    }
    /**
     * Set which class SimplePie uses for auto-discovery
     */
    public function set_locator_class($class = 'SimplePie_Locator')
    {
    }
    /**
     * Set which class SimplePie uses for XML parsing
     */
    public function set_parser_class($class = 'SimplePie_Parser')
    {
    }
    /**
     * Set which class SimplePie uses for remote file fetching
     */
    public function set_file_class($class = 'SimplePie_File')
    {
    }
    /**
     * Set which class SimplePie uses for data sanitization
     */
    public function set_sanitize_class($class = 'SimplePie_Sanitize')
    {
    }
    /**
     * Set which class SimplePie uses for handling feed items
     */
    public function set_item_class($class = 'SimplePie_Item')
    {
    }
    /**
     * Set which class SimplePie uses for handling author data
     */
    public function set_author_class($class = 'SimplePie_Author')
    {
    }
    /**
     * Set which class SimplePie uses for handling category data
     */
    public function set_category_class($class = 'SimplePie_Category')
    {
    }
    /**
     * Set which class SimplePie uses for feed enclosures
     */
    public function set_enclosure_class($class = 'SimplePie_Enclosure')
    {
    }
    /**
     * Set which class SimplePie uses for `<media:text>` captions
     */
    public function set_caption_class($class = 'SimplePie_Caption')
    {
    }
    /**
     * Set which class SimplePie uses for `<media:copyright>`
     */
    public function set_copyright_class($class = 'SimplePie_Copyright')
    {
    }
    /**
     * Set which class SimplePie uses for `<media:credit>`
     */
    public function set_credit_class($class = 'SimplePie_Credit')
    {
    }
    /**
     * Set which class SimplePie uses for `<media:rating>`
     */
    public function set_rating_class($class = 'SimplePie_Rating')
    {
    }
    /**
     * Set which class SimplePie uses for `<media:restriction>`
     */
    public function set_restriction_class($class = 'SimplePie_Restriction')
    {
    }
    /**
     * Set which class SimplePie uses for content-type sniffing
     */
    public function set_content_type_sniffer_class($class = 'SimplePie_Content_Type_Sniffer')
    {
    }
    /**
     * Set which class SimplePie uses item sources
     */
    public function set_source_class($class = 'SimplePie_Source')
    {
    }
    /**#@-*/
    /**
     * Set the user agent string
     *
     * @param string $ua New user agent string.
     */
    public function set_useragent($ua = \SIMPLEPIE_USERAGENT)
    {
    }
    /**
     * Set callback function to create cache filename with
     *
     * @param mixed $function Callback function
     */
    public function set_cache_name_function($function = 'md5')
    {
    }
    /**
     * Set options to make SimplePie as fast as possible.
     *
     * Forgoes a substantial amount of data sanitization in favor of speed.
     * This turns SimplePie into a less clever parser of feeds.
     *
     * @param bool $set Whether to set them or not.
     */
    public function set_stupidly_fast($set = \false)
    {
    }
    /**
     * Set maximum number of feeds to check with autodiscovery
     *
     * @param int $max Maximum number of feeds to check
     */
    public function set_max_checked_feeds($max = 10)
    {
    }
    public function remove_div($enable = \true)
    {
    }
    public function strip_htmltags($tags = '', $encode = \null)
    {
    }
    public function encode_instead_of_strip($enable = \true)
    {
    }
    public function strip_attributes($attribs = '')
    {
    }
    public function add_attributes($attribs = '')
    {
    }
    /**
     * Set the output encoding
     *
     * Allows you to override SimplePie's output to match that of your webpage.
     * This is useful for times when your webpages are not being served as
     * UTF-8. This setting will be obeyed by {@see handle_content_type()}, and
     * is similar to {@see set_input_encoding()}.
     *
     * It should be noted, however, that not all character encodings can support
     * all characters. If your page is being served as ISO-8859-1 and you try
     * to display a Japanese feed, you'll likely see garbled characters.
     * Because of this, it is highly recommended to ensure that your webpages
     * are served as UTF-8.
     *
     * The number of supported character encodings depends on whether your web
     * host supports {@link http://php.net/mbstring mbstring},
     * {@link http://php.net/iconv iconv}, or both. See
     * {@link http://simplepie.org/wiki/faq/Supported_Character_Encodings} for
     * more information.
     *
     * @param string $encoding
     */
    public function set_output_encoding($encoding = 'UTF-8')
    {
    }
    public function strip_comments($strip = \false)
    {
    }
    /**
     * Set element/attribute key/value pairs of HTML attributes
     * containing URLs that need to be resolved relative to the feed
     *
     * Defaults to |a|@href, |area|@href, |blockquote|@cite, |del|@cite,
     * |form|@action, |img|@longdesc, |img|@src, |input|@src, |ins|@cite,
     * |q|@cite
     *
     * @since 1.0
     * @param array|null $element_attribute Element/attribute key/value pairs, null for default
     */
    public function set_url_replacements($element_attribute = \null)
    {
    }
    /**
     * Set the list of domains for which to force HTTPS.
     * @see SimplePie_Sanitize::set_https_domains()
     * @param array List of HTTPS domains. Example array('biz', 'example.com', 'example.org', 'www.example.net').
     */
    public function set_https_domains($domains = array())
    {
    }
    /**
     * Set the handler to enable the display of cached images.
     *
     * @param string $page Web-accessible path to the handler_image.php file.
     * @param string $qs The query string that the value should be passed to.
     */
    public function set_image_handler($page = \false, $qs = 'i')
    {
    }
    /**
     * Set the limit for items returned per-feed with multifeeds
     *
     * @param integer $limit The maximum number of items to return.
     */
    public function set_item_limit($limit = 0)
    {
    }
    /**
     * Enable throwing exceptions
     *
     * @param boolean $enable Should we throw exceptions, or use the old-style error property?
     */
    public function enable_exceptions($enable = \true)
    {
    }
    /**
     * Initialize the feed object
     *
     * This is what makes everything happen. Period. This is where all of the
     * configuration options get processed, feeds are fetched, cached, and
     * parsed, and all of that other good stuff.
     *
     * @return boolean True if successful, false otherwise
     */
    public function init()
    {
    }
    /**
     * Fetch the data via SimplePie_File
     *
     * If the data is already cached, attempt to fetch it from there instead
     * @param SimplePie_Cache_Base|false $cache Cache handler, or false to not load from the cache
     * @return array|true Returns true if the data was loaded from the cache, or an array of HTTP headers and sniffed type
     */
    protected function fetch_data(&$cache)
    {
    }
    /**
     * Get the error message for the occurred error
     *
     * @return string|array Error message, or array of messages for multifeeds
     */
    public function error()
    {
    }
    /**
     * Get the last HTTP status code
     *
     * @return int Status code
     */
    public function status_code()
    {
    }
    /**
     * Get the raw XML
     *
     * This is the same as the old `$feed->enable_xml_dump(true)`, but returns
     * the data instead of printing it.
     *
     * @return string|boolean Raw XML data, false if the cache is used
     */
    public function get_raw_data()
    {
    }
    /**
     * Get the character encoding used for output
     *
     * @since Preview Release
     * @return string
     */
    public function get_encoding()
    {
    }
    /**
     * Send the Content-Type header with correct encoding
     *
     * This method ensures that the SimplePie-enabled page is being served with
     * the correct {@link http://www.iana.org/assignments/media-types/ mime-type}
     * and character encoding HTTP headers (character encoding determined by the
     * {@see set_output_encoding} config option).
     *
     * This won't work properly if any content or whitespace has already been
     * sent to the browser, because it relies on PHP's
     * {@link http://php.net/header header()} function, and these are the
     * circumstances under which the function works.
     *
     * Because it's setting these settings for the entire page (as is the nature
     * of HTTP headers), this should only be used once per page (again, at the
     * top).
     *
     * @param string $mime MIME type to serve the page as
     */
    public function handle_content_type($mime = 'text/html')
    {
    }
    /**
     * Get the type of the feed
     *
     * This returns a SIMPLEPIE_TYPE_* constant, which can be tested against
     * using {@link http://php.net/language.operators.bitwise bitwise operators}
     *
     * @since 0.8 (usage changed to using constants in 1.0)
     * @see SIMPLEPIE_TYPE_NONE Unknown.
     * @see SIMPLEPIE_TYPE_RSS_090 RSS 0.90.
     * @see SIMPLEPIE_TYPE_RSS_091_NETSCAPE RSS 0.91 (Netscape).
     * @see SIMPLEPIE_TYPE_RSS_091_USERLAND RSS 0.91 (Userland).
     * @see SIMPLEPIE_TYPE_RSS_091 RSS 0.91.
     * @see SIMPLEPIE_TYPE_RSS_092 RSS 0.92.
     * @see SIMPLEPIE_TYPE_RSS_093 RSS 0.93.
     * @see SIMPLEPIE_TYPE_RSS_094 RSS 0.94.
     * @see SIMPLEPIE_TYPE_RSS_10 RSS 1.0.
     * @see SIMPLEPIE_TYPE_RSS_20 RSS 2.0.x.
     * @see SIMPLEPIE_TYPE_RSS_RDF RDF-based RSS.
     * @see SIMPLEPIE_TYPE_RSS_SYNDICATION Non-RDF-based RSS (truly intended as syndication format).
     * @see SIMPLEPIE_TYPE_RSS_ALL Any version of RSS.
     * @see SIMPLEPIE_TYPE_ATOM_03 Atom 0.3.
     * @see SIMPLEPIE_TYPE_ATOM_10 Atom 1.0.
     * @see SIMPLEPIE_TYPE_ATOM_ALL Any version of Atom.
     * @see SIMPLEPIE_TYPE_ALL Any known/supported feed type.
     * @return int SIMPLEPIE_TYPE_* constant
     */
    public function get_type()
    {
    }
    /**
     * Get the URL for the feed
     *
     * When the 'permanent' mode is enabled, returns the original feed URL,
     * except in the case of an `HTTP 301 Moved Permanently` status response,
     * in which case the location of the first redirection is returned.
     *
     * When the 'permanent' mode is disabled (default),
     * may or may not be different from the URL passed to {@see set_feed_url()},
     * depending on whether auto-discovery was used, and whether there were
     * any redirects along the way.
     *
     * @since Preview Release (previously called `get_feed_url()` since SimplePie 0.8.)
     * @todo Support <itunes:new-feed-url>
     * @todo Also, |atom:link|@rel=self
     * @param bool $permanent Permanent mode to return only the original URL or the first redirection
     * iff it is a 301 redirection
     * @return string|null
     */
    public function subscribe_url($permanent = \false)
    {
    }
    /**
     * Get data for an feed-level element
     *
     * This method allows you to get access to ANY element/attribute that is a
     * sub-element of the opening feed tag.
     *
     * The return value is an indexed array of elements matching the given
     * namespace and tag name. Each element has `attribs`, `data` and `child`
     * subkeys. For `attribs` and `child`, these contain namespace subkeys.
     * `attribs` then has one level of associative name => value data (where
     * `value` is a string) after the namespace. `child` has tag-indexed keys
     * after the namespace, each member of which is an indexed array matching
     * this same format.
     *
     * For example:
     * <pre>
     * // This is probably a bad example because we already support
     * // <media:content> natively, but it shows you how to parse through
     * // the nodes.
     * $group = $item->get_item_tags(SIMPLEPIE_NAMESPACE_MEDIARSS, 'group');
     * $content = $group[0]['child'][SIMPLEPIE_NAMESPACE_MEDIARSS]['content'];
     * $file = $content[0]['attribs']['']['url'];
     * echo $file;
     * </pre>
     *
     * @since 1.0
     * @see http://simplepie.org/wiki/faq/supported_xml_namespaces
     * @param string $namespace The URL of the XML namespace of the elements you're trying to access
     * @param string $tag Tag name
     * @return array
     */
    public function get_feed_tags($namespace, $tag)
    {
    }
    /**
     * Get data for an channel-level element
     *
     * This method allows you to get access to ANY element/attribute in the
     * channel/header section of the feed.
     *
     * See {@see SimplePie::get_feed_tags()} for a description of the return value
     *
     * @since 1.0
     * @see http://simplepie.org/wiki/faq/supported_xml_namespaces
     * @param string $namespace The URL of the XML namespace of the elements you're trying to access
     * @param string $tag Tag name
     * @return array
     */
    public function get_channel_tags($namespace, $tag)
    {
    }
    /**
     * Get data for an channel-level element
     *
     * This method allows you to get access to ANY element/attribute in the
     * image/logo section of the feed.
     *
     * See {@see SimplePie::get_feed_tags()} for a description of the return value
     *
     * @since 1.0
     * @see http://simplepie.org/wiki/faq/supported_xml_namespaces
     * @param string $namespace The URL of the XML namespace of the elements you're trying to access
     * @param string $tag Tag name
     * @return array
     */
    public function get_image_tags($namespace, $tag)
    {
    }
    /**
     * Get the base URL value from the feed
     *
     * Uses `<xml:base>` if available, otherwise uses the first link in the
     * feed, or failing that, the URL of the feed itself.
     *
     * @see get_link
     * @see subscribe_url
     *
     * @param array $element
     * @return string
     */
    public function get_base($element = array())
    {
    }
    /**
     * Sanitize feed data
     *
     * @access private
     * @see SimplePie_Sanitize::sanitize()
     * @param string $data Data to sanitize
     * @param int $type One of the SIMPLEPIE_CONSTRUCT_* constants
     * @param string $base Base URL to resolve URLs against
     * @return string Sanitized data
     */
    public function sanitize($data, $type, $base = '')
    {
    }
    /**
     * Get the title of the feed
     *
     * Uses `<atom:title>`, `<title>` or `<dc:title>`
     *
     * @since 1.0 (previously called `get_feed_title` since 0.8)
     * @return string|null
     */
    public function get_title()
    {
    }
    /**
     * Get a category for the feed
     *
     * @since Unknown
     * @param int $key The category that you want to return. Remember that arrays begin with 0, not 1
     * @return SimplePie_Category|null
     */
    public function get_category($key = 0)
    {
    }
    /**
     * Get all categories for the feed
     *
     * Uses `<atom:category>`, `<category>` or `<dc:subject>`
     *
     * @since Unknown
     * @return array|null List of {@see SimplePie_Category} objects
     */
    public function get_categories()
    {
    }
    /**
     * Get an author for the feed
     *
     * @since 1.1
     * @param int $key The author that you want to return. Remember that arrays begin with 0, not 1
     * @return SimplePie_Author|null
     */
    public function get_author($key = 0)
    {
    }
    /**
     * Get all authors for the feed
     *
     * Uses `<atom:author>`, `<author>`, `<dc:creator>` or `<itunes:author>`
     *
     * @since 1.1
     * @return array|null List of {@see SimplePie_Author} objects
     */
    public function get_authors()
    {
    }
    /**
     * Get a contributor for the feed
     *
     * @since 1.1
     * @param int $key The contrbutor that you want to return. Remember that arrays begin with 0, not 1
     * @return SimplePie_Author|null
     */
    public function get_contributor($key = 0)
    {
    }
    /**
     * Get all contributors for the feed
     *
     * Uses `<atom:contributor>`
     *
     * @since 1.1
     * @return array|null List of {@see SimplePie_Author} objects
     */
    public function get_contributors()
    {
    }
    /**
     * Get a single link for the feed
     *
     * @since 1.0 (previously called `get_feed_link` since Preview Release, `get_feed_permalink()` since 0.8)
     * @param int $key The link that you want to return. Remember that arrays begin with 0, not 1
     * @param string $rel The relationship of the link to return
     * @return string|null Link URL
     */
    public function get_link($key = 0, $rel = 'alternate')
    {
    }
    /**
     * Get the permalink for the item
     *
     * Returns the first link available with a relationship of "alternate".
     * Identical to {@see get_link()} with key 0
     *
     * @see get_link
     * @since 1.0 (previously called `get_feed_link` since Preview Release, `get_feed_permalink()` since 0.8)
     * @internal Added for parity between the parent-level and the item/entry-level.
     * @return string|null Link URL
     */
    public function get_permalink()
    {
    }
    /**
     * Get all links for the feed
     *
     * Uses `<atom:link>` or `<link>`
     *
     * @since Beta 2
     * @param string $rel The relationship of links to return
     * @return array|null Links found for the feed (strings)
     */
    public function get_links($rel = 'alternate')
    {
    }
    public function get_all_discovered_feeds()
    {
    }
    /**
     * Get the content for the item
     *
     * Uses `<atom:subtitle>`, `<atom:tagline>`, `<description>`,
     * `<dc:description>`, `<itunes:summary>` or `<itunes:subtitle>`
     *
     * @since 1.0 (previously called `get_feed_description()` since 0.8)
     * @return string|null
     */
    public function get_description()
    {
    }
    /**
     * Get the copyright info for the feed
     *
     * Uses `<atom:rights>`, `<atom:copyright>` or `<dc:rights>`
     *
     * @since 1.0 (previously called `get_feed_copyright()` since 0.8)
     * @return string|null
     */
    public function get_copyright()
    {
    }
    /**
     * Get the language for the feed
     *
     * Uses `<language>`, `<dc:language>`, or @xml_lang
     *
     * @since 1.0 (previously called `get_feed_language()` since 0.8)
     * @return string|null
     */
    public function get_language()
    {
    }
    /**
     * Get the latitude coordinates for the item
     *
     * Compatible with the W3C WGS84 Basic Geo and GeoRSS specifications
     *
     * Uses `<geo:lat>` or `<georss:point>`
     *
     * @since 1.0
     * @link http://www.w3.org/2003/01/geo/ W3C WGS84 Basic Geo
     * @link http://www.georss.org/ GeoRSS
     * @return string|null
     */
    public function get_latitude()
    {
    }
    /**
     * Get the longitude coordinates for the feed
     *
     * Compatible with the W3C WGS84 Basic Geo and GeoRSS specifications
     *
     * Uses `<geo:long>`, `<geo:lon>` or `<georss:point>`
     *
     * @since 1.0
     * @link http://www.w3.org/2003/01/geo/ W3C WGS84 Basic Geo
     * @link http://www.georss.org/ GeoRSS
     * @return string|null
     */
    public function get_longitude()
    {
    }
    /**
     * Get the feed logo's title
     *
     * RSS 0.9.0, 1.0 and 2.0 feeds are allowed to have a "feed logo" title.
     *
     * Uses `<image><title>` or `<image><dc:title>`
     *
     * @return string|null
     */
    public function get_image_title()
    {
    }
    /**
     * Get the feed logo's URL
     *
     * RSS 0.9.0, 2.0, Atom 1.0, and feeds with iTunes RSS tags are allowed to
     * have a "feed logo" URL. This points directly to the image itself.
     *
     * Uses `<itunes:image>`, `<atom:logo>`, `<atom:icon>`,
     * `<image><title>` or `<image><dc:title>`
     *
     * @return string|null
     */
    public function get_image_url()
    {
    }
    /**
     * Get the feed logo's link
     *
     * RSS 0.9.0, 1.0 and 2.0 feeds are allowed to have a "feed logo" link. This
     * points to a human-readable page that the image should link to.
     *
     * Uses `<itunes:image>`, `<atom:logo>`, `<atom:icon>`,
     * `<image><title>` or `<image><dc:title>`
     *
     * @return string|null
     */
    public function get_image_link()
    {
    }
    /**
     * Get the feed logo's link
     *
     * RSS 2.0 feeds are allowed to have a "feed logo" width.
     *
     * Uses `<image><width>` or defaults to 88.0 if no width is specified and
     * the feed is an RSS 2.0 feed.
     *
     * @return int|float|null
     */
    public function get_image_width()
    {
    }
    /**
     * Get the feed logo's height
     *
     * RSS 2.0 feeds are allowed to have a "feed logo" height.
     *
     * Uses `<image><height>` or defaults to 31.0 if no height is specified and
     * the feed is an RSS 2.0 feed.
     *
     * @return int|float|null
     */
    public function get_image_height()
    {
    }
    /**
     * Get the number of items in the feed
     *
     * This is well-suited for {@link http://php.net/for for()} loops with
     * {@see get_item()}
     *
     * @param int $max Maximum value to return. 0 for no limit
     * @return int Number of items in the feed
     */
    public function get_item_quantity($max = 0)
    {
    }
    /**
     * Get a single item from the feed
     *
     * This is better suited for {@link http://php.net/for for()} loops, whereas
     * {@see get_items()} is better suited for
     * {@link http://php.net/foreach foreach()} loops.
     *
     * @see get_item_quantity()
     * @since Beta 2
     * @param int $key The item that you want to return. Remember that arrays begin with 0, not 1
     * @return SimplePie_Item|null
     */
    public function get_item($key = 0)
    {
    }
    /**
     * Get all items from the feed
     *
     * This is better suited for {@link http://php.net/for for()} loops, whereas
     * {@see get_items()} is better suited for
     * {@link http://php.net/foreach foreach()} loops.
     *
     * @see get_item_quantity
     * @since Beta 2
     * @param int $start Index to start at
     * @param int $end Number of items to return. 0 for all items after `$start`
     * @return SimplePie_Item[]|null List of {@see SimplePie_Item} objects
     */
    public function get_items($start = 0, $end = 0)
    {
    }
    /**
     * Set the favicon handler
     *
     * @deprecated Use your own favicon handling instead
     */
    public function set_favicon_handler($page = \false, $qs = 'i')
    {
    }
    /**
     * Get the favicon for the current feed
     *
     * @deprecated Use your own favicon handling instead
     */
    public function get_favicon()
    {
    }
    /**
     * Magic method handler
     *
     * @param string $method Method name
     * @param array $args Arguments to the method
     * @return mixed
     */
    public function __call($method, $args)
    {
    }
    /**
     * Sorting callback for items
     *
     * @access private
     * @param SimplePie $a
     * @param SimplePie $b
     * @return boolean
     */
    public static function sort_items($a, $b)
    {
    }
    /**
     * Merge items from several feeds into one
     *
     * If you're merging multiple feeds together, they need to all have dates
     * for the items or else SimplePie will refuse to sort them.
     *
     * @link http://simplepie.org/wiki/tutorial/sort_multiple_feeds_by_time_and_date#if_feeds_require_separate_per-feed_settings
     * @param array $urls List of SimplePie feed objects to merge
     * @param int $start Starting item
     * @param int $end Number of items to return
     * @param int $limit Maximum number of items per feed
     * @return array
     */
    public static function merge_items($urls, $start = 0, $end = 0, $limit = 0)
    {
    }
}