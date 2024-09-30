<?php


/**
 * Manages all author-related data
 *
 * Used by {@see SimplePie_Item::get_author()} and {@see SimplePie::get_authors()}
 *
 * This class can be overloaded with {@see SimplePie::set_author_class()}
 *
 * @package SimplePie
 * @subpackage API
 */
class SimplePie_Author
{
    /**
     * Author's name
     *
     * @var string
     * @see get_name()
     */
    var $name;
    /**
     * Author's link
     *
     * @var string
     * @see get_link()
     */
    var $link;
    /**
     * Author's email address
     *
     * @var string
     * @see get_email()
     */
    var $email;
    /**
     * Constructor, used to input the data
     *
     * @param string $name
     * @param string $link
     * @param string $email
     */
    public function __construct($name = \null, $link = \null, $email = \null)
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
     * Author's name
     *
     * @return string|null
     */
    public function get_name()
    {
    }
    /**
     * Author's link
     *
     * @return string|null
     */
    public function get_link()
    {
    }
    /**
     * Author's email address
     *
     * @return string|null
     */
    public function get_email()
    {
    }
}