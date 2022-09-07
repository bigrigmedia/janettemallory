<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * The hero type.
     *
     * @var string
     */
    public $type;

    /**
     * The hero image.
     *
     * @var string
     */
    public $image;

    /**
     * The hero video.
     *
     * @var string
     */
    public $video;

    /**
     * The hero content.
     *
     * @var string
     */
    public $content;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $image, $video, $content)
    {
        $this->type = $type;
        $this->image = $image;
        $this->video = $video;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
