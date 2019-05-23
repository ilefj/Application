@extends('layouts.Template')

@section('content')
 <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                      <center>  <h2 class="page-title">Gérer les Sous  Catégories</h2> </center> 
                     
    <div class="panel panel-default">
                            <div class="panel-heading"> <strong>Liste Sous Catégories</strong></div>
                            <div class="panel-body">
                                <table id="zctb" class="table table-bordered">
                                
                                        <tr>
                                        <th>Id</th>
                                        <th>Nom</th>
                                        <th>Nom de Catégories</th>
                                         <th>IdCat</th>
                                         <th>image</th>
                                        <th>created_at</th>
                                        <th>updated_at</th>
                                        <a class="fas fa-plus-circle" style="font-size:60px;color:#e2ccae;margin-left:90%;"href="{{url ('/Sous_Catégories/ajouter')}}"></a> 
                                        </tr>
           
                                     @foreach($SousCategories as $Scategorie)
                                      <tr>
                                        <td>{{$Scategorie->idsousCat}}</td>
                                        <td>{{$Scategorie->NomSousCat}}</td>
                                        <td>{{$Scategorie ->NomCat}}</td>
                                        <td>{{$Scategorie->id}}</td>
                                        <td><img src="{{asset('/storage/images/'.$Scategorie->image)}}"width=50 height=50 ></td>
                                        <td>{{$Scategorie -> created_at}}</td> 
                                        <td>{{$Scategorie -> updated_at}}</td>
                                        <td><a class="fas fa-edit" href="{{url ('/Sous_Catégories/modifier',[$Scategorie->idsousCat])}}">Edit</a></td>                              
                                        <td><a class="fas fa-trash" href="{{url ('/Sous_Catégories/supp',[$Scategorie->idsousCat])}}" >  </td>

                                        <!-- <td><a class="fas fa-trash " data-catid="{{$Scategorie->idsousCat}}" data-toggle="modal" data-target="#deleteSouCat" >  </td> -->
                                      </tr>    
                                      @endforeach
                                     
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>    


 <!-- Modal -->
 <div class="modal modal-danger fade" id="deleteSouCat" tabindex="-1" role="dialog" aria-labelledby="deleteSouCatLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="deleteSouCatLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('Sous_Categories.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
        <input type="hidden" name="Scategory_id" id="cat_id" value="">
				<p class="text-center">
					Are you sure you want to delete this?
				</p>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
	        <button type="submit" class="btn btn-warning">Yes, Delete</button>
	      </div>
      </form>
    </div>
  </div>
</div>
                                   
       


  @endsection
