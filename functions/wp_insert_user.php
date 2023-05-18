<?php


/**
 * Insert a user into the database.
 *
 * Most of the `$userdata` array fields have filters associated with the values. Exceptions are
 * 'ID', 'rich_editing', 'syntax_highlighting', 'comment_shortcuts', 'admin_color', 'use_ssl',
 * 'user_registered', 'user_activation_key', 'spam', and 'role'. The filters have the prefix
 * 'pre_user_' followed by the field name. An example using 'description' would have the filter
 * called 'pre_user_description' that can be hooked into.
 *
 * @since 2.0.0
 * @since 3.6.0 The `aim`, `jabber`, and `yim` fields were removed as default user contact
 *              methods for new installations. See wp_get_user_contact_methods().
 * @since 4.7.0 The user's locale can be passed to `$userdata`.
 * @since 5.3.0 The `user_activation_key` field can be passed to `$userdata`.
 * @since 5.3.0 The `spam` field can be passed to `$userdata` (Multisite only).
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array|object|WP_User $userdata {
 *     An array, object, or WP_User object of user data arguments.
 *
 *     @type int         $ID                   User ID. If supplied, the user will be updated.
 *     @type string      $user_pass            The plain-text user password.
 *     @type string      $user_login           The user's login username.
 *     @type string      $user_nicename        The URL-friendly user name.
 *     @type string      $user_url             The user URL.
 *     @type string      $user_email           The user email address.
 *     @type string      $display_name         The user's display name.
 *                                             Default is the user's username.
 *     @type string      $nickname             The user's nickname.
 *                                             Default is the user's username.
 *     @type string      $first_name           The user's first name. For new users, will be used
 *                                             to build the first part of the user's display name
 *                                             if `$display_name` is not specified.
 *     @type string      $last_name            The user's last name. For new users, will be used
 *                                             to build the second part of the user's display name
 *                                             if `$display_name` is not specified.
 *     @type string      $description          The user's biographical description.
 *     @type string|bool $rich_editing         Whether to enable the rich-editor for the user.
 *                                             False if not empty.
 *     @type string|bool $syntax_highlighting  Whether to enable the rich code editor for the user.
 *                                             False if not empty.
 *     @type string|bool $comment_shortcuts    Whether to enable comment moderation keyboard
 *                                             shortcuts for the user. Default false.
 *     @type string      $admin_color          Admin color scheme for the user. Default 'fresh'.
 *     @type bool        $use_ssl              Whether the user should always access the admin over
 *                                             https. Default false.
 *     @type string      $user_registered      Date the user registered. Format is 'Y-m-d H:i:s'.
 *     @type string      $user_activation_key  Password reset key. Default empty.
 *     @type bool        $spam                 Multisite only. Whether the user is marked as spam.
 *                                             Default false.
 *     @type string|bool $show_admin_bar_front Whether to display the Admin Bar for the user on the
 *                                             site's front end. Default true.
 *     @type string      $role                 User's role.
 *     @type string      $locale               User's locale. Default empty.
 * }
 * @return int|WP_Error The newly created user's ID or a WP_Error object if the user could not
 *                      be created.
 * @phpstan-param \WP_User|object|array{
 *   ID?: int,
 *   user_pass?: string,
 *   user_login?: string,
 *   user_nicename?: string,
 *   user_url?: string,
 *   user_email?: string,
 *   display_name?: string,
 *   nickname?: string,
 *   first_name?: string,
 *   last_name?: string,
 *   description?: string,
 *   rich_editing?: string|bool,
 *   syntax_highlighting?: string|bool,
 *   comment_shortcuts?: string|bool,
 *   admin_color?: string,
 *   use_ssl?: bool,
 *   user_registered?: string,
 *   user_activation_key?: string,
 *   spam?: bool,
 *   show_admin_bar_front?: string|bool,
 *   role?: string,
 *   locale?: string,
 * } $userdata
 */
function wp_insert_user($userdata)
{
}