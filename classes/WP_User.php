<?php


/**
 * User API: WP_User class
 *
 * @package WordPress
 * @subpackage Users
 * @since 4.4.0
 */
/**
 * Core class used to implement the WP_User object.
 *
 * @since 2.0.0
 *
 * @property string $nickname
 * @property string $description
 * @property string $user_description
 * @property string $first_name
 * @property string $user_firstname
 * @property string $last_name
 * @property string $user_lastname
 * @property string $user_login
 * @property string $user_pass
 * @property string $user_nicename
 * @property string $user_email
 * @property string $user_url
 * @property string $user_registered
 * @property string $user_activation_key
 * @property string $user_status
 * @property int    $user_level
 * @property string $display_name
 * @property string $spam
 * @property string $deleted
 * @property string $locale
 * @property string $rich_editing
 * @property string $syntax_highlighting
 * @property string $use_ssl
 */
class WP_User
{
    /**
     * User data container.
     *
     * @since 2.0.0
     * @var stdClass
     */
    public $data;
    /**
     * The user's ID.
     *
     * @since 2.1.0
     * @var int
     */
    public $ID = 0;
    /**
     * Capabilities that the individual user has been granted outside of those inherited from their role.
     *
     * @since 2.0.0
     * @var bool[] Array of key/value pairs where keys represent a capability name
     *             and boolean values represent whether the user has that capability.
     */
    public $caps = array();
    /**
     * User metadata option name.
     *
     * @since 2.0.0
     * @var string
     */
    public $cap_key;
    /**
     * The roles the user is part of.
     *
     * @since 2.0.0
     * @var string[]
     */
    public $roles = array();
    /**
     * All capabilities the user has, including individual and role based.
     *
     * @since 2.0.0
     * @var bool[] Array of key/value pairs where keys represent a capability name
     *             and boolean values represent whether the user has that capability.
     */
    public $allcaps = array();
    /**
     * The filter context applied to user data fields.
     *
     * @since 2.9.0
     * @var string
     */
    public $filter = \null;
    /**
     * The site ID the capabilities of this user are initialized for.
     *
     * @since 4.9.0
     * @var int
     */
    private $site_id = 0;
    /**
     * @since 3.3.0
     * @var array
     */
    private static $back_compat_keys;
    /**
     * Constructor.
     *
     * Retrieves the userdata and passes it to WP_User::init().
     *
     * @since 2.0.0
     *
     * @param int|string|stdClass|WP_User $id      User's ID, a WP_User object, or a user object from the DB.
     * @param string                      $name    Optional. User's username
     * @param int                         $site_id Optional Site ID, defaults to current site.
     */
    public function __construct($id = 0, $name = '', $site_id = '')
    {
    }
    /**
     * Sets up object properties, including capabilities.
     *
     * @since 3.3.0
     *
     * @param object $data    User DB row object.
     * @param int    $site_id Optional. The site ID to initialize for.
     */
    public function init($data, $site_id = '')
    {
    }
    /**
     * Return only the main user fields
     *
     * @since 3.3.0
     * @since 4.4.0 Added 'ID' as an alias of 'id' for the `$field` parameter.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string     $field The field to query against: 'id', 'ID', 'slug', 'email' or 'login'.
     * @param string|int $value The field value
     * @return object|false Raw user object
     */
    public static function get_data_by($field, $value)
    {
    }
    /**
     * Magic method for checking the existence of a certain custom field.
     *
     * @since 3.3.0
     *
     * @param string $key User meta key to check if set.
     * @return bool Whether the given user meta key is set.
     */
    public function __isset($key)
    {
    }
    /**
     * Magic method for accessing custom fields.
     *
     * @since 3.3.0
     *
     * @param string $key User meta key to retrieve.
     * @return mixed Value of the given user meta key (if set). If `$key` is 'id', the user ID.
     */
    public function __get($key)
    {
    }
    /**
     * Magic method for setting custom user fields.
     *
     * This method does not update custom fields in the database. It only stores
     * the value on the WP_User instance.
     *
     * @since 3.3.0
     *
     * @param string $key   User meta key.
     * @param mixed  $value User meta value.
     */
    public function __set($key, $value)
    {
    }
    /**
     * Magic method for unsetting a certain custom field.
     *
     * @since 4.4.0
     *
     * @param string $key User meta key to unset.
     */
    public function __unset($key)
    {
    }
    /**
     * Determine whether the user exists in the database.
     *
     * @since 3.4.0
     *
     * @return bool True if user exists in the database, false if not.
     */
    public function exists()
    {
    }
    /**
     * Retrieve the value of a property or meta key.
     *
     * Retrieves from the users and usermeta table.
     *
     * @since 3.3.0
     *
     * @param string $key Property
     * @return mixed
     */
    public function get($key)
    {
    }
    /**
     * Determine whether a property or meta key is set
     *
     * Consults the users and usermeta tables.
     *
     * @since 3.3.0
     *
     * @param string $key Property
     * @return bool
     */
    public function has_prop($key)
    {
    }
    /**
     * Return an array representation.
     *
     * @since 3.5.0
     *
     * @return array Array representation.
     */
    public function to_array()
    {
    }
    /**
     * Makes private/protected methods readable for backward compatibility.
     *
     * @since 4.3.0
     *
     * @param string $name      Method to call.
     * @param array  $arguments Arguments to pass when calling.
     * @return mixed|false Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Set up capability object properties.
     *
     * Will set the value for the 'cap_key' property to current database table
     * prefix, followed by 'capabilities'. Will then check to see if the
     * property matching the 'cap_key' exists and is an array. If so, it will be
     * used.
     *
     * @since 2.1.0
     * @deprecated 4.9.0 Use WP_User::for_site()
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $cap_key Optional capability key
     */
    protected function _init_caps($cap_key = '')
    {
    }
    /**
     * Retrieves all of the capabilities of the user's roles, and merges them with
     * individual user capabilities.
     *
     * All of the capabilities of the user's roles are merged with the user's individual
     * capabilities. This means that the user can be denied specific capabilities that
     * their role might have, but the user is specifically denied.
     *
     * @since 2.0.0
     *
     * @return bool[] Array of key/value pairs where keys represent a capability name
     *                and boolean values represent whether the user has that capability.
     */
    public function get_role_caps()
    {
    }
    /**
     * Add role to user.
     *
     * Updates the user's meta data option with capabilities and roles.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     */
    public function add_role($role)
    {
    }
    /**
     * Remove role from user.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     */
    public function remove_role($role)
    {
    }
    /**
     * Set the role of the user.
     *
     * This will remove the previous roles of the user and assign the user the
     * new one. You can set the role to an empty string and it will remove all
     * of the roles from the user.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     */
    public function set_role($role)
    {
    }
    /**
     * Choose the maximum level the user has.
     *
     * Will compare the level from the $item parameter against the $max
     * parameter. If the item is incorrect, then just the $max parameter value
     * will be returned.
     *
     * Used to get the max level based on the capabilities the user has. This
     * is also based on roles, so if the user is assigned the Administrator role
     * then the capability 'level_10' will exist and the user will get that
     * value.
     *
     * @since 2.0.0
     *
     * @param int    $max  Max level of user.
     * @param string $item Level capability name.
     * @return int Max Level.
     */
    public function level_reduction($max, $item)
    {
    }
    /**
     * Update the maximum user level for the user.
     *
     * Updates the 'user_level' user metadata (includes prefix that is the
     * database table prefix) with the maximum user level. Gets the value from
     * the all of the capabilities that the user has.
     *
     * @since 2.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    public function update_user_level_from_caps()
    {
    }
    /**
     * Add capability and grant or deny access to capability.
     *
     * @since 2.0.0
     *
     * @param string $cap   Capability name.
     * @param bool   $grant Whether to grant capability to user.
     */
    public function add_cap($cap, $grant = \true)
    {
    }
    /**
     * Remove capability from user.
     *
     * @since 2.0.0
     *
     * @param string $cap Capability name.
     */
    public function remove_cap($cap)
    {
    }
    /**
     * Remove all of the capabilities of the user.
     *
     * @since 2.1.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     */
    public function remove_all_caps()
    {
    }
    /**
     * Returns whether the user has the specified capability.
     *
     * This function also accepts an ID of an object to check against if the capability is a meta capability. Meta
     * capabilities such as `edit_post` and `edit_user` are capabilities used by the `map_meta_cap()` function to
     * map to primitive capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
     *
     * Example usage:
     *
     *     $user->has_cap( 'edit_posts' );
     *     $user->has_cap( 'edit_post', $post->ID );
     *     $user->has_cap( 'edit_post_meta', $post->ID, $meta_key );
     *
     * While checking against a role in place of a capability is supported in part, this practice is discouraged as it
     * may produce unreliable results.
     *
     * @since 2.0.0
     * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
     *              by adding it to the function signature.
     *
     * @see map_meta_cap()
     *
     * @param string $cap     Capability name.
     * @param mixed  ...$args Optional further parameters, typically starting with an object ID.
     * @return bool Whether the user has the given capability, or, if an object ID is passed, whether the user has
     *              the given capability for that object.
     */
    public function has_cap($cap, ...$args)
    {
    }
    /**
     * Convert numeric level to level capability name.
     *
     * Prepends 'level_' to level number.
     *
     * @since 2.0.0
     *
     * @param int $level Level number, 1 to 10.
     * @return string
     */
    public function translate_level_to_cap($level)
    {
    }
    /**
     * Set the site to operate on. Defaults to the current site.
     *
     * @since 3.0.0
     * @deprecated 4.9.0 Use WP_User::for_site()
     *
     * @param int $blog_id Optional. Site ID, defaults to current site.
     */
    public function for_blog($blog_id = '')
    {
    }
    /**
     * Sets the site to operate on. Defaults to the current site.
     *
     * @since 4.9.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $site_id Site ID to initialize user capabilities for. Default is the current site.
     */
    public function for_site($site_id = '')
    {
    }
    /**
     * Gets the ID of the site for which the user's capabilities are currently initialized.
     *
     * @since 4.9.0
     *
     * @return int Site ID.
     */
    public function get_site_id()
    {
    }
    /**
     * Gets the available user capabilities data.
     *
     * @since 4.9.0
     *
     * @return bool[] List of capabilities keyed by the capability name,
     *                e.g. array( 'edit_posts' => true, 'delete_posts' => false ).
     */
    private function get_caps_data()
    {
    }
}