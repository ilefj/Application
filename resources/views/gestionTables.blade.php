@extends('layouts.Template')

@section('content')
 <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                      <center>  <h2 class="page-title">Gérer des Tables</h2> </center> 
                     
    <div class="panel panel-default">
                            <div class="panel-heading"> <strong>Liste des Tables</strong></div>
                            <div class="panel-body">
                                <table id="zctb" class="table table-bordered">
                                <tr>
                                        <th>Id</th>
                                        <th>CodeTable</th>
                                            <th>Nbreplace</th>
                                            <th>Etat</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <a class="fas fa-plus-circle" style="font-size:60px;color:#e2ccae;margin-left:90%;" href="{{url ('/table/ajouter')}}"></a> 
                                        </tr>
                                        @foreach($tables as $table)
                                <tr>
                                <td>{{$table->id}}</td>
                                <td>{{$table->CodeTable}}</td>
                                <td>{{$table->Nbreplace}}</td>
                                <td>{{$table->etat}}</td>
                                <td>{{ $table -> created_at}}</td> 
                                <td>{{ $table -> updated_at}}</td>
                                <td ><a class="fas fa-edit" href="{{url ('/tables/modifier',[$table->id])}}">Edit</a></td>                              
                                <td><a class="fas fa-trash" href="{{url ('/tables/supp',[$table->id])}}" >  </td>
                             
                                </tr>
                            @endforeach



                  </table>
               <!-- Modal -->
 <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="deleteLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('tables.destroy','test')}}" method="post">
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

                                    
                          
        