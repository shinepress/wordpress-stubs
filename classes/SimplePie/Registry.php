<?php

namespace SimplePie;

/**
 * Handles creating objects and calling methods
 *
 * Access this via {@see \SimplePie\SimplePie::get_registry()}
 *
 * @package SimplePie
 */
class Registry
{
    /**
     * Default class mapping
     *
     * Overriding classes *must* subclass these.
     *
     * @var array<class-string, class-string>
     */
    protected $default = [\SimplePie\Cache::class => \SimplePie\Cache::class, \SimplePie\Locator::class => \SimplePie\Locator::class, \SimplePie\Parser::class => \SimplePie\Parser::class, \SimplePie\File::class => \SimplePie\File::class, \SimplePie\Sanitize::class => \SimplePie\Sanitize::class, \SimplePie\Item::class => \SimplePie\Item::class, \SimplePie\Author::class => \SimplePie\Author::class, \SimplePie\Category::class => \SimplePie\Category::class, \SimplePie\Enclosure::class => \SimplePie\Enclosure::class, \SimplePie\Caption::class => \SimplePie\Caption::class, \SimplePie\Copyright::class => \SimplePie\Copyright::class, \SimplePie\Credit::class => \SimplePie\Credit::class, \SimplePie\Rating::class => \SimplePie\Rating::class, \SimplePie\Restriction::class => \SimplePie\Restriction::class, \SimplePie\Content\Type\Sniffer::class => \SimplePie\Content\Type\Sniffer::class, \SimplePie\Source::class => \SimplePie\Source::class, \SimplePie\Misc::class => \SimplePie\Misc::class, \SimplePie\XML\Declaration\Parser::class => \SimplePie\XML\Declaration\Parser::class, \SimplePie\Parse\Date::class => \SimplePie\Parse\Date::class];
    /**
     * Class mapping
     *
     * @see register()
     * @var array
     */
    protected $classes = [];
    /**
     * Legacy classes
     *
     * @see register()
     * @var array<class-string>
     */
    protected $legacy = [];
    /**
     * Constructor
     *
     * No-op
     */
    public function __construct()
    {
    }
    /**
     * Register a class
     *
     * @param string $type See {@see $default} for names
     * @param class-string $class Class name, must subclass the corresponding default
     * @param bool $legacy Whether to enable legacy support for this class
     * @return bool Successfulness
     */
    public function register($type, $class, $legacy = false)
    {
    }
    /**
     * Get the class registered for a type
     *
     * Where possible, use {@see create()} or {@see call()} instead
     *
     * @template T
     * @param class-string<T> $type
     * @return class-string<T>|null
     */
    public function get_class($type)
    {
    }
    /**
     * Create a new instance of a given type
     *
     * @template T class-string $type
     * @param class-string<T> $type
     * @param array $parameters Parameters to pass to the constructor
     * @return T Instance of class
     */
    public function &create($type, $parameters = [])
    {
    }
    /**
     * Call a static method for a type
     *
     * @param class-string $type
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function &call($type, $method, $parameters = [])
    {
    }
}