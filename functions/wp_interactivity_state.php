<?php


/**
 * Gets and/or sets the initial state of an Interactivity API store for a
 * given namespace.
 *
 * If state for that store namespace already exists, it merges the new
 * provided state with the existing one.
 *
 * @since 6.5.0
 *
 * @param string $store_namespace The unique store namespace identifier.
 * @param array  $state           Optional. The array that will be merged with the existing state for the specified
 *                                store namespace.
 * @return array The state for the specified store namespace. This will be the updated state if a $state argument was
 *               provided.
 */
function wp_interactivity_state(string $store_namespace, array $state = array()): array
{
}