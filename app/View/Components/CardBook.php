<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\BookController;

class CardBook extends Component
{
    public $book;
    public $cover;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($book, $cover)
    {
        $this->book = $book;
        $this->cover = $cover;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-book');
    }
}
