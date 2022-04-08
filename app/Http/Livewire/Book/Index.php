<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
/* use Livewire\WithPagination; */

class Index extends Component
{
    /* use WithPagination; */

    public $search_key;
    public $books;
    
    public function mount($books){
        $this->books = $books;
    }
    
    public function render()
    {
        return view('livewire.book.index');
    }
}
