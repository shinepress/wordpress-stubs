<?php


/**
 * Registers a meta key for terms.
 *
 * @since 4.9.8
 *
 * @param string $taxonomy Taxonomy to register a meta key for. Pass an empty string
 *                         to register the meta key across all existing taxonomies.
 * @param string $meta_key The meta key to register.
 * @param array  $args     Data used to describe the meta key when registered. See
 *                         {@see register_meta()} for a list of supported arguments.
 * @return bool True if the meta key was successfully registered, false if not.
 * @phpstan-param array{
 *   object_subtype?: string,
 *   type?: string,
 *   description?: string,
 *   single?: bool,
 *   default?: mixed,
 *   sanitize_callback?: callable,
 *   auth_callback?: callable,
 *   show_in_rest?: bool|array,
 *   revisions_enabled?: bool,
 * } $args See register_meta()
 */
function register_term_meta($taxonomy, $meta_key, array $args)
{
}