<?php

namespace SimplePie;

/**
 * Handles the injection of Registry into other class
 *
 * {@see \SimplePie\SimplePie::get_registry()}
 *
 * @package SimplePie
 */
interface RegistryAware
{
    /**
     * Set the Registry into the class
     *
     * @param Registry $registry
     *
     * @return void
     */
    public function set_registry(\SimplePie\Registry $registry);
}