<?php


/**
 * Wraps passed links in navigational markup.
 *
 * @since 4.1.0
 * @since 5.3.0 Added the `aria_label` parameter.
 * @access private
 *
 * @param string $links              Navigational links.
 * @param string $css_class          Optional. Custom class for the nav element.
 *                                   Default 'posts-navigation'.
 * @param string $screen_reader_text Optional. Screen reader text for the nav element.
 *                                   Default 'Posts navigation'.
 * @param string $aria_label         Optional. ARIA label for the nav element.
 *                                   Defaults to the value of `$screen_reader_text`.
 * @return string Navigation template tag.
 */
function _navigation_markup($links, $css_class = 'posts-navigation', $screen_reader_text = '', $aria_label = '')
{
}