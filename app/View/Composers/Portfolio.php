<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Portfolio extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.portfolio',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'getPortfoliio' => $this->getPortfolio(),
        ];
    }

    public function getPortfolio()
    {
        $query = new WP_Query([
            'post_type'         => 'portfolio',
            'post_parent'       => 0,
            'posts_per_page'    => -1,
            'order'             => 'ASC',
            'no_found_rows'     => true,
        ]);

        if ($query->have_posts()) {
            return $query->posts;
        }

        return;
    }
}
