 @extends('layouts.Template')

@section('content')

<form action="{{ route('serveur.store') }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             

                    <div>
                    <label>Nom</label>
                    <input name="nom" name="nom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Prénom</label>
                    <input name="prenom" name="prenom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>Date De naissance </label>
                    <input name="DDN" name="DDN "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Adresse</label>
                    <input name="Adresse" name="Adresse "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>Login</label>
                    <input name="login" name="login "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Mot de passe</label>
                    <input name="Pwd" name="Pwd "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                     <label>Numéro de tel</label>
                    <input name="numtel" name="numtel "type="text"/>
                    </div>
                    <br/>
                    
                    <div>
                    <label>Date d'emabauche</label>
                    <input name="dateemauche" name="dateemauche "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>Salaire</label>
                    <input name="salaire" name="salaire "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>
                    </form>
                    @endsection