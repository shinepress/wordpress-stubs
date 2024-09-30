<?php


/**
 * IRI parser/serialiser/normaliser
 *
 * @package SimplePie
 * @subpackage HTTP
 * @author Sam Sneddon
 * @author Steve Minutillo
 * @author Ryan McCue
 * @copyright 2007-2012 Sam Sneddon, Steve Minutillo, Ryan McCue
 * @license http://www.opensource.org/licenses/bsd-license.php
 */
class SimplePie_IRI
{
    /**
     * Scheme
     *
     * @var string
     */
    protected $scheme = \null;
    /**
     * User Information
     *
     * @var string
     */
    protected $iuserinfo = \null;
    /**
     * ihost
     *
     * @var string
     */
    protected $ihost = \null;
    /**
     * Port
     *
     * @var string
     */
    protected $port = \null;
    /**
     * ipath
     *
     * @var string
     */
    protected $ipath = '';
    /**
     * iquery
     *
     * @var string
     */
    protected $iquery = \null;
    /**
     * ifragment
     *
     * @var string
     */
    protected $ifragment = \null;
    /**
     * Normalization database
     *
     * Each key is the scheme, each value is an array with each key as the IRI
     * part and value as the default value for that part.
     */
    protected $normalization = array('acap' => array('port' => 674), 'dict' => array('port' => 2628), 'file' => array('ihost' => 'localhost'), 'http' => array('port' => 80, 'ipath' => '/'), 'https' => array('port' => 443, 'ipath' => '/'));
    /**
     * Return the entire IRI when you try and read the object as a string
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Overload __set() to provide access via properties
     *
     * @param string $name Property name
     * @param mixed $value Property value
     */
    public function __set($name, $value)
    {
    }
    /**
     * Overload __get() to provide access via properties
     *
     * @param string $name Property name
     * @return mixed
     */
    public function __get($name)
    {
    }
    /**
     * Overload __isset() to provide access via properties
     *
     * @param string $name Property name
     * @return bool
     */
    public function __isset($name)
    {
    }
    /**
     * Overload __unset() to provide access via properties
     *
     * @param string $name Property name
     */
    public function __unset($name)
    {
    }
    /**
     * Create a new IRI object, from a specified string
     *
     * @param string $iri
     */
    public function __construct($iri = \null)
    {
    }
    /**
     * Clean up
     */
    public function __destruct()
    {
    }
    /**
     * Create a new IRI object by resolving a relative IRI
     *
     * Returns false if $base is not absolute, otherwise an IRI.
     *
     * @param IRI|string $base (Absolute) Base IRI
     * @param IRI|string $relative Relative IRI
     * @return IRI|false
     */
    public static function absolutize($base, $relative)
    {
    }
    /**
     * Parse an IRI into scheme/authority/path/query/fragment segments
     *
     * @param string $iri
     * @return array
     */
    protected function parse_iri($iri)
    {
    }
    /**
     * Remove dot segments from a path
     *
     * @param string $input
     * @return string
     */
    protected function remove_dot_segments($input)
    {
    }
    /**
     * Replace invalid character with percent encoding
     *
     * @param string $string Input string
     * @param string $extra_chars Valid characters not in iunreserved or
     *                            iprivate (this is ASCII-only)
     * @param bool $iprivate Allow iprivate
     * @return string
     */
    protected function replace_invalid_with_pct_encoding($string, $extra_chars, $iprivate = \false)
    {
    }
    /**
     * Callback function for preg_replace_callback.
     *
     * Removes sequences of percent encoded bytes that represent UTF-8
     * encoded characters in iunreserved
     *
     * @param array $match PCRE match
     * @return string Replacement
     */
    protected function remove_iunreserved_percent_encoded($match)
    {
    }
    protected function scheme_normalization()
    {
    }
    /**
     * Check if the object represents a valid IRI. This needs to be done on each
     * call as some things change depending on another part of the IRI.
     *
     * @return bool
     */
    public function is_valid()
    {
    }
    /**
     * Set the entire IRI. Returns true on success, false on failure (if there
     * are any invalid characters).
     *
     * @param string $iri
     * @return bool
     */
    public function set_iri($iri, $clear_cache = \false)
    {
    }
    /**
     * Set the scheme. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $scheme
     * @return bool
     */
    public function set_scheme($scheme)
    {
    }
    /**
     * Set the authority. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $authority
     * @return bool
     */
    public function set_authority($authority, $clear_cache = \false)
    {
    }
    /**
     * Set the iuserinfo.
     *
     * @param string $iuserinfo
     * @return bool
     */
    public function set_userinfo($iuserinfo)
    {
    }
    /**
     * Set the ihost. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $ihost
     * @return bool
     */
    public function set_host($ihost)
    {
    }
    /**
     * Set the port. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $port
     * @return bool
     */
    public function set_port($port)
    {
    }
    /**
     * Set the ipath.
     *
     * @param string $ipath
     * @return bool
     */
    public function set_path($ipath, $clear_cache = \false)
    {
    }
    /**
     * Set the iquery.
     *
     * @param string $iquery
     * @return bool
     */
    public function set_query($iquery)
    {
    }
    /**
     * Set the ifragment.
     *
     * @param string $ifragment
     * @return bool
     */
    public function set_fragment($ifragment)
    {
    }
    /**
     * Convert an IRI to a URI (or parts thereof)
     *
     * @return string
     */
    public function to_uri($string)
    {
    }
    /**
     * Get the complete IRI
     *
     * @return string
     */
    public function get_iri()
    {
    }
    /**
     * Get the complete URI
     *
     * @return string
     */
    public function get_uri()
    {
    }
    /**
     * Get the complete iauthority
     *
     * @return string
     */
    protected function get_iauthority()
    {
    }
    /**
     * Get the complete authority
     *
     * @return string
     */
    protected function get_authority()
    {
    }
}