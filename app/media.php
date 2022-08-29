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

$custom_sizes = [
    'w1920x860' => [1920, 860, true],
    'w640x715'  => [640, 715, true],
    'w589x697'  => [589, 697, true],
    'w390x391'  => [390, 391, true],
    'w1089x726' => [1089, 726, true],
    'w390x219'  => [390, 219, true],
    'w645x968'  => [645, 968, true],
    'w390x493'  => [390, 493, true],
    'w845x591'  => [845, 591, true],
    'w744x912'  => [744, 912, true],
    'w390x403'  => [390, 403, true],
    'w701x526'  => [701, 526, true],
    'w390x526'  => [390, 526, true],
];

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
