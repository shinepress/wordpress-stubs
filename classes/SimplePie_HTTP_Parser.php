<?php


/**
 * SimplePie
 *
 * A PHP-Based RSS and Atom Feed Framework.
 * Takes the hard work out of managing a complete RSS/Atom solution.
 *
 * Copyright (c) 2004-2012, Ryan Parman, Geoffrey Sneddon, Ryan McCue, and contributors
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 	* Redistributions of source code must retain the above copyright notice, this list of
 * 	  conditions and the following disclaimer.
 *
 * 	* Redistributions in binary form must reproduce the above copyright notice, this list
 * 	  of conditions and the following disclaimer in the documentation and/or other materials
 * 	  provided with the distribution.
 *
 * 	* Neither the name of the SimplePie Team nor the names of its contributors may be used
 * 	  to endorse or promote products derived from this software without specific prior
 * 	  written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS
 * OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS
 * AND CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package SimplePie
 * @version 1.3.1
 * @copyright 2004-2012 Ryan Parman, Geoffrey Sneddon, Ryan McCue
 * @author Ryan Parman
 * @author Geoffrey Sneddon
 * @author Ryan McCue
 * @link http://simplepie.org/ SimplePie
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */
/**
 * HTTP Response Parser
 *
 * @package SimplePie
 * @subpackage HTTP
 */
class SimplePie_HTTP_Parser
{
    /**
     * HTTP Version
     *
     * @var float
     */
    public $http_version = 0.0;
    /**
     * Status code
     *
     * @var int
     */
    public $status_code = 0;
    /**
     * Reason phrase
     *
     * @var string
     */
    public $reason = '';
    /**
     * Key/value pairs of the headers
     *
     * @var array
     */
    public $headers = array();
    /**
     * Body of the response
     *
     * @var string
     */
    public $body = '';
    /**
     * Current state of the state machine
     *
     * @var string
     */
    protected $state = 'http_version';
    /**
     * Input data
     *
     * @var string
     */
    protected $data = '';
    /**
     * Input data length (to avoid calling strlen() everytime this is needed)
     *
     * @var int
     */
    protected $data_length = 0;
    /**
     * Current position of the pointer
     *
     * @var int
     */
    protected $position = 0;
    /**
     * Name of the hedaer currently being parsed
     *
     * @var string
     */
    protected $name = '';
    /**
     * Value of the hedaer currently being parsed
     *
     * @var string
     */
    protected $value = '';
    /**
     * Create an instance of the class with the input data
     *
     * @param string $data Input data
     */
    public function __construct($data)
    {
    }
    /**
     * Parse the input data
     *
     * @return bool true on success, false on failure
     */
    public function parse()
    {
    }
    /**
     * Check whether there is data beyond the pointer
     *
     * @return bool true if there is further data, false if not
     */
    protected function has_data()
    {
    }
    /**
     * See if the next character is LWS
     *
     * @return bool true if the next character is LWS, false if not
     */
    protected function is_linear_whitespace()
    {
    }
    /**
     * Parse the HTTP version
     */
    protected function http_version()
    {
    }
    /**
     * Parse the status code
     */
    protected function status()
    {
    }
    /**
     * Parse the reason phrase
     */
    protected function reason()
    {
    }
    /**
     * Deal with a new line, shifting data around as needed
     */
    protected function new_line()
    {
    }
    /**
     * Parse a header name
     */
    protected function name()
    {
    }
    /**
     * Parse LWS, replacing consecutive LWS characters with a single space
     */
    protected function linear_whitespace()
    {
    }
    /**
     * See what state to move to while within non-quoted header values
     */
    protected function value()
    {
    }
    /**
     * Parse a header value while outside quotes
     */
    protected function value_char()
    {
    }
    /**
     * See what state to move to while within quoted header values
     */
    protected function quote()
    {
    }
    /**
     * Parse a header value while within quotes
     */
    protected function quote_char()
    {
    }
    /**
     * Parse an escaped character within quotes
     */
    protected function quote_escaped()
    {
    }
    /**
     * Parse the body
     */
    protected function body()
    {
    }
    /**
     * Parsed a "Transfer-Encoding: chunked" body
     */
    protected function chunked()
    {
    }
}