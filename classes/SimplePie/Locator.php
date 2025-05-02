<?php

namespace SimplePie;

/**
 * Used for feed auto-discovery
 *
 *
 * This class can be overloaded with {@see \SimplePie\SimplePie::set_locator_class()}
 *
 * @package SimplePie
 */
class Locator implements \SimplePie\RegistryAware
{
    public $useragent;
    public $timeout;
    public $file;
    public $local = [];
    public $elsewhere = [];
    public $cached_entities = [];
    public $http_base;
    public $base;
    public $base_location = 0;
    public $checked_feeds = 0;
    public $max_checked_feeds = 10;
    public $force_fsockopen = false;
    public $curl_options = [];
    public $dom;
    protected $registry;
    public function __construct(\SimplePie\File $file, $timeout = 10, $useragent = null, $max_checked_feeds = 10, $force_fsockopen = false, $curl_options = [])
    {
    }
    public function set_registry(\SimplePie\Registry $registry)
    {
    }
    public function find($type = \SimplePie\SimplePie::LOCATOR_ALL, &$working = null)
    {
    }
    public function is_feed($file, $check_html = false)
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