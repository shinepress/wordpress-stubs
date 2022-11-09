<?php


/**
 * Displays the navigation to next/previous post, when applicable.
 *
 * @since 4.1.0
 *
 * @param array $args Optional. See get_the_post_navigation() for available arguments.
 *                    Default empty array.
 * @phpstan-param array{
 *   prev_text?: string,
 *   next_text?: string,
 *   in_same_term?: bool,
 *   excluded_terms?: array|string,
 *   taxonomy?: string,
 *   screen_reader_text?: string,
 *   aria_label?: string,
 * } $args See get_the_post_navigation()
 */
function the_post_navigation($args = array())
{
}