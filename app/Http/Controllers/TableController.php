<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\tables;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = tables::all();

        return view('gestionTables', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AjouterTable');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $table= new tables();
        
        $table->Nbreplace=$request->Nbreplace;
        $table->CodeTable=$request->CodeTable;
        $table->etat=$request->etat;
        $table->save();
        return redirect('/tables');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = tables::find($id);
        return view('Modifiertable', compact('table'));
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $table = tables::FindOrFail($request->id_tab);
        $table->update($request->all());
        $table->etat = $request->etat;
        $table->save();
        return redirect('/tables');
        }

    /**
     * Remove the specified resource from storage.

     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $table = tables::find($id);
                 $table->delete();

    return redirect('/tables');
       }
}
