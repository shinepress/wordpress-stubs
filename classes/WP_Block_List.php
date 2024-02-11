<?php


/**
 * Blocks API: WP_Block_List class
 *
 * @package WordPress
 * @since 5.5.0
 */
/**
 * Class representing a list of block instances.
 *
 * @since 5.5.0
 * @phpstan-implements ArrayAccess<int, WP_Block>
 */
#[\AllowDynamicProperties]
class WP_Block_List implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * Original array of parsed block data, or block instances.
     *
     * @since 5.5.0
     * @var array[]|WP_Block[]
     * @access protected
     */
    protected $blocks;
    /**
     * All available context of the current hierarchy.
     *
     * @since 5.5.0
     * @var array
     * @access protected
     */
    protected $available_context;
    /**
     * Block type registry to use in constructing block instances.
     *
     * @since 5.5.0
     * @var WP_Block_Type_Registry
     * @access protected
     */
    protected $registry;
    /**
     * Constructor.
     *
     * Populates object properties from the provided block instance argument.
     *
     * @since 5.5.0
     *
     * @param array[]|WP_Block[]     $blocks            Array of parsed block data, or block instances.
     * @param array                  $available_context Optional array of ancestry context values.
     * @param WP_Block_Type_Registry $registry          Optional block type registry.
     */
    public function __construct($blocks, $available_context = array(), $registry = \null)
    {
    }
    /**
     * Returns true if a block exists by the specified block offset, or false
     * otherwise.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param string $offset Offset of block to check for.
     * @return bool Whether block exists.
     * @phpstan-param int $offset
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    /**
     * Returns the value by the specified block offset.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param string $offset Offset of block value to retrieve.
     * @return mixed|null Block value if exists, or null.
     * @phpstan-param int $offset
     * @phpstan-return WP_Block|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * Assign a block value by the specified block offset.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param string $offset Offset of block value to set.
     * @param mixed  $value Block value.
     * @phpstan-param int|null $offset
     * @phpstan-return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * Unset a block.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param string $offset Offset of block value to unset.
     * @phpstan-param int $offset
     * @phpstan-return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /**
     * Rewinds back to the first element of the Iterator.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/iterator.rewind.php
     */
    #[\ReturnTypeWillChange]
    public function rewind()
    {
    }
    /**
     * Returns the current element of the block list.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/iterator.current.php
     *
     * @return mixed Current element.
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     * Returns the key of the current element of the block list.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/iterator.key.php
     *
     * @return mixed Key of the current element.
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * Moves the current position of the block list to the next element.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/iterator.next.php
     */
    #[\ReturnTypeWillChange]
    public function next()
    {
    }
    /**
     * Checks if current position is valid.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/iterator.valid.php
     */
    #[\ReturnTypeWillChange]
    public function valid()
    {
    }
    /**
     * Returns the count of blocks in the list.
     *
     * @since 5.5.0
     *
     * @link https://www.php.net/manual/en/countable.count.php
     *
     * @return int Block count.
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
    }
}