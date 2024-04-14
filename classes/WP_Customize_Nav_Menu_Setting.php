<?php


/**
 * Customize API: WP_Customize_Nav_Menu_Setting class
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
 * @see wp_get_nav_menu_object()
 * @see WP_Customize_Setting
 */
class WP_Customize_Nav_Menu_Setting extends \WP_Customize_Setting
{
    const ID_PATTERN = '/^nav_menu\[(?P<id>-?\d+)\]$/';
    const TAXONOMY = 'nav_menu';
    const TYPE = 'nav_menu';
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
     * @see wp_get_nav_menu_object()
     */
    public $default = array('name' => '', 'description' => '', 'parent' => 0, 'auto_add' => \false);
    /**
     * Default transport.
     *
     * @since 4.3.0
     * @var string
     */
    public $transport = 'postMessage';
    /**
     * The term ID represented by this setting instance.
     *
     * A negative value represents a placeholder ID for a new menu not yet saved.
     *
     * @since 4.3.0
     * @var int
     */
    public $term_id;
    /**
     * Previous (placeholder) term ID used before creating a new menu.
     *
     * This value will be exported to JS via the {@see 'customize_save_response'} filter
     * so that JavaScript can update the settings to refer to the newly-assigned
     * term ID. This value is always negative to indicate it does not refer to
     * a real term.
     *
     * @since 4.3.0
     * @var int
     *
     * @see WP_Customize_Nav_Menu_Setting::update()
     * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response()
     */
    public $previous_term_id;
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
     * When status is inserted, the placeholder term ID is stored in `$previous_term_id`.
     * When status is error, the error is stored in `$update_error`.
     *
     * @since 4.3.0
     * @var string updated|inserted|deleted|error
     *
     * @see WP_Customize_Nav_Menu_Setting::update()
     * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response()
     */
    public $update_status;
    /**
     * Any error object returned by wp_update_nav_menu_object() when setting is updated.
     *
     * @since 4.3.0
     * @var WP_Error
     *
     * @see WP_Customize_Nav_Menu_Setting::update()
     * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response()
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
     * Get the instance data for a given widget setting.
     *
     * @since 4.3.0
     *
     * @see wp_get_nav_menu_object()
     *
     * @return array Instance data.
     */
    public function value()
    {
    }
    /**
     * Handle previewing the setting.
     *
     * @since 4.3.0
     * @since 4.4.0 Added boolean return value
     *
     * @see WP_Customize_Manager::post_value()
     *
     * @return bool False if method short-circuited due to no-op.
     */
    public function preview()
    {
    }
    /**
     * Filters the wp_get_nav_menus() result to ensure the inserted menu object is included, and the deleted one is removed.
     *
     * @since 4.3.0
     *
     * @see wp_get_nav_menus()
     *
     * @param WP_Term[] $menus An array of menu objects.
     * @param array     $args  An array of arguments used to retrieve menu objects.
     * @return WP_Term[] Array of menu objects.
     */
    public function filter_wp_get_nav_menus($menus, $args)
    {
    }
    /**
     * Temporary non-closure passing of orderby value to function.
     *
     * @since 4.3.0
     * @var string
     *
     * @see WP_Customize_Nav_Menu_Setting::filter_wp_get_nav_menus()
     * @see WP_Customize_Nav_Menu_Setting::_sort_menus_by_orderby()
     */
    protected $_current_menus_sort_orderby;
    /**
     * Sort menu objects by the class-supplied orderby property.
     *
     * This is a workaround for a lack of closures.
     *
     * @since 4.3.0
     * @deprecated 4.7.0 Use wp_list_sort()
     *
     * @param object $menu1
     * @param object $menu2
     * @return int
     *
     * @see WP_Customize_Nav_Menu_Setting::filter_wp_get_nav_menus()
     */
    protected function _sort_menus_by_orderby($menu1, $menu2)
    {
    }
    /**
     * Filters the wp_get_nav_menu_object() result to supply the previewed menu object.
     *
     * Requesting a nav_menu object by anything but ID is not supported.
     *
     * @since 4.3.0
     *
     * @see wp_get_nav_menu_object()
     *
     * @param object|null $menu_obj Object returned by wp_get_nav_menu_object().
     * @param string      $menu_id  ID of the nav_menu term. Requests by slug or name will be ignored.
     * @return object|null
     */
    public function filter_wp_get_nav_menu_object($menu_obj, $menu_id)
    {
    }
    /**
     * Filters the nav_menu_options option to include this menu's auto_add preference.
     *
     * @since 4.3.0
     *
     * @param array $nav_menu_options Nav menu options including auto_add.
     * @return array (Maybe) modified nav menu options.
     */
    public function filter_nav_menu_options($nav_menu_options)
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
     * @param array $value The menu value to sanitize.
     * @return array|false|null Null if an input isn't valid. False if it is marked for deletion.
     *                          Otherwise the sanitized value.
     */
    public function sanitize($value)
    {
    }
    /**
     * Storage for data to be sent back to client in customize_save_response filter.
     *
     * See {@see 'customize_save_response'}.
     *
     * @since 4.3.0
     * @var array
     *
     * @see WP_Customize_Nav_Menu_Setting::amend_customize_save_response()
     */
    protected $_widget_nav_menu_updates = array();
    /**
     * Create/update the nav_menu term for this setting.
     *
     * Any created menus will have their assigned term IDs exported to the client
     * via the {@see 'customize_save_response'} filter. Likewise, any errors will be exported
     * to the client via the customize_save_response() filter.
     *
     * To delete a menu, the client can send false as the value.
     *
     * @since 4.3.0
     *
     * @see wp_update_nav_menu_object()
     *
     * @param array|false $value {
     *     The value to update. Note that slug cannot be updated via wp_update_nav_menu_object().
     *     If false, then the menu will be deleted entirely.
     *
     *     @type string $name        The name of the menu to save.
     *     @type string $description The term description. Default empty string.
     *     @type int    $parent      The id of the parent term. Default 0.
     *     @type bool   $auto_add    Whether pages will auto_add to this menu. Default false.
     * }
     * @return null|void
     * @phpstan-param false|array{
     *   name?: string,
     *   description?: string,
     *   parent?: int,
     *   auto_add?: bool,
     * } $value
     * @phpstan-return void
     */
    protected function update($value)
    {
    }
    /**
     * Updates a nav_menu_options array.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Nav_Menu_Setting::filter_nav_menu_options()
     * @see WP_Customize_Nav_Menu_Setting::update()
     *
     * @param array $nav_menu_options Array as returned by get_option( 'nav_menu_options' ).
     * @param int   $menu_id          The term ID for the given menu.
     * @param bool  $auto_add         Whether to auto-add or not.
     * @return array (Maybe) modified nav_menu_otions array.
     */
    protected function filter_nav_menu_options_value($nav_menu_options, $menu_id, $auto_add)
    {
    }
    /**
     * Export data for the JS client.
     *
     * @since 4.3.0
     *
     * @see WP_Customize_Nav_Menu_Setting::update()
     *
     * @param array $data Additional information passed back to the 'saved' event on `wp.customize`.
     * @return array Export data.
     */
    public function amend_customize_save_response($data)
    {
    }
}