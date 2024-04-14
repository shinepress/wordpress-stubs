<?php


/**
 * Generates Publishing Soon and Recently Published sections.
 *
 * @since 3.8.0
 *
 * @param array $args {
 *     An array of query and display arguments.
 *
 *     @type int    $max     Number of posts to display.
 *     @type string $status  Post status.
 *     @type string $order   Designates ascending ('ASC') or descending ('DESC') order.
 *     @type string $title   Section title.
 *     @type string $id      The container id.
 * }
 * @return bool False if no posts were found. True otherwise.
 * @phpstan-param array{
 *   max?: int,
 *   status?: string,
 *   order?: string,
 *   title?: string,
 *   id?: string,
 * } $args
 */
function wp_dashboard_recent_posts($args)
{
}