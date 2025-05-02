<?php

namespace SimplePie;

/**
 * Parses XML into something sane
 *
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_parser_class()}
 *
 * @package SimplePie
 * @subpackage Parsing
 */
class Parser implements \SimplePie\RegistryAware
{
    public $error_code;
    public $error_string;
    public $current_line;
    public $current_column;
    public $current_byte;
    public $separator = ' ';
    public $namespace = [''];
    public $element = [''];
    public $xml_base = [''];
    public $xml_base_explicit = [false];
    public $xml_lang = [''];
    public $data = [];
    public $datas = [[]];
    public $current_xhtml_construct = -1;
    public $encoding;
    protected $registry;
    public function set_registry(\SimplePie\Registry $registry)
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