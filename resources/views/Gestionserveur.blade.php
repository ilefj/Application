@extends('layouts.Template')

@section('content')
 <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                      <center>  <h2 class="page-title">Gérer Serveurs</h2> </center> 
                     <br/>
    <div class="panel panel-default">
                            <div class="panel-heading"> <strong>Liste des Serveurs</strong></div>
                            <br/>

                            <div class="panel-body">
                                <table id="zctb" class="table table-bordered">
                                <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>DDN</th>                                          
                                            <th>Adresse</th>
                                            <th>login</th>
                                            <th>password</th>
                                            <th>Num°tel</th>
                                            <th>Date d'embauche</th>
                                            <th>Salaire</th>	
                                            <a class="fas fa-plus-circle" style="font-size:60px;color:#e2ccae;margin-left:90%;" href="{{url ('/serveur/ajouter')}}"></a> 
                                        </tr>
                                        @foreach($serveur as $Serv)
                                <tr>
                                <td>{{$Serv->id}}</td>
                                <td>{{$Serv->nom}}</td>
                                <td>{{$Serv->prenom}}</td>
                                <td>{{$Serv->DDN}}</td>
                                <td>{{$Serv->Adresse}}</td>
                                <td>{{$Serv->login}}</td>
                                <td>{{$Serv->password}}</td> 
                                <td>{{$Serv->Num_tel}}</td> 
                                <td>{{$Serv->Date_embauche}}</td> 
                                <td>{{$Serv->Salaire}}</td>
                                <td ><a class="fas fa-edit" href="{{url ('/serveur/modifier',[$Serv->id])}}">Edit</a></td>                              
                                <td><a class="fas fa-trash" href="{{url ('/serveur/supp',[$Serv->id])}}" >  </td>
                               </tr>
                            @endforeach



                  </table>
                

                                        @endsection

                                    
                          
        