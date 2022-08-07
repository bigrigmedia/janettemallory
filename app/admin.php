<?php

/**
 * Admin Customizations.
 */

namespace App;

/**
 * Customize admin logo url
 */
add_action('login_head', function () {
    if (in_array($GLOBALS['pagenow'], ['wp-login.php', 'wp-register.php'])) {
        wp_enqueue_style('client-admin.css', get_stylesheet_directory_uri() . '/resources/styles/admin.css', false, null);
    }
});

/**
 * Add custom page template column
 */
add_filter('manage_edit-page_columns', function ($page_columns) {
    $page_columns['template'] = __('Page Template');

    return $page_columns;
});

/**
 * Populate custom page template column
 */
add_action('manage_page_posts_custom_column', function ($column_name) {
    if ('template' !== $column_name) {
        return;
    }

    global $post;

    $template_name = get_page_template_slug($post->ID);
    $template = untrailingslashit(get_stylesheet_directory()) . '/' . $template_name;

    if (strlen(trim($template_name)) === 0 || !file_exists($template)) {
        $template_name = __('Default');
    } else {
        $template_name = get_file_description($template);
    }

    echo esc_html($template_name);
});

/**
 * Add custom registration date column
 */
add_filter('manage_users_columns', function ($columns) {
    $columns['registration_date'] = 'Registration Date';

    return $columns;
});

/**
 * Populate custom registration date column
 */
add_filter('manage_users_custom_column', function ($row_output, $column_id_attr, $user) {
    $date_format = 'm/d/Y g:i a';

    switch ($column_id_attr) {
        case 'registration_date':
            return date($date_format, strtotime(get_the_author_meta('registered', $user)));
            break;
    }

    return $row_output;
}, 10, 3);
