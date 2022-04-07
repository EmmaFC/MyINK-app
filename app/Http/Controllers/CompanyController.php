<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies ['companies'] = Company::all(); /* ::paginate(15); */
        return view('livewire.company.index', $companies);
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
     * @param  \App\Http\Requests\StoreCompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $dataCompany = request()->except('_token');

      /*   if($request->hasFile('cover')){
            $dataCompany['cover']=$request->file('cover')->store('storage', 'public');
        } */

        Company::insert($dataCompany);
        return response()->json($dataCompany);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = Company::findOrFail($id);     
        return view('livewire.company.show', ['company' => $company] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $id)
    {
        $company = Company::findOrFail($id);
        return view('livewire.company.edit', compact ('company') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(/* UpdateCompanyRequest $request, */ Company $id)
    {
        $dataCompany = request()->except(['_token', '_method']);
        Company::where('id', '=', $id)->update($dataCompany);
        $company = Company::findOrFail($id);
        return view('livewire.company.edit', compact ('company') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        Company::destroy($id);
        return redirect('livewire.company');
    }
}
