<?php


/**
 * Display post tags form fields.
 *
 * @since 2.6.0
 *
 * @todo Create taxonomy-agnostic wrapper for this.
 *
 * @param WP_Post $post Post object.
 * @param array   $box {
 *     Tags meta box arguments.
 *
 *     @type string   $id       Meta box 'id' attribute.
 *     @type string   $title    Meta box title.
 *     @type callable $callback Meta box display callback.
 *     @type array    $args {
 *         Extra meta box arguments.
 *
 *         @type string $taxonomy Taxonomy. Default 'post_tag'.
 *     }
 * }
 * @phpstan-param array{
 *   id?: string,
 *   title?: string,
 *   callback?: callable,
 *   args?: array{
 *     taxonomy?: string,
 *   },
 * } $box
 */
function post_tags_meta_box($post, $box)
{
}