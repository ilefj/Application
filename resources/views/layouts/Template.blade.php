<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1> Les Différentes Gestions</h1>
            </div>

        <a href="{{ url('/table') }}" class="list-group-item list-group-item-action bg-light" id="table">Gestion des tables</a>
        <a href="{{ url('/catégories')}}" class="list-group-item list-group-item-action bg-light">Gestion des Catégories</a>
        <a href="{{ url('/Sous_Catégories') }}" class="list-group-item list-group-item-action bg-light">Gestion sous Catégories</a>
        <a href="{{ url('/plat') }}" class="list-group-item list-group-item-action bg-light">Gestion de Plat</a>
        <a href="{{ url('/serveur') }}" class="list-group-item
         list-group-item-action bg-light">Gestion des serveurs</a>
        <a href="{{ url('/Cuisiniers') }}" class="list-group-item list-group-item-action bg-light">Gestion des Cuisiniers</a>
                <a href="{{ url('/Paiement') }}" class="list-group-item list-group-item-action bg-light">Gestion de Paiement</a>
            
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <div class="navbar-header">
                </div>
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active"> 
                            @if (Auth::guest())
                           
                           <li><a href="{{ route('login') }}">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                            <a href="{{ route('register') }}">Register</a></li>
    
                           @else
                                Bienvenue {{ Auth::user()->name }} 
                                <br/>
                             <a><i class="fas fa-sign-out-alt"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"></i></a>
                                      
                                            Logout
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:inline-block;">
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </form>
                                        </a>
                                       
                                    </li>
                                </button>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

                       

        @yield('content')
    </div>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
 
 
<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
//        

        $('#edit').on('show.bs.modal', function (event) {

var button = $(event.relatedTarget) 
var nom = button.data('nom') 
var image = button.data('image') 
var cat_id = button.data('cat_id') 
var modal = $(this)

modal.find('.modal-body #nom').val(nom);
modal.find('.modal-body #image').val(image);
modal.find('.modal-body #cat_id').val(cat_id);
});


        $('#delete').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget) 
var cat_id = button.data('catid') 
var modal = $(this)
modal.find('.modal-body #cat_id').val(cat_id);
});
$('#deleteSouCat').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget) 
var cat_id = button.data('catid') 
var modal = $(this)
modal.find('.modal-body #cat_id').val(cat_id);
});

$('#delete').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget) 
var cat_id = button.data('catid') 
var modal = $(this)
modal.find('.modal-body #cat_id').val(cat_id);
});
$('#delete').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget) 
var cat_id = button.data('catid') 
var modal = $(this)
modal.find('.modal-body #cat_id').val(cat_id);
});
</script> 
</body>

</html>
