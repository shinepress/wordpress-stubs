<?php


/**
 * Disables autocomplete on the 'post' form (Add/Edit Post screens) for WebKit browsers,
 * as they disregard the autocomplete setting on the editor textarea. That can break the editor
 * when the user navigates to it with the browser's Back button. See #28037
 *
 * Replaced with wp_page_reload_on_back_button_js() that also fixes this problem.
 *
 * @since 4.0.0
 * @deprecated 4.6.0
 *
 * @link https://core.trac.wordpress.org/ticket/35852
 *
 * @global bool $is_safari
 * @global bool $is_chrome
 */
function post_form_autocomplete_off()
{
}