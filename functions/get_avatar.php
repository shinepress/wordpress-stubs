<?php


/**
 * Retrieve the avatar `<img>` tag for a user, email address, MD5 hash, comment, or post.
 *
 * @since 2.5.0
 * @since 4.2.0 Optional `$args` parameter added.
 *
 * @param mixed  $id_or_email The Gravatar to retrieve. Accepts a user_id, gravatar md5 hash,
 *                            user email, WP_User object, WP_Post object, or WP_Comment object.
 * @param int    $size        Optional. Height and width of the avatar image file in pixels. Default 96.
 * @param string $default     Optional. URL for the default image or a default type. Accepts '404'
 *                            (return a 404 instead of a default image), 'retro' (8bit), 'monsterid'
 *                            (monster), 'wavatar' (cartoon face), 'indenticon' (the "quilt"),
 *                            'mystery', 'mm', or 'mysteryman' (The Oyster Man), 'blank' (transparent GIF),
 *                            or 'gravatar_default' (the Gravatar logo). Default is the value of the
 *                            'avatar_default' option, with a fallback of 'mystery'.
 * @param string $alt         Optional. Alternative text to use in img tag. Default empty.
 * @param array  $args {
 *     Optional. Extra arguments to retrieve the avatar.
 *
 *     @type int          $height        Display height of the avatar in pixels. Defaults to $size.
 *     @type int          $width         Display width of the avatar in pixels. Defaults to $size.
 *     @type bool         $force_default Whether to always show the default image, never the Gravatar. Default false.
 *     @type string       $rating        What rating to display avatars up to. Accepts 'G', 'PG', 'R', 'X', and are
 *                                       judged in that order. Default is the value of the 'avatar_rating' option.
 *     @type string       $scheme        URL scheme to use. See set_url_scheme() for accepted values.
 *                                       Default null.
 *     @type array|string $class         Array or string of additional classes to add to the img element.
 *                                       Default null.
 *     @type bool         $force_display Whether to always show the avatar - ignores the show_avatars option.
 *                                       Default false.
 *     @type string       $loading       Value for the `loading` attribute.
 *                                       Default null.
 *     @type string       $extra_attr    HTML attributes to insert in the IMG element. Is not sanitized. Default empty.
 * }
 * @return string|false `<img>` tag for the user's avatar. False on failure.
 * @phpstan-param '404'|'retro'|'monsterid'|'wavatar'|'indenticon'|'mystery'|'mm'|'mysteryman' $default
 * @phpstan-param array{
 *   height?: int,
 *   width?: int,
 *   force_default?: bool,
 *   rating?: string,
 *   scheme?: string,
 *   class?: array|string,
 *   force_display?: bool,
 *   loading?: string,
 *   extra_attr?: string,
 * } $args
 */
function get_avatar($id_or_email, $size = 96, $default = '', $alt = '', $args = \null)
{
}