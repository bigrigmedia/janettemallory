<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TwoColumns extends Component
{
    /**
     * The image.
     *
     * @var array
     */
    public $image;

    /**
     * The content.
     *
     * @var array
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($images, $content)
    {
        $this->images = $images;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.two-columns');
    }
}
