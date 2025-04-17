<?php

namespace SimplePie;

/**
 * Manages all item-related data
 *
 * Used by {@see \SimplePie\SimplePie::get_item()} and {@see \SimplePie\SimplePie::get_items()}
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_item_class()}
 *
 * @package \SimplePie\SimplePie
 * @subpackage API
 */
class Item implements \SimplePie\RegistryAware
{
    /**
     * Parent feed
     *
     * @access private
     * @var \SimplePie\SimplePie
     */
    public $feed;
    /**
     * Raw data
     *
     * @access private
     * @var array
     */
    public $data = [];
    /**
     * Registry object
     *
     * @see set_registry
     * @var \SimplePie\Registry
     */
    protected $registry;
    /**
     * Create a new item object
     *
     * This is usually used by {@see \SimplePie\SimplePie::get_items} and
     * {@see \SimplePie\SimplePie::get_item}. Avoid creating this manually.
     *
     * @param \SimplePie\SimplePie $feed Parent feed
     * @param array $data Raw data
     */
    public function __construct($feed, $data)
    {
    }
    /**
     * Set the registry handler
     *
     * This is usually used by {@see \SimplePie\Registry::create}
     *
     * @since 1.3
     * @param \SimplePie\Registry $registry
     */
    public function set_registry(\SimplePie\Registry $registry)
    {
    }
    /**
     * Get a string representation of the item
     *
     * @return string
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
     * Get data for an item-level element
     *
     * This method allows you to get access to ANY element/attribute that is a
     * sub-element of the item/entry tag.
     *
     * See {@see \SimplePie\SimplePie::get_feed_tags()} for a description of the return value
     *
     * @since 1.0
     * @see http://simplepie.org/wiki/faq/supported_xml_namespaces
     * @param string $namespace The URL of the XML namespace of the elements you're trying to access
     * @param string $tag Tag name
     * @return array
     */
    public function get_item_tags($namespace, $tag)
    {
    }
    /**
     * Get the base URL value.
     * Uses `<xml:base>`, or item link, or feed base URL.
     *
     * @param array $element
     * @return string
     */
    public function get_base($element = [])
    {
    }
    /**
     * Sanitize feed data
     *
     * @access private
     * @see \SimplePie\SimplePie::sanitize()
     * @param string $data Data to sanitize
     * @param int $type One of the \SimplePie\SimplePie::CONSTRUCT_* constants
     * @param string $base Base URL to resolve URLs against
     * @return string Sanitized data
     */
    public function sanitize($data, $type, $base = '')
    {
    }
    /**
     * Get the parent feed
     *
     * Note: this may not work as you think for multifeeds!
     *
     * @link http://simplepie.org/faq/typical_multifeed_gotchas#missing_data_from_feed
     * @since 1.0
     * @return \SimplePie\SimplePie
     */
    public function get_feed()
    {
    }
    /**
     * Get the unique identifier for the item
     *
     * This is usually used when writing code to check for new items in a feed.
     *
     * Uses `<atom:id>`, `<guid>`, `<dc:identifier>` or the `about` attribute
     * for RDF. If none of these are supplied (or `$hash` is true), creates an
     * MD5 hash based on the permalink, title and content.
     *
     * @since Beta 2
     * @param boolean $hash Should we force using a hash instead of the supplied ID?
     * @param string|false $fn User-supplied function to generate an hash
     * @return string|null
     */
    public function get_id($hash = false, $fn = 'md5')
    {
    }
    /**
     * Get the title of the item
     *
     * Uses `<atom:title>`, `<title>` or `<dc:title>`
     *
     * @since Beta 2 (previously called `get_item_title` since 0.8)
     * @return string|null
     */
    public function get_title()
    {
    }
    /**
     * Get the content for the item
     *
     * Prefers summaries over full content , but will return full content if a
     * summary does not exist.
     *
     * To prefer full content instead, use {@see get_content}
     *
     * Uses `<atom:summary>`, `<description>`, `<dc:description>` or
     * `<itunes:subtitle>`
     *
     * @since 0.8
     * @param boolean $description_only Should we avoid falling back to the content?
     * @return string|null
     */
    public function get_description($description_only = false)
    {
    }
    /**
     * Get the content for the item
     *
     * Prefers full content over summaries, but will return a summary if full
     * content does not exist.
     *
     * To prefer summaries instead, use {@see get_description}
     *
     * Uses `<atom:content>` or `<content:encoded>` (RSS 1.0 Content Module)
     *
     * @since 1.0
     * @param boolean $content_only Should we avoid falling back to the description?
     * @return string|null
     */
    public function get_content($content_only = false)
    {
    }
    /**
     * Get the media:thumbnail of the item
     *
     * Uses `<media:thumbnail>`
     *
     *
     * @return array|null
     */
    public function get_thumbnail()
    {
    }
    /**
     * Get a category for the item
     *
     * @since Beta 3 (previously called `get_categories()` since Beta 2)
     * @param int $key The category that you want to return.  Remember that arrays begin with 0, not 1
     * @return \SimplePie\Category|null
     */
    public function get_category($key = 0)
    {
    }
    /**
     * Get all categories for the item
     *
     * Uses `<atom:category>`, `<category>` or `<dc:subject>`
     *
     * @since Beta 3
     * @return \SimplePie\Category[]|null List of {@see \SimplePie\Category} objects
     */
    public function get_categories()
    {
    }
    /**
     * Get an author for the item
     *
     * @since Beta 2
     * @param int $key The author that you want to return.  Remember that arrays begin with 0, not 1
     * @return \SimplePie\Author|null
     */
    public function get_author($key = 0)
    {
    }
    /**
     * Get a contributor for the item
     *
     * @since 1.1
     * @param int $key The contrbutor that you want to return.  Remember that arrays begin with 0, not 1
     * @return \SimplePie\Author|null
     */
    public function get_contributor($key = 0)
    {
    }
    /**
     * Get all contributors for the item
     *
     * Uses `<atom:contributor>`
     *
     * @since 1.1
     * @return \SimplePie\Author[]|null List of {@see \SimplePie\Author} objects
     */
    public function get_contributors()
    {
    }
    /**
     * Get all authors for the item
     *
     * Uses `<atom:author>`, `<author>`, `<dc:creator>` or `<itunes:author>`
     *
     * @since Beta 2
     * @return \SimplePie\Author[]|null List of {@see \SimplePie\Author} objects
     */
    public function get_authors()
    {
    }
    /**
     * Get the copyright info for the item
     *
     * Uses `<atom:rights>` or `<dc:rights>`
     *
     * @since 1.1
     * @return string
     */
    public function get_copyright()
    {
    }
    /**
     * Get the posting date/time for the item
     *
     * Uses `<atom:published>`, `<atom:updated>`, `<atom:issued>`,
     * `<atom:modified>`, `<pubDate>` or `<dc:date>`
     *
     * Note: obeys PHP's timezone setting. To get a UTC date/time, use
     * {@see get_gmdate}
     *
     * @since Beta 2 (previously called `get_item_date` since 0.8)
     *
     * @param string $date_format Supports any PHP date format from {@see http://php.net/date} (empty for the raw data)
     * @return int|string|null
     */
    public function get_date($date_format = 'j F Y, g:i a')
    {
    }
    /**
     * Get the update date/time for the item
     *
     * Uses `<atom:updated>`
     *
     * Note: obeys PHP's timezone setting. To get a UTC date/time, use
     * {@see get_gmdate}
     *
     * @param string $date_format Supports any PHP date format from {@see http://php.net/date} (empty for the raw data)
     * @return int|string|null
     */
    public function get_updated_date($date_format = 'j F Y, g:i a')
    {
    }
    /**
     * Get the localized posting date/time for the item
     *
     * Returns the date formatted in the localized language. To display in
     * languages other than the server's default, you need to change the locale
     * with {@link http://php.net/setlocale setlocale()}. The available
     * localizations depend on which ones are installed on your web server.
     *
     * @since 1.0
     *
     * @param string $date_format Supports any PHP date format from {@see http://php.net/strftime} (empty for the raw data)
     * @return int|string|null
     */
    public function get_local_date($date_format = '%c')
    {
    }
    /**
     * Get the posting date/time for the item (UTC time)
     *
     * @see get_date
     * @param string $date_format Supports any PHP date format from {@see http://php.net/date}
     * @return int|string|null
     */
    public function get_gmdate($date_format = 'j F Y, g:i a')
    {
    }
    /**
     * Get the update date/time for the item (UTC time)
     *
     * @see get_updated_date
     * @param string $date_format Supports any PHP date format from {@see http://php.net/date}
     * @return int|string|null
     */
    public function get_updated_gmdate($date_format = 'j F Y, g:i a')
    {
    }
    /**
     * Get the permalink for the item
     *
     * Returns the first link available with a relationship of "alternate".
     * Identical to {@see get_link()} with key 0
     *
     * @see get_link
     * @since 0.8
     * @return string|null Permalink URL
     */
    public function get_permalink()
    {
    }
    /**
     * Get a single link for the item
     *
     * @since Beta 3
     * @param int $key The link that you want to return.  Remember that arrays begin with 0, not 1
     * @param string $rel The relationship of the link to return
     * @return string|null Link URL
     */
    public function get_link($key = 0, $rel = 'alternate')
    {
    }
    /**
     * Get all links for the item
     *
     * Uses `<atom:link>`, `<link>` or `<guid>`
     *
     * @since Beta 2
     * @param string $rel The relationship of links to return
     * @return array|null Links found for the item (strings)
     */
    public function get_links($rel = 'alternate')
    {
    }
    /**
     * Get an enclosure from the item
     *
     * Supports the <enclosure> RSS tag, as well as Media RSS and iTunes RSS.
     *
     * @since Beta 2
     * @todo Add ability to prefer one type of content over another (in a media group).
     * @param int $key The enclosure that you want to return.  Remember that arrays begin with 0, not 1
     * @return \SimplePie\Enclosure|null
     */
    public function get_enclosure($key = 0, $prefer = null)
    {
    }
    /**
     * Get all available enclosures (podcasts, etc.)
     *
     * Supports the <enclosure> RSS tag, as well as Media RSS and iTunes RSS.
     *
     * At this point, we're pretty much assuming that all enclosures for an item
     * are the same content.  Anything else is too complicated to
     * properly support.
     *
     * @since Beta 2
     * @todo Add support for end-user defined sorting of enclosures by type/handler (so we can prefer the faster-loading FLV over MP4).
     * @todo If an element exists at a level, but its value is empty, we should fall back to the value from the parent (if it exists).
     * @return \SimplePie\Enclosure[]|null List of \SimplePie\Enclosure items
     */
    public function get_enclosures()
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
     * Get the longitude coordinates for the item
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
     * Get the `<atom:source>` for the item
     *
     * @since 1.1
     * @return \SimplePie\Source|null
     */
    public function get_source()
    {
    }
}