<?php

namespace App\Http\Controllers;
use App\serveur;
use Illuminate\Http\Request;

class ServeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serveur = serveur::all();

        return view('Gestionserveur', compact('serveur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AjouterServeur');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serveur= new serveur();
     
        $serveur->nom =$request->nom;
        $serveur->prenom=$request->prenom;
        $serveur->DDN=$request->DDN;
        $serveur->Adresse=$request->Adresse;
        $serveur->login=$request->login;
        $serveur->password=$request->Pwd;
        $serveur->Num_tel=$request->numtel;
        $serveur->Date_embauche=$request->dateemauche;
        $serveur->Salaire=$request->salaire;
        $serveur->save();
        return redirect('/serveur');
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
        
        $Serv=serveur::find($id);
        return view('ModifierServ', compact('Serv'));
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
        $Serv = serveur::FindOrFail($request->id);
        $Serv->update($request->all());
        
        $Serv->nom =$request->nom;
        $Serv->prenom=$request->prenom;
        $Serv->DDN=$request->DDN;
        $Serv->Adresse=$request->Adresse;
        $Serv->login=$request->login;
        $Serv->password=$request->Pwd;
        $Serv->Num_tel=$request->numtel;
        $Serv->Date_embauche=$request->dateemauche;
        $Serv->Salaire=$request->salaire;
        $Serv->save();
        return redirect('/serveur');

    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $serveur = serveur::find($id);
    $serveur->delete();
    return redirect('/serveur');
    }
}
