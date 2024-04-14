<?php


/**
 * If a JSON blob of navigation menu data is in POST data, expand it and inject
 * it into `$_POST` to avoid PHP `max_input_vars` limitations. See #14134.
 *
 * @ignore
 * @since 4.5.3
 * @access private
 * @phpstan-return void
 */
function _wp_expand_nav_menu_post_data()
{
}