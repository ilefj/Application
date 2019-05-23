
 @extends('layouts.Template')

@section('content')
 <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                      <center>  <h2 class="page-title">Gérer les Catégories</h2> </center> 
                     
    <div class="panel panel-default">
                            <div class="panel-heading"> <strong>Liste des Catégories</strong></div>
                            <div class="panel-body">
                            <a class="fas fa-plus-circle" style="font-size:60px;color:#e2ccae;margin-left:90%;" href="{{url ('/catégories/ajouter')}}"></a> 

                                <table id="zctb" class="table table-bordered">
                                
                                        <tr>
                                        <th>Id</th>
                                            <th>Nom</th>
                                            <th>Image</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                        </tr>
                                
                                    
                                    
                          @foreach($Categories as $categorie)
                          <tr>
                                <td>{{$categorie->id}}</td>
                                <td>{{$categorie->NomCat}}</td>
                                <td><img src="{{asset('/storage/images/'.$categorie->image)}}"width=50 height=50 ></td>
                                <td>{{$categorie -> created_at}}</td> 
                                <td>{{$categorie -> updated_at}}</td>
                                <td><a class="fas fa-edit "  data-nom="{{$categorie->NomCat}}" data-image="{{$categorie->image}}"  data-cat_id="{{$categorie->id}}" data-toggle="modal" data-target="#edit">Edit</a> </td>
                                <td><a class="fas fa-trash" href="{{url ('/catégories/supp',[$categorie->id])}}" >  </td>
                            </tr>
                            @endforeach
                  </table>
  <!-- Modal update -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
      </div>
      <form action="{{ route('categories.update','test')}}" method="POST">
      {{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      		<input type="hidden"  name="cat_id" id="cat_id" value="">
			@include('form')
	      </div> 
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save Changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>
   
<!-- Modal delete -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="DeleteModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="DeleteModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('categories.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
        <input type="hidden" name="category_id" id="cat_id" value="">
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
                 