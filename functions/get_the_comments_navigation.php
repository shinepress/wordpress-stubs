<?php


/**
 * Retrieves navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 *
 * @param array $args {
 *     Optional. Default comments navigation arguments.
 *
 *     @type string $prev_text          Anchor text to display in the previous comments link.
 *                                      Default 'Older comments'.
 *     @type string $next_text          Anchor text to display in the next comments link.
 *                                      Default 'Newer comments'.
 *     @type string $screen_reader_text Screen reader text for nav element. Default 'Comments navigation'.
 * }
 * @return string Markup for comments links.
 * @phpstan-param array{
 *   prev_text?: string,
 *   next_text?: string,
 *   screen_reader_text?: string,
 * } $args
 */
function get_the_comments_navigation($args = array())
{
}