<?php


/**
 * Core class used to register script modules.
 *
 * @since 6.5.0
 */
class WP_Script_Modules
{
    /**
     * Registers the script module if no script module with that script module
     * identifier has already been registered.
     *
     * @since 6.5.0
     *
     * @param string            $id       The identifier of the script module. Should be unique. It will be used in the
     *                                    final import map.
     * @param string            $src      Optional. Full URL of the script module, or path of the script module relative
     *                                    to the WordPress root directory. If it is provided and the script module has
     *                                    not been registered yet, it will be registered.
     * @param array             $deps     {
     *                                        Optional. List of dependencies.
     *
     *                                        @type string|array ...$0 {
     *                                            An array of script module identifiers of the dependencies of this script
     *                                            module. The dependencies can be strings or arrays. If they are arrays,
     *                                            they need an `id` key with the script module identifier, and can contain
     *                                            an `import` key with either `static` or `dynamic`. By default,
     *                                            dependencies that don't contain an `import` key are considered static.
     *
     *                                            @type string $id     The script module identifier.
     *                                            @type string $import Optional. Import type. May be either `static` or
     *                                                                 `dynamic`. Defaults to `static`.
     *                                        }
     *                                    }
     * @param string|false|null $version  Optional. String specifying the script module version number. Defaults to false.
     *                                    It is added to the URL as a query string for cache busting purposes. If $version
     *                                    is set to false, the version number is the currently installed WordPress version.
     *                                    If $version is set to null, no version is added.
     * @phpstan-param array<int|string, array{
     *   id: string,
     *   import?: string,
     * }> $deps
     */
    public function register(string $id, string $src, array $deps = array(), $version = \false)
    {
    }
    /**
     * Marks the script module to be enqueued in the page.
     *
     * If a src is provided and the script module has not been registered yet, it
     * will be registered.
     *
     * @since 6.5.0
     *
     * @param string            $id       The identifier of the script module. Should be unique. It will be used in the
     *                                    final import map.
     * @param string            $src      Optional. Full URL of the script module, or path of the script module relative
     *                                    to the WordPress root directory. If it is provided and the script module has
     *                                    not been registered yet, it will be registered.
     * @param array             $deps     {
     *                                        Optional. List of dependencies.
     *
     *                                        @type string|array ...$0 {
     *                                            An array of script module identifiers of the dependencies of this script
     *                                            module. The dependencies can be strings or arrays. If they are arrays,
     *                                            they need an `id` key with the script module identifier, and can contain
     *                                            an `import` key with either `static` or `dynamic`. By default,
     *                                            dependencies that don't contain an `import` key are considered static.
     *
     *                                            @type string $id     The script module identifier.
     *                                            @type string $import Optional. Import type. May be either `static` or
     *                                                                 `dynamic`. Defaults to `static`.
     *                                        }
     *                                    }
     * @param string|false|null $version  Optional. String specifying the script module version number. Defaults to false.
     *                                    It is added to the URL as a query string for cache busting purposes. If $version
     *                                    is set to false, the version number is the currently installed WordPress version.
     *                                    If $version is set to null, no version is added.
     * @phpstan-param array<int|string, array{
     *   id: string,
     *   import?: string,
     * }> $deps
     */
    public function enqueue(string $id, string $src = '', array $deps = array(), $version = \false)
    {
    }
    /**
     * Unmarks the script module so it will no longer be enqueued in the page.
     *
     * @since 6.5.0
     *
     * @param string $id The identifier of the script module.
     */
    public function dequeue(string $id)
    {
    }
    /**
     * Removes a registered script module.
     *
     * @since 6.5.0
     *
     * @param string $id The identifier of the script module.
     */
    public function deregister(string $id)
    {
    }
    /**
     * Adds the hooks to print the import map, enqueued script modules and script
     * module preloads.
     *
     * In classic themes, the script modules used by the blocks are not yet known
     * when the `wp_head` actions is fired, so it needs to print everything in the
     * footer.
     *
     * @since 6.5.0
     */
    public function add_hooks()
    {
    }
    /**
     * Prints the enqueued script modules using script tags with type="module"
     * attributes.
     *
     * @since 6.5.0
     */
    public function print_enqueued_script_modules()
    {
    }
    /**
     * Prints the the static dependencies of the enqueued script modules using
     * link tags with rel="modulepreload" attributes.
     *
     * If a script module is marked for enqueue, it will not be preloaded.
     *
     * @since 6.5.0
     */
    public function print_script_module_preloads()
    {
    }
    /**
     * Prints the import map using a script tag with a type="importmap" attribute.
     *
     * @since 6.5.0
     */
    public function print_import_map()
    {
    }
    /**
     * Print data associated with Script Modules.
     *
     * The data will be embedded in the page HTML and can be read by Script Modules on page load.
     *
     * @since 6.7.0
     *
     * Data can be associated with a Script Module via the
     * {@see "script_module_data_{$module_id}"} filter.
     *
     * The data for a Script Module will be serialized as JSON in a script tag with an ID of the
     * form `wp-script-module-data-{$module_id}`.
     */
    public function print_script_module_data(): void
    {
    }
    /**
     * @access private This is only intended to be called by the registered actions.
     *
     * @since 6.7.0
     * @phpstan-return void
     */
    public function print_a11y_script_module_html()
    {
    }
}