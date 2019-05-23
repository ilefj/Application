<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\categorie;
use Illuminate\Support\Facades\View;
use App\categories;

class JsonCatController extends Controller
{
    public function index()
    {
         $categories = categories::all();
        return response()->json(array($categories));
    }
}
