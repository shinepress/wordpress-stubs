<?php


/**
 * AtomLib Atom Parser API
 *
 * @package AtomLib
 */
class AtomParser
{
    var $NS = 'http://www.w3.org/2005/Atom';
    var $ATOM_CONTENT_ELEMENTS = array('content', 'summary', 'title', 'subtitle', 'rights');
    var $ATOM_SIMPLE_ELEMENTS = array('id', 'updated', 'published', 'draft');
    var $debug = \false;
    var $depth = 0;
    var $indent = 2;
    var $in_content;
    var $ns_contexts = array();
    var $ns_decls = array();
    var $content_ns_decls = array();
    var $content_ns_contexts = array();
    var $is_xhtml = \false;
    var $is_html = \false;
    var $is_text = \true;
    var $skipped_div = \false;
    var $FILE = "php://input";
    var $feed;
    var $current;
    /**
     * PHP5 constructor.
     */
    function __construct()
    {
    }
    /**
     * PHP4 constructor.
     */
    public function AtomParser()
    {
    }
    /**
     * Map attributes to key="val"
     *
     * @param string $k Key
     * @param string $v Value
     * @return string
     */
    public static function map_attrs($k, $v)
    {
    }
    /**
     * Map XML namespace to string.
     *
     * @param indexish $p XML Namespace element index
     * @param array $n Two-element array pair. [ 0 => {namespace}, 1 => {url} ]
     * @return string 'xmlns="{url}"' or 'xmlns:{namespace}="{url}"'
     */
    public static function map_xmlns($p, $n)
    {
    }
    function _p($msg)
    {
    }
    function error_handler($log_level, $log_text, $error_file, $error_line)
    {
    }
    function parse()
    {
    }
    function start_element($parser, $name, $attrs)
    {
    }
    function end_element($parser, $name)
    {
    }
    function start_ns($parser, $prefix, $uri)
    {
    }
    function end_ns($parser, $prefix)
    {
    }
    function cdata($parser, $data)
    {
    }
    function _default($parser, $data)
    {
    }
    function ns_to_prefix($qname, $attr = \false)
    {
    }
    function is_declared_content_ns($new_mapping)
    {
    }
    function xml_escape($content)
    {
    }
}