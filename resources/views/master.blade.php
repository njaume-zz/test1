<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Charutotech</title>

    <!-- Bootstrap Core CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</style>
  

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


</head>


<body>
<br>
<br>
<br>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    @if (Auth::guest())
                        <li> <a href="{{ url('/contact') }} ">Contact</a> </li>
                        <li> <a href="{{ url('/about') }} ">About</a> </li>
                    @else
                        <li> <a href="{{ url('/articulo') }} ">Articulos</a> </li>
                        <li> <a href="{{ url('/receta') }} ">Recetas</a> </li>
                        <li> <a href="{{ url('/tipoReceta') }} ">Tipos Recetas</a> </li>
                        <li> <a href="{{ url('/contact') }} ">Contact</a> </li>
                        <li> <a href="{{ url('/about') }} ">About</a> </li>                        
                    @endif
                </ul>
                                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}"><span class="glyphicon  glyphicon-user" aria-hidden="true"> Login</a></li>
                        <li><a href="{{ url('/auth/register') }}"><span class="glyphicon  glyphicon-plus-sign" aria-hidden="true"> Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href=" #" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                <li><a id="logout" href="{{ url('/auth/logout') }}" ><span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span> Logout</a></li>
                            </ul>  
                        </li>
                    @endif
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->


    <!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="container-fluid">
@yield('content')
<hr>
        </div>
    </div>
</div>

    <hr>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>


</body>

</html>
