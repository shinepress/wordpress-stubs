<?php


/**
 * Retrieves a paginated navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 * @since 5.3.0 Added the `aria_label` parameter.
 *
 * @see paginate_comments_links()
 *
 * @param array $args {
 *     Optional. Default pagination arguments.
 *
 *     @type string $screen_reader_text Screen reader text for the nav element. Default 'Comments navigation'.
 *     @type string $aria_label         ARIA label text for the nav element. Default 'Comments'.
 * }
 * @return string Markup for pagination links.
 */
function get_the_comments_pagination($args = array())
{
}