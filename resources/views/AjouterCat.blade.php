 @extends('layouts.Template')

@section('content')

<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             
       <div class="form-group">
            <label>Nom</label>
                    <input name="NomCat" class="form-control"type="text"/>
                    </div>
                    <br/>
                   <div class="input-group">
                        <div class="custom-file">
                        <div class="form-group">

                <input type="file" name="image" class="form-control-file">
                
            </div>
                     </div>
                                     
                        <br/>
                        <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>

                    </form>
                    @endsection