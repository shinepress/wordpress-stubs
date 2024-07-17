<?php


/**
 * Case-insensitive dictionary, suitable for HTTP headers
 *
 * @package Requests
 * @subpackage Utilities
 */
/**
 * Case-insensitive dictionary, suitable for HTTP headers
 *
 * @package Requests
 * @subpackage Utilities
 */
class Requests_Utility_CaseInsensitiveDictionary implements \ArrayAccess, \IteratorAggregate
{
    /**
     * Actual item data
     *
     * @var array
     */
    protected $data = array();
    /**
     * Creates a case insensitive dictionary.
     *
     * @param array $data Dictionary/map to convert to case-insensitive
     */
    public function __construct(array $data = array())
    {
    }
    /**
     * Check if the given item exists
     *
     * @param string $key Item key
     * @return boolean Does the item exist?
     */
    #[ReturnTypeWillChange]
    public function offsetExists($key)
    {
    }
    /**
     * Get the value for the item
     *
     * @param string $key Item key
     * @return string|null Item value (null if offsetExists is false)
     */
    #[ReturnTypeWillChange]
    public function offsetGet($key)
    {
    }
    /**
     * Set the given item
     *
     * @throws Requests_Exception On attempting to use dictionary as list (`invalidset`)
     *
     * @param string $key Item name
     * @param string $value Item value
     */
    #[ReturnTypeWillChange]
    public function offsetSet($key, $value)
    {
    }
    /**
     * Unset the given header
     *
     * @param string $key
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($key)
    {
    }
    /**
     * Get an iterator for the data
     *
     * @return ArrayIterator
     */
    #[ReturnTypeWillChange]
    public function getIterator()
    {
    }
    /**
     * Get the headers as an array
     *
     * @return array Header data
     */
    public function getAll()
    {
    }
}