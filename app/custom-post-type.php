<?php

/**
 * Theme custom post types.
 */

namespace App;

add_action('init', function () {
  register_post_type('portfolio', [
    'label'                 => 'Portfolio',
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'query_var'             => true,
    'rewrite'               => ['slug' => 'portfolio', 'with_front' => false],
    'capability_type'       => 'post',
    'has_archive'           => false,
    'hierarchical'          => true,
    'menu_position'         => null,
    'menu_icon'             => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#a0a5aa" d="M64 64V48c0-8.84 7.16-16 16-16h64c8.8 0 16 7.16 16 16v16h32l50.5-25.24c8.9-4.45 18.7-6.76 28.6-6.76H448c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64zm156.6 57.2c-8.9 4.5-18.7 6.8-28.6 6.8H64v64h114.8c22-15.1 48.5-24 77.2-24 28.7 0 55.2 8.9 77.2 24H448V96H271.1l-50.5 25.2zM256 216c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88z"/></svg>'),
    'supports'              => ['page-attributes', 'editor', 'title', 'thumbnail', 'excerpt'],
    'show_in_rest'          => true
  ]);

  $taxonomies = [
    'Location' => [
      'public'        => false,
      'label'         => 'Location',
      'url'           => 'location',
      'hierarchical'  => true,
      'parent'        => 'portfolio'
    ],
    'Type' => [
      'public'        => false,
      'label'         => 'Type',
      'url'           => 'type',
      'hierarchical'  => true,
      'parent'        => 'portfolio'
    ],
  ];

  if (!empty($taxonomies)) {
    foreach ($taxonomies as $key => $taxonomy) {
      // Taxonomy variables
      $taxonomy_string    = str_replace(' ', '_', strtolower($key));
      $label              = ucwords($taxonomy['label']);
      $rewrite_url        = $taxonomy['url'];
      $public             = $taxonomy['public'];
      $hierarchical       = $taxonomy['hierarchical'];
      $parent             = $taxonomy['parent'];

      register_taxonomy(
        $taxonomy_string,
        $parent,
        [
          'label'         => $label,
          'public'        => $public,
          'show_ui'       => true,
          'rewrite'       => ['slug' => $rewrite_url, 'with_front' => false],
          'hierarchical'  => $hierarchical
        ]
      );
    }
  }
});
