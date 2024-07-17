<?php


/**
 * Initializes the filters for footnotes meta field when imported data should be filtered.
 *
 * This filter is the last one being executed on {@see 'force_filtered_html_on_import'}.
 * If the input of the filter is true, it means we are in an import situation and should
 * enable kses, independently of the user capabilities. So in that case we call
 * _wp_footnotes_kses_init_filters().
 *
 * @access private
 * @since 6.3.2
 *
 * @param string $arg Input argument of the filter.
 * @return string Input argument of the filter.
 */
function _wp_footnotes_force_filtered_html_on_import_filter($arg)
{
}