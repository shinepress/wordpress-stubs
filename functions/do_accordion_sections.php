<?php


/**
 * Meta Box Accordion Template Function
 *
 * Largely made up of abstracted code from do_meta_boxes(), this
 * function serves to build meta boxes as list items for display as
 * a collapsible accordion.
 *
 * @since 3.6.0
 *
 * @uses global $wp_meta_boxes Used to retrieve registered meta boxes.
 *
 * @param string|object $screen  The screen identifier.
 * @param string        $context The meta box context.
 * @param mixed         $object  gets passed to the section callback function as first parameter.
 * @return int number of meta boxes as accordion sections.
 */
function do_accordion_sections($screen, $context, $object)
{
}