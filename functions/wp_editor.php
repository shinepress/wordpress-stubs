<?php


/**
 * Renders an editor.
 *
 * Using this function is the proper way to output all needed components for both TinyMCE and Quicktags.
 * _WP_Editors should not be used directly. See https://core.trac.wordpress.org/ticket/17144.
 *
 * NOTE: Once initialized the TinyMCE editor cannot be safely moved in the DOM. For that reason
 * running wp_editor() inside of a meta box is not a good idea unless only Quicktags is used.
 * On the post edit screen several actions can be used to include additional editors
 * containing TinyMCE: 'edit_page_form', 'edit_form_advanced' and 'dbx_post_sidebar'.
 * See https://core.trac.wordpress.org/ticket/19173 for more information.
 *
 * @see _WP_Editors::editor()
 * @since 3.3.0
 *
 * @param string $content   Initial content for the editor.
 * @param string $editor_id HTML ID attribute value for the textarea and TinyMCE. Can only be /[a-z]+/.
 * @param array  $settings  See _WP_Editors::editor().
 */
function wp_editor($content, $editor_id, $settings = array())
{
}