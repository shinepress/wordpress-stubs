<?php


/**
 * Registers a meta key.
 *
 * @since 3.3.0
 * @since 4.6.0 {@link https://core.trac.wordpress.org/ticket/35658 Modified
 *              to support an array of data to attach to registered meta keys}. Previous arguments for
 *              `$sanitize_callback` and `$auth_callback` have been folded into this array.
 *
 * @param string $object_type    Type of object this meta is registered to.
 * @param string $meta_key       Meta key to register.
 * @param array  $args {
 *     Data used to describe the meta key when registered.
 *
 *     @type string $type              The type of data associated with this meta key.
 *                                     Valid values are 'string', 'boolean', 'integer', and 'number'.
 *     @type string $description       A description of the data attached to this meta key.
 *     @type bool   $single            Whether the meta key has one value per object, or an array of values per object.
 *     @type string $sanitize_callback A function or method to call when sanitizing `$meta_key` data.
 *     @type string $auth_callback     Optional. A function or method to call when performing edit_post_meta, add_post_meta, and delete_post_meta capability checks.
 *     @type bool   $show_in_rest      Whether data associated with this meta key can be considered public.
 * }
 * @param string|array $deprecated Deprecated. Use `$args` instead.
 *
 * @return bool True if the meta key was successfully registered in the global array, false if not.
 *                       Registering a meta key with distinct sanitize and auth callbacks will fire those
 *                       callbacks, but will not add to the global registry.
 * @phpstan-param array{
 *   type?: string,
 *   description?: string,
 *   single?: bool,
 *   sanitize_callback?: string,
 *   auth_callback?: string,
 *   show_in_rest?: bool,
 * } $args
 */
function register_meta($object_type, $meta_key, $args, $deprecated = \null)
{
}