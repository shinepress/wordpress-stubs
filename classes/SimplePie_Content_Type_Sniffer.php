<?php


/**
 * SimplePie
 *
 * A PHP-Based RSS and Atom Feed Framework.
 * Takes the hard work out of managing a complete RSS/Atom solution.
 *
 * Copyright (c) 2004-2016, Ryan Parman, Sam Sneddon, Ryan McCue, and contributors
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
 * @copyright 2004-2016 Ryan Parman, Sam Sneddon, Ryan McCue
 * @author Ryan Parman
 * @author Sam Sneddon
 * @author Ryan McCue
 * @link http://simplepie.org/ SimplePie
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 */
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