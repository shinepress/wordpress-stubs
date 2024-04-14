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
     * @param array $data
     * @param callable $callback Callback to be called on each value
     *
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $data argument is not iterable.
     */
    public function __construct($data, $callback)
    {
    }
    /**
     * @inheritdoc
     *
     * @phpcs:disable PHPCompatibility.FunctionNameRestrictions.NewMagicMethods.__unserializeFound
     */
    #[\ReturnTypeWillChange]
    public function __unserialize($data)
    {
    }
    // phpcs:enable
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
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function unserialize($data)
    {
    }
}