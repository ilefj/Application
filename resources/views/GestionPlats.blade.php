@extends('layouts.Template')

@section('content')
 <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                      <center>  <h2 class="page-title">Gérer des Plats</h2> </center> 
                     
    <div class="panel panel-default">
                            <div class="panel-heading"> <strong>Liste des Plats</strong></div>
                            <div class="panel-body">
                                <table id="zctb" class="table table-bordered">
                                <tr>
                                            <th>Id</th>
                                          
                                            <th>Nom</th>
                                            <th>NomCat</th>
                                            <th>Nom de Sous Catégories</th>                                          
                                            <th>Composition</th>
                                            <th>Prix</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <a class="fas fa-plus-circle" style="font-size:60px;color:#e2ccae;margin-left:90%;" href="{{url ('/plat/ajouter')}}"></a> 
                                        </tr>
                                        @foreach($Platss as $Plat)
                                <tr>
                                <td>{{$Plat->idPlat}}</td>
                                <td>{{$Plat->nom}}</td>
                                <td>{{$Plat->NomCat}}</td>
                                <td>{{$Plat->NomSousCat}}</td>
                                <td>{{$Plat->Composition}}</td>
                                <td>{{$Plat->prix}}</td>
                                <td>{{$Plat->created_at}}</td> 
                                <td>{{ $Plat->updated_at}}</td>
                                <td ><a class="fas fa-edit" href="{{url ('/plat/modifier',[$Plat->id])}}">Edit</a></td>    
                                <td><a class="fas fa-trash" href="{{url ('/plat/supp',[$Plat->id])}}" >  </td>
                               </tr>
                            @endforeach



                  </table>
                  <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="deleteLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('plat.destroy','test')}}" method="post">
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

                                    
                          
        