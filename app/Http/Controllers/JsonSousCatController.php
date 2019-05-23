<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\SousCategories;
use App\Categories;
use App\Http\Controllers\Cat;

use Illuminate\Http\Request;


class JsonSousCatController extends Controller
{
    public function index()
    {
        $SousCategories = SousCategories::all();
        return response()->json(array($SousCategories));
    }
}
