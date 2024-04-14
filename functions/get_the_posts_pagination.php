<?php


/**
 * Retrieves a paginated navigation to next/previous set of posts, when applicable.
 *
 * @since 4.1.0
 *
 * @param array $args {
 *     Optional. Default pagination arguments, see paginate_links().
 *
 *     @type string $screen_reader_text Screen reader text for navigation element.
 *                                      Default 'Posts navigation'.
 * }
 * @return string Markup for pagination links.
 * @phpstan-param array{
 *   screen_reader_text?: string,
 *   base?: string,
 *   format?: string,
 *   total?: int,
 *   current?: int,
 *   aria_current?: string,
 *   show_all?: bool,
 *   end_size?: int,
 *   mid_size?: int,
 *   prev_next?: bool,
 *   prev_text?: bool,
 *   next_text?: bool,
 *   type?: string,
 *   add_args?: array,
 *   add_fragment?: string,
 *   before_page_number?: string,
 *   after_page_number?: string,
 * } $args
 */
function get_the_posts_pagination($args = array())
{
}