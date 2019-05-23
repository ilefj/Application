@extends('layouts.Template')

@section('content')

<form action="{{ route('tables.update', $table->id) }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             
<div class="form-group">
 
 <input name="id_tab" value="{{$table->id}}" name="nom "class="form-control"type="text" hidden/>
 </div>
 <br/>
<div>
<div>
                    <label>Code Table</label>
                    <input name="CodeTable" value="{{$table->CodeTable}}" name="CodeTable "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <label>NbrePlace</label>
                    <select name="Nbreplace" id="Nbreplace" class="form-control" >
                         <option class="form-control" selected >{{$table->Nbreplace}}</option>
                         <option class="form-control">2</option>
                         <option class="form-control">4</option>
                         <option class="form-control">8</option>
                         <option class="form-control">10</option>
                         <option class="form-control">12</option>
                    </select>
                    </div>
                    <br/> 
                    <div>
                    <label>Etat</label>
                    <select name="etat" id="etat" class="form-control">
                         @if ($table->etat == "Reservé")
                         <option class="form-control" selected>{{$table->etat}}</option>
                         <option class="form-control">Disponible</option>
                         @else
                         <option class="form-control" >Reservé</option>
                         <option class="form-control" selected>{{$table->etat}}</option> 
            
                        @endif
                    </select>
                    </div>
                    <br/> 

                                            
                        <br/>
                        <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>

                    </form>
                    @endsection
