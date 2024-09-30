<?php


/**
 * Class used to process the Interactivity API on the server.
 *
 * @since 6.5.0
 */
final class WP_Interactivity_API
{
    /**
     * Gets and/or sets the initial state of an Interactivity API store for a
     * given namespace.
     *
     * If state for that store namespace already exists, it merges the new
     * provided state with the existing one.
     *
     * When no namespace is specified, it returns the state defined for the
     * current value in the internal namespace stack during a `process_directives` call.
     *
     * @since 6.5.0
     * @since 6.6.0 The `$store_namespace` param is optional.
     *
     * @param string $store_namespace Optional. The unique store namespace identifier.
     * @param array  $state           Optional. The array that will be merged with the existing state for the specified
     *                                store namespace.
     * @return array The current state for the specified store namespace. This will be the updated state if a $state
     *               argument was provided.
     */
    public function state(?string $store_namespace = \null, ?array $state = \null): array
    {
    }
    /**
     * Gets and/or sets the configuration of the Interactivity API for a given
     * store namespace.
     *
     * If configuration for that store namespace exists, it merges the new
     * provided configuration with the existing one.
     *
     * @since 6.5.0
     *
     * @param string $store_namespace The unique store namespace identifier.
     * @param array  $config          Optional. The array that will be merged with the existing configuration for the
     *                                specified store namespace.
     * @return array The configuration for the specified store namespace. This will be the updated configuration if a
     *               $config argument was provided.
     */
    public function config(string $store_namespace, array $config = array()): array
    {
    }
    /**
     * Prints the serialized client-side interactivity data.
     *
     * Encodes the config and initial state into JSON and prints them inside a
     * script tag of type "application/json". Once in the browser, the state will
     * be parsed and used to hydrate the client-side interactivity stores and the
     * configuration will be available using a `getConfig` utility.
     *
     * @since 6.5.0
     * @phpstan-return void
     */
    public function print_client_interactivity_data()
    {
    }
    /**
     * Returns the latest value on the context stack with the passed namespace.
     *
     * When the namespace is omitted, it uses the current namespace on the
     * namespace stack during a `process_directives` call.
     *
     * @since 6.6.0
     *
     * @param string $store_namespace Optional. The unique store namespace identifier.
     */
    public function get_context(?string $store_namespace = \null): array
    {
    }
    /**
     * Registers the `@wordpress/interactivity` script modules.
     *
     * @since 6.5.0
     */
    public function register_script_modules()
    {
    }
    /**
     * Adds the necessary hooks for the Interactivity API.
     *
     * @since 6.5.0
     */
    public function add_hooks()
    {
    }
    /**
     * Processes the interactivity directives contained within the HTML content
     * and updates the markup accordingly.
     *
     * @since 6.5.0
     *
     * @param string $html The HTML content to process.
     * @return string The processed HTML content. It returns the original content when the HTML contains unbalanced tags.
     */
    public function process_directives(string $html): string
    {
    }
    /**
     * Outputs the markup for the top loading indicator and the screen reader
     * notifications during client-side navigations.
     *
     * This method prints a div element representing a loading bar visible during
     * navigation, as well as an aria-live region that can be read by screen
     * readers to announce navigation status.
     *
     * @since 6.5.0
     */
    public function print_router_loading_and_screen_reader_markup()
    {
    }
}