<?php

/**
 * Theme extras.
 */

namespace App;

/**
 * Custom image sizes
 *
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 *
 * e.g. add_image_size('w800x400', 800, 400, true)
 */

$custom_sizes = [];

if (!empty($custom_sizes)) {
    foreach ($custom_sizes as $key => $custom_size) {
        add_image_size($key, $custom_size[0], $custom_size[1], $custom_size[2]);
    }
}

/**
 * Allow max image quality
 */
add_filter('jpeg_quality', function ($arg) {
    return 100;
});

add_filter('wp_editor_set_quality', function ($arg) {
    return 100;
});
