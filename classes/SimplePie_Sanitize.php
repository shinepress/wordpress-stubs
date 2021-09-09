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
 * Used for data cleanup and post-processing
 *
 *
 * This class can be overloaded with {@see SimplePie::set_sanitize_class()}
 *
 * @package SimplePie
 * @todo Move to using an actual HTML parser (this will allow tags to be properly stripped, and to switch between HTML and XHTML), this will also make it easier to shorten a string while preserving HTML tags
 */
class SimplePie_Sanitize
{
    // Private vars
    var $base;
    // Options
    var $remove_div = \true;
    var $image_handler = '';
    var $strip_htmltags = array('base', 'blink', 'body', 'doctype', 'embed', 'font', 'form', 'frame', 'frameset', 'html', 'iframe', 'input', 'marquee', 'meta', 'noscript', 'object', 'param', 'script', 'style');
    var $encode_instead_of_strip = \false;
    var $strip_attributes = array('bgsound', 'expr', 'id', 'style', 'onclick', 'onerror', 'onfinish', 'onmouseover', 'onmouseout', 'onfocus', 'onblur', 'lowsrc', 'dynsrc');
    var $add_attributes = array('audio' => array('preload' => 'none'), 'iframe' => array('sandbox' => 'allow-scripts allow-same-origin'), 'video' => array('preload' => 'none'));
    var $strip_comments = \false;
    var $output_encoding = 'UTF-8';
    var $enable_cache = \true;
    var $cache_location = './cache';
    var $cache_name_function = 'md5';
    var $timeout = 10;
    var $useragent = '';
    var $force_fsockopen = \false;
    var $replace_url_attributes = \null;
    public function __construct()
    {
    }
    public function remove_div($enable = \true)
    {
    }
    public function set_image_handler($page = \false)
    {
    }
    public function set_registry(\SimplePie_Registry $registry)
    {
    }
    public function pass_cache_data($enable_cache = \true, $cache_location = './cache', $cache_name_function = 'md5', $cache_class = 'SimplePie_Cache')
    {
    }
    public function pass_file_data($file_class = 'SimplePie_File', $timeout = 10, $useragent = '', $force_fsockopen = \false)
    {
    }
    public function strip_htmltags($tags = array('base', 'blink', 'body', 'doctype', 'embed', 'font', 'form', 'frame', 'frameset', 'html', 'iframe', 'input', 'marquee', 'meta', 'noscript', 'object', 'param', 'script', 'style'))
    {
    }
    public function encode_instead_of_strip($encode = \false)
    {
    }
    public function strip_attributes($attribs = array('bgsound', 'expr', 'id', 'style', 'onclick', 'onerror', 'onfinish', 'onmouseover', 'onmouseout', 'onfocus', 'onblur', 'lowsrc', 'dynsrc'))
    {
    }
    public function add_attributes($attribs = array('audio' => array('preload' => 'none'), 'iframe' => array('sandbox' => 'allow-scripts allow-same-origin'), 'video' => array('preload' => 'none')))
    {
    }
    public function strip_comments($strip = \false)
    {
    }
    public function set_output_encoding($encoding = 'UTF-8')
    {
    }
    /**
     * Set element/attribute key/value pairs of HTML attributes
     * containing URLs that need to be resolved relative to the feed
     *
     * Defaults to |a|@href, |area|@href, |blockquote|@cite, |del|@cite,
     * |form|@action, |img|@longdesc, |img|@src, |input|@src, |ins|@cite,
     * |q|@cite
     *
     * @since 1.0
     * @param array|null $element_attribute Element/attribute key/value pairs, null for default
     */
    public function set_url_replacements($element_attribute = \null)
    {
    }
    public function sanitize($data, $type, $base = '')
    {
    }
    protected function preprocess($html, $type)
    {
    }
    public function replace_urls($document, $tag, $attributes)
    {
    }
    public function do_strip_htmltags($match)
    {
    }
    protected function strip_tag($tag, $document, $xpath, $type)
    {
    }
    protected function strip_attr($attrib, $xpath)
    {
    }
    protected function add_attr($tag, $valuePairs, $document)
    {
    }
}