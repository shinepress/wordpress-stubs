<?php


/**
 * Installs the site.
 *
 * Runs the required functions to set up and populate the database,
 * including primary admin user and initial options.
 *
 * @since 2.1.0
 *
 * @param string $blog_title    Site title.
 * @param string $user_name     User's username.
 * @param string $user_email    User's email.
 * @param bool   $is_public     Whether the site is public.
 * @param string $deprecated    Optional. Not used.
 * @param string $user_password Optional. User's chosen password. Default empty (random password).
 * @param string $language      Optional. Language chosen. Default empty.
 * @return array {
 *     Data for the newly installed site.
 *
 *     @type string $url              The URL of the site.
 *     @type int    $user_id          The ID of the site owner.
 *     @type string $password         The password of the site owner, if their user account didn't already exist.
 *     @type string $password_message The explanatory message regarding the password.
 * }
 * @phpstan-return array{
 *   url: string,
 *   user_id: int,
 *   password: string,
 *   password_message: string,
 * }
 */
function wp_install(
    $blog_title,
    $user_name,
    $user_email,
    $is_public,
    $deprecated = '',
    #[\SensitiveParameter]
    $user_password = '',
    $language = ''
)
{
}