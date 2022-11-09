<?php


/**
 * Helper functions for displaying a list of items in an ajaxified HTML table.
 *
 * @package WordPress
 * @subpackage List_Table
 * @since 3.1.0
 */
/**
 * Fetches an instance of a WP_List_Table class.
 *
 * @access private
 * @since 3.1.0
 *
 * @global string $hook_suffix
 *
 * @param string $class The type of the list table, which is the class name.
 * @param array  $args  Optional. Arguments to pass to the class. Accepts 'screen'.
 * @return WP_List_Table|false List table object on success, false if the class does not exist.
 */
function _get_list_table($class, $args = array())
{
}