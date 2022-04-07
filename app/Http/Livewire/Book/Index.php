<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;

class Index extends Component
{
    public $books;
    
    public function mount($books){
        $this->books = $books;
    }
    
    public function render()
    {
        return view('livewire.book.index');
    }
}
