<?php


/**
 * Customize API: WP_Customize_Nav_Menu_Item_Setting class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */
/**
 * Customize Setting to represent a nav_menu.
 *
 * Subclass of WP_Customize_Setting to represent a nav_menu taxonomy term, and
 * the IDs for the nav_menu_items associated with the nav menu.
 *
 * @since 4.3.0
 *
 * @see WP_Customize_Setting
 */
class WP_Customize_Nav_Menu_Item_Setting extends \WP_Customize_Setting
{
    const ID_PATTERN = '/^nav_menu_item\[(?P<id>-?\d+)\]$/';
    const POST_TYPE = 'nav_menu_item';
    const TYPE = 'nav_menu_item';
    /**
     * Setting type.
     *
     * @since 4.3.0
     * @var string
     */
    public $type = self::TYPE;
    /**
     * Default setting value.
     *
     * @since 4.3.0
     * @var array
     *
     * @see wp_setup_nav_menu_item()
     */
    public $default = array(
        // The $menu_item_data for wp_update_nav_menu_item().
        'object_id' => 0,
        'object' => '',
        // Taxonomy name.
        'menu_item_parent' => 0,
        // A.K.A. menu-item-parent-id; note that post_parent is different, and not included.
        'position' => 0,
        // A.K.A. menu_order.
        'type' => 'custom',
        // Note that type_label is not included here.
        'title' => '',
        'url' => '',
        'target' => '',
        'attr_title' => '',
        'description' => '',
        'classes' => '',
        'xfn' => '',
        'status' => 'publish',
        'original_title' => '',
        'nav_menu_term_id' => 0,
        // This will be supplied as the $menu_id arg for wp_update_nav_menu_item().
        '_invalid' => \false,
    );
    /**
     * Default transport.
     *
     * @since 4.3.0
     * @since 4.5.0 Default changed to 'refresh'
     * @var string
     */
    public $transport = 'refresh';
    /**
     * The post ID represented by this setting instance. This is the db_id.
     *
     * A negative value represents a placeholder ID for a new menu not yet saved.
     *
     * @since 4.3.0
     * @var int
     */
    public $post_id;
    /**
     * Storage of pre-setup menu item to prevent wasted calls to wp_setup_nav_menu_item().
     *
     * @since 4.3.0
     * @var array|null
     */
    protected $value;
    /**
     * Previous (placeholder) post ID used before creating a new menu item.
     *
     * This value will be exported to JS via the customize_save_response filter
     * so that JavaScript can update the settings to refer to the newly-assigned
     * post ID. This value is always negative to indicate it does not refer to
     * a real post.
     *
     * @since 4.3.0
     * @var int
     *
     * @see WP_Customize_Nav_Menu_Item_Setting::update()
     * @see WP_Customize_Nav_Menu_Item_Setting::amend_customize_save_response()
     */
    public $previous_post_id;
    /**
     * When previewing or updating a menu item, this stores the previous nav_menu_term_id
     * which ensures that we can apply the proper filters.
     *
     * @since 4.3.0
     * @var int
     */
    public $original_nav_menu_term_id;
    /**
     * Whether or not update() was called.
     *
     * @since 4.3.0
     * @var bool
     */
    protected $is_updated = \false;
    /**
     * Status for calling the update method, used in customize_save_response filter.
     *
     * See {@see 'customize_save_response'}.
     *
     * When status is inserted, the placeholder post ID is stored in $previous_post_id.
     * When status is error, the error is stored in $update_error.
     *
     * @since 4.3.0
     * @var string updated|inserted|deleted|error
     *
     * @see WP_Customize_Nav_Menu_Item_Setting::update()
     * @see WP_Customize_Nav_Menu_Item_Setting::amend_customize_save_response()
     */
    public $update_status;
    /**
     * Any error object returned by wp_update_nav_menu_item() when setting is updated.
     *
     * @since 4.3.0
     * @var WP_Error
     *
     * @see WP_Customize_Nav_Menu_Item_Setting::update()
     * @see WP_Customize_Nav_Menu_Item_Setting::amend_customize_save_response()
     */
    public $update_error;
    /**
     * Constructor.
     *
     * Any supplied $args override class property defaults.
     *
     * @since 4.3.0
     *
     * @throws Exception If $id is not valid for this setting type.
     *
     * @param WP_Customize_Manager $manager Customizer bootstrap instance.
     * @param string               $id      A specific ID of the setting.
     *                                      Can be a theme mod or option name.
     * @param array                $args    Optional. Setting arguments.
     */
    public function __construct(\WP_Customize_Manager $manager, $id, array $args = array())
    {
    }
    /**
     * Clear the cached value when this nav menu item is updated.
     *
     * @since 4.3.0
     *
     * @param int $menu_id       The term ID for the menu.
     * @param int $menu_item_id  The post ID for the menu item.
     */
    public function flush_cached_value($menu_id, $menu_item_id)
    {
    }
    /**
     * Get the instance data for a given nav_menu_item setting.
     *
     * @since 4.3.0
     *
     * @see wp_setup_nav_menu_item()
     *
     * @return array|false Instance data array, or false if the item is marked for deletion.
     */
    public function value()
    {
    }
    /**
     * Get original title.
     *
     * @since 4.7.0
     *
     * @param object $item Nav menu item.
     * @return string The original title.
     */
    protected function get_original_title($item)
    {
    }
    /**
     * Get type label.
     *
     * @since 4.7.0
     *
     * @param object $item Nav menu item.
     * @return string The type label.
     */
    protected function get_type_label($item)
    {
    }
    /**
     * Ensure that the value is fully populated with the necessary properties.
     *
     * Translates some properties added by wp_setup_nav_menu_item() and removes others.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Nav_Menu_Item_Setting::value()
     * @phpstan-return void
     */
    protected function populate_value()
    {
    }
    /**
     * Handle previewing the setting.
     *
     * @since 4.3.0
     * @since 4.4.0 Added boolean return value.
     *
     * @see WP_Customize_Manager::post_value()
     *
     * @return bool False if method short-circuited due to no-op.
     */
    public function preview()
    {
    }
    /**
     * Filters the wp_get_nav_menu_items() result to supply the previewed menu items.
     *
     * @since 4.3.0
     *
     * @see wp_get_nav_menu_items()
     *
     * @param WP_Post[] $items An array of menu item post objects.
     * @param WP_Term   $menu  The menu object.
     * @param array     $args  An array of arguments used to retrieve menu item objects.
     * @return WP_Post[] Array of menu item objects.
     */
    public function filter_wp_get_nav_menu_items($items, $menu, $args)
    {
    }
    /**
     * Re-apply the tail logic also applied on $items by wp_get_nav_menu_items().
     *
     * @since 4.3.0
     *
     * @see wp_get_nav_menu_items()
     *
     * @param WP_Post[] $items An array of menu item post objects.
     * @param WP_Term   $menu  The menu object.
     * @param array     $args  An array of arguments used to retrieve menu item objects.
     * @return WP_Post[] Array of menu item objects.
     */
    public static function sort_wp_get_nav_menu_items($items, $menu, $args)
    {
    }
    /**
     * Get the value emulated into a WP_Post and set up as a nav_menu_item.
     *
     * @since 4.3.0
     *
     * @return WP_Post With wp_setup_nav_menu_item() applied.
     */
    public function value_as_wp_post_nav_menu_item()
    {
    }
    /**
     * Sanitize an input.
     *
     * Note that parent::sanitize() erroneously does wp_unslash() on $value, but
     * we remove that in this override.
     *
     * @since 4.3.0
     *
     * @param array $menu_item_value The value to sanitize.
     * @return array|false|null|WP_Error Null or WP_Error if an input isn't valid. False if it is marked for deletion.
     *                                   Otherwise the sanitized value.
     */
    public function sanitize($menu_item_value)
    {
    }
    /**
     * Creates/updates the nav_menu_item post for this setting.
     *
     * Any created menu items will have their assigned post IDs exported to the client
     * via the {@see 'customize_save_response'} filter. Likewise, any errors will be
     * exported to the client via the customize_save_response() filter.
     *
     * To delete a menu, the client can send false as the value.
     *
     * @since 4.3.0
     *
     * @see wp_update_nav_menu_item()
     *
     * @param array|false $value The menu item array to update. If false, then the menu item will be deleted
     *                           entirely. See WP_Customize_Nav_Menu_Item_Setting::$default for what the value
     *                           should consist of.
     * @return null|void
     * @phpstan-return void
     */
    protected function update($value)
    {
    }
    /**
     * Export data for the JS client.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Nav_Menu_Item_Setting::update()
     *
     * @param array $data Additional information passed back to the 'saved' event on `wp.customize`.
     * @return array Save response data.
     */
    public function amend_customize_save_response($data)
    {
    }
}