 @extends('layouts.Template')

@section('content')

<form action="{{ route('tables.store') }}" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">             

                    <div>
                    <label>Code Table</label>
                    <input name="CodeTable" name="nom "class="form-control"type="text"/>
                    </div>
                    <br/>
                    <div>
                    <label>NbrePlace</label>
                    <select name="Nbreplace" id="Nbreplace" class="form-control">
                  
                         <option class="form-control">2</option>
                         <option class="form-control">4</option>
                         <option class="form-control">6</option>
                         <option class="form-control">8</option>
                         <option class="form-control">10</option>
                         <option class="form-control">12</option>
                    </select>
                    </div>
                    <br/> 


                    <div>
                    <label>Etat</label>
                    <select name="etat" id="etat" class="form-control">
                  
                         <option class="form-control">Reservé</option>
                         <option class="form-control">Disponible</option>
                         
                        
                    </select>
                    </div>
                    <br/> 
                                            
                        <br/>
                        <div class="form-group">
            <input type="submit" name="" value="Valider" id="val" class="btn btn-default">
        </div>

                    </form>
                    @endsection