<?php


/**
 * Retrieves a paginated navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 *
 * @see paginate_comments_links()
 *
 * @param array $args {
 *     Optional. Default pagination arguments.
 *
 *     @type string $screen_reader_text Screen reader text for nav element. Default 'Comments navigation'.
 * }
 * @return string Markup for pagination links.
 * @phpstan-param array{
 *   screen_reader_text?: string,
 * } $args
 */
function get_the_comments_pagination($args = array())
{
}