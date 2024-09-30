<?php


/**
 * Parses XML into something sane
 *
 *
 * This class can be overloaded with {@see SimplePie::set_parser_class()}
 *
 * @package SimplePie
 * @subpackage Parsing
 */
class SimplePie_Parser
{
    var $error_code;
    var $error_string;
    var $current_line;
    var $current_column;
    var $current_byte;
    var $separator = ' ';
    var $namespace = array('');
    var $element = array('');
    var $xml_base = array('');
    var $xml_base_explicit = array(\false);
    var $xml_lang = array('');
    var $data = array();
    var $datas = array(array());
    var $current_xhtml_construct = -1;
    var $encoding;
    protected $registry;
    public function set_registry(\SimplePie_Registry $registry)
    {
    }
    public function parse(&$data, $encoding, $url = '')
    {
    }
    public function get_error_code()
    {
    }
    public function get_error_string()
    {
    }
    public function get_current_line()
    {
    }
    public function get_current_column()
    {
    }
    public function get_current_byte()
    {
    }
    public function get_data()
    {
    }
    public function tag_open($parser, $tag, $attributes)
    {
    }
    public function cdata($parser, $cdata)
    {
    }
    public function tag_close($parser, $tag)
    {
    }
    public function split_ns($string)
    {
    }
}