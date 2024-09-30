<?php


/**
 * Manages all category-related data
 *
 * Used by {@see SimplePie_Item::get_category()} and {@see SimplePie_Item::get_categories()}
 *
 * This class can be overloaded with {@see SimplePie::set_category_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Category
{
    /**
     * Category identifier
     *
     * @var string|null
     * @see get_term
     */
    var $term;
    /**
     * Categorization scheme identifier
     *
     * @var string|null
     * @see get_scheme()
     */
    var $scheme;
    /**
     * Human readable label
     *
     * @var string|null
     * @see get_label()
     */
    var $label;
    /**
     * Category type
     * 
     * category for <category>
     * subject for <dc:subject>
     *
     * @var string|null
     * @see get_type()
     */
    var $type;
    /**
     * Constructor, used to input the data
     *
     * @param string|null $term
     * @param string|null $scheme
     * @param string|null $label
     * @param string|null $type
     */
    public function __construct($term = \null, $scheme = \null, $label = \null, $type = \null)
    {
    }
    /**
     * String-ified version
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Get the category identifier
     *
     * @return string|null
     */
    public function get_term()
    {
    }
    /**
     * Get the categorization scheme identifier
     *
     * @return string|null
     */
    public function get_scheme()
    {
    }
    /**
     * Get the human readable label
     *
     * @param bool $strict
     * @return string|null
     */
    public function get_label($strict = \false)
    {
    }
    /**
     * Get the category type
     *
     * @return string|null
     */
    public function get_type()
    {
    }
}