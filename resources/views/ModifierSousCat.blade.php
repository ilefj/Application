@extends('layouts.Template')

@section('content')

<form action="{{ route('Sous_Categories.update' , $souscat->idsousCat) }}" method="post" enctype="multipart/form-data" >
{{ csrf_field() }}
        {{ method_field('PUT')}} 
<input type="hidden" name="_token" value="{{csrf_token()}}">             
       <div class="form-group">
 
                    <input name="id_souscat" value="{{$souscat->idsousCat}}" name="nom "class="form-control"type="text" hidden/>
                    </div>
                    <br/>
                    <div>
                    <label>NomSousCat</label>
                    <input name="NomSousCat" value="{{$souscat->NomSousCat}}" name="nom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div class="form-group">

<label for="le_nom">Choix de categorie</label><br />
<select name="le_nom" id="le_nom" class="form-control" >
  @foreach($cat as $categorie)
    <option value="{{$categorie->id}}" class="form-control">{{$categorie->NomCat}}</option>
     @endforeach
</select>
</div>
<br/>

                    <br/>
                   <div class="input-group">
                        <div class="custom-file">
                        <div class="form-group">
                <input type="file" name="image" class="form-control-file" >
            </div>
                     </div>
                     
                    

                                            
                        <br/>
                        <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>

                    </form>
                    @endsection