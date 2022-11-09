<?php


/**
 * Displays a meta box for a post type menu item.
 *
 * @since 3.0.0
 *
 * @global int        $_nav_menu_placeholder
 * @global int|string $nav_menu_selected_id
 *
 * @param string $object Not used.
 * @param array  $box {
 *     Post type menu item meta box arguments.
 *
 *     @type string       $id       Meta box 'id' attribute.
 *     @type string       $title    Meta box title.
 *     @type callable     $callback Meta box display callback.
 *     @type WP_Post_Type $args     Extra meta box arguments (the post type object for this meta box).
 * }
 * @phpstan-param array{
 *   id?: string,
 *   title?: string,
 *   callback?: callable,
 *   args?: WP_Post_Type,
 * } $box
 */
function wp_nav_menu_item_post_type_meta_box($object, $box)
{
}