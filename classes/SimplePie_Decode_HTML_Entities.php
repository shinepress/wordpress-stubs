<?php


/**
 * Decode HTML Entities
 *
 * This implements HTML5 as of revision 967 (2007-06-28)
 *
 * @deprecated Use DOMDocument instead!
 * @package SimplePie
 */
class SimplePie_Decode_HTML_Entities
{
    /**
     * Data to be parsed
     *
     * @access private
     * @var string
     */
    var $data = '';
    /**
     * Currently consumed bytes
     *
     * @access private
     * @var string
     */
    var $consumed = '';
    /**
     * Position of the current byte being parsed
     *
     * @access private
     * @var int
     */
    var $position = 0;
    /**
     * Create an instance of the class with the input data
     *
     * @access public
     * @param string $data Input data
     */
    public function __construct($data)
    {
    }
    /**
     * Parse the input data
     *
     * @access public
     * @return string Output data
     */
    public function parse()
    {
    }
    /**
     * Consume the next byte
     *
     * @access private
     * @return mixed The next byte, or false, if there is no more data
     */
    public function consume()
    {
    }
    /**
     * Consume a range of characters
     *
     * @access private
     * @param string $chars Characters to consume
     * @return mixed A series of characters that match the range, or false
     */
    public function consume_range($chars)
    {
    }
    /**
     * Unconsume one byte
     *
     * @access private
     */
    public function unconsume()
    {
    }
    /**
     * Decode an entity
     *
     * @access private
     */
    public function entity()
    {
    }
}