@extends('layouts.Template')

@section('content')

<form action="{{ route('serveur.update' , $Serv->id) }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             
<div class="form-group">
 
 <input name="id" value="{{$Serv->id}}" name="id "type="text" hidden/>
 </div>
 <br/>
 <div>

                    <div>
                    <label>Nom</label>
                    <input name="nom" value="{{$Serv->nom}}" name="nom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Prénom</label>
                    <input name="prenom" value="{{$Serv->prenom}}"name="prenom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>Date De naissance </label>
                    <input name="DDN" value="{{$Serv->DDN}}" name="DDN "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Adresse</label>
                    <input name="Adresse" value="{{$Serv->Adresse}}" name="Adresse "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>Login</label>
                    <input name="login"  value="{{$Serv->login}}"name="login "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Mot de passe</label>
                    <input name="Pwd"value="{{$Serv->password}}" name="Pwd "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                     <label>Numéro de tel</label>
                    <input name="numtel" value="{{$Serv->Num_tel}}"name="numtel "type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Date d'emabauche</label>
                    <input name="dateemauche" value="{{$Serv->Date_embauche}}" name="dateemauche "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>Salaire</label>
                    <input name="salaire"value="{{$Serv->Salaire}}" name="salaire "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>
                    </form>
                    @endsection