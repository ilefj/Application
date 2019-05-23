<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acceuilController extends Controller
{
   
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function acceuil() {
 			// Your logic here
 	return view('acceuil');
}
}

