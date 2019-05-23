<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Cat;
use App\categorie;
use App\Categories;

use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Categories = Categories::all();

        return view('G-categories', compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('AjouterCat');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
      if($request->hasFile('image')){
        $filenamewithext=$request->file('image')->getClientOriginalName();
        $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
        $extension=$request->file('image')->getClientOriginalExtension();
        $filenametostore=$filename.'.'.$extension;
        $path=$request->file('image')->storeAs('public/images/',$filenametostore);

    }else{
        $filenametostore='noimage.jpg';
    }
    $categorie= new Categories();
    $categorie->NomCat=$request->NomCat;
    $categorie->image=$filenametostore;
    $categorie->save();
    return redirect('/catégories');
}

    public function show($id)
    {
    
     
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = categorie::find($id);
        return view('', compact('cat'));    
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
        $categorie = Categories::find($request->cat_id); 
        $categorie->NomCat = $request->nom;
        $categorie->image = $request->image;
        $categorie->save();
            return back();
      }
    

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {
  
    $categorie = Categories::find($id);
    $categorie->delete();
      
        // $id = $request->category_id;
        // $categorie = Categories::find($id);
        // $categorie->delete();

    return redirect('/catégories')->with('success', 'Stock has been deleted Successfully');
    }
}
