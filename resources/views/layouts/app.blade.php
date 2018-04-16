<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rozha+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/ju-1.11.4/jqc-1.11.3,dt-1.10.8/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.9.1/css/tachyons.min.css"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand grow" style="font-weight:bolder;color:orange!important;" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li><a href="{{ url('/meni') }}" class="nav-link grow"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp Meni</a></li>
                      <li><a href="{{ url('/recenzije') }}" class="nav-link grow"><i class="fa fa-star" aria-hidden="true"></i>&nbsp Recenzije</a></li>
                      <li><a href="{{ url('/vizija') }}" class="nav-link grow"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Vizija</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                            <li><a class="nav-link grow" href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Prijava</a></li>
                            <li><a class="nav-link grow" href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Registracija</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a style="color:red!important;" id="navbarDropdown" class="nav-link dropdown-toggle grow b" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu bg-primary grow" aria-labelledby="navbarDropdown">
                                        @if(Auth::user()->admin)

                                        <a class="dropdown-item text-dark grow" href="{{ url('/admin') }}"><i class="fa fa-cog"></i>Admin</a>
                                        @endif

                                        <a  class="dropdown-item text-dark grow" href="{{ url('/rezervacija') }}"><i class="fa fa-bookmark-o"></i>Rezervacija</a>
                                        <a class="dropdown-item text-dark grow" href="{{ url('/create_rec') }}"><i class="fa fa-star"></i>Recenzija</a>

                                        @if(Auth::user()->admin==0)
                                        <a class="dropdown-item text-dark grow" href="{{ url('/izmjena') }}"><i class="fa fa-user"></i>Podaci</a>
                                        @endif

                                    <a class="dropdown-item text-dark grow" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out"></i>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


            @yield('content')



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsaSP5ffw3m0nWHjRg2GKL4dmp9KwcxVQ&callback=myMap"
  type="text/javascript"></script>
<script>
function myMap() {

var myLatlng = new google.maps.LatLng(43.343033, 17.807894);
var mapOptions = {
zoom: 13,
center: myLatlng
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);

var marker = new google.maps.Marker({
position: myLatlng,
title:"Hello World!"
});

// To add the marker to the map, call setMap();
marker.setMap(map);
}
</script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</body>
</html>
