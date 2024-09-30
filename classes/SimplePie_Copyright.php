<?php


/**
 * Manages `<media:copyright>` copyright tags as defined in Media RSS
 *
 * Used by {@see SimplePie_Enclosure::get_copyright()}
 *
 * This class can be overloaded with {@see SimplePie::set_copyright_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Copyright
{
    /**
     * Copyright URL
     *
     * @var string
     * @see get_url()
     */
    var $url;
    /**
     * Attribution
     *
     * @var string
     * @see get_attribution()
     */
    var $label;
    /**
     * Constructor, used to input the data
     *
     * For documentation on all the parameters, see the corresponding
     * properties and their accessors
     */
    public function __construct($url = \null, $label = \null)
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
     * Get the copyright URL
     *
     * @return string|null URL to copyright information
     */
    public function get_url()
    {
    }
    /**
     * Get the attribution text
     *
     * @return string|null
     */
    public function get_attribution()
    {
    }
}