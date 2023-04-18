<?php

namespace App\Http\Controllers;

use App\Models\Vendeur;
use App\Http\Requests\StoreVendeurRequest;
use App\Http\Requests\UpdateVendeurRequest;

class VendeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendeurs.index'); 
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
     * @param  \App\Http\Requests\StoreVendeurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVendeurRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendeur  $vendeur
     * @return \Illuminate\Http\Response
     */
    public function show(Vendeur $vendeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendeur  $vendeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendeur $vendeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVendeurRequest  $request
     * @param  \App\Models\Vendeur  $vendeur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVendeurRequest $request, Vendeur $vendeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendeur  $vendeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendeur $vendeur)
    {
        //
    }
}
