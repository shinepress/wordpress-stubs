<?php


/**
 * Used for feed auto-discovery
 *
 *
 * This class can be overloaded with {@see SimplePie::set_locator_class()}
 *
 * @package SimplePie
 */
class SimplePie_Locator
{
    var $useragent;
    var $timeout;
    var $file;
    var $local = array();
    var $elsewhere = array();
    var $cached_entities = array();
    var $http_base;
    var $base;
    var $base_location = 0;
    var $checked_feeds = 0;
    var $max_checked_feeds = 10;
    var $force_fsockopen = \false;
    var $curl_options = array();
    var $dom;
    protected $registry;
    public function __construct(\SimplePie_File $file, $timeout = 10, $useragent = \null, $max_checked_feeds = 10, $force_fsockopen = \false, $curl_options = array())
    {
    }
    public function set_registry(\SimplePie_Registry $registry)
    {
    }
    public function find($type = \SIMPLEPIE_LOCATOR_ALL, &$working = \null)
    {
    }
    public function is_feed($file, $check_html = \false)
    {
    }
    public function get_base()
    {
    }
    public function autodiscovery()
    {
    }
    protected function search_elements_by_tag($name, &$done, $feeds)
    {
    }
    public function get_links()
    {
    }
    public function get_rel_link($rel)
    {
    }
    public function extension(&$array)
    {
    }
    public function body(&$array)
    {
    }
}