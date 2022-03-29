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
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function show(ContactLink $contactLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactLink $contactLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContactLinkRequest  $request
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactLinkRequest $request, ContactLink $contactLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactLink  $contactLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactLink $contactLink)
    {
        //
    }
}
