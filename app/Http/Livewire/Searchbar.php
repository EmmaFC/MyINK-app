<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Searchbar extends Component
{
    use WithPagination;

    public $search_key;

    public function render()
    {
        return view('livewire.filter', [
            'users' => User::where(function($subquery){
                User::where ('name', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('email', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('description', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),

            'roles' => Role::where(function($subquery){
                Role::where ('name', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),

            'permission' => Permission::where(function($subquery){
                Permission::where ('name', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),

            'books' => Book::where(function($subquery){
                Book::where ('title', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('author', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('year', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('genre', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('pages', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('description', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('edition', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('publishing_house', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),

            'categories' => Category::where(function($subquery){
                Category::where ('name', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),

            'companies' => Company::where(function($subquery){
                Company::where ('title', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('author', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),

            'contact_links' => ContactLink::where(function($subquery){
                ContactLink::where ('name', 'like', '%'.$tis->search_key.'%')
                    ->orWhere('description', 'like', '%'.$tis->search_key.'%');
                  
            })->paginate(12),
        ]);
    }
}
