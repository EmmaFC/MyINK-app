<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\User;

class Header extends Component
{
  
    /* public $current_id; */
    /**
     * Create a new omponent instance.
     *
     * @return void
     */
    public function __construct(/* $id */)
    {
        /* $this->current_id = $id; */
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organisms.header');
    }
}
