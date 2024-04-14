<?php


/**
 * Add Interactivity API directives to the navigation-submenu and page-list blocks markup using the Tag Processor
 * The final HTML of the navigation-submenu and the page-list blocks will look similar to this:
 *
 * <li
 *   class="has-child"
 *   data-wp-context='{ "core": { "navigation": { "isMenuOpen": false, "overlay": false } } }'
 *   data-wp-effect="effects.core.navigation.initMenu"
 *   data-wp-on.keydown="actions.core.navigation.handleMenuKeydown"
 *   data-wp-on.focusout="actions.core.navigation.handleMenuFocusout"
 * >
 *   <button
 *     class="wp-block-navigation-submenu__toggle"
 *     data-wp-on.click="actions.core.navigation.openMenu"
 *     data-wp-bind.aria-expanded="context.core.navigation.isMenuOpen"
 *   >
 *   </button>
 *   <span>Title</span>
 *   <ul class="wp-block-navigation__submenu-container">
 *     SUBMENU ITEMS
 *   </ul>
 * </li>
 *
 * @param string $w Markup of the navigation block.
 * @param array  $block_attributes Block attributes.
 *
 * @return string Submenu markup with the directives injected.
 */
function block_core_navigation_add_directives_to_submenu($w, $block_attributes)
{
}