<?php


/**
 * For backward compatibility reasons,
 * block themes might be using block-templates or block-template-parts,
 * this function ensures we fallback to these folders properly.
 *
 * @since 5.9.0
 *
 * @param string $theme_stylesheet The stylesheet. Default is to leverage the main theme root.
 *
 * @return string[] {
 *     Folder names used by block themes.
 *
 *     @type string $wp_template      Theme-relative directory name for block templates.
 *     @type string $wp_template_part Theme-relative directory name for block template parts.
 * }
 * @phpstan-return array{
 *   wp_template: string,
 *   wp_template_part: string,
 * }
 */
function get_block_theme_folders($theme_stylesheet = \null)
{
}