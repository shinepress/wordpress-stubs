<?php

namespace SimplePie;

/**
 * Handles everything related to enclosures (including Media RSS and iTunes RSS)
 *
 * Used by {@see \SimplePie\Item::get_enclosure()} and {@see \SimplePie\Item::get_enclosures()}
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_enclosure_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class Enclosure
{
    /**
     * @var string
     * @see get_bitrate()
     */
    public $bitrate;
    /**
     * @var array
     * @see get_captions()
     */
    public $captions;
    /**
     * @var array
     * @see get_categories()
     */
    public $categories;
    /**
     * @var int
     * @see get_channels()
     */
    public $channels;
    /**
     * @var \SimplePie\Copyright
     * @see get_copyright()
     */
    public $copyright;
    /**
     * @var array
     * @see get_credits()
     */
    public $credits;
    /**
     * @var string
     * @see get_description()
     */
    public $description;
    /**
     * @var int
     * @see get_duration()
     */
    public $duration;
    /**
     * @var string
     * @see get_expression()
     */
    public $expression;
    /**
     * @var string
     * @see get_framerate()
     */
    public $framerate;
    /**
     * @var string
     * @see get_handler()
     */
    public $handler;
    /**
     * @var array
     * @see get_hashes()
     */
    public $hashes;
    /**
     * @var string
     * @see get_height()
     */
    public $height;
    /**
     * @deprecated
     * @var null
     */
    public $javascript;
    /**
     * @var array
     * @see get_keywords()
     */
    public $keywords;
    /**
     * @var string
     * @see get_language()
     */
    public $lang;
    /**
     * @var string
     * @see get_length()
     */
    public $length;
    /**
     * @var string
     * @see get_link()
     */
    public $link;
    /**
     * @var string
     * @see get_medium()
     */
    public $medium;
    /**
     * @var string
     * @see get_player()
     */
    public $player;
    /**
     * @var array
     * @see get_ratings()
     */
    public $ratings;
    /**
     * @var array
     * @see get_restrictions()
     */
    public $restrictions;
    /**
     * @var string
     * @see get_sampling_rate()
     */
    public $samplingrate;
    /**
     * @var array
     * @see get_thumbnails()
     */
    public $thumbnails;
    /**
     * @var string
     * @see get_title()
     */
    public $title;
    /**
     * @var string
     * @see get_type()
     */
    public $type;
    /**
     * @var string
     * @see get_width()
     */
    public $width;
    /**
     * Constructor, used to input the data
     *
     * For documentation on all the parameters, see the corresponding
     * properties and their accessors
     *
     * @uses idna_convert If available, this will convert an IDN
     */
    public function __construct($link = null, $type = null, $length = null, $javascript = null, $bitrate = null, $captions = null, $categories = null, $channels = null, $copyright = null, $credits = null, $description = null, $duration = null, $expression = null, $framerate = null, $hashes = null, $height = null, $keywords = null, $lang = null, $medium = null, $player = null, $ratings = null, $restrictions = null, $samplingrate = null, $thumbnails = null, $title = null, $width = null)
    {
    }
    /**
     * String-ified version
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Get the bitrate
     *
     * @return string|null
     */
    public function get_bitrate()
    {
    }
    /**
     * Get a single caption
     *
     * @param int $key
     * @return \SimplePie\Caption|null
     */
    public function get_caption($key = 0)
    {
    }
    /**
     * Get all captions
     *
     * @return array|null Array of {@see \SimplePie\Caption} objects
     */
    public function get_captions()
    {
    }
    /**
     * Get a single category
     *
     * @param int $key
     * @return \SimplePie\Category|null
     */
    public function get_category($key = 0)
    {
    }
    /**
     * Get all categories
     *
     * @return array|null Array of {@see \SimplePie\Category} objects
     */
    public function get_categories()
    {
    }
    /**
     * Get the number of audio channels
     *
     * @return int|null
     */
    public function get_channels()
    {
    }
    /**
     * Get the copyright information
     *
     * @return \SimplePie\Copyright|null
     */
    public function get_copyright()
    {
    }
    /**
     * Get a single credit
     *
     * @param int $key
     * @return \SimplePie\Credit|null
     */
    public function get_credit($key = 0)
    {
    }
    /**
     * Get all credits
     *
     * @return array|null Array of {@see \SimplePie\Credit} objects
     */
    public function get_credits()
    {
    }
    /**
     * Get the description of the enclosure
     *
     * @return string|null
     */
    public function get_description()
    {
    }
    /**
     * Get the duration of the enclosure
     *
     * @param bool $convert Convert seconds into hh:mm:ss
     * @return string|int|null 'hh:mm:ss' string if `$convert` was specified, otherwise integer (or null if none found)
     */
    public function get_duration($convert = false)
    {
    }
    /**
     * Get the expression
     *
     * @return string Probably one of 'sample', 'full', 'nonstop', 'clip'. Defaults to 'full'
     */
    public function get_expression()
    {
    }
    /**
     * Get the file extension
     *
     * @return string|null
     */
    public function get_extension()
    {
    }
    /**
     * Get the framerate (in frames-per-second)
     *
     * @return string|null
     */
    public function get_framerate()
    {
    }
    /**
     * Get the preferred handler
     *
     * @return string|null One of 'flash', 'fmedia', 'quicktime', 'wmedia', 'mp3'
     */
    public function get_handler()
    {
    }
    /**
     * Get a single hash
     *
     * @link http://www.rssboard.org/media-rss#media-hash
     * @param int $key
     * @return string|null Hash as per `media:hash`, prefixed with "$algo:"
     */
    public function get_hash($key = 0)
    {
    }
    /**
     * Get all credits
     *
     * @return array|null Array of strings, see {@see get_hash()}
     */
    public function get_hashes()
    {
    }
    /**
     * Get the height
     *
     * @return string|null
     */
    public function get_height()
    {
    }
    /**
     * Get the language
     *
     * @link http://tools.ietf.org/html/rfc3066
     * @return string|null Language code as per RFC 3066
     */
    public function get_language()
    {
    }
    /**
     * Get a single keyword
     *
     * @param int $key
     * @return string|null
     */
    public function get_keyword($key = 0)
    {
    }
    /**
     * Get all keywords
     *
     * @return array|null Array of strings
     */
    public function get_keywords()
    {
    }
    /**
     * Get length
     *
     * @return float Length in bytes
     */
    public function get_length()
    {
    }
    /**
     * Get the URL
     *
     * @return string|null
     */
    public function get_link()
    {
    }
    /**
     * Get the medium
     *
     * @link http://www.rssboard.org/media-rss#media-content
     * @return string|null Should be one of 'image', 'audio', 'video', 'document', 'executable'
     */
    public function get_medium()
    {
    }
    /**
     * Get the player URL
     *
     * Typically the same as {@see get_permalink()}
     * @return string|null Player URL
     */
    public function get_player()
    {
    }
    /**
     * Get a single rating
     *
     * @param int $key
     * @return \SimplePie\Rating|null
     */
    public function get_rating($key = 0)
    {
    }
    /**
     * Get all ratings
     *
     * @return array|null Array of {@see \SimplePie\Rating} objects
     */
    public function get_ratings()
    {
    }
    /**
     * Get a single restriction
     *
     * @param int $key
     * @return \SimplePie\Restriction|null
     */
    public function get_restriction($key = 0)
    {
    }
    /**
     * Get all restrictions
     *
     * @return array|null Array of {@see \SimplePie\Restriction} objects
     */
    public function get_restrictions()
    {
    }
    /**
     * Get the sampling rate (in kHz)
     *
     * @return string|null
     */
    public function get_sampling_rate()
    {
    }
    /**
     * Get the file size (in MiB)
     *
     * @return float|null File size in mebibytes (1048 bytes)
     */
    public function get_size()
    {
    }
    /**
     * Get a single thumbnail
     *
     * @param int $key
     * @return string|null Thumbnail URL
     */
    public function get_thumbnail($key = 0)
    {
    }
    /**
     * Get all thumbnails
     *
     * @return array|null Array of thumbnail URLs
     */
    public function get_thumbnails()
    {
    }
    /**
     * Get the title
     *
     * @return string|null
     */
    public function get_title()
    {
    }
    /**
     * Get mimetype of the enclosure
     *
     * @see get_real_type()
     * @return string|null MIME type
     */
    public function get_type()
    {
    }
    /**
     * Get the width
     *
     * @return string|null
     */
    public function get_width()
    {
    }
    /**
     * Embed the enclosure using `<embed>`
     *
     * @deprecated Use the second parameter to {@see embed} instead
     *
     * @param array|string $options See first parameter to {@see embed}
     * @return string HTML string to output
     */
    public function native_embed($options = '')
    {
    }
    /**
     * Embed the enclosure using Javascript
     *
     * `$options` is an array or comma-separated key:value string, with the
     * following properties:
     *
     * - `alt` (string): Alternate content for when an end-user does not have
     *    the appropriate handler installed or when a file type is
     *    unsupported. Can be any text or HTML. Defaults to blank.
     * - `altclass` (string): If a file type is unsupported, the end-user will
     *    see the alt text (above) linked directly to the content. That link
     *    will have this value as its class name. Defaults to blank.
     * - `audio` (string): This is an image that should be used as a
     *    placeholder for audio files before they're loaded (QuickTime-only).
     *    Can be any relative or absolute URL. Defaults to blank.
     * - `bgcolor` (string): The background color for the media, if not
     *    already transparent. Defaults to `#ffffff`.
     * - `height` (integer): The height of the embedded media. Accepts any
     *    numeric pixel value (such as `360`) or `auto`. Defaults to `auto`,
     *    and it is recommended that you use this default.
     * - `loop` (boolean): Do you want the media to loop when it's done?
     *    Defaults to `false`.
     * - `mediaplayer` (string): The location of the included
     *    `mediaplayer.swf` file. This allows for the playback of Flash Video
     *    (`.flv`) files, and is the default handler for non-Odeo MP3's.
     *    Defaults to blank.
     * - `video` (string): This is an image that should be used as a
     *    placeholder for video files before they're loaded (QuickTime-only).
     *    Can be any relative or absolute URL. Defaults to blank.
     * - `width` (integer): The width of the embedded media. Accepts any
     *    numeric pixel value (such as `480`) or `auto`. Defaults to `auto`,
     *    and it is recommended that you use this default.
     * - `widescreen` (boolean): Is the enclosure widescreen or standard?
     *    This applies only to video enclosures, and will automatically resize
     *    the content appropriately.  Defaults to `false`, implying 4:3 mode.
     *
     * Note: Non-widescreen (4:3) mode with `width` and `height` set to `auto`
     * will default to 480x360 video resolution.  Widescreen (16:9) mode with
     * `width` and `height` set to `auto` will default to 480x270 video resolution.
     *
     * @todo If the dimensions for media:content are defined, use them when width/height are set to 'auto'.
     * @param array|string $options Comma-separated key:value list, or array
     * @param bool $native Use `<embed>`
     * @return string HTML string to output
     */
    public function embed($options = '', $native = false)
    {
    }
    /**
     * Get the real media type
     *
     * Often, feeds lie to us, necessitating a bit of deeper inspection. This
     * converts types to their canonical representations based on the file
     * extension
     *
     * @see get_type()
     * @param bool $find_handler Internal use only, use {@see get_handler()} instead
     * @return string MIME type
     */
    public function get_real_type($find_handler = false)
    {
    }
}