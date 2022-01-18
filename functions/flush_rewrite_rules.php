<?php


/**
 * Remove rewrite rules and then recreate rewrite rules.
 *
 * @since 3.0.0
 *
 * @global WP_Rewrite $wp_rewrite
 *
 * @param bool $hard Whether to update .htaccess (hard flush) or just update
 *                   rewrite_rules transient (soft flush). Default is true (hard).
 */
function flush_rewrite_rules($hard = \true)
{
}