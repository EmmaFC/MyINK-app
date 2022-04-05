<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Database\Eloquent\Model;

class Nav extends Component
{
    /* public $user; */
    public $profile_name;
    public $profile_image;
    public $id;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(/* $id */)
    {
       /*  $this->user = User::findOrFail($id); */
        $this->profile_name = 'Emma';
        $this->profile_image = 'https://picsum.photos/200/30'; 
        $this->id = 1;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.nav');
    }
}


/* 

    public function index()
        {
            // dd(Auth::user()->roles[0]->name);
            if (Auth::user()->roles[0]->name == 'Admin')   
                return view('home');

            return view('welcome');
        }

*/