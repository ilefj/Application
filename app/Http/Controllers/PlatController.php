<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Platss;
use App\categories;
use App\Souscategories;
use App\Http\Controllers\SousCat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Platss = Platss::all();

        return view('GestionPlats', compact('Platss'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $SousCat=Souscategories::all();
        $cat = categories::all();
        return view('AjouterPlat', compact('SousCat','cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

            $Plat= new Platss();
            $cat = categories::find($request->le_nom1);
            $souscat = Souscategories::find($request->le_nom);
            $nomCat = $cat->NomCat; // Nom Categorie
            $nomsouscat = $souscat->NomSousCat; // Nom Sous Categorie
            $Plat->idsousCat =$request->le_nom;
            $Plat->nom=$request->nom;
            $Plat->id=$request->le_nom1;
            $Plat->NomCat=$nomCat;
            $Plat->NomSousCat= $nomsouscat;
            
            $Plat->composition=$request->Composition;
            $Plat->prix=$request->prix;
            $Plat->save();
            return redirect('/plat');
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
         $Plat=Platss::find($id);
        $SousCat=Souscategories::all();
        $cat = categories::all();
         return view('ModifierPlat', compact('Plat','SousCat','cat'));
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
        $Plat = Platss::FindOrFail($request->idPlat);
        $Plat->update($request->all());
        $Plat->nom=$request->nom;
        $Plat->NomSousCat=$request->le_nom;
        $Plat->NomCat = $request->le_nom1;
        $Plat->Composition=$request->Composition;
        $Plat->prix=$request->prix;
        $Plat->save();
        return redirect('/plat');

    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Plat = Platss::find($id);
        $Plat->delete();

    return redirect('/plat')->with('success', 'Stock has been deleted Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function fetch(Request $request)
    {
        dd('hello');
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('Platss')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}

