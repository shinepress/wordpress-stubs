<?php


/**
 * Generate and return code editor settings.
 *
 * @since 5.0.0
 *
 * @see wp_enqueue_code_editor()
 *
 * @param array $args {
 *     Args.
 *
 *     @type string   $type       The MIME type of the file to be edited.
 *     @type string   $file       Filename to be edited. Extension is used to sniff the type. Can be supplied as alternative to `$type` param.
 *     @type WP_Theme $theme      Theme being edited when on theme editor.
 *     @type string   $plugin     Plugin being edited when on plugin editor.
 *     @type array    $codemirror Additional CodeMirror setting overrides.
 *     @type array    $csslint    CSSLint rule overrides.
 *     @type array    $jshint     JSHint rule overrides.
 *     @type array    $htmlhint   HTMLHint rule overrides.
 * }
 * @return array|false Settings for the code editor.
 */
function wp_get_code_editor_settings($args)
{
}