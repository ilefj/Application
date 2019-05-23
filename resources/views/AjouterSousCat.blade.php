 @extends('layouts.Template')

@section('content')

<form action="{{ route('Sous_Categories.store') }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             
<div class="form-group">
 
                    <label>NomSousCat</label>
                    <input name="NomSousCat" name="nom "class="form-control"type="text"/>
                    </div>
                    
                    <div class="form-group">
                    <input name="id" name="nom "class="form-control"type="hidden"/>
                    </div>
                    <br/>
                    <div class="form-group">

       <label for="le_nom">Choix de categorie</label><br />
      <select name="le_nom" id="le_nom" class="form-control" >
         @foreach($Cat as $categorie)
           <option value="{{$categorie->id}}" class="form-control">{{$categorie->NomCat}}</option>
            @endforeach
      </select>
 </div>
 <br/>
                        
                        <div class="form-group">
                        <input type="file" name="image" class="form-control-file">
                        </div>
                     
                    

                                            
                        <br/>
                        <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>

                    </form>
                    @endsection