<?php


/**
 * Loads classic theme styles on classic themes in the editor.
 *
 * This is used for backwards compatibility for Button and File blocks specifically.
 *
 * @since 6.1.0
 * @since 6.2.0 Added File block styles.
 * @deprecated 6.8.0 Styles are enqueued, not printed in the body element.
 *
 * @param array $editor_settings The array of editor settings.
 * @return array A filtered array of editor settings.
 */
function wp_add_editor_classic_theme_styles($editor_settings)
{
}