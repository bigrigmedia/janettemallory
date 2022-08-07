<?php

/**
 * ACF.
 */

namespace App;

/**
 * ACF Options Page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Global Info',
        'menu_title' => 'Global Info',
        'menu_slug'  => 'global-info',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}
