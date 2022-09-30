<?php


/**
 * Display post format form elements.
 *
 * @since 3.1.0
 *
 * @param WP_Post $post Post object.
 * @param array   $box {
 *     Post formats meta box arguments.
 *
 *     @type string   $id       Meta box 'id' attribute.
 *     @type string   $title    Meta box title.
 *     @type callable $callback Meta box display callback.
 *     @type array    $args     Extra meta box arguments.
 * }
 * @phpstan-param array{
 *   id?: string,
 *   title?: string,
 *   callback?: callable,
 *   args?: array,
 * } $box
 */
function post_format_meta_box($post, $box)
{
}