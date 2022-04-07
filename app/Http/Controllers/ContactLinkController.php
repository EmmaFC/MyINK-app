<?php

namespace App\Http\Controllers;

use App\Models\ContactLink;
use App\Http\Requests\StoreContactLinkRequest;
use App\Http\Requests\UpdateContactLinkRequest;

class ContactLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactlinks ['contactlinks'] = ContactLink::all(); /* ::paginate(15); */
        return view('livewire.contactlinks.index', $contactlinks);
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
     * @param  \App\Http\Requests\StoreContactLinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactLinkRequest $request)
    {
        $dataContactLink = request()->except('_token');

        if($request->hasFile('image')){
            $dataContactLink['image']=$request->file('image')->store('storage', 'public');
        }

        ContactLink::insert($dataContactLink);
        return response()->json($dataContactLink);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function show(ContactLink $contactlink)
    {
        $contactlink = ContactLink::findOrFail($id);     
        return view('livewire.contactlinks.show', ['contactlink' => $contactlink] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactLink $id)
    {
        $contactlink = ContactLink::findOrFail($id);
        return view('livewire.contactlinks.edit', compact ('contactlink') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactLinkRequest  $request
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function update(/* UpdateContactLinkRequest $request, */ ContactLink $id)
    {
        $dataContactLink = request()->except(['_token', '_method']);
        ContactLink::where('id', '=', $id)->update($dataContactLink);
        $contactLink = ContactLink::findOrFail($id);
        return view('livewire.contactlinks.edit', compact ('contactLink') );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactLink $id)
    {
        ContactLink::destroy($id);
        return redirect('livewire.contactlinks');
    }
}
