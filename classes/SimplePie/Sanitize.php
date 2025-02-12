<?php

namespace SimplePie;

/**
 * Used for data cleanup and post-processing
 *
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_sanitize_class()}
 *
 * @package SimplePie
 * @todo Move to using an actual HTML parser (this will allow tags to be properly stripped, and to switch between HTML and XHTML), this will also make it easier to shorten a string while preserving HTML tags
 */
class Sanitize implements \SimplePie\RegistryAware
{
    public $base;
    public $remove_div = true;
    public $image_handler = '';
    public $strip_htmltags = ['base', 'blink', 'body', 'doctype', 'embed', 'font', 'form', 'frame', 'frameset', 'html', 'iframe', 'input', 'marquee', 'meta', 'noscript', 'object', 'param', 'script', 'style'];
    public $encode_instead_of_strip = false;
    public $strip_attributes = ['bgsound', 'expr', 'id', 'style', 'onclick', 'onerror', 'onfinish', 'onmouseover', 'onmouseout', 'onfocus', 'onblur', 'lowsrc', 'dynsrc'];
    public $rename_attributes = [];
    public $add_attributes = ['audio' => ['preload' => 'none'], 'iframe' => ['sandbox' => 'allow-scripts allow-same-origin'], 'video' => ['preload' => 'none']];
    public $strip_comments = false;
    public $output_encoding = 'UTF-8';
    public $enable_cache = true;
    public $cache_location = './cache';
    public $cache_name_function = 'md5';
    public $timeout = 10;
    public $useragent = '';
    public $force_fsockopen = false;
    public $replace_url_attributes = null;
    public $registry;
    /**
     * List of domains for which to force HTTPS.
     * @see \SimplePie\Sanitize::set_https_domains()
     * Array is a tree split at DNS levels. Example:
     * array('biz' => true, 'com' => array('example' => true), 'net' => array('example' => array('www' => true)))
     */
    public $https_domains = [];
    public function __construct()
    {
    }
    public function remove_div($enable = true)
    {
    }
    public function set_image_handler($page = false)
    {
    }
    public function set_registry(\SimplePie\Registry $registry)
    {
    }
    public function pass_cache_data($enable_cache = true, $cache_location = './cache', $cache_name_function = 'md5', $cache_class = 'SimplePie\Cache', ?\SimplePie\Cache\DataCache $cache = null)
    {
    }
    public function pass_file_data($file_class = 'SimplePie\File', $timeout = 10, $useragent = '', $force_fsockopen = false)
    {
    }
    public function strip_htmltags($tags = ['base', 'blink', 'body', 'doctype', 'embed', 'font', 'form', 'frame', 'frameset', 'html', 'iframe', 'input', 'marquee', 'meta', 'noscript', 'object', 'param', 'script', 'style'])
    {
    }
    public function encode_instead_of_strip($encode = false)
    {
    }
    public function rename_attributes($attribs = [])
    {
    }
    public function strip_attributes($attribs = ['bgsound', 'expr', 'id', 'style', 'onclick', 'onerror', 'onfinish', 'onmouseover', 'onmouseout', 'onfocus', 'onblur', 'lowsrc', 'dynsrc'])
    {
    }
    public function add_attributes($attribs = ['audio' => ['preload' => 'none'], 'iframe' => ['sandbox' => 'allow-scripts allow-same-origin'], 'video' => ['preload' => 'none']])
    {
    }
    public function strip_comments($strip = false)
    {
    }
    public function set_output_encoding($encoding = 'UTF-8')
    {
    }
    /**
     * Set element/attribute key/value pairs of HTML attributes
     * containing URLs that need to be resolved relative to the feed
     *
     * Defaults to |a|@href, |area|@href, |audio|@src, |blockquote|@cite,
     * |del|@cite, |form|@action, |img|@longdesc, |img|@src, |input|@src,
     * |ins|@cite, |q|@cite, |source|@src, |video|@src
     *
     * @since 1.0
     * @param array|null $element_attribute Element/attribute key/value pairs, null for default
     */
    public function set_url_replacements($element_attribute = null)
    {
    }
    /**
     * Set the list of domains for which to force HTTPS.
     * @see \SimplePie\Misc::https_url()
     * Example array('biz', 'example.com', 'example.org', 'www.example.net');
     */
    public function set_https_domains($domains)
    {
    }
    /**
     * Check if the domain is in the list of forced HTTPS.
     */
    protected function is_https_domain($domain)
    {
    }
    /**
     * Force HTTPS for selected Web sites.
     */
    public function https_url($url)
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
    protected function rename_attr($attrib, $xpath)
    {
    }
    protected function add_attr($tag, $valuePairs, $document)
    {
    }
}