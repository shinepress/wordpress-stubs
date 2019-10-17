<?php


/**
 * Gets the best available (and enabled) Auto-Update for WordPress Core.
 *
 * If there's 1.2.3 and 1.3 on offer, it'll choose 1.3 if the installation allows it, else, 1.2.3
 *
 * @since 3.7.0
 *
 * @return array|false False on failure, otherwise the core update offering.
 */
function find_core_auto_update()
{
}