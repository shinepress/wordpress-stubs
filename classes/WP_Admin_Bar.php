<?php


/**
 * Toolbar API: WP_Admin_Bar class
 *
 * @package WordPress
 * @subpackage Toolbar
 * @since 3.1.0
 */
/**
 * Core class used to implement the Toolbar API.
 *
 * @since 3.1.0
 */
class WP_Admin_Bar
{
    public $user;
    /**
     * @param string $name
     * @return string|array|void
     */
    public function __get($name)
    {
    }
    /**
     */
    public function initialize()
    {
    }
    /**
     * Add a node (menu item) to the Admin Bar menu.
     *
     * @since 3.3.0
     *
     * @param array $node The attributes that define the node.
     */
    public function add_menu($node)
    {
    }
    /**
     * Remove a node from the admin bar.
     *
     * @since 3.1.0
     *
     * @param string $id The menu slug to remove.
     */
    public function remove_menu($id)
    {
    }
    /**
     * Adds a node to the menu.
     *
     * @since 3.1.0
     * @since 4.5.0 Added the ability to pass 'lang' and 'dir' meta data.
     *
     * @param array $args {
     *     Arguments for adding a node.
     *
     *     @type string $id     ID of the item.
     *     @type string $title  Title of the node.
     *     @type string $parent Optional. ID of the parent node.
     *     @type string $href   Optional. Link for the item.
     *     @type bool   $group  Optional. Whether or not the node is a group. Default false.
     *     @type array  $meta   Meta data including the following keys: 'html', 'class', 'rel', 'lang', 'dir',
     *                          'onclick', 'target', 'title', 'tabindex'. Default empty.
     * }
     * @phpstan-param array{
     *   id?: string,
     *   title?: string,
     *   parent?: string,
     *   href?: string,
     *   group?: bool,
     *   meta?: array,
     * } $args
     * @phpstan-return void
     */
    public function add_node($args)
    {
    }
    /**
     * @param array $args
     */
    final protected function _set_node($args)
    {
    }
    /**
     * Gets a node.
     *
     * @param string $id
     * @return object|void Node.
     */
    final public function get_node($id)
    {
    }
    /**
     * @param string $id
     * @return object|void
     */
    final protected function _get_node($id)
    {
    }
    /**
     * @return array|void
     */
    final public function get_nodes()
    {
    }
    /**
     * @return array|void
     */
    final protected function _get_nodes()
    {
    }
    /**
     * Add a group to a menu node.
     *
     * @since 3.3.0
     *
     * @param array $args {
     *     Array of arguments for adding a group.
     *
     *     @type string $id     ID of the item.
     *     @type string $parent Optional. ID of the parent node. Default 'root'.
     *     @type array  $meta   Meta data for the group including the following keys:
     *                         'class', 'onclick', 'target', and 'title'.
     * }
     * @phpstan-param array{
     *   id?: string,
     *   parent?: string,
     *   meta?: array,
     * } $args
     */
    final public function add_group($args)
    {
    }
    /**
     * Remove a node.
     *
     * @param string $id The ID of the item.
     */
    public function remove_node($id)
    {
    }
    /**
     * @param string $id
     */
    final protected function _unset_node($id)
    {
    }
    /**
     */
    public function render()
    {
    }
    /**
     * @return object|void
     */
    final protected function _bind()
    {
    }
    /**
     * @param object $root
     */
    final protected function _render($root)
    {
    }
    /**
     * @param object $node
     * @phpstan-return void
     */
    final protected function _render_container($node)
    {
    }
    /**
     * @param object $node
     * @phpstan-return void
     */
    final protected function _render_group($node)
    {
    }
    /**
     * @param object $node
     * @phpstan-return void
     */
    final protected function _render_item($node)
    {
    }
    /**
     * Renders toolbar items recursively.
     *
     * @since 3.1.0
     * @deprecated 3.3.0 Use WP_Admin_Bar::_render_item() or WP_Admin_bar::render() instead.
     * @see WP_Admin_Bar::_render_item()
     * @see WP_Admin_Bar::render()
     *
     * @param string $id    Unused.
     * @param object $node
     */
    public function recursive_render($id, $node)
    {
    }
    /**
     */
    public function add_menus()
    {
    }
}