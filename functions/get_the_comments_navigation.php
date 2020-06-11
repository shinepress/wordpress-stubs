<?php


/**
 * Retrieves navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 * @since 5.3.0 Added the `aria_label` parameter.
 *
 * @param array $args {
 *     Optional. Default comments navigation arguments.
 *
 *     @type string $prev_text          Anchor text to display in the previous comments link.
 *                                      Default 'Older comments'.
 *     @type string $next_text          Anchor text to display in the next comments link.
 *                                      Default 'Newer comments'.
 *     @type string $screen_reader_text Screen reader text for the nav element. Default 'Comments navigation'.
 *     @type string $aria_label         ARIA label text for the nav element. Default 'Comments'.
 * }
 * @return string Markup for comments links.
 */
function get_the_comments_navigation($args = array())
{
}