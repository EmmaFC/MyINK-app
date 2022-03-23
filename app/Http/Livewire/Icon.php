<?php

namespace App\Http\Livewire;

use Livewire\Component;

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

    public function __construct(
        $icon = null,
        $width = 24,
        $height = 24,
        $viewBox = '24 24',
        $fill = 'currentColor',
        $strokeWidth = 2,
        $id = null,
        $class = null
    )
    {
        $this->icon = $icon;
        $this->width = $width;
        $this->height = $height;
        $this->viewBox = $viewBox;
        $this->fill = $fill;
        $this->strokeWidth = $strokeWidth;
        $this->id = $id ?? '';
        $this->class = $class ?? '';
    }

    
    public function render()
    {
        return view('livewire.icon');
    }
}
