<?php


/**
 * Get a sample permalink based off of the post name.
 *
 * @since 2.5.0
 *
 * @param int|WP_Post $id    Post ID or post object.
 * @param string      $title Optional. Title to override the post's current title when generating the post name. Default null.
 * @param string      $name  Optional. Name to override the post name. Default null.
 * @return array {
 *     Array containing the sample permalink with placeholder for the post name, and the post name.
 *
 *     @type string $0 The permalink with placeholder for the post name.
 *     @type string $1 The post name.
 * }
 * @phpstan-return array{
 *   0: string,
 *   1: string,
 * }
 */
function get_sample_permalink($id, $title = \null, $name = \null)
{
}