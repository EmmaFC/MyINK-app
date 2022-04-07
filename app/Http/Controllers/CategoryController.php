<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      /*   $this->middleware('auth'); */
    }

    
    public function index()
    {
        $categories ['categories'] = Category::all(); /* ::paginate(15); */
        return view('livewire.category.index', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $dataCategory = request()->except('_token');
        Category::insert($dataCategory);
        return response()->json($dataCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $category = Category::findOrFail($id);     
        return view('livewire.category.show', ['category' => $category] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {
        $category = Category::findOrFail($id);
        return view('livewire.category.edit', compact ('category') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(/* UpdateCategoryRequest $request, */ Category $id)
    {
        $dataCategory = request()->except(['_token', '_method']);
        Category::where('id', '=', $id)->update($dataCategory);
        $category = Category::findOrFail($id);
        return view('livewire.category.edit', compact ('category') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $id)
    {
        Category::destroy($id);
        return redirect('livewire.category');
    }
}
