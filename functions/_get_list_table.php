<?php


/**
 * Fetches an instance of a WP_List_Table class.
 *
 * @since 3.1.0
 *
 * @global string $hook_suffix
 *
 * @param string $class_name The type of the list table, which is the class name.
 * @param array  $args       Optional. Arguments to pass to the class. Accepts 'screen'.
 * @return WP_List_Table|false List table object on success, false if the class does not exist.
 * @phpstan-template T of string
 * @phpstan-param T $class_name
 * @phpstan-param array{screen?: string} $args
 * @phpstan-return ($class_name is 'WP_Posts_List_Table'|'WP_Media_List_Table'|'WP_Terms_List_Table'|'WP_Users_List_Table'|'WP_Comments_List_Table'|'WP_Post_Comments_List_Table'|'WP_Links_List_Table'|'WP_Plugin_Install_List_Table'|'WP_Themes_List_Table'|'WP_Theme_Install_List_Table'|'WP_Plugins_List_Table'|'WP_Application_Passwords_List_Table'|'WP_MS_Sites_List_Table'|'WP_MS_Users_List_Table'|'WP_MS_Themes_List_Table'|'WP_Privacy_Data_Export_Requests_List_Table'|'WP_Privacy_Data_Removal_Requests_List_Table' ? new<T> : false)
 */
function _get_list_table($class_name, $args = array())
{
}