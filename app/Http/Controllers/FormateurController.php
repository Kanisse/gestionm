<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Http\Requests\StoreFormateurRequest;
use App\Http\Requests\UpdateFormateurRequest;

class FormateurController extends Controller
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
     * @param  \App\Http\Requests\StoreFormateurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormateurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function show(Formateur $formateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Formateur $formateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormateurRequest  $request
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormateurRequest $request, Formateur $formateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formateur  $formateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formateur $formateur)
    {
        //
    }
}
