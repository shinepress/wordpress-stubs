<?php

namespace WpOrg\Requests;

/**
 * IRI parser/serialiser/normaliser
 *
 * Copyright (c) 2007-2010, Geoffrey Sneddon and Steve Minutillo.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *  * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *  * Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *
 *  * Neither the name of the SimplePie Team nor the names of its contributors
 *       may be used to endorse or promote products derived from this software
 *       without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS AND CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package Requests\Utilities
 * @author Geoffrey Sneddon
 * @author Steve Minutillo
 * @copyright 2007-2009 Geoffrey Sneddon and Steve Minutillo
 * @license https://opensource.org/licenses/bsd-license.php
 * @link http://hg.gsnedders.com/iri/
 *
 * @property string $iri IRI we're working with
 * @property-read string $uri IRI in URI form, {@see \WpOrg\Requests\Iri::to_uri()}
 * @property string $scheme Scheme part of the IRI
 * @property string $authority Authority part, formatted for a URI (userinfo + host + port)
 * @property string $iauthority Authority part of the IRI (userinfo + host + port)
 * @property string $userinfo Userinfo part, formatted for a URI (after '://' and before '@')
 * @property string $iuserinfo Userinfo part of the IRI (after '://' and before '@')
 * @property string $host Host part, formatted for a URI
 * @property string $ihost Host part of the IRI
 * @property string $port Port part of the IRI (after ':')
 * @property string $path Path part, formatted for a URI (after first '/')
 * @property string $ipath Path part of the IRI (after first '/')
 * @property string $query Query part, formatted for a URI (after '?')
 * @property string $iquery Query part of the IRI (after '?')
 * @property string $fragment Fragment, formatted for a URI (after '#')
 * @property string $ifragment Fragment part of the IRI (after '#')
 */
class Iri
{
    /**
     * Scheme
     *
     * @var string|null
     */
    protected $scheme = null;
    /**
     * User Information
     *
     * @var string|null
     */
    protected $iuserinfo = null;
    /**
     * ihost
     *
     * @var string|null
     */
    protected $ihost = null;
    /**
     * Port
     *
     * @var string|null
     */
    protected $port = null;
    /**
     * ipath
     *
     * @var string
     */
    protected $ipath = '';
    /**
     * iquery
     *
     * @var string|null
     */
    protected $iquery = null;
    /**
     * ifragment|null
     *
     * @var string
     */
    protected $ifragment = null;
    /**
     * Normalization database
     *
     * Each key is the scheme, each value is an array with each key as the IRI
     * part and value as the default value for that part.
     *
     * @var array
     */
    protected $normalization = array('acap' => array('port' => \WpOrg\Requests\Port::ACAP), 'dict' => array('port' => \WpOrg\Requests\Port::DICT), 'file' => array('ihost' => 'localhost'), 'http' => array('port' => \WpOrg\Requests\Port::HTTP), 'https' => array('port' => \WpOrg\Requests\Port::HTTPS));
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
     * @param string|Stringable|null $iri
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $iri argument is not a string, Stringable or null.
     */
    public function __construct($iri = null)
    {
    }
    /**
     * Create a new IRI object by resolving a relative IRI
     *
     * Returns false if $base is not absolute, otherwise an IRI.
     *
     * @param \WpOrg\Requests\Iri|string $base (Absolute) Base IRI
     * @param \WpOrg\Requests\Iri|string $relative Relative IRI
     * @return \WpOrg\Requests\Iri|false
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
     * @param string $text Input string
     * @param string $extra_chars Valid characters not in iunreserved or
     *                            iprivate (this is ASCII-only)
     * @param bool $iprivate Allow iprivate
     * @return string
     */
    protected function replace_invalid_with_pct_encoding($text, $extra_chars, $iprivate = false)
    {
    }
    /**
     * Callback function for preg_replace_callback.
     *
     * Removes sequences of percent encoded bytes that represent UTF-8
     * encoded characters in iunreserved
     *
     * @param array $regex_match PCRE match
     * @return string Replacement
     */
    protected function remove_iunreserved_percent_encoded($regex_match)
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
    public function __wakeup()
    {
    }
    /**
     * Set the entire IRI. Returns true on success, false on failure (if there
     * are any invalid characters).
     *
     * @param string $iri
     * @return bool
     */
    protected function set_iri($iri)
    {
    }
    /**
     * Set the scheme. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $scheme
     * @return bool
     */
    protected function set_scheme($scheme)
    {
    }
    /**
     * Set the authority. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $authority
     * @return bool
     */
    protected function set_authority($authority)
    {
    }
    /**
     * Set the iuserinfo.
     *
     * @param string $iuserinfo
     * @return bool
     */
    protected function set_userinfo($iuserinfo)
    {
    }
    /**
     * Set the ihost. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $ihost
     * @return bool
     */
    protected function set_host($ihost)
    {
    }
    /**
     * Set the port. Returns true on success, false on failure (if there are
     * any invalid characters).
     *
     * @param string $port
     * @return bool
     */
    protected function set_port($port)
    {
    }
    /**
     * Set the ipath.
     *
     * @param string $ipath
     * @return bool
     */
    protected function set_path($ipath)
    {
    }
    /**
     * Set the iquery.
     *
     * @param string $iquery
     * @return bool
     */
    protected function set_query($iquery)
    {
    }
    /**
     * Set the ifragment.
     *
     * @param string $ifragment
     * @return bool
     */
    protected function set_fragment($ifragment)
    {
    }
    /**
     * Convert an IRI to a URI (or parts thereof)
     *
     * @param string|bool $iri IRI to convert (or false from {@see \WpOrg\Requests\Iri::get_iri()})
     * @return string|false URI if IRI is valid, false otherwise.
     */
    protected function to_uri($iri)
    {
    }
    /**
     * Get the complete IRI
     *
     * @return string|false
     */
    protected function get_iri()
    {
    }
    /**
     * Get the complete URI
     *
     * @return string
     */
    protected function get_uri()
    {
    }
    /**
     * Get the complete iauthority
     *
     * @return string|null
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