<?php

namespace Avifinfo;

class Features
{
    public $has_primary_item = false;
    public $has_alpha = false;
    public $primary_item_id;
    public $primary_item_features = array(
        // Deduced from the data below.
        'width' => UNDEFINED,
        // In number of pixels.
        'height' => UNDEFINED,
        // Ignores mirror and rotation.
        'bit_depth' => UNDEFINED,
        // Likely 8, 10 or 12 bits per channel per pixel.
        'num_channels' => UNDEFINED,
    );
    public $tiles = array();
    public $props = array();
    public $dim_props = array();
    public $chan_props = array();
    /**
     * Finds the width, height, bit depth and number of channels of the primary item.
     *
     * @return Status FOUND on success or NOT_FOUND on failure.
     */
    public function get_primary_item_features()
    {
    }
}