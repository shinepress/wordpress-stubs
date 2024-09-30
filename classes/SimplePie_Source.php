<?php


/**
 * Handles `<atom:source>`
 *
 * Used by {@see SimplePie_Item::get_source()}
 *
 * This class can be overloaded with {@see SimplePie::set_source_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Source
{
    var $item;
    var $data = array();
    protected $registry;
    public function __construct($item, $data)
    {
    }
    public function set_registry(\SimplePie_Registry $registry)
    {
    }
    public function __toString()
    {
    }
    public function get_source_tags($namespace, $tag)
    {
    }
    public function get_base($element = array())
    {
    }
    public function sanitize($data, $type, $base = '')
    {
    }
    public function get_item()
    {
    }
    public function get_title()
    {
    }
    public function get_category($key = 0)
    {
    }
    public function get_categories()
    {
    }
    public function get_author($key = 0)
    {
    }
    public function get_authors()
    {
    }
    public function get_contributor($key = 0)
    {
    }
    public function get_contributors()
    {
    }
    public function get_link($key = 0, $rel = 'alternate')
    {
    }
    /**
     * Added for parity between the parent-level and the item/entry-level.
     */
    public function get_permalink()
    {
    }
    public function get_links($rel = 'alternate')
    {
    }
    public function get_description()
    {
    }
    public function get_copyright()
    {
    }
    public function get_language()
    {
    }
    public function get_latitude()
    {
    }
    public function get_longitude()
    {
    }
    public function get_image_url()
    {
    }
}