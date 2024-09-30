<?php


/**
 * Handles `<media:restriction>` as defined in Media RSS
 *
 * Used by {@see SimplePie_Enclosure::get_restriction()} and {@see SimplePie_Enclosure::get_restrictions()}
 *
 * This class can be overloaded with {@see SimplePie::set_restriction_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Restriction
{
    /**
     * Relationship ('allow'/'deny')
     *
     * @var string
     * @see get_relationship()
     */
    var $relationship;
    /**
     * Type of restriction
     *
     * @var string
     * @see get_type()
     */
    var $type;
    /**
     * Restricted values
     *
     * @var string
     * @see get_value()
     */
    var $value;
    /**
     * Constructor, used to input the data
     *
     * For documentation on all the parameters, see the corresponding
     * properties and their accessors
     */
    public function __construct($relationship = \null, $type = \null, $value = \null)
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
     * Get the relationship
     *
     * @return string|null Either 'allow' or 'deny'
     */
    public function get_relationship()
    {
    }
    /**
     * Get the type
     *
     * @return string|null
     */
    public function get_type()
    {
    }
    /**
     * Get the list of restricted things
     *
     * @return string|null
     */
    public function get_value()
    {
    }
}