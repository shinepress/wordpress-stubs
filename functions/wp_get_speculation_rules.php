<?php


/**
 * Returns the full speculation rules data based on the configuration.
 *
 * Plugins with features that rely on frontend URLs to exclude from prefetching or prerendering should use the
 * {@see 'wp_speculation_rules_href_exclude_paths'} filter to ensure those URL patterns are excluded.
 *
 * Additional speculation rules other than the default rule from WordPress Core can be provided by using the
 * {@see 'wp_load_speculation_rules'} action and amending the passed WP_Speculation_Rules object.
 *
 * @since 6.8.0
 * @access private
 *
 * @return WP_Speculation_Rules|null Object representing the speculation rules to use, or null if speculative loading
 *                                   is disabled in the current context.
 */
function wp_get_speculation_rules(): ?\WP_Speculation_Rules
{
}