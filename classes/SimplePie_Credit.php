<?php


/**
 * Handles `<media:credit>` as defined in Media RSS
 *
 * Used by {@see SimplePie_Enclosure::get_credit()} and {@see SimplePie_Enclosure::get_credits()}
 *
 * This class can be overloaded with {@see SimplePie::set_credit_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Credit
{
    /**
     * Credited role
     *
     * @var string
     * @see get_role()
     */
    var $role;
    /**
     * Organizational scheme
     *
     * @var string
     * @see get_scheme()
     */
    var $scheme;
    /**
     * Credited name
     *
     * @var string
     * @see get_name()
     */
    var $name;
    /**
     * Constructor, used to input the data
     *
     * For documentation on all the parameters, see the corresponding
     * properties and their accessors
     */
    public function __construct($role = \null, $scheme = \null, $name = \null)
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
     * Get the role of the person receiving credit
     *
     * @return string|null
     */
    public function get_role()
    {
    }
    /**
     * Get the organizational scheme
     *
     * @return string|null
     */
    public function get_scheme()
    {
    }
    /**
     * Get the credited person/entity's name
     *
     * @return string|null
     */
    public function get_name()
    {
    }
}