<?php

namespace SimplePie;

/**
 * Handles `<media:text>` captions as defined in Media RSS.
 *
 * Used by {@see \SimplePie\Enclosure::get_caption()} and {@see \SimplePie\Enclosure::get_captions()}
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_caption_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class Caption
{
    /**
     * Content type
     *
     * @var string
     * @see get_type()
     */
    public $type;
    /**
     * Language
     *
     * @var string
     * @see get_language()
     */
    public $lang;
    /**
     * Start time
     *
     * @var string
     * @see get_starttime()
     */
    public $startTime;
    /**
     * End time
     *
     * @var string
     * @see get_endtime()
     */
    public $endTime;
    /**
     * Caption text
     *
     * @var string
     * @see get_text()
     */
    public $text;
    /**
     * Constructor, used to input the data
     *
     * For documentation on all the parameters, see the corresponding
     * properties and their accessors
     */
    public function __construct($type = null, $lang = null, $startTime = null, $endTime = null, $text = null)
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
     * Get the end time
     *
     * @return string|null Time in the format 'hh:mm:ss.SSS'
     */
    public function get_endtime()
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
     * Get the start time
     *
     * @return string|null Time in the format 'hh:mm:ss.SSS'
     */
    public function get_starttime()
    {
    }
    /**
     * Get the text of the caption
     *
     * @return string|null
     */
    public function get_text()
    {
    }
    /**
     * Get the content type (not MIME type)
     *
     * @return string|null Either 'text' or 'html'
     */
    public function get_type()
    {
    }
}