<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public $icon;
    public $width;
    public $height;
    public $viewBox;
    public $fill;
    public $strokeWidth;
    public $id;
    public $class;

    public function __construct( $icon, $image, $url/* , $fill  */)
    {
        $this->icon = $icon;
        $this->image = $image;
        $this->url = $url;
        $this->width = 24;
        $this->height = 24;
        $this->viewBox = '24 24';
        /* $this->fill = $fill; */
    }

    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon');
    }
}
