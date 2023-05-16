<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Formation;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {   
        $formations= Formation ::all() 
        -> where('formateur_id', Auth::user() -> id);

        if (Auth ::user() -> role == "Admin"){ 
        $nbrformation = Formation ::all() -> count();    
        return view('formations.adminindex',compact('formations','nbrformation' ));
        }
        else if (Auth ::user() -> role == "Manager") {
            return view('formations.managerindex',compact('formations'));
        
        }

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
     * @param  \App\Http\Requests\StoreFormationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormationRequest  $request
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormationRequest $request, Formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
