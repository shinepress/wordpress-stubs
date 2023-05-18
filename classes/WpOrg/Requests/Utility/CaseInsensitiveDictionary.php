<?php

namespace WpOrg\Requests\Utility;

/**
 * Case-insensitive dictionary, suitable for HTTP headers
 *
 * @package Requests\Utilities
 */
class CaseInsensitiveDictionary implements \ArrayAccess, \IteratorAggregate
{
    /**
     * Actual item data
     *
     * @var array
     */
    protected $data = [];
    /**
     * Creates a case insensitive dictionary.
     *
     * @param array $data Dictionary/map to convert to case-insensitive
     */
    public function __construct(array $data = [])
    {
    }
    /**
     * Check if the given item exists
     *
     * @param string $offset Item key
     * @return boolean Does the item exist?
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    /**
     * Get the value for the item
     *
     * @param string $offset Item key
     * @return string|null Item value (null if the item key doesn't exist)
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * Set the given item
     *
     * @param string $offset Item name
     * @param string $value Item value
     *
     * @throws \WpOrg\Requests\Exception On attempting to use dictionary as list (`invalidset`)
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Unset the given header
     *
     * @param string $offset
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /**
     * Get an iterator for the data
     *
     * @return \ArrayIterator
     */
    #[\ReturnTypeWillChange]
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