<?php


class MagpieRSS
{
    var $parser;
    var $current_item = array();
    // item currently being parsed
    var $items = array();
    // collection of parsed items
    var $channel = array();
    // hash of channel fields
    var $textinput = array();
    var $image = array();
    var $feed_type;
    var $feed_version;
    // parser variables
    var $stack = array();
    // parser stack
    var $inchannel = \false;
    var $initem = \false;
    var $incontent = \false;
    // if in Atom <content mode="xml"> field
    var $intextinput = \false;
    var $inimage = \false;
    var $current_field = '';
    var $current_namespace = \false;
    //var $ERROR = "";
    var $_CONTENT_CONSTRUCTS = array('content', 'summary', 'info', 'title', 'tagline', 'copyright');
    /**
     * PHP5 constructor.
     */
    function __construct($source)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function MagpieRSS($source)
    {
    }
    function feed_start_element($p, $element, &$attrs)
    {
    }
    function feed_cdata($p, $text)
    {
    }
    function feed_end_element($p, $el)
    {
    }
    function concat(&$str1, $str2 = "")
    {
    }
    function append_content($text)
    {
    }
    // smart append - field and namespace aware
    function append($el, $text)
    {
    }
    function normalize()
    {
    }
    function is_rss()
    {
    }
    function is_atom()
    {
    }
    function map_attrs($k, $v)
    {
    }
    function error($errormsg, $lvl = \E_USER_WARNING)
    {
    }
}