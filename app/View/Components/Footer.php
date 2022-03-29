<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Company;
use App\Models\ContactLink;

class Footer extends Component
{
    public $companies;
    public $icons;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->companies = Company::all();
        $this->icons = ContactLink::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.organisms.footer');
    }
}
