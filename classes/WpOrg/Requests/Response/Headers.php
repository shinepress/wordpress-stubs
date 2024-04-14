<?php

namespace WpOrg\Requests\Response;

/**
 * Case-insensitive dictionary, suitable for HTTP headers
 *
 * @package Requests
 */
class Headers extends \WpOrg\Requests\Utility\CaseInsensitiveDictionary
{
    /**
     * Get the given header
     *
     * Unlike {@see \WpOrg\Requests\Response\Headers::getValues()}, this returns a string. If there are
     * multiple values, it concatenates them with a comma as per RFC2616.
     *
     * Avoid using this where commas may be used unquoted in values, such as
     * Set-Cookie headers.
     *
     * @param string $offset
     * @return string|null Header value
     */
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
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Get all values for a given header
     *
     * @param string $offset
     * @return array|null Header values
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not valid as an array key.
     */
    public function getValues($offset)
    {
    }
    /**
     * Flattens a value into a string
     *
     * Converts an array into a string by imploding values with a comma, as per
     * RFC2616's rules for folding headers.
     *
     * @param string|array $value Value to flatten
     * @return string Flattened value
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or an array.
     */
    public function flatten($value)
    {
    }
    /**
     * Get an iterator for the data
     *
     * Converts the internally stored values to a comma-separated string if there is more
     * than one value for a key.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
    }
}