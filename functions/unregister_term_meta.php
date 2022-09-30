<?php


/**
 * Unregisters a meta key for terms.
 *
 * @since 4.9.8
 *
 * @param string $taxonomy Taxonomy the meta key is currently registered for. Pass
 *                         an empty string if the meta key is registered across all
 *                         existing taxonomies.
 * @param string $meta_key The meta key to unregister.
 * @return bool True on success, false if the meta key was not previously registered.
 */
function unregister_term_meta($taxonomy, $meta_key)
{
}