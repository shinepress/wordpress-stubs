<?php


/**
 * Content-type sniffing
 *
 * Based on the rules in http://tools.ietf.org/html/draft-abarth-mime-sniff-06
 *
 * This is used since we can't always trust Content-Type headers, and is based
 * upon the HTML5 parsing rules.
 *
 *
 * This class can be overloaded with {@see SimplePie::set_content_type_sniffer_class()}
 *
 * @package SimplePie
 * @subpackage HTTP
 */
class SimplePie_Content_Type_Sniffer
{
    /**
     * File object
     *
     * @var SimplePie_File
     */
    var $file;
    /**
     * Create an instance of the class with the input file
     *
     * @param SimplePie_Content_Type_Sniffer $file Input file
     */
    public function __construct($file)
    {
    }
    /**
     * Get the Content-Type of the specified file
     *
     * @return string Actual Content-Type
     */
    public function get_type()
    {
    }
    /**
     * Sniff text or binary
     *
     * @return string Actual Content-Type
     */
    public function text_or_binary()
    {
    }
    /**
     * Sniff unknown
     *
     * @return string Actual Content-Type
     */
    public function unknown()
    {
    }
    /**
     * Sniff images
     *
     * @return string Actual Content-Type
     */
    public function image()
    {
    }
    /**
     * Sniff HTML
     *
     * @return string Actual Content-Type
     */
    public function feed_or_html()
    {
    }
}