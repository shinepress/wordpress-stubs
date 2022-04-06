<?php


/**
 * Enqueue assets needed by the code editor for the given settings.
 *
 * @since 4.9.0
 *
 * @see wp_enqueue_editor()
 * @see wp_get_code_editor_settings();
 * @see _WP_Editors::parse_settings()
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
 *     @type array    $htmlhint   JSHint rule overrides.
 * }
 * @return array|false Settings for the enqueued code editor, or false if the editor was not enqueued.
 * @phpstan-param array{
 *   type?: string,
 *   file?: string,
 *   theme?: WP_Theme,
 *   plugin?: string,
 *   codemirror?: array,
 *   csslint?: array,
 *   jshint?: array,
 *   htmlhint?: array,
 * } $args
 */
function wp_enqueue_code_editor($args)
{
}