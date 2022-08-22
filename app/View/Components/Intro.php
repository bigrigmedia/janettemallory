<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Intro extends Component
{
    /**
     * The content.
     *
     * @var string
     */
    public $content;

    /**
     * The image.
     *
     * @var string
     */
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($content, $image)
    {
        $this->content = $content;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.intro');
    }
}
