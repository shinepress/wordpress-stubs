<?php


/**
 * Network API: WP_Network class
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 4.4.0
 */
/**
 * Core class used for interacting with a multisite network.
 *
 * This class is used during load to populate the `$current_site` global and
 * setup the current network.
 *
 * This class is most useful in WordPress multi-network installations where the
 * ability to interact with any network of sites is required.
 *
 * @since 4.4.0
 *
 * @property int $id
 * @property int $site_id
 */
class WP_Network
{
    /**
     * Network ID.
     *
     * @since 4.4.0
     * @since 4.6.0 Converted from public to private to explicitly enable more intuitive
     *              access via magic methods. As part of the access change, the type was
     *              also changed from `string` to `int`.
     * @access private
     * @var int
     */
    private $id;
    /**
     * Domain of the network.
     *
     * @since 4.4.0
     * @access public
     * @var string
     */
    public $domain = '';
    /**
     * Path of the network.
     *
     * @since 4.4.0
     * @access public
     * @var string
     */
    public $path = '';
    /**
     * The ID of the network's main site.
     *
     * Named "blog" vs. "site" for legacy reasons. A main site is mapped to
     * the network when the network is created.
     *
     * A numeric string, for compatibility reasons.
     *
     * @since 4.4.0
     * @access private
     * @var string
     */
    private $blog_id = '0';
    /**
     * Domain used to set cookies for this network.
     *
     * @since 4.4.0
     * @access public
     * @var string
     */
    public $cookie_domain = '';
    /**
     * Name of this network.
     *
     * Named "site" vs. "network" for legacy reasons.
     *
     * @since 4.4.0
     * @access public
     * @var string
     */
    public $site_name = '';
    /**
     * Retrieve a network from the database by its ID.
     *
     * @since 4.4.0
     * @access public
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $network_id The ID of the network to retrieve.
     * @return WP_Network|bool The network's object if found. False if not.
     */
    public static function get_instance($network_id)
    {
    }
    /**
     * Create a new WP_Network object.
     *
     * Will populate object properties from the object provided and assign other
     * default properties based on that information.
     *
     * @since 4.4.0
     * @access public
     *
     * @param WP_Network|object $network A network object.
     */
    public function __construct($network)
    {
    }
    /**
     * Getter.
     *
     * Allows current multisite naming conventions when getting properties.
     *
     * @since 4.6.0
     * @access public
     *
     * @param string $key Property to get.
     * @return mixed Value of the property. Null if not available.
     */
    public function __get($key)
    {
    }
    /**
     * Isset-er.
     *
     * Allows current multisite naming conventions when checking for properties.
     *
     * @since 4.6.0
     * @access public
     *
     * @param string $key Property to check if set.
     * @return bool Whether the property is set.
     */
    public function __isset($key)
    {
    }
    /**
     * Setter.
     *
     * Allows current multisite naming conventions while setting properties.
     *
     * @since 4.6.0
     * @access public
     *
     * @param string $key   Property to set.
     * @param mixed  $value Value to assign to the property.
     */
    public function __set($key, $value)
    {
    }
    /**
     * Set the site name assigned to the network if one has not been populated.
     *
     * @since 4.4.0
     * @access private
     */
    private function _set_site_name()
    {
    }
    /**
     * Set the cookie domain based on the network domain if one has
     * not been populated.
     *
     * @todo What if the domain of the network doesn't match the current site?
     *
     * @since 4.4.0
     * @access private
     */
    private function _set_cookie_domain()
    {
    }
    /**
     * Retrieve the closest matching network for a domain and path.
     *
     * This will not necessarily return an exact match for a domain and path. Instead, it
     * breaks the domain and path into pieces that are then used to match the closest
     * possibility from a query.
     *
     * The intent of this method is to match a network during bootstrap for a
     * requested site address.
     *
     * @since 4.4.0
     * @access public
     * @static
     *
     * @param string   $domain   Domain to check.
     * @param string   $path     Path to check.
     * @param int|null $segments Path segments to use. Defaults to null, or the full path.
     * @return WP_Network|bool Network object if successful. False when no network is found.
     */
    public static function get_by_path($domain = '', $path = '', $segments = \null)
    {
    }
}