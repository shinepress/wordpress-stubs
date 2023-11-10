<?php


/**
 * Removes a permalink structure.
 *
 * Can only be used to remove permastructs that were added using add_permastruct().
 * Built-in permastructs cannot be removed.
 *
 * @since 4.5.0
 *
 * @see WP_Rewrite::remove_permastruct()
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $name Name for permalink structure.
 */
function remove_permastruct($name)
{
}