<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function creationsession(){
        $role = "Admin";
        session() -> regenerate();
        Session()->put('role', $role);
    }
    function afficherrole(Request $request){
 // if($request -> session() -> has('role')){
  //  echo $request->session()->get('role');
   // }

   if(session('role')=="Admin"){
    echo "vous avez le role administrateur";
   }
}
}