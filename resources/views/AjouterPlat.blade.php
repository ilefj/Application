 @extends('layouts.Template')

@section('content')

<form action="{{ route('plat.store') }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             
       <div class="form-group">
 
                    <label>Nom</label>
                    <input name="nom" name="nom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div class="form-group">
                    <input name="id" class="form-control"type="hidden"/>
                    </div>
                    <br/>
                    <div>

<label for="le_nom">Choix de categorie</label><br />
<select name="le_nom1" id="le_nom1"   class="form-control input-lg dynamic" data-dependent="categorie">
   @foreach($cat as $categorie)
     <option   value="{{$categorie->id}}"class="form-control">{{$categorie->NomCat}}</option>
      @endforeach
</select>
</div>
<br/>
 <!--  -->
<br/>   
      <div>            
            <label for="le_nom">Choix de Sous Categorie</label><br/>
            <select name="le_nom" id="le_nom" class="form-control input-lg dynamic" data-dependent="SousCat">
               @foreach($SousCat as $Souscategories)
                <option value="{{$Souscategories->idsousCat}}" class="form-control">{{$Souscategories->NomSousCat}}</option>
                  @endforeach
            </select>
      </div> 
      <br/>
                <div class="form-group">
                    
                    <label>Composition</label>
                    <input name="Composition" name="Composition "class="form-control"type="text"/>
                    </div>
                    <br/>
                    
                    <div class="form-group">
                    
                    <label>Prix</label>
                    <input name="prix" name="prix "class="form-control"type="text"/>
                    </div>
                    <br/>
                     
                        <br/>
                        <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>

                    </form>
                    
                    @endsection
              