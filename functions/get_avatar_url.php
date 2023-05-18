<?php


/**
 * Retrieves the avatar URL.
 *
 * @since 4.2.0
 *
 * @param mixed $id_or_email The Gravatar to retrieve a URL for. Accepts a user_id, gravatar md5 hash,
 *                           user email, WP_User object, WP_Post object, or WP_Comment object.
 * @param array $args {
 *     Optional. Arguments to return instead of the default arguments.
 *
 *     @type int    $size           Height and width of the avatar in pixels. Default 96.
 *     @type string $default        URL for the default image or a default type. Accepts '404' (return
 *                                  a 404 instead of a default image), 'retro' (8bit), 'monsterid' (monster),
 *                                  'wavatar' (cartoon face), 'indenticon' (the "quilt"), 'mystery', 'mm',
 *                                  or 'mysteryman' (The Oyster Man), 'blank' (transparent GIF), or
 *                                  'gravatar_default' (the Gravatar logo). Default is the value of the
 *                                  'avatar_default' option, with a fallback of 'mystery'.
 *     @type bool   $force_default  Whether to always show the default image, never the Gravatar. Default false.
 *     @type string $rating         What rating to display avatars up to. Accepts 'G', 'PG', 'R', 'X', and are
 *                                  judged in that order. Default is the value of the 'avatar_rating' option.
 *     @type string $scheme         URL scheme to use. See set_url_scheme() for accepted values.
 *                                  Default null.
 *     @type array  $processed_args When the function returns, the value will be the processed/sanitized $args
 *                                  plus a "found_avatar" guess. Pass as a reference. Default null.
 * }
 * @return string|false The URL of the avatar on success, false on failure.
 * @phpstan-param array{
 *   size?: int,
 *   default?: string,
 *   force_default?: bool,
 *   rating?: string,
 *   scheme?: string,
 *   processed_args?: array,
 * } $args
 */
function get_avatar_url($id_or_email, $args = \null)
{
}