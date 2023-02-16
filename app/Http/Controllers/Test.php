<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    function pc(){
        $nom= "Diallo";
        $prenom="mohamed";
        return view ('showall', compact('nom','prenom'));
    }
}
