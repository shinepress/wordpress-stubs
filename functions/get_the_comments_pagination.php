<?php


/**
 * Retrieves a paginated navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 * @since 5.3.0 Added the `aria_label` parameter.
 * @since 5.5.0 Added the `class` parameter.
 *
 * @see paginate_comments_links()
 *
 * @param array $args {
 *     Optional. Default pagination arguments.
 *
 *     @type string $screen_reader_text Screen reader text for the nav element. Default 'Comments pagination'.
 *     @type string $aria_label         ARIA label text for the nav element. Default 'Comments pagination'.
 *     @type string $class              Custom class for the nav element. Default 'comments-pagination'.
 * }
 * @return string Markup for pagination links.
 * @phpstan-param array{
 *   screen_reader_text?: string,
 *   aria_label?: string,
 *   class?: string,
 * } $args
 */
function get_the_comments_pagination($args = array())
{
}