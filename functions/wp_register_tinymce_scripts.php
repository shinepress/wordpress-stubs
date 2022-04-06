<?php


/**
 * Registers TinyMCE scripts.
 *
 * @since 5.0.0
 *
 * @global string $tinymce_version
 * @global bool   $concatenate_scripts
 * @global bool   $compress_scripts
 *
 * @param WP_Scripts $scripts            WP_Scripts object.
 * @param bool       $force_uncompressed Whether to forcibly prevent gzip compression. Default false.
 */
function wp_register_tinymce_scripts($scripts, $force_uncompressed = \false)
{
}