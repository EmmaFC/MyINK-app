<?php

namespace App\Http\Livewire\Components\Books;

use Livewire\Component;

class Books extends Component
{
    public function render()
    {
        return view('livewire.components.books.view');
    }

    public function create()
    {
        return view('livewire.components.books.create');
    }

    public function update()
    {
        return view('livewire.components.books.update');
    }

    public function index()
    {
        return view('livewire.components.books.view');
    }

    public function delete()
    {
        return view('livewire.components.books.view');
    }
}
