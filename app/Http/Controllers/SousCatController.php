<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\SousCategories;
use App\Categories;
use App\Http\Controllers\Cat;

use Illuminate\Http\Request;

class SousCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SousCategories = SousCategories::all();

        return view('G-Souscategories', compact('SousCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $Cat=categories::all();
        return view('AjouterSousCat', compact('Cat'));
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $filenamewithext=$request->file('image')->getClientOriginalName();
            $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/images',$filenametostore);
    
        }else{
            $filenametostore='noimage.jpg';
        }

        
        $cat = categories::find($request->le_nom);
        $NomCat = $cat->NomCat;


        $Souscategorie= new SousCategories();
        
        $Souscategorie->NomSousCat=$request->NomSousCat;
        $Souscategorie->NomCat=$NomCat;
        $Souscategorie->id=$request->le_nom;

        $Souscategorie->image=$filenametostore;
        $Souscategorie->save();
        return redirect('/Sous_Catégories');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
{              
    $souscat = SousCategories::find($id);
           $cat = categories::all();
            return view('ModifierSousCat', compact('souscat','cat'));
        }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    { 
        $souscat = SousCategories::FindOrFail($request->id_souscat);
        $souscat->update($request->all());
        $cat = categories::find($request->le_nom);
        $NomCat = $cat->NomCat;
        $souscat->NomCat=$NomCat;
        $souscat->save();
        return redirect('/Sous_Catégories');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        

        $Scat = SousCategories::find($id);
        $Scat->delete();

     return redirect('/Sous_Catégories')->with('success', 'Stock has been deleted Successfully');
    }
   

}
