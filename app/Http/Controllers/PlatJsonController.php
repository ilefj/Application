<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Platss;
use App\categories;
use App\Souscategories;
use App\Http\Controllers\SousCat;
use Illuminate\Http\Request;


class PlatJsonController extends Controller
{
    public function index()
    {
        $Platss = Platss::all();
        return response()->json(array($Platss));
    }
}
