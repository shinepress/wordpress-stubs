<?php


/**
 * Adds a permalink structure.
 *
 * @since 3.0.0
 *
 * @see WP_Rewrite::add_permastruct()
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $name   Name for permalink structure.
 * @param string $struct Permalink structure.
 * @param array  $args   Optional. Arguments for building the rules from the permalink structure,
 *                       see WP_Rewrite::add_permastruct() for full details. Default empty array.
 * @phpstan-param array{
 *   with_front?: bool,
 *   ep_mask?: int,
 *   paged?: bool,
 *   feed?: bool,
 *   forcomments?: bool,
 *   walk_dirs?: bool,
 *   endpoints?: bool,
 * } $args See WP_Rewrite::add_permastruct()
 */
function add_permastruct($name, $struct, $args = array())
{
}