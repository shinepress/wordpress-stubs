<?php


/**
 * User API: WP_Roles class
 *
 * @package WordPress
 * @subpackage Users
 * @since 4.4.0
 */
/**
 * Core class used to implement a user roles API.
 *
 * The role option is simple, the structure is organized by role name that store
 * the name in value of the 'name' key. The capabilities are stored as an array
 * in the value of the 'capability' key.
 *
 *     array (
 *          'rolename' => array (
 *              'name' => 'rolename',
 *              'capabilities' => array()
 *          )
 *     )
 *
 * @since 2.0.0
 */
class WP_Roles
{
    /**
     * List of roles and capabilities.
     *
     * @since 2.0.0
     * @var array[]
     */
    public $roles;
    /**
     * List of the role objects.
     *
     * @since 2.0.0
     * @var WP_Role[]
     */
    public $role_objects = array();
    /**
     * List of role names.
     *
     * @since 2.0.0
     * @var string[]
     */
    public $role_names = array();
    /**
     * Option name for storing role list.
     *
     * @since 2.0.0
     * @var string
     */
    public $role_key;
    /**
     * Whether to use the database for retrieval and storage.
     *
     * @since 2.1.0
     * @var bool
     */
    public $use_db = \true;
    /**
     * The site ID the roles are initialized for.
     *
     * @since 4.9.0
     * @var int
     */
    protected $site_id = 0;
    /**
     * Constructor
     *
     * @since 2.0.0
     * @since 4.9.0 The `$site_id` argument was added.
     *
     * @global array $wp_user_roles Used to set the 'roles' property value.
     *
     * @param int $site_id Site ID to initialize roles for. Default is the current site.
     */
    public function __construct($site_id = \null)
    {
    }
    /**
     * Make private/protected methods readable for backward compatibility.
     *
     * @since 4.0.0
     *
     * @param string   $name      Method to call.
     * @param array    $arguments Arguments to pass when calling.
     * @return mixed|false Return value of the callback, false otherwise.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Set up the object properties.
     *
     * The role key is set to the current prefix for the $wpdb object with
     * 'user_roles' appended. If the $wp_user_roles global is set, then it will
     * be used and the role option will not be updated or used.
     *
     * @since 2.1.0
     * @deprecated 4.9.0 Use WP_Roles::for_site()
     */
    protected function _init()
    {
    }
    /**
     * Reinitialize the object
     *
     * Recreates the role objects. This is typically called only by switch_to_blog()
     * after switching wpdb to a new site ID.
     *
     * @since 3.5.0
     * @deprecated 4.7.0 Use WP_Roles::for_site()
     */
    public function reinit()
    {
    }
    /**
     * Add role name with capabilities to list.
     *
     * Updates the list of roles, if the role doesn't already exist.
     *
     * The capabilities are defined in the following format `array( 'read' => true );`
     * To explicitly deny a role a capability you set the value for that capability to false.
     *
     * @since 2.0.0
     *
     * @param string $role         Role name.
     * @param string $display_name Role display name.
     * @param bool[] $capabilities List of capabilities keyed by the capability name,
     *                             e.g. array( 'edit_posts' => true, 'delete_posts' => false ).
     * @return WP_Role|void WP_Role object, if role is added.
     */
    public function add_role($role, $display_name, $capabilities = array())
    {
    }
    /**
     * Remove role by name.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     * @phpstan-return void
     */
    public function remove_role($role)
    {
    }
    /**
     * Add capability to role.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     * @param string $cap Capability name.
     * @param bool $grant Optional, default is true. Whether role is capable of performing capability.
     * @phpstan-return void
     */
    public function add_cap($role, $cap, $grant = \true)
    {
    }
    /**
     * Remove capability from role.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     * @param string $cap Capability name.
     * @phpstan-return void
     */
    public function remove_cap($role, $cap)
    {
    }
    /**
     * Retrieve role object by name.
     *
     * @since 2.0.0
     *
     * @param string $role Role name.
     * @return WP_Role|null WP_Role object if found, null if the role does not exist.
     */
    public function get_role($role)
    {
    }
    /**
     * Retrieve list of role names.
     *
     * @since 2.0.0
     *
     * @return string[] List of role names.
     */
    public function get_names()
    {
    }
    /**
     * Whether role name is currently in the list of available roles.
     *
     * @since 2.0.0
     *
     * @param string $role Role name to look up.
     * @return bool
     */
    public function is_role($role)
    {
    }
    /**
     * Initializes all of the available roles.
     *
     * @since 4.9.0
     * @phpstan-return void
     */
    public function init_roles()
    {
    }
    /**
     * Sets the site to operate on. Defaults to the current site.
     *
     * @since 4.9.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $site_id Site ID to initialize roles for. Default is the current site.
     * @phpstan-return void
     */
    public function for_site($site_id = \null)
    {
    }
    /**
     * Gets the ID of the site for which roles are currently initialized.
     *
     * @since 4.9.0
     *
     * @return int Site ID.
     */
    public function get_site_id()
    {
    }
    /**
     * Gets the available roles data.
     *
     * @since 4.9.0
     *
     * @global array $wp_user_roles Used to set the 'roles' property value.
     *
     * @return array Roles array.
     */
    protected function get_roles_data()
    {
    }
}