<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRolRequest;
use App\Http\Requests\UpdateRolRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles ['roles'] = Role::all(); /* ::paginate(15); */
        return view('livewire.role.index', $roles);
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
     * @param  \App\Http\Requests\StoreRolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolRequest $request)
    {
        $dataRole = request()->except('_token');
        Role::insert($dataRole);
        return response()->json($dataRole);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = Role::findOrFail($id);     
        return view('livewire.role.show', ['role' => $role] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $id)
    {
        $role = Role::findOrFail($id);
        return view('livewire.role.edit', compact ('role') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRolRequest  $request
     * @param  \App\Models\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(/* UpdateRolRequest $request, */ Role $id)
    {
        $dataRole = request()->except(['_token', '_method']);
        Role::where('id', '=', $id)->update($dataRole);
        $role = Role::findOrFail($id);
        return view('livewire.role.edit', compact ('role') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $id)
    {
        Role::destroy($id);
        return redirect('livewire.role');
    }
}
