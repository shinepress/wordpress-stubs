<?php

namespace WpOrg\Requests;

/**
 * Handles adding and dispatching events
 *
 * @package Requests\EventDispatcher
 */
class Hooks implements \WpOrg\Requests\HookManager
{
    /**
     * Registered callbacks for each hook
     *
     * @var array
     */
    protected $hooks = [];
    /**
     * Register a callback for a hook
     *
     * @param string $hook Hook name
     * @param callable $callback Function/method to call on event
     * @param int $priority Priority number. <0 is executed earlier, >0 is executed later
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $hook argument is not a string.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $callback argument is not callable.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $priority argument is not an integer.
     */
    public function register($hook, $callback, $priority = 0)
    {
    }
    /**
     * Dispatch a message
     *
     * @param string $hook Hook name
     * @param array $parameters Parameters to pass to callbacks
     * @return boolean Successfulness
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $hook argument is not a string.
     * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $parameters argument is not an array.
     */
    public function dispatch($hook, $parameters = [])
    {
    }
    public function __wakeup()
    {
    }
}