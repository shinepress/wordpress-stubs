<?php

namespace WpOrg\Requests\Utility;

/**
 * Iterator for arrays requiring filtered values
 *
 * @package Requests\Utilities
 */
final class FilteredIterator extends \ArrayIterator
{
    /**
     * Create a new iterator
     *
     * @param array    $data     The array or object to be iterated on.
     * @param callable $callback Callback to be called on each value
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $data argument is not iterable.
     */
    public function __construct($data, $callback)
    {
    }
    /**
     * Prevent unserialization of the object for security reasons.
     *
     * @phpcs:disable PHPCompatibility.FunctionNameRestrictions.NewMagicMethods.__unserializeFound
     *
     * @param array $data Restored array of data originally serialized.
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function __unserialize($data)
    {
    }
    // phpcs:enable
    /**
     * Perform reinitialization tasks.
     *
     * Prevents a callback from being injected during unserialization of an object.
     *
     * @return void
     */
    public function __wakeup()
    {
    }
    /**
     * Get the current item's value after filtering
     *
     * @return string
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     * Prevent creating a PHP value from a stored representation of the object for security reasons.
     *
     * @param string $data The serialized string.
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function unserialize($data)
    {
    }
}