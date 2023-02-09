<?php


/**
 * Displays a paginated navigation to next/previous set of posts, when applicable.
 *
 * @since 4.1.0
 *
 * @param array $args Optional. See get_the_posts_pagination() for available arguments.
 *                    Default empty array.
 * @phpstan-param array{
 *   screen_reader_text?: string,
 *   aria_label?: string,
 *   class?: string,
 *   base?: string,
 *   format?: string,
 *   total?: int,
 *   current?: int,
 *   aria_current?: string,
 *   show_all?: bool,
 *   end_size?: int,
 *   mid_size?: int,
 *   prev_next?: bool,
 *   prev_text?: string,
 *   next_text?: string,
 *   type?: string,
 *   add_args?: array,
 *   add_fragment?: string,
 *   before_page_number?: string,
 *   after_page_number?: string,
 * } $args See get_the_posts_pagination()
 */
function the_posts_pagination($args = array())
{
}